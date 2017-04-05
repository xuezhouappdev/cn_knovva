/**
 * Created by xuezhou on 2/9/17.
 */

$(document).ready(function() {

    $("#footerbtn").click(function () {

        $.post("./controller/subscribe2.php", $("#footer_subscribeform").serializeArray(), function (data) {
            $("#footernoti").html(data);
        });



        $(this).parents("form").submit(function () {

            return false;
        });


    });

});