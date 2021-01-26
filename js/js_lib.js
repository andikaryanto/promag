/*=============================================================================================	
 Company    : PT Web Architect Technology - webarq.com
 Document   : Javascript Plugin Lib
 Author     : Your Name
 ==============================================================================================*/

$.fn.isOnScreen = function () {
    if (this.length) {
        var viewport = {};
        viewport.top = $(window).scrollTop();
        viewport.bottom = viewport.top + $(window).height();
        var bounds = {};
        bounds.top = this.offset().top;
        bounds.bottom = bounds.top + this.outerHeight();
        return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
    } else
        return false;
};

$.fn.fileInput = function (e) {
    var elem = this;

    elem.wrap('<div class="' + e.class_name + '"></div>');
    elem.css({
        position: 'absolute',
        top: 0,
        left: 0,
        opacity: 0
    });
    elem.parent('.' + e.class_name).css({
        position: 'relative',
        width: elem.outerWidth() - 2,
        height: elem.outerHeight() - 2,
        display: 'inline-block'
    });
    elem.parent('.' + e.class_name).append("<span>"+elem.attr('placeholder-text')+"</span>");
    elem.on('change', function () {
        var value = $(this).val();
        if (value != "") {
            value = value.substring(12, value.length);
            $(this).next("span").html(value);
        } else {
            $(this).next("span").html(elem.attr('placeholder-text'));
        }
    });
};


/* parallax
=============================================================================================================== */

$.fn.onParallax = function (e) {
    var elem = this,
        parralaxx = {};
    parralaxx.fixedParallax = function () {
        elem.each(function (i) {
            var top = $(window).scrollTop();
            elem_ = $(this);
            // if (elem_ == undefined)
                // elem_ = elem_;
                // console.log("thos");
            // if (e.triggerElem.isOnScreen() && !elem_.hasClass('counted')) {
            if(!elem_.hasClass('onfixed')){
                if(top > elem_.parent('section').offset().top){
                    // console.log("this");
                    elem_.addClass("onfixed");
                    // TweenLite.set(elem_, {position: 'fixed'});
                }else{
                    elem_.removeClass("onfixed");
                }
            }else{
                if(top < elem_.parent('section').offset().top){
                    elem_.removeClass("onfixed");
                }
            }
        })
    }
    $(window).scroll(function () {
        parralaxx.fixedParallax();
    })
    parralaxx.fixedParallax();
}

$.fn.parallax = function (e) {
    var
            elem = this,
            flag_run = true,
            s = {
                type: 'background',
                responsive: false,
                distance_move: 0.2, //untuk parallax content & bg
                start_position: 0, // untuk parallax content
                transition_time: 0.7,
                move_when: "offset"
            },
    act = {};
    s = $.extend(s, e);
    act.backgroundParralax = function () {
        var
                distance = e.distance_move,
                top = $(window).scrollTop(),
                top2 = elem.offset().top;
        if (elem.isOnScreen()) {
            top2 = top2 - $(window).outerHeight();
            top = top - top2;
            var tambah = top * distance;
            //                    elem.css('background-position-y','-'+tambah+'px' );

            TweenMax.to(elem, s.transition_time, {
                css: {
                    backgroundPosition: 'center' + ' -' + tambah + 'px'
                },
                ease: Cubic.easeOut
            });
        }
    };
    act.contentParallax = function (t) {
        var
                scrollTop_parralax = 0,
                distance_scroll = 0,
                elem_ = t.elem,
                offset_elem = 0,
                flag_move = false;

        offset_elem = t.offset_elem;
        var window_scroll = $(window).scrollTop();
        if (s.move_when === "offset") {
            if (window_scroll > offset_elem)
                flag_move = true;
        }
        if (s.move_when === "onscreen") {
            if (elem_.isOnScreen)
                flag_move = true;
        }

        if (flag_move) {
            if (s.move_when === "onscreen") {
                distance_scroll = parseFloat(elem_.offset().top) - parseFloat($(window).outerHeight());
                distance_scroll = window_scroll - distance_scroll;
                distance_scroll = distance_scroll * s.distance_move;
            } else {
                distance_scroll = parseInt(window_scroll) - parseInt(offset_elem);
                distance_scroll = distance_scroll / parseInt(s.distance_move);
            }
//            if (elem_.hasClass('first')) {
//                elem_.removeClass('first');
//                TweenMax.set(elem_, {
//                    position: "fixed",
//                    top: 0,
//                });
//            }
            TweenMax.to(elem_, s.transition_time, {
                css: {
                    top: "-" + distance_scroll
                },
                overwrite: 'auto',
                ease: Linear.linear
            });


        } else if (window_scroll <= offset_elem) {
            if (offset_elem !== 0) {
                elem_.addClass('first');
                TweenMax.to(elem_, s.transition_time, {
                    css: {
                        position: 'absolute',
                        top: 0,
                        margin: 0
                    }
                });
            } else
                TweenMax.to(elem_, s.transition_time, {
                    css: {
                        top: 0
                    }
                });

        }
    };
    act.responsiveValidation = function () {
        if (!s.responsive)
            if ($(window).width() < 768) {
                flag_run = false;
            }

    };

    act.responsiveValidation();
    $(window).resize(function () {
        act.responsiveValidation();
    });

    //console.log(flag_run);
    if (flag_run) {
        switch (s.type) {
            case 'background':
                if (elem.length)
                    $(window).scroll(function () {
                        elem.each(function () {
                            act.backgroundParralax($(this));
                        });
                    });
                break;
            case 'activeContent':
                if (elem.length) {
                    var top_elem = new Array();
                    elem.each(function () {
                        top_elem.push($(this).offset().top);
                    });
                    $(window).scroll(function () {
                        elem.each(function (i) {
                            act.contentParallax({
                                offset_elem: top_elem[i],
                                elem: $(this)
                            });
                        });
                    });
                }
                break;
        }

    }
};

