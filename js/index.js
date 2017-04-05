/**
 * Created by xuezhou on 12/29/16.
 */

<!-- Script to change the panel for login dialoug-->
$("#a_pwd").click(function(){
    $(".login").addClass("hidden",5000);
    $(".pwforgot").removeClass("hidden");
});

$("#a_newusr").click(function(){
    $(".login").addClass("hidden",5000);
    $(".newuser").removeClass("hidden");
});

$(".close").click(function(){

    location.reload();
});



<!-- Script to activate the carousel -->
$('.carousel').carousel({
    interval: 3000 //changes the speed
});


<!-- Script to control partner items -->
    $(window).scroll(function(){
        if ($(this).scrollTop() > 3400) {
            $("#hide-div").delay(100).animate({opacity:'1'},2000);
        }
    });




