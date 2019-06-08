$(document).ready(function (){

    var navDown = false;

    $(".mobNav").click(function (){
        if(!navDown){
            $(".navMain").css({"display":"flex", "height":"0px"}).animate({"height":"250px"});
            $(".fa-bars").hide();
            $(".mobNav2").show();
            navDown = true;
        }
        else if(navDown){
            $(".navMain").slideUp();
            $(".mobNav2").hide();
            $(".fa-bars").show();
            navDown = false;
        }


    });

    $(window).scroll(function (){
        if($(window).scrollTop() > 100 ){
            $(".navbar").css({"background-color":"white"});
            $(".navbarItem").css({"color":"black"});
        }
        else{
            $(".navbar").css({"background-color":"transparent"});
            $(".navbarItem").css({"color":"white"});
        }

    });
});
