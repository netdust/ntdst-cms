({

    modules: [
        {
            name: 'admin'
            , exclude:['app-bootstrap']
        }
    ]

    , baseUrl: "./"
    , appDir: './src/www/admin/front/js'
    , dir: './dist/admin/front/js'

    , fileExclusionRegExp: /^(r|build)\.js$/
    , optimizeCss: 'standard'

    , optimize: 'uglify2'

    , removeCombined: true

    , paths: {

        'app'                       : "../../../admin/front/js/app",
        'ntdst'                     : "../../../admin/front/js/app/ntdst",

        'jquery'                    : "../../../../bower_components/jquery/dist/jquery",
        'jquery-ui'                 : "../../../../bower_components/jquery-ui/jquery-ui",
        'jquery-ui/core'            : "../../../../bower_components/jquery-ui/ui/core",
        'jquery-ui/mouse'           : "../../../../bower_components/jquery-ui/ui/mouse",
        'jquery-ui/widget'          : "../../../../bower_components/jquery-ui/ui/widget",
        'jquery-ui/sortable'        : "../../../../bower_components/jquery-ui/ui/sortable",

        'backbone'                  : "../../../../bower_components/backbone/backbone",
        'backbone.subroute'         : '../../../../bower_components/backbone.subroute/backbone.subroute',
        'backbone-forms'            : '../../../../bower_components/backbone-forms/distribution.amd/backbone-forms',
        'backbone-relational'       : '../../../../bower_components/backbone-relational/backbone-relational',
        'underscore'                : '../../../../bower_components/underscore/underscore',
        'text'                      : '../../../../bower_components/requirejs-text/text',
        'modernizr'                 : '../../../../bower_components/modernizr/modernizr',
        'foundation'                : '../../../../bower_components/foundation/js/foundation',
        'dropzone'                  : '../../../../bower_components/dropzone/dist/dropzone-amd-module',
        'epiceditor'                : '../../../../bower_components/epiceditor/epiceditor/js/epiceditor',
        'trumbowyg'                 : '../../../../bower_components/trumbowyg/src/trumbowyg',
        'listeditor'                : '../../../../bower_components/backbone-forms/distribution.amd/editors/list',
        'sortablelist'              : '../../../../bower_components/nestedSortable/jquery.ui.nestedSortable',
        'spinner'                   : '../../../../bower_components/spin.js/spin'

    }

    , shim: {
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
