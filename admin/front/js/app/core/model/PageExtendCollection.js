
define(function (require) {

    "use strict";

    var ntdst               = require('ntdst');

    var Backbone            = require('backbone'),
        PageExtend          = require('app/core/model/PageExtend');


    var PageExtendCollection = Backbone.Collection.extend({
        model: PageExtend,

        initialize: function () {
            this.sort_key = 'sort';
        },

        hasItemWithKey: function( value ) {
            var c =  new PageExtendCollection( this.filter(
                function(m) {
                    return m.get('key') == value;
                }
            ) );
            return c.length > 0;
        },

        addItem: function( o ) {
            if( o==null ) o = {field: "text", key:"key", page_meta_translation:[{ language_id:1 }] };
            var e = new PageExtend( o );
            this.add( e );
            return e;
        },

        updateSort: function( l ) {
            this._sortItems( l );
            this.sort();
            Backbone.sync('create', this, {
                url : ntdst.options.api + 'pagemeta/sort',
                success: function() {}
            });
        },

        _sortItems:function( l ) {
            var self = this;

            _.each( l, function( item, index )
            {
                console.log( item );
                var _i = self.get( {id:item.id} );

                if( !_.isUndefined(_i) ){
                    _i.set('sort', index);
                }
            });
        },

        comparator: function(a, b) {
            a = parseInt( a.get(this.sort_key) );
            b = parseInt( b.get(this.sort_key) );
            return a > b ?  1
                : a < b ? -1
                :          0;
        }

    });

    return PageExtendCollection;

});

