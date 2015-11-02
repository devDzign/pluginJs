/**
 * Created by mc on 01/11/2015.
 */
/**
 * Created by mc on 30/10/2015.
 */
(function ($, window, document) {
    function Plugin(settings) {
        this.settings = settings;
        this.init();

    }

    Plugin.prototype = {
        init: function () {
            var parent = this;
            $(parent.settings.container).focus().keyup(parent.wizzyFiltered)
        },
        wizzyFiltered: function () {
            var parent = this;

            $(parent).keyup(function (event) {
                //var input = $(this);
                var val = $(parent).val();
                console.log(val);
                if(val == ''){
                    $('#filtre li').show();
                    $('#filtre span').removeClass('highlighted');
                    return true;
                }
                var regex = '\\b(.*)';
                for(i in val){
                    regex += '('+val[i]+')(.*)';
                }
                regex += '\\b';
                $('#filtre li').fadeIn().show();
                $('#filtre').find('a>span').each(function () {
                    var span = $(this);
                    //console.log(span);

                    var results = span.text().match(new RegExp(regex, 'i'));
                    if (results) {
                        var string = '';
                        for (i in results) {
                            if (i > 0) {
                                if (i % 2 == 0) {
                                    string += '<span class="highlighted">' + results[i] + '</span>';
                                } else {
                                    string += results[i];
                                }

                            }
                        }
                        span.empty().append(string);
                    } else {
                        span.parent().parent().hide();
                    }

                });
            });

        }

    };

    $.fn.wizzyFilter = function (options) {
        var settings = $.extend
        ({
            container: '#filtreCategory',
            result:  '#filtre'
        }, options);
        new Plugin(settings);
    };
}
(jQuery, window, window.document));

