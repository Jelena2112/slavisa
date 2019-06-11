$(document).ready(function (){

    var navDown = false;
    var windowWidth = $(window).width();
    var navClick = false;


    var images = [
        "../images/milna_photoshop.png",
        "../images/milna1.jpg",
        "../images/milna2.jpg"
    ];
    var currentImage = 0;

    setInterval(function (){

        if(currentImage == 0){
            currentImage++;
        }
        else if(currentImage == 1){
            currentImage++;
        }
        else if(currentImage == 2)
        {
            currentImage = 0;
        }

        $(".home").css({
            "background": "url(" + images[currentImage] + ")",
            "background-size": "100% 100%",
            "background-repeat": "no-repeat"
        });

    },2000);


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

    $('.datepicker').daterangepicker({
        opens: 'left'
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
    });

});
