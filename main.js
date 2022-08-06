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

jQuery(window).on('scroll', function () {
  if (jQuery('.header').height() < jQuery(this).scrollTop()) {
    jQuery('.header').addClass('js-backcolor')
  } else {
    jQuery('.header').removeClass('js-backcolor');
  }
});


jQuery('.sp__hamburger').click(function () {
  jQuery(this).toggleClass('js-active');
  jQuery('.nav__menu').toggleClass('js-panel');
  jQuery('.nav__circle').toggleClass('js-circle');
});

jQuery('.nav__menu a').click(function () {
  jQuery('.sp__hamburger').removeClass('js-active');
  jQuery('.nav__menu').removeClass('js-panel');
  jQuery('.nav__circle').removeClass('js-circle');

});

// アンカーリンク
const headerHeight = 100;
// 別ページからのアンカーリンクのズレを防ぐ
function anchorLink() {
  const urlHash = location.hash;
  if (urlHash) {
    jQuery('html,body').stop().scrollTop(0);
    setTimeout(function () {
      const position = jQuery(urlHash).offset().top - headerHeight;
      jQuery('html,body').animate({ scrollTop: position }, 'slow');
    }, 100);
  }
}
// window.loadではsafariの際に動かなくなるので注意
jQuery(document).ready(function () {
  anchorLink();
});

// ページ内リンクズレを防ぐ
jQuery('a[href*="#"], area[href*="#"]').click(function () {
  //リンク先を絶対パスとして取得
  const href = jQuery(this).prop("href");
  // #より前を取得
  const pageUrl = href.split("#")[0];
  //現在のページの絶対パスを取得
  const currentAllUrl = location.href;
  //現在のページの絶対パスについて、#より前のURLを取得
  const currentUrl = currentAllUrl.split("#")[0];

  if (pageUrl == currentUrl) {
    //リンク先の#の前を取得
    const href1 = href.split("#");
    //リンク先の#の後を取得
    const href2 = href1.pop();
    const href3 = "#" + href2;

    const target = jQuery(href3 == "#" || href3 == "" ? 'html' : href3);
    const position = target.offset().top - headerHeight; 
    jQuery('body,html').stop().animate({ scrollTop: position }, 100);

    return false;
  }

});

