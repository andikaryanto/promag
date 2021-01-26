/*=============================================================================================	
 Company    : PT Web Architect Technology - webarq.com
 Document   : Javascript Plugin Exe
 Author     : Your Name
 ==============================================================================================*/
$(document).ready(function () {
    // $(".select2").select2({ //select customize 
    //     width: '100%'
    // });

    sliderArticle();
    sliderHistory();
    
    burgNav();
    btnRounded();
    floatHeader();
    playVideo();
    loader();

    /*mouse move*/
    if($(window).width > 1020){
        mousemoveBannerhome();
    }
    // $('.movehover').animMouseMove();

    /*parallax function*/
    if($(window).width > 720){
        parallaxBannerhome();
        parallaxProducthome();
        parallaxVideohome();
        parallaxSctop();
        parallaxVideoabout();
        parallaxAboutcontent();
        parallaxRewardsbox();
        parallaxVarian();
        parallaxVardet();
        parallaxMaagmeterstep();
        parallaxArticle();
    }
});
