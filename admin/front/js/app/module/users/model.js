define(function (require) {

    "use strict";

    var ntdst    = require('ntdst');

    var Backbone = require('backbone'),

        UserModel = require('app/core/model/User'),

        UserCollection = Backbone.Collection.extend({

            model: UserModel,
            url: ntdst.options.api + "user",
            initialize: function () {
            }
        });


    return {
        user: UserModel,
        userCollection: UserCollection
    };

});
