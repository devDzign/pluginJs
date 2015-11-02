/**
 * Created by mc on 30/10/2015.
 */
(function ($, window, document)
{
    function Plugin(settings)
    {
        this.settings = settings;
        this.timeoutTimer = null;
        this.timeoutRefresh = null;
        this.init();
    }

    Plugin.prototype = {
        init:          function ()
        {
            var parent = this;
            this.initAddButton();
            this.initModal();
        },



        initAddButton: function ()
        {
            var parent = this;
            if(parent.settings.button.visible)
            {
                $('a' + parent.settings.button.tagLink).css("display", "block").click(function (e)
                {
                    e.preventDefault();
                    if(confirm($(this).attr('data-confirm')))
                    {
                        parent.add($(this).attr('data-price'), $(this).attr('data-quantity'));
                    }
                });
            }
        },
        initModal:     function ()
        {
            var parent = this;
            $('a' + parent.settings.modal).click(function (e)
            {
                var current = this;
                e.preventDefault();
                $.ajax
                ({
                    type:    'POST',
                    url:     $(current).attr('data-url'),
                    data:    {
                        bid:  $(parent.settings.container).attr('data-bid'),
                        user: $(parent.settings.container).attr('data-user')
                    },
                    success: function (data)
                    {
                        $('#' + $(current).attr('data-reveal-id')).html(data);
                    }
                });
            });
        },
    };
    $.fn.bid = function (options)
    {
        var settings = $.extend
        ({
            container:  '.bid',
            timer:      '.timer',
            logAll:     '.total',
            logPartial: '.partial',
            logUser:    '.user',
            form:       '.submit',
            error:      '#bid-error',
            refresh:    3000,
            modal:      '.modal',
            button:     {
                visible: false,
                tagLink: '.add',
                tagText: '.value'
            }
        }, options);
        new Plugin(settings);
    };
}
(jQuery, window, window.document));