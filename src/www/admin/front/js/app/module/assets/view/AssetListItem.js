define(function (require) {

    "use strict";

    var ntdst               = require('ntdst');

    var $                   = require('jquery'),
        _                   = require('underscore'),
        BaseListView        = require('app/core/view/ListItemView'),

        StringHelper        = require('app/core/helper/string'),

        tpl                 = require('text!app/module/assets/view/tpl/pagelistitem.html'),

        template = _.template(tpl);

    return BaseListView.extend({

        tagName:'li',

        events: {
            "mouseover .list-content": "mouseOver",
            "mouseout .list-content": "mouseOut",
            "click .pageinfo": "showItem",

            'click .option.edit':'editPage',
            'click .option.remove':'removePage'
        },

        initialize: function() {
            var images= ['jpg','jpeg','png','gif'];
            var docs= ['doc','docs','txt'];

            var label = this.model.get('label');
            var type = label.split('.').pop();

            if( $.inArray(type, images) ) type = 'image-o';
            else if( $.inArray(type, docs) ) type = 'image-o';
            else type = type + '-o';

            this.model.set('type', type);

            this.listenTo(this.model, 'destroy', this.remove );
        },

        render: function ()
        {
            this.$el.html(template(  _.extend( this.model.toJSON(), StringHelper ) ));
            this.$el.attr( 'id', 'menuItem_' + this.model.get('id') );
            this.$el.attr( 'data-id', this.model.get('id') );
            this.$el.addClass( this.model.get('label') );
            this.$el.addClass( 'list-item' );

            return this;
        },

        showItem: function(e) {
            e.stopPropagation();
            ntdst.api.navigate( 'asset/'+ this.model.get('id') );
        },

        editPage: function(e) {
            e.stopPropagation();
            ntdst.api.navigate( 'asset/'+ this.model.get('id') );
        },

        removePage: function(e) {
            e.stopPropagation();
            this.model.destroy();
            this.remove();
        }

    });

});