/* end parallax
=============================================================================================================== */


$.fn.optCustom = function (q) {
    var
            elem = this,
            s = {
                className: 'checkbox_custom',
            };
    s = $.extend(s, q);
    elem.wrap("<div class='" + s.className + "' style='position:relative' ></div>");
    elem.css({
        position: 'absolute',
        top: 0,
        left: 0,
        opacity: 0,
        width: "100%",
        height: "100%"
    });
    elem.each(function () {
        if ($(this).is(":checked")) {
            $(this).parent().addClass('active');
        }
    });
    elem.on('change', function () {
        if ($(this).attr('type') === "checkbox")
            if (!$(this).is(":checked")) {
                $(this).parent().removeClass('active');
            } else {
                $(this).parent().addClass('active');
            }
        else
            $("input[type=radio][name=" + $(this).attr('name') + "]").each(function () {
                if ($(this).is(":checked")) {
                    $("input[type=radio][name=" + $(this).attr('name') + "]").parent().removeClass('active');
                    $(this).parent().addClass('active');
                    return false;
                }
            });
    });

    elem.parent().on('click', function () {
        if ($(this).attr('type') === "checkbox")
            if (!$(this).children('input').is(":checked")) {
                $(this).removeClass('active');
            } else {
                // console.log('sa')
                $(this).addClass('active');
            }
        else
            $("input[type=radio][name=" + $(this).attr('name') + "]").each(function () {
                if ($(this).is(":checked")) {
                    $("input[type=radio][name=" + $(this).attr('name') + "]").parent().removeClass('active');
                    $(this).parent().addClass('active');
                    return false;
                }
            });
    });

};


