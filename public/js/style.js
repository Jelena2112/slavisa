$(document).ready(function (){

    var navDown = false;
    var windowWidth = $(window).width();
    var navClick = false;

    $("#map").css("width","700px");

    if(windowWidth < 640){
        $('#map').css('width','350px');
        $('#map').css('height','250px');
    }
    else if(windowWidth < 1024 || windowWidth > 641){
        $('#map').css('width','640px');
        $('#map').css('height','450px');


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
                $(".navbar").css({"background-color":"white", "transition-duration":"500ms"});
                $(".navbarItem").css({"color":"black", "transition-duration":"500ms"});
            }
            else{
                $(".navbar").css({"background-color":"transparent", "transition-duration":"500ms"});
                $(".navbarItem").css({"color":"white", "transition-duration":"500ms"});
            }
        }

    });

});
