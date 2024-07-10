import 'slick-carousel/slick/slick.css'
import 'slick-carousel/slick/slick-theme.css'

(function($) {

  const carousels = $('.carousel')

  carousels.each(function() {
    $(this).find('div').each(function() {

      const carouselId = $(this).attr('id')

      $(`#${carouselId}`).slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [
          {
            breakpoint: 1230,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 960,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
        ]
      })

    })
  })

})(jQuery)


