/****======  Active class add Remove  ======*******/
$(".menubar").on("click", function () {
    $(".mobile-menu__sidebar-menu ").addClass("active");
    $(".menu-closer").addClass("active");
  });

  $(".search-box.menu").on("click", function () {
    $(".search-box-popup").addClass("active");
  });
  $(".search-box-close").on("click", function () {
    $(".search-box-popup").removeClass("active");
  });

  $(".menu-closer").on("click", function () {
    $(".mobile-menu__sidebar-menu ").removeClass("active");
    $(".menu-closer").removeClass("active");
  });

  $(".mobile-menu__sidebar-menu .dropdown-list .menuarrow").on("click", function () {
    $(this).parent().parent().find(".dropdown").toggle(300);
    $(this).parent().parent().toggleClass("active");
  });

  $(".mobile-menu__sidebar-menu .dropdown .menuarrowtwo").on("click", function () {
    $(this).parent().parent().find(".subdropdown").toggle(300);
    $(this).parent().parent().toggleClass("active");
  });

  $(".cart-icon").on("click", function () {
    $(".side-cart").addClass("active");
    $(".side-cart-closer").addClass("active");
  });
  $(".cart-close").on("click", function () {
    $(".side-cart").removeClass("active");
    $(".side-cart-closer").removeClass("active");
  });

  $(".menubar").on("click", function () {
    $(".sidebar-content").addClass("active");
    $(".sidebar-content-closer").addClass("active");
  });
  $(".close-side-widget").on("click", function () {
    $(".sidebar-content").removeClass("active");
  });

  $(".sidebar-content-closer").on("click", function () {
    $(".sidebar-content-closer").removeClass("active");
    $(".sidebar-content").removeClass("active");
  });

  $(".close-side-widget").on("click", function () {
    $(".sidebar-content-closer").removeClass("active");
  });

  $(".side-cart-closer").on("click", function () {
    $(".side-cart").removeClass("active");
    $(".side-cart-closer").removeClass("active");
  });
 
  $(".slidebarfilter, .remove-sidebar").on("click", function () {
    $(".shop-grid-sidebar").toggleClass("active");
  });

  $(".varients li a").on("click", function () {
    $(".varients li a").removeClass("active");
    $(this).addClass("active");
  });