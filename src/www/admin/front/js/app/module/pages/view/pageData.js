
define(function (require) {

    "use strict";

    var ntdst               = require('ntdst');

    var $                   = require('jquery'),
        _                   = require('underscore'),
        FormView            = require('app/core/view/FormView'),

        StringHelper        = require('app/core/helper/string'),

        pageform            = require('text!app/module/pages/view/tpl/form.html');

    return FormView.extend({

        template : _.template(pageform),

        updateTranslation:function(model) {
            this.model = model;
            this.initialize();
            this.render();
        },

        afterRender: function()
        {
            var self = this;
            if(_.isUndefined(this.model)) return;
            this.form.on('description:change', function(event, field)
            {
                if( self.model.isNew() ) {
                    self.model.set( 'slug', StringHelper.toSlug( field.getValue() ) );
                    self.form.setValue( 'slug', StringHelper.toSlug( field.getValue() ) );
                }
            });
        }

    });

});