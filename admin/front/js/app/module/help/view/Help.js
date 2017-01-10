define(function (require) {

    "use strict";
    var ntdst               = window.ntdst;
    var $                   = require('jquery'),
        _                   = require('underscore'),

        Base                = require('app/core/view/regions/content'),


        HelpTxt             = require('text!app/module/help/view/tpl/help.html');


    return Base.extend({


        data : {title:'Help', label:''},

        afterRender: function()
        {
            $('.data').html( HelpTxt );
        }


    });

});