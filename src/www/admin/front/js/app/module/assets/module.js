define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var SubRoute        = require('backbone.subroute'),

        Model           = require("app/module/assets/model"),
        Asset            = require("app/module/assets/view/Asset"),
        Assets           = require("app/module/assets/view/AssetList"),


        router = SubRoute.extend({
            routes: {
                "" : "list",
                "create" : "create",
                ":id" : "page"
            },

            list: function ( )
            {
                var _models = ntdst.api.modelFactory( 'assets' );
                var view  = ntdst.api.viewFactory( 'assetlist', Assets, {model: _models} );
                ntdst.api.show( '#app', view );

                _models.fetch( {reset: true} );
            },

            page: function ( id )
            {
                var _m = ntdst.api.modelFactory( 'assets' ).getPage( id );

                if( _m == null ) {
                    //window.history.back();
                    ntdst.api.navigate('/asset');
                    Backbone.trigger('notification', { message: 'The requested asset is not loaded yet or does not exist', type: 'error' });
                    return;
                }

                // always load page, no cache
                _m.fetch( {reset:true} );

                this.listenTo(_m, 'sync', function()
                {
                    this.stopListening(_m, 'sync');
                    var view  = ntdst.api.viewFactory( 'asset'+id, Asset, {model:_m});
                    ntdst.api.show( '#app', view );

                });
            },

            create: function ( )
            {
                var _m = new Model.page( {date: new Date().getTime(), user:ntdst.options.user, type:"page", page_translation : [{ language_id:1, slug:"new-page", description:"", content:"" }]} );
                var view = new Page({model:_m});


                this.listenTo(view, 'afterrender', function() {
                    this.stopListening(view, 'afterrender');
                    $('#app').removeClass('closed');
                });

                this.listenTo(_m, 'sync', function() {
                    this.stopListening(_m, 'sync');
                    ntdst.api.navigate('/page');
                });

                ntdst.api.show( '#app', view );

            }

        }),

        pages = {
            init: function ( options )
            {
                this.data( options['name'], options['data'] );
                new router( options['path'].toLowerCase());
                return this;
            },

            data:function( name, _data ) {
                var n = name.toLowerCase();
                return ntdst.api.modelFactory( n, Model[n+'Collection'], _data );
            }
        };

    return pages;
});