/**
 * Created by xuezhou on 2/15/17.
 */




$(document).ready(function() {

    $("#tech_program_btn").click(function () {

        $.post("./controller/controller_program_tech.php", $("#form_tech").serializeArray(), function (data) {
            $("#tech_noti").html(data);
        });



        $(this).parents("form").submit(function () {
            return false;
        });


    });

});