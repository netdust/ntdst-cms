define(function (require) {

    "use strict";

    var ntdst               = require('ntdst');

    var $                   = require('jquery'),
        _                   = require('underscore'),

        BaseView            = require('app/core/view/BaseView'),

        viewTemplate        = require('text!app/module/assets/view/tpl/assetcontrolbar.html');


    return BaseView.extend({

        template : _.template(viewTemplate),

        events : {
            'click .iconbutton.share':'shareItem',
            'click .iconbutton.delete':'deleteItem',
            'click .iconbutton.download':'downloadItem'
        },

        shareItem: function() {
            console.log('ok');
        },

        deleteItem: function() {
            var self = this;
            $('.list-select.selected').closest('li').each( function() {
                var model = self.model.getPage( {id:$(this).data('id')});
                model.destroy();
            })
        },

        downloadItem: function() {
            console.log('download items');
            console.log($('.list-select.selected'));
        }


    });

});