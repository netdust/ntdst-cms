define(function (require) {

    "use strict";

    var Backbone = require('backbone'),

        LoginView=require('app/core/view/regions/login'),
        RecoverView=require('app/core/view/regions/recover');

    return Backbone.Router.extend({

        routes: {
            "":"dashboard",
            "login":"login",
            "recover":"recover"
        },

        dashboard: function() {

            if( ntdst.session.get('logged_in') ) {
                //ntdst.$layout.render(); // show nav
            }
            else ntdst.api.navigate( '/login' );

        },

        login: function() {

            ntdst.session.on( 'change:logged_in', function(){
                ntdst.api.navigate( '/' );
            } );
            var view = ntdst.api.viewFactory( 'login', LoginView, {} );
            ntdst.api.show( '#app', view );

        },

        recover: function() {
            var view = ntdst.api.viewFactory( 'recover', RecoverView, {} );
            ntdst.api.show( '#app', view );
        }

    });

});