$.fn.autoheight = function(s){
    var e = {
        column:'auto',
        boxList:'',
        outer: false
    }
    e = $.extend(e,s);
    var elem = this, a, b = 0, outheight = $(this).height(), column = e.column, excol = column - 1, outer = e.outer;
    var ffirst = 0, flast;
    if(e.boxList!=''){
        var countbox = $(e.boxList).length;
    }else{
        var countbox = 1;
    }

    if(outer == true){
        outheight = $(this).outerHeight();
    }

    var setheight = function(){
        if(column != 'auto'){
            for (var co = 0; co < countbox; co++) {
                if(e.boxList!=''){
                    var countlist = $(e.boxList).eq(co).find(elem).length;
                }else{
                    var countlist = elem.length;
                }
                for (var i = 0; i < countlist; i++) {
                    if(outer == true){
                        a = $(e.boxList).eq(co).find(elem).eq(i).outerHeight();
                    }else{
                        a = $(e.boxList).eq(co).find(elem).eq(i).height();
                    }
                    if(a > b){
                        b = a;
                    }
                    if(i % column == excol || i == countlist - 1){
                        var minex = excol;
                        if(i % column == excol){
                            minex = excol;
                        }else{
                            if(i % column == excol){
                                minex = 0;
                            }else if(i == countlist - 1){
                                if(i - flast > 1){
                                    minex = countlist - i;
                                }else{
                                    minex = countlist - i - 1;
                                }
                            }else{
                                minex = countlist - i - 1;
                            }
                        }
                        ffirst = i - minex;
                        flast = i;
                        for(var lss = ffirst; lss <= flast; lss++){
                            $(e.boxList).eq(co).find(elem).eq(lss).css('height', b+'px');
                            console.log(b);
                        }
                        b = 0;
                    }
                }
            }
            return true;
        }else{
            $(elem).each(function(){
                a = outheight;
                if(a > b){
                    b = a;
                }
            });
            $(elem).css('height', b+'px');
        }
    };
    setheight();
    var resizeTimer;

    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            // console.log('sa');
            if(setheight()){
                location.reload();
            }
        }, 500);
    });
}

$.fn.equalheight = function(e){ 
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;

    $(this).each(function() {

        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) { 
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) { 
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else { 
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest); 
        }
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest); 
        }
    }); 
}

$.fn.responsiveImage = function (s) {
    var e ={
        type:undefined
    }
    e = $.extend(e,s);
    var elem = this, etype,
            action = function () {
                if(e.type == undefined){
                    etype = "background";
                }else{
                    etype = e.type;
                }
                window_width = $(window).width();
                elem.each(function () {
                    flag = false;
                    if (window_width > 1023 && $(this).attr('has_load') != 'large') {
                        images_url = $(this).attr('img-large');
                        $(this).attr('has_load', 'large');
                        flag = true;
                    } else if (window_width <= 1023 && window_width >= 640 && $(this).attr('has_load') != 'medium') {
                        images_url = $(this).attr('img-medium');
                        $(this).attr('has_load', 'medium');
                        flag = true;
                    } else if (window_width < 640 && window_width >= 0 && $(this).attr('has_load') != 'small') {
                        images_url = $(this).attr('img-small');
                        $(this).attr('has_load', 'small');
                        flag = true;
                    }
                    if (images_url == undefined) {
                        images_url = $(this).attr('img-large');
                        $(this).attr('has_load', 'large');
                    }

                    if (flag){
                        if(etype == "background"){
                            $(this).css('background-image', 'url('+images_url+')');
                        }else{
                            $(this).attr('src', images_url);
                        }     
                    }     
                });

            }
    action();
   
    var resizeTimer;

    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            action();
        }, 500);
    });
}

$.fn.animMouseMove = function(e){
    var elem = this,
        s = {
            transition: .6,
            distance: 50,
        };
    s = $.extend(s, e);
    $(document).mousemove(function(d){
        elem.each(function(){
            var elem_ = $(this),
                transition = e.transition,
                nope = e.distance,
                ex  = (d.pageX * -1 / nope),
                ey  = (d.pageY * -1 / nope);

        console.log(e.transition);

            TweenLite.to(elem_, transition, {y:ey,x:ex,ease:Power2.easeOut});
        })
    });
}

function sliderArticle(){
    $('.slider-article').slick({
        slidesToShow: 3,
        centerMode: true,
        centerPadding: '200px',
        variableWidth: true,
        dots:true,
        responsive: [
        {
          breakpoint: 1020,
          settings: {
            slidesToShow: 2,
            variableWidth: false,
            centerPadding: '80px',
          }
        },
        {
          breakpoint: 720,
          settings: {
            slidesToShow: 1,
            variableWidth: false,
            centerPadding: '80px',
          }
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 1,
            variableWidth: false,
            centerPadding: '40px',
          }
        },
        ]
    });
}
function sliderHistory(){
    $('.slider-history').slick({
        slidesToShow: 2,
        arrows:false,
        variableWidth: true,
        dots:true,
        infinite:false,
        responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 1,
          }
        },
        ]
    });
}

