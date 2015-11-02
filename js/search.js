/**
 * Created by mc on 30/10/2015.
 */

$(document).ready(function () {

    $("#recherche").keyup(function () {

        var recherche = $(this).val();
        console.log(recherche);
        var data = 'motclef=' + recherche;
        if (recherche.length > 2) {

            $.ajax({
                type: 'GET',
                url: 'func/recherche.php',
                data: data,
                success: function (data) {
                    console.log(data);
                    $("#result").html(data).fadeIn();
                }
            });
        }

    });

});
