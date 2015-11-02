/**
 * Created by mc on 01/11/2015.
 */

(function ($) {

    $("#filtreCategory").focus().keyup(function (event) {
        var input = $(this);
        var val = input.val();
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

})(jQuery);