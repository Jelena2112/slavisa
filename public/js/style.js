$(document).ready(function (){

    var navDown = false;
    var windowWidth = $(window).width();
    var navClick = false;

    $(".mobNav").click(function (){
        if(!navClick){
            navClick = true;
            if(!navDown){
                $(".navMain").css({"display":"flex", "height":"0px"}).animate({"height":"250px"}, function() {
                    navClick = false;
                });
                $(".fa-bars").hide();
                $(".mobNav2").show();
                navDown = true;
            }
            else if(navDown){
                $(".navMain").slideUp();
                $(".mobNav2").hide();
                $(".fa-bars").show();
                navDown = false;
                navClick = false;
            }
        }

    });

    $(window).scroll(function (){
        if(windowWidth > 1024){
            if($(window).scrollTop() > 100 ){
                $(".navbar").css({"background-color":"white"});
                $(".navbarItem").css({"color":"black"});
            }
            else{
                $(".navbar").css({"background-color":"transparent"});
                $(".navbarItem").css({"color":"white"});
            }
        }

    });
});
