define(function (require) {

    "use strict";

    var _  =  require('underscore');

    return {

        master : _.template( require('text!app/core/view/regions/tpl/master.html')  ),
        login: _.template( require('text!app/core/view/regions/tpl/login.html') ),
        recover: _.template( require('text!app/core/view/regions/tpl/recover.html') ),

        content: _.template( require('text!app/core/view/regions/tpl/content.html') ),
        meta: _.template( require('text!app/core/view/regions/tpl/meta.html') ),

        navigation: _.template('<nav id="nav" role="navigation"></nav>'),
        navitem: _.template('<i data-path="<%= path %>" class="fa fa-<%= lowercase( icon ) %>" />')

    };

});