function burgNav(){
    var drop = $('header .nav-right .drop-nav-head'),
        indrop = drop.find('.in-drop-nav-head');
    $('header .nav-right .burg-nav').on('click',function(){
        if(!$(this).hasClass('close')){
            $(this).addClass('close');
            $('.box-burg-nav').addClass('opennav');
            $('header .overlay-nav').fadeIn(300);
            drop.fadeIn(300);
            $('.content').addClass('fullheight');
        }else{
            $(this).removeClass('close');
            $('.box-burg-nav').removeClass('opennav');
            $('header .overlay-nav').fadeOut(300);
            drop.fadeOut(300);
            $('.content').removeClass('fullheight');
        }
    });
    $('header .drop-nav-head .close-drop-nav-head').on('click',function(){
        drop.fadeOut(300);
    });
}

/*mouse move function*/
function mousemoveBannerhome(){
    $('.banner-home .objbanner .ovalhome-green').animMouseMove({distance:50,transition:.6});
    $('.banner-home .objbanner .objtriangle-grey').animMouseMove({distance:30,transition:1});
    $('.banner-home .objbanner .objcirclelg-grey').animMouseMove({distance:30,transition:.6});
    $('.banner-home .objbanner .objcirclesm-grey').animMouseMove({distance:40,transition:1});

    $('.banner-home .obj .objtop-green').animMouseMove({distance:80,transition:2});
    $('.banner-home .obj .objbot-green').animMouseMove({distance:80,transition:2});
    $('.banner-home .obj .objcircle-green').animMouseMove({distance:30,transition:1});
    $('.banner-home .wrapper figure img').animMouseMove({distance:90,transition:2});
}


