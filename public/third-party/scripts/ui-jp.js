(function ($, MODULE_CONFIG) {
    "use strict";

    $.fn.uiJp = function(){

        var lists  = this;

        lists.each(function()
        {
            var self = $(this);

            if (self.attr('ui-options')) {
                var options = eval('[' + self.attr('ui-options') + ']');

                if ($.isPlainObject(options[0])) {
                    options[0] = $.extend({}, options[0]);
                }

                uiLoad.load(MODULE_CONFIG[self.attr('ui-jp')]).then( function(){
                    self[self.attr('ui-jp')].apply(self, options);
                });
            } else {
                uiLoad.load(MODULE_CONFIG[self.attr('ui-jp')]);
            }
        });

        return lists;
    }

})(jQuery, MODULE_CONFIG);
