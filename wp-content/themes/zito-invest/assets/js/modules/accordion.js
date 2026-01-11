const $ = jQuery;

const AssemblyDocumentation = {
  init: function () {
    const items = $(".assembly-documentation--contnet");

    if (!items.length) return;

    // PRVI OTVOREN
    const firstItem = items.first();
    firstItem.addClass("active");
    firstItem.find(".documents").slideDown(0);

    items.each(function () {
      const item = $(this);
      const toggle = item.find(".title-wrapper"); 
      const content = item.find(".documents");

      toggle.on("click", function () {
        const activeItem = $(".assembly-documentation--contnet.active");

        if (!item.hasClass("active")) {
          // zatvori prethodno otvoren
          if (activeItem.length) {
            activeItem
              .removeClass("active")
              .find(".documents")
              .slideUp();
          }

          // otvori kliknuti
          item.addClass("active");
          content.slideDown();
        } else {
          // zatvori ako je već otvoren
          item.removeClass("active");
          content.slideUp();
        }
      });
    });
  },
};

export default AssemblyDocumentation;
