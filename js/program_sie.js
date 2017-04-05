/**
 * Created by xuezhou on 2/15/17.
 */



$(document).ready(function() {

    $("#sie_program_btn").click(function () {

        $.post("./controller/controller_program_sie.php", $("#form_sie").serializeArray(), function (data) {
            $("#sie_noti").html(data);
        });



        $(this).parents("form").submit(function () {

            return false;
        });


    });

});