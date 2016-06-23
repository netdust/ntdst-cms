define(function (require) {

    "use strict";

    return {
        lowercase: function(str){
            return str.toLowerCase();
        },

        uppercase: function(str){
            return str.toUpperCase();
        },

        hash: function(s){
            if( !isNaN(s) ) return s;
            return "hash"+s.split("").reduce(function(a,b){a=((a<<5)-a)+b.charCodeAt(0);return a&a},0);
        },

        random: function() {
            return Math.random().toString(36).replace(/[^a-z]+/g, '');
        },

        toSlug: function(str){

            str = str.toLowerCase();
            str = str.replace(/[\u00C0-\u00C5]/ig,'a');
            str = str.replace(/[\u00C8-\u00CB]/ig,'e');
            str = str.replace(/[\u00CC-\u00CF]/ig,'i');
            str = str.replace(/[\u00D2-\u00D6]/ig,'o');
            str = str.replace(/[\u00D9-\u00DC]/ig,'u');
            str = str.replace(/[\u00D1]/ig,'n');

            str = str.trim().replace(/[^_a-z0-9]/gi, '-')
                //.replace(/_+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-+/g, '')
                .replace(/-+$/g, '');

            return str;

        }
    }

});