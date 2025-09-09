jQuery(document).ready(function ($) {
  /*------------- MobileMenu --------------- */
  // $('.header-right-mob').click(function () {
  //   $('.mob-swipe-bg').show();
  //   value1 = $('.mobile-menu-right').css('right') === '-260px' ? 0 : '-260px';
  //   $('.mobile-menu-right').stop().css({
  //     right: value1,
  //   });
  // });
  // $('.mob-swipe-bg').click(function () {
  //   $('.mob-swipe-bg').hide();
  //   $('.mobile-menu-right').css('right', '-260px');
  // });

  //slider
  $(".slider").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
  });
  $(".header-search-mob").click(function () {
    $(".mobile-search").show("slow");
    $(".mobile-search-input").focus();
  });
  $(".search-close").click(function () {
    $(".mobile-search").hide("slow");
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 35) {
      $(".home .header").addClass("header-shrink");
    } else {
      $(".home .header").removeClass("header-shrink");
    }
  });

  $(".back-to-up").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });

  $(document).on("click", ".search-input", function () {
    $(this).attr("placeholder", "");
  });

  let open = `<div class="open-menu">+</div>`;
  $(".mobile-menu li").each(function () {
    if ($(this).hasClass("menu-item-has-children")) {
      $(this).append(open);
    }
  });

  $(document).on("click", ".open-menu", function () {
    $(this).parent().find(".sub-menu").css("display", "block");
    $(this).text("_");
    $(this).removeClass("open-menu");
    $(this).addClass("close-menu");
  });
  $(document).on("click", ".close-menu", function () {
    $(this).parent().find(".sub-menu").css("display", "none");
    $(this).text("+");
    $(this).removeClass("close-menu");
    $(this).addClass("open-menu");
  });
});
