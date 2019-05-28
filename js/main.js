$(document).ready(function() {

  // $('#voteOneBtn').on('click', fistBtn) 

  // function fistBtn(e) {
  //   e.preventDefault()

  //   console.log("THIS HAPPENED");
  //   var cat = $(this).val();
  //   var curr = 'songs.php';
  //   $.ajax({
  //       url: curr,
  //       type: 'POST',
  //       dataType: 'json',
  //       data: {
  //           category: cat
  
  //       }, error: function(xhr,err) {
  //         console.log(xhr)
  //         console.log(err)
  //       },success: function (result) {
  //         alert(result)
  //     }

  //   }).done(function(res) {
  //     console.log("THIS HAPPENED AGAAAAAIIIIn");
  //          console.log(res);
  //          console.log(ok)
  //       })
  // }




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



}); //PAGE LOADED


