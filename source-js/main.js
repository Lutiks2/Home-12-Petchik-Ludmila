/*-------welcome slider--------*/

jQuery(window).load(function () {
  jQuery('.flexslider').flexslider({
    animation: 'slide',
    controlNav: false,
    directionNav: false
  })
})
/*---------introdusing slider------*/
jQuery('.slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
})

jQuery('.ar-left').on('click', function () {
  $('.slider').slick('slickNext')
})

jQuery('.ar-right').on('click', function () {
  $('.slider').slick('slickPrev')
})

/*-------videoslider-------*/

jQuery('.videoslider').slick({
  arrows: false
})

jQuery('#video-left').on('click', function () {
  jQuery('.videoslider').slick('slickNext')
})

jQuery('#video-right').on('click', function () {
  jQuery('.videoslider').slick('slickPrev')
})

/*---------Reed more---pop-up-------*/

jQuery('.pop-up-open').on('click', function (event) {
  jQuery('.pop-up-show').addClass('show')
  event.preventDefault()
})

jQuery('.pop-up-close').on('click', function (event) {
  jQuery('.pop-up-show').removeClass('show')
  event.preventDefault()
})

