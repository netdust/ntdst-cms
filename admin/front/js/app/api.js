define(function (require) {

    "use strict";

    //global namespace
    var ntdst               = require('ntdst');

    //main requires
    var $                   = require('jquery'),
        _                   = require('underscore'),
        Backbone            = require('backbone'),
        BackboneRelations   = require('backbone-relational'),

        AppBootstrap        = require('app-bootstrap'),

        Router              = require('app/router'),

        Dropzone            = require('dropzone'),
        trumbowyg           = require('trumbowyg'),
        markdown            = require('epiceditor'),

        MasterView          = require('app/core/view/regions/master'),
        FormView            = require('app/core/view/FormView');

    //models
    var RelationModel       = require('backbone-relational'),
        ModuleModel         = require('app/core/model/Modules'),
        LanguageModel       = require('app/core/model/Language'),

        // session
        session             = require('app/core/model/session');


    ntdst.configure = function()
    {

        Backbone.Relational.store.addModelScope( ntdst.models );

        ntdst.models['modules'] = new ModuleModel.modulesCollection(
            AppBootstrap["modules"]
        );

        ntdst.models['i18n'] = new LanguageModel();

        // init session
        ntdst.session = new session({});

        // init main layout
        ntdst.$layout = new MasterView(
            {el:$('body')}
        ).render();

        // init foundation
        $(document).foundation();


        return ntdst;
    };

    ntdst.start = function()
    {
        var router = new Router();
        ntdst.session.checkAuth( {
            complete: function() {

                Backbone.history.start({
                    pushState:ntdst.options.pushState,
                    root:ntdst.options.root
                });
                if( !ntdst.session.get('logged_in') ) {
                    ntdst.api.navigate( '/login' );
                }
            }
        });

        return ntdst;
    };

    return {

        show: function (selector, view) {

            if (ntdst.currentView){
                ntdst.currentView.remove();
            }
            ntdst.currentView = view;
            $( selector ).append( "<div class='container'>" );

            ntdst.$layout.assign( selector+' .container', view  );
        },

        navigate: function (path) {
            ntdst.events.trigger('app:navigate', path);
            Backbone.history.navigate(path, { trigger: true });
        },

        modelStore: function() {
            return ntdst.models;
        },

        modelFactory: function( key, _package, _data ) {
            if( ntdst.models[key] ) return ntdst.models[key];
            return ntdst.models[key] = new _package( _data, {parse: true} );
        },

        viewFactory: function( key, _package, _data ) {
            return new _package( _data || {} );
        },

        hasPermission: function( perm ) {
            return ntdst.session.user.hasPermission( perm );
        },


        // state

        state: {
            language: function(){
                return ntdst.api.modelFactory('i18n').get('language');
            },
            module: function(){
                return Backbone.history.fragment;
            }
        },

        findTemplates: function( model ) {
            var templates = ntdst.api.modelFactory( 'templates' );
            if( model.get('parent') != null ) {

                var template = templates.where( {name: model.get('parent').get('template') } )[0];
                if( template != undefined && template.get('children') != undefined ) {
                    return template.get('children').split(',');
                }

            }

            return templates.getNames();


        },

        createLanguage: function( view ){
            var _lg = FormView.extend({
                template: _.template( '<div data-fields="language"></div>' ),
                remove:function() {
                    this.model.set('language',ntdst.languages[0]);
                    FormView.prototype.remove.apply(this, arguments);
                }
            });

            view.addView( {'.language':  new _lg({model:ntdst.api.modelFactory('i18n')}) } );
        },

        createTrumbo: function( name, options, value )
        {
            var def = {
                semantic: false,
                btns: ['viewHTML',
                    '|', 'formatting',
                    '|', 'btnGrp-design',
                    '|', 'link',
                    /*'|', 'insertImage',*/
                    /*'|', 'btnGrp-justify',*/
                    '|', 'btnGrp-lists',
                    '|', 'horizontalRule']
            };

            var tr =  $('#' + name ).trumbowyg(_.extend( def, options ));
            $('#' + name ).trumbowyg('html', value );
            return tr;
        },

        createEpic: function( name, options  )
        {
            var myEpic = new EpicEditor( {
                clientSideStorage:false,
                basePath: base + "/admin/front/css/epic",
                theme: {
                    base: '/base/epiceditor.min.css'
                    , preview: '/preview/github.min.css'
                    , editor: '/editor/epic-light.min.css'
                },
                file: {
                    name: name,
                    defaultContent: '',
                    autoSave: 100
                },
                parser: function (content) {

                    /*
                    var parsedHtml;

                    // A bit of regex to find a YouTube URL wrapped in square brackets like:
                    // [http://youtube.com/...]

                    parsedHtml = content.replace(
                        /\[https?:\/\/(w{3}\.)?youtube\.com\/watch\?v=([a-zA-Z0-9\-_]+)\s?((\d{1,4})x(\d{1,4}))?\]/g,
                        function(s,a,b,c,d,e) {
                            d = _.isUndefined(d)?480:d;
                            e = _.isUndefined(e)?270:e;
                            return '<iframe width="'+d+'" height="'+e+'" src="http://www.youtube.com/embed/'+b+'" frameborder="0" allowfullscreen></iframe>';
                        });

                    // Continue with normal markdown parsing
                    parsedHtml = markdown(parsedHtml);
                     */
                    return content;

                }
            }).on ('load', function() {

            });


            return myEpic;
        },

        createDropzone: function( el, options ) {

            el = document.querySelector(el);
            if(el==null ) return null;

            if( el.dropzone ){
                el.dropzone.destroy();
            }

            var myDropzone = new Dropzone(
                el,
                _.extend( {
                    addRemoveLinks: false
                }, options)

            );
            myDropzone.on("sending", function(file, xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) xhr.setRequestHeader('X-CSRFToken', token);
            });

            myDropzone.on("success", function( resp ) {
                //previewElement.setAttribute('data-dz-id', item.get('id') );
            });

            //$( "div.dropzone" ).sortable();

            return myDropzone;
        }

    }

});