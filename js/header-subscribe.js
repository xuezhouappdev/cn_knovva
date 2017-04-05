


$(document).ready(function() {

    $("#subscribbtn").click(function () {

        $.post("./controller/subscribe.php", $("#header_subscribeform").serializeArray(), function (data) {
            $("#noti").html(data);
        });



        $(this).parents("form").submit(function () {

            return false;
        });


    });

});