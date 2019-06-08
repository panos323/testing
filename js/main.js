if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

$(document).ready(function() {


    $(function(){
        var successfullMsg = document.querySelector(".successfullMsg");
        var welcomeLogged = document.querySelector(".welcomeLogged");

        if (successfullMsg) {
            setTimeout(function() {
                successfullMsg.style.display = 'none';
              }, 3000);
        }

        if (welcomeLogged) {
            setTimeout(function() {
                welcomeLogged.style.display = 'none';
              }, 3000);
        }
        
    });

    // Check if element is scrolled into view
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
    
    // If element is scrolled into view, fade it in
    $(window).scroll(function() {
        $('.scroll-animations .animated').each(function() {
        if (isScrolledIntoView(this) === true) {
            $(this).addClass('fadeInLeft');
        }
        });
    });


    //swipper
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows : true,
        },
        pagination: {
          el: '.swiper-pagination',
        },
      });


   var myCounter = 1;
   $("body").on("click", ".btnChangeText", function() {
      if (myCounter <= 4) {
        myCounter++;
        let x = $(".changeText" +myCounter);
        let y = $(".changeText" +[ myCounter-1]);
        x.addClass("addIt");
        x.removeClass("removeIt");
        y.removeClass("addIt");
        y.addClass("removeIt");
      } 
      
   });

}); //PAGE LOADED


