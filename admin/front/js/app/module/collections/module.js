define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var $                   = require('jquery'),
        _                   = require('underscore');
    
    var SubRoute        = require('backbone.subroute'),

        Model           = require("app/module/collections/model"),
        Collections     = require("app/module/collections/view/CollectionList"),
        Collection      = require("app/module/collections/view/Collection"),
        Image           = require("app/module/collections/view/Image"),
        //Image           = require("app/module/assets/view/Asset"),


        router = SubRoute.extend({

            assettpl : $('<div class="row zonecontainer"><div class="columns small-12"><div class="zone text-center"><strong>Drop files</strong> to upload<br/>(or click)</div></div></div><ul class="previewsContainer clearfix"></ul>'),

            routes: {
                "" : "list",
                "create" : "create",
                ":id" : "page",
                ":id/:img" : "image"
            },

            list: function( )
            {
                var _models = ntdst.api.modelFactory( 'collections' );
                var view = ntdst.api.viewFactory( 'collectionlist', Collections, {model:_models} );
                ntdst.api.show( '#app', view );

                _models.fetch({reset: true});
            },

            page: function( id )
            {
                var _collection = ntdst.api.modelFactory( 'collections' ).getPage({'id':id});

                if( _collection == null ) {
                    ntdst.api.navigate('/collection');
                    return;
                }

                _collection.fetch({reset: true});

                this.listenTo(_collection, 'sync', function()
                {
                    this.stopListening(_collection, 'sync');

                    var view  = ntdst.api.viewFactory( 'collection'+id, Collection, {model:_collection});

                    this.listenTo(view, 'afterrender', function() {
                        this.stopListening(view, 'afterrender');
                        $('.assetsrow .assets').append(this.assettpl);
                        view.setUploadComponent( getDrop( _collection ) );
                    });

                    ntdst.api.show( '#app', view );

                });


            },

            image: function( _collection, _id )
            {
                var _collection = ntdst.api.modelFactory( 'collections' ).getPage({'id':_collection});

                if( _collection == null ) {
                    ntdst.api.navigate('/collection');
                    return;
                }

                var _asset = _collection.getSub(_id);
                _asset.fetch({reset: true});

                this.listenTo(_asset, 'sync', function()
                {
                    this.stopListening(_asset, 'sync');

                    console.log( _asset );
                    var view = ntdst.api.viewFactory( 'image'+_id, Image, {model:_asset} );
                    this.listenTo(view, 'afterrender', function() {
                        this.stopListening(view, 'afterrender');
                        $('.assetsrow .assets').append($('<div class="row zonecontainer"><div class="columns small-12"><div class="zone text-center"><strong>Drop file</strong> to replace<br/>(or click)</div></div></div><div class="previewsContainer clearfix"></div>'));

                        // todo:get folder and filename out of asset template
                        view.setUploadComponent( getDrop( _asset, {
                            previewTemplate:'',
                            previewsContainer:'',
                            autoProcessQueue:false
                        } ) );
                    });
                    ntdst.api.show( '#app', view );

                });
            },

            create: function ( )
            {

                var _m = new Model.collection( {created: new Date().getTime(), user:ntdst.options.user, type:'collection', page_translation : [{ language_id:1, slug:"new-page", description:"", content:"" }]} );
                var view = new Collection({model:_m});

                this.listenTo(view, 'afterrender', function() {
                    this.stopListening(view, 'afterrender');
                    $('#main').removeClass('closed');

                    $('.assetsrow .assets').append(this.assettpl);
                    view.setUploadComponent( getDrop( _m ) );
                });

                this.listenTo(_m, 'sync', function() {
                    this.stopListening(_m, 'sync');
                    ntdst.api.navigate('/collection');
                });


                ntdst.api.show( '#app', view );
            }
        }),

        collections = {
            init: function ( options )
            {
                this.data( options['name'], options['data'] );
                new router( options['path'].toLowerCase() );
                return this;
            },

            data:function( name, _data ) {
                var n = name.toLowerCase();
                return ntdst.api.modelFactory( n, Model['pagesCollection'], _data );
            }
        },

        getDrop = function( model, options ) {
            return ntdst.api.createDropzone(
                '.zone',
                _.extend( {
                    url:ntdst.options.api+'collection/' + model.get('id') + '/upload',
                    previewTemplate:'<li class="file square-box mjs-nestedSortable-no-nesting" draggable="true"><div id="template" class="file-container square-content dz-preview dz-file-preview"><div class="dz-details"><div class="select"><i class="fa fa-check-square"></i></div><div class="dz-filename"><span data-dz-name></span> | <span class="dz-size" data-dz-size></span></div><img data-dz-thumbnail /></div><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-success-mark"><span>✔</span></div><div class="dz-error-mark"><span>✘</span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></li>',
                    previewsContainer:'.previewsContainer',
                    autoProcessQueue:false,
                    success: function( file, response ) {
                        var _m = new Model.attachment( response );
                        model.get('page').add( _m );
                    },
                    init: function() {
                        this.on("addedfile", function(file) {

                        });
                    },
                    params:{
                        "dir":"collection_"+model.get('id')+"/"
                    }
                }, options )

            );

        };
    return collections;
});