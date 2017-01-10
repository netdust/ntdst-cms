
define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var Backbone        = require('backbone'),


        Language =  Backbone.Model.extend({


            urlRoot: "language",

            defaults: {
                language:"nl"
            },

            initialize: function () {
                var lg = ntdst.options['languages'].split(',');
                ntdst.languages = [];

                for( var i=0;i<lg.length;i++){
                    ntdst.languages.push( lg[i].split(':')[0]);
                }
                this.set( 'language', ntdst.languages[0] );
            },


            getIndex: function( )
            {
                return ntdst.languages.indexOf( this.get('language') ) + 1;
            },

            schema: {
                language : {type: 'Select', options:function(callback, editor) {
                    callback( ntdst.languages );
                } }
            }

        });

    return Language;

});
