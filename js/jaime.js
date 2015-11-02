/**
 * Created by mc on 30/10/2015.
 */
(function ($, window, document) {
    function Plugin(settings) {
        this.settings = settings;
        this.evenements();
        this.precharger();
    }

    Plugin.prototype = {
        evenements: function () {
            var parent = this;
            $(parent.settings.container).click(parent.click)
        },
        precharger: function () {
            var parent = this;
            var jaimes = $(parent.settings.container);

            console.log(jaimes.length);
            for (var i = 0, l = jaimes.length;i<l; i++) {

                $.ajax({
                    context: jaimes[i], //this
                    type: 'POST',
                    url: 'func/jaimes.php',
                    data: 'vote=fals&cle=' + encodeURIComponent($(jaimes[i]).attr('title')),
                    success: function (data) {
                        var votes = parseInt(data);
                        console.log(data);
                        if (isNaN(votes)) {
                            votes = '-1';
                        }
                        if (votes > 0) {
                            $(this).html('<span class="badge">' + votes + '</span> J\'aime')
                        } else {
                            $(this).html('<span class="glyphicon glyphicon-heart"></span> J\'aime')
                        }
                    }
                });

            }

        },
        click: function (event) {
            var parent = this;
            var element = event.currentTarget;
            $(element).unbind('click');
            $(element).click(function () {
                    //block le click
                    return false;
                }
            );
            $.ajax({
                context: element, //this
                type: 'POST',
                url: 'func/jaimes.php',
                data: 'vote=true&cle=' + encodeURIComponent($(element).attr('title')),
                success: function (data) {
                    $(this).css({'opacity': 0});
                    var votes = parseInt(data);
                    if (isNaN(votes)) {
                        votes = '-1';
                    }

                    if (votes > 1) {
                        $(this).html('<span class="badge">'+votes + '</span> personnes aiment ça')
                    } else {
                        $(this).html('<span class="badge">'+votes + '</span> personne aime ça')
                    }
                    $(this).animate({'opacity': 1}, {'duration': 'slow'})

                }
            });

            return false;

        },

    };

    $.fn.jaime = function (options) {
        var settings = $.extend
        ({
            container: 'a.jaime',

        }, options);
        new Plugin(settings);
    };
}
(jQuery, window, window.document));

