define(function (require) {

    "use strict";

    var BaseView            = require('app/core/view/BaseView'),
        navitem             = require('app/core/view/regions/navitem'),

        tpl                 = require('app/core/view/regions/tpl/templates');

    return BaseView.extend({

        template: tpl.navigation,

        render: function ()
        {
            BaseView.prototype.render.apply(this, arguments);

            this.container = document.createDocumentFragment();
            this.$el.find('nav').append('<ul></ul>');
            this.model.each(this.addItem, this);
            this.$el.find('ul').append( this.container );

            return this;
        },

        addItem : function( item ) {

            if( !_.isUndefined( item.get('icon') ) ) { // only add items with icon, others are just plugins, tis is bad bad coding i know
                this.container.appendChild(
                    new navitem( {model: item } ).render().el
                );
            }
        }

    });

});