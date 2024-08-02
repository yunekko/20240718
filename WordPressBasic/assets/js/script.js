// ページトップボタン
var topBtn = $(".js-pagetop");
topBtn.hide();

// ページトップボタンの表示設定
$(window).scroll(function () {
  if ($(this).scrollTop() > 70) {
    // 指定px以上のスクロールでボタンを表示
    topBtn.fadeIn();
  } else {
    // 画面が指定pxより上ならボタンを非表示
    topBtn.fadeOut();
  }
});

// ページトップボタンをクリックしたらスクロールして上に戻る
topBtn.click(function () {
  $("body,html").animate(
    {
      scrollTop: 0,
    },
    300,
    "swing"
  );
  return false;
});

// スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動。ヘッダーの高さ考慮。)
$(document).on("click", 'a[href*="#"]', function () {
  let time = 400;
  let header = $("header").innerHeight();
  let target = $(this.hash);
  if (!target.length) return;
  let targetY = target.offset().top - header;
  $("html,body").animate({ scrollTop: targetY }, time, "swing");
  return false;
});

// ヘッダーの高さ分だけコンテンツを下げる
$(function () {
  const height = $(".js-header").height();
  $("main").css("margin-top", height);
});

// ハンバーガーメニュー
jQuery(function ($) {
  $(".p-header__hamburger").click(function () {
    $(this).toggleClass("is-active");
    // bodyに「.active」class付け外し
    $("body").toggleClass("active");
    $(".js-drawer").fadeToggle();
  });
  if (window.matchMedia("(max-width: 768px)").matches) {
    $(".p-header__logo, .p-header__nav-list li").click(function () {
      $(".p-header__hamburger").removeClass("is-active");
      $("body").removeClass("active");
      $(".js-drawer").fadeOut();
    });
  }
});

// 問い合わせフォームチェックボックス
jQuery(".mwform-checkbox-field-text").html(
  '<a href="https://xs589126.xsrv.jp/codo_assist_test" target="_blank" rel="noopener noreferrer" class="p-contact__confirm-underline">プライバシーポリシー</a>に同意する'
);

// Swiper (FV)
const Swiper1 = new Swiper(".swiper1", {
  loop: true,

  autoplay: {
    delay: 0,
    pauseOnMouseEnter: true,
    disableOnInteraction: false,
  },

  speed: 15000,
  slidesPerView: 1.1,
  centeredSlides: true,

  breakpoints: {
    768: {
      slidesPerView: 1.5,
    },
  },
});

// Swiper (製品情報)
// サムネイル
const sliderThumbnail = new Swiper(".slider-thumbnail", {
  slidesPerView: 4, // サムネイルの枚数
});
// スライダー
const slider = new Swiper(".slider", {
  loop: true,
  // 前後の矢印
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  thumbs: {
    swiper: sliderThumbnail,
  },
});
