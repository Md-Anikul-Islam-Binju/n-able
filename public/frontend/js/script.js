// document.addEventListener('DOMContentLoaded', function () {
//     // Function to animate the numbers
//     const counters = document.querySelectorAll('.count-num span');
    
//     counters.forEach(counter => {
//         const animateDuration = parseInt(counter.getAttribute('data-animateduration'));
//         const countTo = parseInt(counter.getAttribute('data-countto'));
        
//         let currentCount = 0;
//         const increment = countTo / (animateDuration / 100); // Increment based on duration
        
//         const updateCounter = setInterval(() => {
//             currentCount += increment;
//             if (currentCount >= countTo) {
//                 currentCount = countTo;
//                 clearInterval(updateCounter);
//             }
//             counter.textContent = Math.ceil(currentCount);
//         }, 100);
//     });
// });

$(document).ready(function () {
    $('.industries-wrap').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: false,
      adaptiveHeight: true,
      arrows: true,
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 3 } },
        { breakpoint: 768, settings: { slidesToShow: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1 } },
      ],
    });
  
    // Lazy load background images
    $(".industries-box-inner").each(function () {
      let bg = $(this).css("background-image").replace('url("', '').replace('")', '');
      let img = new Image();
      img.src = bg;
      img.onload = () => $(this).addClass("loaded");
    });
  });

  $(document).ready(function(){
    $('.customer-wrap').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

  