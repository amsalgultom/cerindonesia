AOS.init();

$(window).on('scroll', function () {
  const header = $('header');
  const menu = $('#menu-toggle');

  if ($(window).scrollTop() > 200) {
    header.addClass('bg-white shadow-md');
    menu.removeClass('text-white').addClass('text-black');
  } else {
    header.removeClass('bg-white shadow-md');
    menu.addClass('text-white').removeClass('text-black');
  }

  if ($(window).width() > 768) {
    const nav = $('.nav');
    const header2 = $('#content-header');
    const header3 = $('.content-header-3');
    const header3s = $('.content-header-3s');
    const header4 = $('.content-header-4');
    const header5 = $('.content-header-5');
    const logo_nav = $('.logo-nav');
    const submenu = $('.submenu-show');

    if ($(window).scrollTop() > 200) {
      nav.removeClass('h-16').addClass('h-10');
      header2.removeClass('border-transparent py-2').addClass('border-slate-300 py-0');
      header3.removeClass('lg:text-white text-base').addClass('lg:text-black text-sm');
      header3s.removeClass('text-base lg:text-primary-200').addClass('text-sm');
      header4.removeClass('lg:text-primary-200 lg:hover:text-primary-400 lg:focus:text-primary-400 font-semibold text-sm').addClass('font-semibold text-xs');
      header5.removeClass('lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400').addClass('lg:text-black lg:hover:text-primary-600 lg:focus:text-primary-600');
      logo_nav.removeClass('h-14').addClass('h-8');
      submenu.removeClass('top-10 pt-2');
    } else {
      nav.addClass('h-16').removeClass('h-10');
      header2.addClass('border-transparent py-2').removeClass('border-slate-300 py-0');
      header3.addClass('lg:text-white text-base').removeClass('lg:text-black text-sm');
      header3s.addClass('text-base lg:text-primary-200').removeClass('text-sm');
      header4.addClass('lg:text-primary-200 lg:hover:text-primary-400 lg:focus:text-primary-400 font-semibold text-sm').removeClass('font-semibold text-xs');
      header5.addClass('lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400').removeClass('lg:text-black lg:hover:text-primary-600 lg:focus:text-primary-600');
      logo_nav.addClass('h-14').removeClass('h-8');
      submenu.addClass('top-10 pt-2');
    }
  }
});

document.querySelectorAll('.relative-nav').forEach(function(menu) {
    menu.addEventListener('mouseover', function() {
      const dropdown = this.querySelector('.absolute');
      dropdown.classList.remove('hidden');
    });
    menu.addEventListener('mouseout', function() {
      const dropdown = this.querySelector('.absolute');
      dropdown.classList.add('hidden');
    });
  });

  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  menuToggle.addEventListener("click", () => {
    const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";
    menuToggle.setAttribute("aria-expanded", !isExpanded);
    mobileMenu.classList.toggle("hidden");
    if(isExpanded) {
      $('#svg-menu-close').removeClass('block').addClass('hidden');
      $('#svg-menu-open').removeClass('hidden').addClass('block');
    }else{
      $('#svg-menu-open').removeClass('block').addClass('hidden');
      $('#svg-menu-close').removeClass('hidden').addClass('block');
    }
  });