/*parallax function*/
function parallaxBannerhome(){
    $(".banner-home .objbanner .ovalhome-green").parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $(".banner-home .objbanner .objtriangle-grey").parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $(".banner-home .objbanner .objcirclelg-grey").parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $(".banner-home .objbanner .objcirclesm-grey").parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });

    $(".banner-home .obj .objtop-green").parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $(".banner-home .obj .objbot-green").parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $(".banner-home .obj .objcircle-green").parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $(".banner-home .obj .starhome-yellow").parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.banner-home .wrapper figure img').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxProducthome(){
    $('.product-home .objproduct .stargreytop').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .objprodtopline').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .circlegreen').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .circlesm-grey').parallax({
        type: "activeContent",
        distance_move: 0.2,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .trianglesm-grey').parallax({
        type: "activeContent",
        distance_move: 0.2,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .stargreytopsm').parallax({
        type: "activeContent",
        distance_move: 0.25,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .trianglemd-grey').parallax({
        type: "activeContent",
        distance_move: 0.3,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .objproduct .triangelline-grey').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });

    $('.product-home .bgprodhome .objtopprodsm').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .bgprodhome .objtopleftprod').parallax({
        type: "activeContent",
        distance_move: 0.03,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .bgprodhome .objbotprod').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .bgprodhome .objcircle-green').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.product-home .bgprodhome .objcirclesm-green').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.article-home .objlinegrey').parallax({
        type: "activeContent",
        distance_move: 0.03,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxVideohome(){
    $('.video-home .objvidhome .linesbgvid').parallax({
        type: "activeContent",
        distance_move: 0.04,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .objvidleft').parallax({
        type: "activeContent",
        distance_move: 0.03,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .objrgbotvid').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .trianglesamakaki').parallax({
        type: "activeContent",
        distance_move: 0.12,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .circlevid-green').parallax({
        type: "activeContent",
        distance_move: 0.15,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .starvid').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .circlevid-grey').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .dotsvid').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.video-home .objvidhome .circleline-grey').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxSctop(){
    $('.sctop .objsctop .objbg').parallax({
        type: "activeContent",
        distance_move: 0.02,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.sctop .objsctop .objmd').parallax({
        type: "activeContent",
        distance_move: 0.03,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.sctop .objsctop .objsm').parallax({
        type: "activeContent",
        distance_move: 0.04,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.sctop .objsctop .circle-green').parallax({
        type: "activeContent",
        distance_move: 0.2,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxVideoabout(){
    $('.vidabout .objvidabout .dots').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.vidabout .objvidabout .lines').parallax({
        type: "activeContent",
        distance_move: 0.02,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.vidabout .objvidabout .star').parallax({
        type: "activeContent",
        distance_move: 0.2,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.vidabout .objvidabout .circle').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.vidabout .objvidabout .triangle').parallax({
        type: "activeContent",
        distance_move: 0.2,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxAboutcontent(){
    $('.about-content .objab .circline').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.about-content .objab .objleft').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxRewardsbox(){
    $('.rewardsbox .circle-rewards').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.rewardsbox .dots-rewards').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxVarian(){
    $('.varianbox .obj-varian .circle-grey').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.varianbox .obj-varian .circlesm-grey').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.varianbox .obj-varian .triangle-grey').parallax({
        type: "activeContent",
        distance_move: 0.07,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.varianbox .obj-varian .dost-grey').parallax({
        type: "activeContent",
        distance_move: 0.04,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.varianbox .obj-varian .lines-grey').parallax({
        type: "activeContent",
        distance_move: 0.03,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.varianbox .obj-varian .objleftvar').parallax({
        type: "activeContent",
        distance_move: 0.08,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.varianbox .obj-varian .objrightvar').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxVardet(){
    $('.variandetialbox .obj-variandet .star-grey').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.variandetialbox .obj-variandet .triangle-grey').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.variandetialbox .obj-variandet .objright-vardet').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.variandetialbox .obj-variandet .dots-grey').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxMaagmeterstep(){
    $('.maagparallax .obj-maagmenter .circle').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.maagparallax .obj-maagmenter .circlesm').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.maagparallax .obj-maagmenter .triangle').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.maagparallax .obj-maagmenter .dots').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.maagparallax .obj-maagmenter .objleftstep').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.maagparallax .obj-maagmenter .his-triangle').parallax({
        type: "activeContent",
        distance_move: 0.12,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function parallaxArticle(){
    $('.articleparallax .obj-articlebox .circlesm').parallax({
        type: "activeContent",
        distance_move: 0.12,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.articleparallax .obj-articlebox .circle').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.articleparallax .obj-articlebox .triangle-green').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.articleparallax .obj-articlebox .dots-grey').parallax({
        type: "activeContent",
        distance_move: 0.05,
        transition_time: .5,
        move_when: "onscreen"
    });
    $('.articleparallax .obj-articlebox .objright').parallax({
        type: "activeContent",
        distance_move: 0.1,
        transition_time: .5,
        move_when: "onscreen"
    });
}

function btnRounded(){
    $('.btn-lambung').each(function(){
        $(this).append('<span></span><span></span><span></span><span></span><span></span>')
    });
}

function floatHeader(){
    $(window).scroll(function(){
        var header = $("header");
        if($(this).scrollTop() >= 120 ) {
            header.addClass("float");
        }else{
            header.removeClass("float");
        }
    });
}

function playVideo(){
    $('.box-video .btn-play').on('click',function(){
        $(this).parent().find('.overlay-img').fadeOut(300);
        $(this).parent().find('img').fadeOut(300);
        $(this).fadeOut(300);
    });
}

function loader(){
    var wrap = $(".loader"),
        logo = wrap.find('.img-loader'),
        shadow = wrap.find('.shadow-loader'),
        iload = 0,
        width = 0,
        load  = $("body img").length,
        vlo = 0,
        anim = function(){
            TweenLite.to(logo, 0.4,{opacity:1, delay: 0.4, onComplete:function(){
                TweenMax.to(logo, 0.8, {y: '-50px', repeat:-1, yoyo:true, delay: 0.1, ease: Linear.easeNone});
                TweenMax.to(shadow, 0.8, {scale: .6, repeat:-1, yoyo:true, delay: 0.1, ease: Linear.easeNone});
                setTimeout(function(){
                    wrap.fadeOut(500);
                }, 4000);
            }});
        }

    if($(".loader").length){
        var delay = 0;
        $("body img").bind('load',function(){
            iload++;
            delay =iload;
            width = (iload/load) * 100;
            vlo = 1;
            if(iload == load){
                anim();
            }

        });

        // $(window).load(function(){
            // if(vlo == 1){
                anim();
            // }
        // });
    }
}