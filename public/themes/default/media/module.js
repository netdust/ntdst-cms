define(function (require) {

    "use strict";

    var ntdst           = require('ntdst');

    var SubRoute        = require('backbone.subroute'),

        View           = require('public/themes/default/media/view.js'),
        Model          = require('public/themes/default/media/model.js'),

        router =  SubRoute.extend({

            routes: {
                "" : "list",
                ":id" : "media"
            },

            list: function ()
            {

                var players = ntdst.api.modelFactory( 'media', Model.collection );
                players.fetch({'reset':true});
                this.listenTo(players, 'sync', function()
                {
                    this.stopListening(players, 'sync');
                    var v = ntdst.api.viewFactory( 'media', View.list, {model:players});
                    ntdst.api.show( '#app', v );
                });
            },

            media: function ( id )
            {
                var players = ntdst.api.modelFactory( 'media', Model.collection );
                var player = players.get({'id':id});

                var view  = ntdst.api.viewFactory( 'media'+id, View.form, {model:player});
                ntdst.api.show( '#app', view );
            }

        }),

        media = {

            init: function ( options )
            {
                this.router = new router(options['path']);
                return this;
            }

        };

    return media;
});