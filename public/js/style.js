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
});
