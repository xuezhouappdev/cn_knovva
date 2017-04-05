/**
 * Created by xuezhou on 2/4/17.
 */
$(document).ready(function(){


    $(".panel.panel-default a").click(function(){
        //alert("TEt");
        $(this).css("text-decoration","none");
        $(".panel-heading").css({"background":"white","color":"black"});
        $(".panel-heading i").removeClass("fa-minus-circle").addClass("fa-plus-circle").css("color","#ff3e68");

        $(this).parent().parent().css({"background":"#ff3e68","color":"white"});
        $(this).prev().addClass("fa-minus-circle").removeClass("fa-plus-circle").css("color","white");


    })


})