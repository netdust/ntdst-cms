define(function (require) {

    "use strict";

    var ntdst               = require('ntdst');

    var $                   = require('jquery'),
        Base                = require('app/module/pages/view/Page'),

        ImageMetaData       = require('app/module/collections/view/metaData');

    return Base.extend({

        afterRender: function() {
            $('.assets .previewsContainer').html('<img src="'+ base +'/' + this.model.get('template') +'" />');
            Base.prototype.afterRender.apply(this, arguments);
        },

        setUploadComponent: function( d )
        {
            this.drop = d;
        },

        render: function()
        {
            Base.prototype.render.apply(this, arguments);
            this.renderTranslations();
            return this;
        },

        updatePage: function() {
            this.model.updatePage();
        }

    });

});