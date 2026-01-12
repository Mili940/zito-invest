const $ = jQuery;

const HeaderScroll = {
  init: function () {
    const header = $("#site-header");
    const hero = $(".section-hero");

    if (!header.length || !hero.length) return;

    const updateHeader = () => {
      const heroBottom = hero.offset().top + hero.outerHeight();
      const scrollTop = $(window).scrollTop();

      if (scrollTop > heroBottom) {
        header.addClass("scrolled");
      } else {
        header.removeClass("scrolled");
      }
    };

    $(window).on("scroll resize", updateHeader);

    // poziv odmah na load
    updateHeader();
  },
};

export default HeaderScroll;
