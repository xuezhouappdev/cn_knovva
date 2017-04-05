/**
 * Created by xuezhou on 2/15/17.
 */


$(document).ready(function() {

    $("#startup_program_btn").click(function () {

        $.post("./controller/controller_program_startup.php", $("#form_startup").serializeArray(), function (data) {
            $("#startup_noti").html(data);
        });



        $(this).parents("form").submit(function () {

            return false;
        });


    });

});