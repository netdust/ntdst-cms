
define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var Backbone        = require('backbone'),
        Translation     = require('app/core/model/PageExtendTranslation'),

        PageExtendTranslationCollection =  Backbone.Collection.extend({

            model: Translation,

            getTranslation: function( value ) {
                var t = new PageExtendTranslationCollection( this.filter(
                    function(m) {
                        return m.get('language_id') == value;
                    }
                ) );
                return t;
            },

            addTranslation: function( id ) {
                var t =  new this.model( {language_id:id} );
                this.add( t );
                return t;
            }

        });

    return PageExtendTranslationCollection;

});

