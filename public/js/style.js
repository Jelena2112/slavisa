$(document).ready(function (){

    var navDown = false;

    $(".mobNav").click(function (){
        if(!navDown){
            $(".navMain").css({"display":"flex"}).animate({"height":"250px"});
            $(".fa-bars").hide();
            $(".mobNav2").show();
            navDown = true;
        }
        else if(navDown){
            $(".navMain").animate({"height":"0"}).css({"display":"none"});
            $(".mobNav2").hide();
            $(".fa-bars").show();
            navDown = false;
        }


    });
});
