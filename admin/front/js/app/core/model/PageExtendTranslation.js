
define(function (require) {

    "use strict";

    var ntdst       = require('ntdst');
    var Backbone    = require('backbone'),
        Relational  = require('backbone-relational');


    return Backbone.RelationalModel.extend({

        urlRoot: ntdst.options.api + "pagemetatranslation",

        defaults: {
            key:"",
            value:"",
            language_id:1
        },

        schema: {
            language_id:"Number",
            key:{type:"Text", placeHolder:"Type label hier",message: 'Invalid key', validators: ['required']},
            value:{type:"Text", placeHolder:"Text"}
        },

        initialize:function() {
            this.on("invalid", function(model, error) {
                console.log( error );
            });
        },

        destroy: function () {
            var e = this.get("meta_id");
            e.destroy();
        },

        validate:function( attrs ) {
            var errs = {};

            if(_.isUndefined(attrs) ) attrs = this.attributes;
            if(_.isEmpty(attrs.key) && attrs.language_id=='1') errs.key = 'A key needs to be defined in the default language';

            if(!_.isEmpty(errs)) return errs;

            return null;

        }

    });


});

