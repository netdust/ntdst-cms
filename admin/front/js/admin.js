
// language
// @todo: make sure translation of page ( type attachement ) is not mandatory
// @todo: make sure meta translation is not necessary, default to main language when not set


//general
/* @todo: delete users */
/* @todo: after create is success, redirect to list */
/* @todo: multi edit ? */
/* @todo: quick create button ?? */
/* @todo: add model-view binding so a rendered view is updated when model changes ( see publish state ) */
/* @todo: fix bug when creating page and selecting parent, parent is not set and app get unstable */
/* @todo: taxonomy */


//files
/* @todo: better file (upload) integration */
/* @todo: asset management */
/* @todo: ability to replace an image in a collection */
/* @todo: ability to add other media in collections */
/* @todo: make sure attachments with parent=0 and status draft are not messing up database */
/* @todo: BUG previewing uploaded files doesnt work */


/* @todo: bug when saving language, not loaded again */
/* @todo: bug when changing order, model needs refresh */

/* @todo: bug when saving meta language becomes 0. taal fout*/


//plugins
/* @todo: finish plugin settings */

require.config({

    'baseUrl'                        : base,

    paths: {

        'app'                       : 'admin/front/js/app',
        'ntdst'                     : "admin/front/js/app/ntdst",

        'jquery'                    : "bower_components/jquery/dist/jquery",
        'jquery-ui'                 : "bower_components/jquery-ui/jquery-ui",
        'jquery-ui/core'            : "bower_components/jquery-ui/ui/core",
        'jquery-ui/mouse'           : "bower_components/jquery-ui/ui/mouse",
        'jquery-ui/widget'          : "bower_components/jquery-ui/ui/widget",
        'jquery-ui/sortable'        : "bower_components/jquery-ui/ui/sortable",


        'backbone'                  : "bower_components/backbone/backbone",
        'backbone.subroute'         : 'bower_components/backbone.subroute/backbone.subroute',
        'backbone-forms'            : 'bower_components/backbone-forms/distribution.amd/backbone-forms',
        'backbone-relational'       : 'bower_components/backbone-relational/backbone-relational',
        'underscore'                : "bower_components/underscore/underscore",
        'text'                      : 'bower_components/requirejs-text/text',
        'modernizr'                 : 'bower_components/modernizr/modernizr',
        'foundation'                : 'bower_components/foundation/js/foundation',
        'dropzone'                  : 'bower_components/dropzone/dist/dropzone-amd-module',
        'epiceditor'                : 'bower_components/epiceditor/epiceditor/js/epiceditor',
        'trumbowyg'                 : 'bower_components/trumbowyg/src/trumbowyg',

        'sortablelist'              : 'bower_components/nestedSortable/jquery.ui.nestedSortable',
        'listeditor'                : 'bower_components/backbone-forms/distribution.amd/editors/list',
        'spinner'                   : 'bower_components/spin.js/spin'

    },

    shim: {

        'underscore': {
            exports: '_'
        },
        'backbone-relational': {
            deps: ['backbone']
        },
        'backbone-forms': {
            deps: ['backbone']
        },
        'backbone.subroute': {
            deps: ['backbone']
        },
        'app/core/helper/editors': {
            deps: ['backbone']
        },

        'backbone': {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        },
        'foundation': {
            deps: ['jquery','modernizr']
        },

        'dropzone': {
            deps: ['jquery']
        },

        'trumbowyg': {
            deps: ['jquery']
        },

        'spinner': {
            deps: ['jquery']
        },
        'listeditor': {
            deps: ['backbone-forms']
        },
        'sortablelist': {
            deps: ['jquery','jquery-ui','jquery-ui/sortable']
        }
    }
});

require( ['jquery', 'ntdst', 'app/api'],

    function ($, ntdst, api)
    {
        _.extend(ntdst.api, api);
        $(function() {
            ntdst.configure()
             .start();
        });
    });

