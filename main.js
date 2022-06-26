// スリック
jQuery('.js_slick').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  speed: 5000,
  autoplaySpeed: 4000,
  autoplay: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
});

jQuery(window).on('scroll', function(){
  if(jQuery('.header').height() < jQuery(this).scrollTop()){
    jQuery('.header').addClass('js-backcolor')
  }else{
    jQuery('.header').removeClass('js-backcolor');
  }
});


jQuery('.sp__hamburger').click(function(){
  jQuery(this).toggleClass('js-active');
  jQuery('.nav__menu').toggleClass('js-panel');
  jQuery('.nav__circle').toggleClass('js-circle');
});

jQuery('.nav__menu a').click(function(){
  jQuery('.sp__hamburger').removeClass('js-active');
  jQuery('.nav__menu').removeClass('js-panel');
  jQuery('.nav__circle').removeClass('js-circle');

});

