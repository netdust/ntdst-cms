define(function (require) {

    "use strict";

    var ntdst               = require('ntdst');

    var $                   = require('jquery'),

        Base                = require('app/core/view/regions/content'),

        SortList            = require('sortablelist'),
        Controlbar          = require('app/module/assets/view/AssetControlBar'),
        PageItemView        = require('app/module/assets/view/AssetListItem');

    return Base.extend({

        events : {
            'click .button':'createItem',
            'click .list li .list-select': 'selectItem'
        },

        data : {title:'Assets', label:'Drop item to upload'},

        initialize: function() {

            this.addView({'.meta': new Controlbar({model:this.model})});
            this.listenTo(this.model, 'reset', this.renderList);
        },

        renderList: function()
        {
            $('.data').html( '<div class="list imagegrid"><ol class="sortable-list small-block-grid-5"></ol></div>' );
            this.menu_render(
                this.model, {'el':'.data ol.sortable-list', 'parent': 0 }
            );

            $(document).foundation();
            return this;
        },

        menu_render: function( model, p ) {

            var container = document.createDocumentFragment();
            var parent = p != null ? p.parent : null;
            var self = this;

            var models = model.getPages('parent', parent );

            models.sort().each( function(m)
            {
                var itm = self.getListItem( m );
                container.appendChild(itm);
            });

            $(p.el).append( container );
        },

        getListItem: function( m ) {
            return new PageItemView( {model:m} ).render().el
        },

        selectItem: function(e) {
            $(e.currentTarget).toggleClass('selected');

            if( $('.list-select.selected').length>0) {
                $('.controlbar').css('display', 'block');
            }
            else {
                $('.controlbar').css('display', 'none');
            }
        },

        createItem: function() {
            ntdst.api.navigate( 'asset/create' );
        },

        updatePageSort: function( index, id ) {
            var m = this.model.get(id);
            m.set('sort', index );
            m.save({sort: index}, {patch: true});
        }
    });

});