define(function (require) {

    "use strict";

    var _               = require('underscore'),
        Backbone        = require('backbone');

    var MediaModel = Backbone.Model.extend({

        urlRoot: ntdst.options.api + "player",

        schema: {
            firstname: 'Text',
            lastname:  'Text',
            email:      {type: 'Text', message: 'Invalid email', validators: ['required', 'email'] },
            street:     'Text',
            nr:         'Text',
            city:       'Text',
            code:       'Number',
            country:    'Text',
            winner:     'Boolean'
        },

        initialize : function(){
        }

    });

    var MediaCollection = Backbone.Collection.extend({
        url: ntdst.options.api + "media",
        model: MediaModel
    });

    return {
        model: MediaModel,
        collection: MediaCollection
    };
});