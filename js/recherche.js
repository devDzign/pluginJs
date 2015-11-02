/**
 * Created by mc on 31/10/2015.
 */







(function ($, window, document) {
    function Plugin(settings) {
        this.settings = settings;
        this.evenements();
    }

    Plugin.prototype = {
        evenements: function () {
            var parent = this;
            var element = parent.settings.result;
            $(parent.settings.container).keyup(parent.keyuper);

        },

        keyuper: function (element) {
            //e.preventDefault();
            var parent = this;
            //var result = $(parent.resultt);
            var recherche = $(parent).val();
            //var result = settings.result;
            console.log(element);
            var data = 'motclef=' + recherche;

            if (recherche.length > 2) {
                $.ajax({
                    type: 'GET',
                    url: 'func/recherche.php',
                    data: data,
                    success: function (data) {
                        //console.log(parent.settings.result);
                        $("#result").html(data).fadeIn();
                    }
                });
            } else {
                $("#result").fadeOut().hide();
            }

        },

    };

    $.fn.recherche = function (options) {
        var settings = $.extend
        ({
            container: '#recherche',
            result: '#result'
        }, options);
        new Plugin(settings);
    };
}
(jQuery, window, window.document));
