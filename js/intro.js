/**
 * Created by xuezhou on 1/21/17.
 */
$(document).ready(function(){
    var inputnum = $("input").length;


    $("#counter").html(1+"/"+inputnum);
    $(".error-msg").html("");
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    //PREV button
    $(".prev").click(function () {
        if(parseInt($('li.nav-item.active').find('a').attr('aria-controls'))>1) {
            $(".error-msg").text("");
            $("#counter").html(parseInt($('li.nav-item.active').find('a').attr('aria-controls')) - 1+"/"+inputnum);
        }
        $('.nav-tabs').find('.active').prev('li').find('a').tab('show');
    });

    //NEXT BUTTON---------------------------------------------------------------------------------------------------------------------------------------
    $(".next").click(function (e) {

        //alert($(this).parents("form").find("input").val());

        if($(this).parents("form").find("input").val()=="" ) {
            $(".error-msg").text("Please fill the field before going to the next step");
        }

        else{
            $(".error-msg").text("");
            if(parseInt($('.nav-tabs>.active').find('a').attr('aria-controls'))<4) {
                $("#counter").html(parseInt($('li.nav-item.active').find('a').attr('aria-controls')) + 1+"/"+inputnum);
            }
            $('.nav-tabs>.active').next().find('a').tab('show');
        }



    });

    //input verification


    //disable the a
    $('a.nav-link').click(function (e) {
        // custom handling here
        $(".error-msg").text("");
        var counter2 = $(this).attr("aria-controls");
        // alert(counter2);
        $("#counter").html(parseInt(counter2)+"/"+inputnum);

    });

    //jump to index page;
    $("#cross-btn").click(function(){
        window.location.href = "../index.php";
    })

});