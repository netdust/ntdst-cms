define(function (require) {

    "use strict";

    var $                   = require('jquery'),
        _                   = require('underscore'),
        BaseView            = require('app/core/view/BaseView');

    return BaseView.extend({

        initialize:function () {
            //this.listenTo(this.model, 'all', this.render);
        },

        tagName:'li',

        events: {
            "mouseover .item": "mouseOver",
            "mouseout .item": "mouseOut",
            "click .item": "showItem"
        },


        render: function () {
            var template = _.template(this.tpl);
            this.$el.html(template(this.model.toJSON()));
            return this;
        },

        mouseOut: function(e) {
            $(e.currentTarget).css('background-color', 'transparent');
        },

        mouseOver: function(e) {
            $(e.currentTarget).css({'background-color':"#e9e9e9"});
        },

        showItem: function(e) {

        }


    });

});