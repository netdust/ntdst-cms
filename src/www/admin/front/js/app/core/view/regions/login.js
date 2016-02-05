define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var BaseView    = require('app/core/view/BaseView'),

        Session     = require('app/core/model/Session'),
        tpl         = require('app/core/view/regions/tpl/templates');

    return BaseView.extend({

        template : tpl.login,

        events : {
            'click button' : 'submit'
        },

        submit : function(e){
            e.preventDefault();

            $('#email,#password').removeClass('error');

            ntdst.session.login({
                email : $('#email').val(),
                password : $('#password').val(),
                remember : $('#remember').is(':checked') ? 1 : 0
            }, {
                error: function(res) {
                    switch( res.error ){
                        case "1": $('#email').addClass('error');break;
                        case "2": $('#email').addClass('error');break;
                        case "3": $('#password').addClass('error');break;
                    }
                }
            });
        }
    });

});


