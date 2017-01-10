define(function (require) {

    "use strict";

    var _                   = require('underscore'),
        BaseView            = require('app/core/view/BaseView'),

        tpl                 = require('app/core/view/regions/tpl/templates');

    return BaseView.extend({

        data: {title:'', label:''},

        template : tpl.content,

        templateData: function () {
            return this.data
        }

    });

});