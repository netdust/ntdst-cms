define(function (require) {

    "use strict";


    var ntdst               = require('ntdst');

    var _                   = require('underscore'),

        BaseView            = require('app/core/view/BaseView'),
        NavView             = require('app/core/view/regions/nav'),
        tpl                 = require('app/core/view/regions/tpl/templates');

    return BaseView.extend({

        template: tpl.master,

        initialize: function () {
            _.bindAll(this, 'render');
            ntdst.session.on( 'change:logged_in', this.render );
        },

        render: function() {

            if( ntdst.session.get('logged_in') ) {
                var navview  = new NavView( {model: ntdst.models.modules} );
                this.subviews = {
                    '#sidebar'      : navview
                };
                BaseView.prototype.render.call( this );
            }

            else return BaseView.prototype.render.call( this );
        }

    });

});