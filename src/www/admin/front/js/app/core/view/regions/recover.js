define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var BaseView    = require('app/core/view/BaseView'),

        Session     = require('app/core/model/Session'),
        tpl         = require('app/core/view/regions/tpl/templates');

    return BaseView.extend({

        template : tpl.recover,

        events : {
            'click button' : 'submit'
        },

        submit : function(e){
            e.preventDefault();

            $('#email').removeClass('error');

            ntdst.session.recover({
                email : $('#email').val()
            }, {
                success: function(res) {
                    ntdst.api.navigate('/login');
                },
                error: function(res) {
                    $('#email').addClass('error');
                }
            });
        }
    });

});


