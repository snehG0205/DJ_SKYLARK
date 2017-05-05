
  (function($) {

  "use strict";

  var cfg = {   
    defAnimation   : "fadeInUp",    // default css animation    
    scrollDuration : 800,           // smoothscroll duration
    mailChimpURL   : 'http://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&amp;id=e65110b38d'
  },  

  $WIN = $(window);
  

   // Add the User Agent to the <html>
   // will be used for IE10 detection (Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0))
  var doc = document.documentElement;
  doc.setAttribute('data-useragent', navigator.userAgent);


  /* Intro Animation
  * ------------------------------------------------------- */
  var ssIntroAnimation = function() {

    $WIN.on('scroll', function() {
    
        if (!$("html").hasClass('no-cssanimations')) {
          setTimeout(function(){
            $('.animate-intro').each(function(ctr) {
            var el = $(this),
                     animationEfx = el.data('animate') || null;                                         

                 if (!animationEfx) {
                    animationEfx = cfg.defAnimation;                    
                 }

                  setTimeout( function () {
              el.addClass(animationEfx + ' animated');
            }, ctr * 300);
          });           
        }, 100);
        } 
    }); 

  };

  /* Animations
  * ------------------------------------------------------- */
  var ssAnimations = function() {

    if (!$("html").hasClass('no-cssanimations')) {
      $('.animate-this').waypoint({
        handler: function(direction) {

          var defAnimationEfx = cfg.defAnimation;

          if ( direction === 'down' && !$(this.element).hasClass('animated')) {
            $(this.element).addClass('item-animate');

            setTimeout(function() {
              $('body .animate-this.item-animate').each(function(ctr) {
                var el       = $(this),
                animationEfx = el.data('animate') || null;  

                      if (!animationEfx) {
                        animationEfx = defAnimationEfx;                   
                     }

                      setTimeout( function () {
                  el.addClass(animationEfx + ' animated');
                  el.removeClass('item-animate');
                }, ctr * 30);

              });               
            }, 100);
          }

          // trigger once only
            this.destroy(); 
        }, 
        offset: '95%'
      }); 
    }

  };
  
    (function ssInit() {
    ssAnimations();
    ssIntroAnimation();
  })();



  })(jQuery);

