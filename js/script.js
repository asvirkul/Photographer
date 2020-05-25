
jQuery(window).load(function(){

jQuery('#preloader').delay(1000).fadeOut();

});

jQuery(document).ready(function(){
    
    
     
    $('body').removeAttr('style');
    
     Typed.new('.animate',{strings:["Photographer","Designer"],typeSpeed:50,backSpeed:20,backDelay:2000,startDelay:0,loop:true,cursorChar:"|"});
    
    $('.photo-wrapper').particleground({
        dotColor: '#8E8A8A',
        lineColor: '#8E8A8A',
        density: 9000,
        minSpeed: 3
    });
    
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true
    });
    });
    
    
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item', 
        layoutMode: 'fitRows',
        transitionDuration: '0.8s'
    });
    $grid.isotope();
    $('.buttons-wrapper button').on('click', function(){
       var value = $(this).attr('data-filter');
       $grid.isotope({
           filter: value
       })
    });
    
    $('.buttons-wrapper button').click(function(){
        $('.buttons-wrapper button').removeClass('active');
        $(this).addClass('active');
        
        
    });
    
    $('.scrollspy').scrollSpy();
    $('.materialboxed').materialbox();
    $('.sidenav').sidenav();
    
    
    $('.sidenav li a[href^="#"]').click(function(){
         $('.sidenav').animate({
               'left': '-300px'                             
           });
         $('.sidenav-overlay').css({
            'display': 'none',
            'opacity': 0
        });
        
                                    
    });
    $('.sidenav-trigger').click(function(){
        
         $('.sidenav').animate({
               'left': 0                             
           });
         $('.sidenav-overlay').css({
            'display': 'block',
            'opacity': 1
        });
        
    });
    
    var hHeader = $('header').height();
    $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= hHeader ) {
           $('header').addClass('bg-scroll');
          $('.menu li a').css({
               'color': '#000'
           })
          $('nav').css({
              'padding': '5px'
          })
            $('#logo').css({
                'color': '#000'
            })
          $('.sidenav-trigger i').css({
              'color': '#000'
          })
        }
        else {
            $('header').removeClass('bg-scroll');
            $('.menu li a').css({
               'color': '#fff'
           });
             $('nav').css({
              'padding': '15px'
            });
            $('#logo').css({
                'color': '#fff'
            });
            $('.sidenav-trigger i').css({
              'color': '#fff'
          })
        }
  });
    
     function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
    
    $('.top-wrapper a').click(function(e){
        e.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000)
    });
    
    
    var heightHome = $('.photo-wrapper').height();
    $(window).scroll(function(){
        var scrollTop = getCurrentScroll();
        if(scrollTop > heightHome) {
            $('.top-wrapper').css({
                'display': 'flex'
            })
        }
        else {
            $('.top-wrapper').css({
                'display': 'none'
            })
        }
    });
    
    
    $('#form').validate({
        rules: {
           name: {
               required: true
           },
            lastName: {
               required: true 
            },
           email: {
               required: true,
               email: true
           }, 
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please, write your name"
            },
            email: {
                required: "Please, write your e-mail", 
                email: "Вы не ввели Email"
            },
            lastName: {
                required: "Please, write your last name"
            },
            message: {
                required: "Please, write your message"
            }
        }
           
    });
    

});//ready