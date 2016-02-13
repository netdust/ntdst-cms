define(function (require) {

    "use strict";

    var $                   = require('jquery'),
        _                   = require('underscore'),
        BaseView            = require('app/core/view/BaseView'),

        tpl                 = require('app/core/view/regions/tpl/templates');

    return BaseView.extend({

        events: {
            "click #nav-back-btn": "goBack",
            "click #nav-open-btn": "toggleMeta"
        },

        template: tpl.meta,

        goBack: function() {
            window.history.back();
        },
        toggleMeta: function() {
            $('#app').toggleClass('closed');
        },


        beforeRender: function() {
            $('#app').addClass( 'closed' );
        },

        afterRender: function() {
            //$('#main').addClass( 'animate' );
        },

        onClose: function() {
            $('#app').removeClass( 'closed' );
        }

    });

});