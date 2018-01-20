jQuery(document).ready(function() {
    "use strict";

    /*=================== Responsive Menu ===================*/   
    $(".open-menu").on("click",function(){
        $(".responsive-menu").slideDown();
        $(".responsive-search").slideUp();
        return false;
    });
    $(".open-search").on("click",function(){
        $(".responsive-search").slideToggle();
        $(".responsive-menu").slideUp();
        return false;
    })
    $(".close-this, html").on("click",function(){
        $(".responsive-menu").slideUp();
    });
    $(".responsive-menu").on("click",function(e){
        e.stopPropagation();
    });

    var responsive = $(".responsive-header").innerHeight();
    $(".responsive-header-height").css({
        "height":responsive
    })

    $(".responsive-menu > ul li ul").parent().addClass("has-dropdown");
        $(".responsive-header .has-dropdown > a").bind('touchstart click', function(){
        $(this).parent().siblings().children("ul").slideUp();
        $(this).parent().children("ul").slideToggle();
        $(this).parent().siblings().find("a").removeClass("active");
        $(this).toggleClass("active");
        return false;
    });    

    $('.responsive-menu').enscroll({
        showOnHover: false,
        verticalTrackClass: 'track4',
        verticalHandleClass: 'handle4'
    });


    /*=================== Sticky Header ===================*/   
    if($("body div").hasClass("simple-header")){
        var simple_header_stick;
        if($(".simple-header").hasClass('stick')){
            var simple_header_stick = $(".simple-header.stick").offset().top;
        }
        var simple_header_height = $(".simple-header.stick").innerHeight();
        $(".header-wrap").css({
            "height":simple_header_height
        });
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > simple_header_stick) {
                $(".simple-header.stick").addClass("sticky");
            } else {
                $(".simple-header.stick").removeClass("sticky");
            }
        });
    }
    if($("body div").hasClass("creative-header")){
        var simple_header_stick;
        if($(".creative-header").hasClass('stick')){
            var simple_header_stick = $(".creative-header.stick").offset().top;
        }
        var simple_header_height = $(".creative-header.stick").innerHeight();
        $(".header-wrap").css({
            "height":simple_header_height
        });
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > simple_header_stick) {
                $(".creative-header.stick").addClass("sticky");
            } else {
                $(".creative-header.stick").removeClass("sticky");
            }
        });
    }
    if($("body div").hasClass("transparent-header")){
        var simple_header_stick;
        if($(".transparent-header").hasClass('stick')){
            var simple_header_stick = $(".transparent-header.stick").offset().top;
        }
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > simple_header_stick) {
                $(".transparent-header.stick").addClass("sticky");
            } else {
                $(".transparent-header.stick").removeClass("sticky");
            }
        });
    }


    /*=================== Mega Menu ===================*/ 
    $(".megamenu").parent().addClass("has-megamenu");



    
    /*=================== Dropdown Anmiation ===================*/ 
    var drop = $('.menu-links > li > ul > li');
    $('.menu-links > li').each(function(){
        var delay = 0;
        $(this).find(drop).each(function(){
        $(this).css({transitionDelay: delay+'ms'});
        delay += 50;
        });
    });  
    var drop2 = $('.menu-links > li > ul > li >  ul > li')
        $('.menu-links > li > ul > li').each(function(){      
        var delay2 = 0;
        $(this).find(drop2).each(function(){
        $(this).css({transitionDelay: delay2+'ms'});
        delay2 += 50;
        });
    });      



    /*=================== Accordion ===================*/
    $('.toggle .content').hide();
    $('.toggle h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
    $('.toggle h3').on("click", function() {
        if ($(this).next().is(':hidden')) {
            $('.toggle h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
            $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
        }
    });

    /*=================== Share Link ===================*/
    var share_link = $('.share-link a');
    $('.share-link').each(function(){
        var delay = 0;
        $(this).find(share_link).each(function(){
        $(this).css({transitionDelay: delay+'ms'});
        delay += 50;
        });
    });  


    /*=================== Footer Links ===================*/
    $(".footer-links > a").mouseenter(function(){
        $(".footer-links > a").removeClass("hovered");
        $(this).addClass("hovered");
    });


    /*=================== LightBox ===================*/
    var foo = $('.lightbox');
    foo.poptrox({
        usePopupCaption: true,
        usePopupNav: true,
    });






    /*=================== Ajax Contact Form ===================*/
    $('#contactform').submit(function () {
       var action = $(this).attr('action');
       var msg = $('#message');
       $(msg).hide();
       var data = 'name=' + $('#name').val() + '&email=' + $('#email').val() + '&phone=' + $('#phone').val() + '&comments=' + $('#comments').val() + '&verify=' + $('#verify').val() + '&captcha=' + $(".g-recaptcha-response").val();
       $.ajax({
           type: 'POST',
           url: action,
           data: data,
           beforeSend: function () {
              $('#submit').attr('disabled', true);
              $('img.loader').fadeIn('slow');
          },
          success: function (data) {
              $('#submit').attr('disabled', false);
              $('img.loader').fadeOut('slow');
              $(msg).empty();
              $(msg).html(data);
              $('#message').slideDown('slow');
              if (data.indexOf('success') > 0) {
                  $('#contactform').slideUp('slow');
              }
          }
      });
       return false;
   });


    /*=================== Parallax ===================*/   
    $('.parallax').scrolly({bgParallax: true});  

}); /*=== Document.Ready Ends Here ===*/

