jQuery(document).ready(function () {
    
    // isotope menu filter
	jQuery('.homepage_menu_tab_content').css("cssText", "position: unset");
	jQuery(".homepage_menu_tab button").on("click", function () {
		jQuery(".homepage_menu_tab button").removeClass("filter_active");
		jQuery(this).addClass("filter_active");
		menuIsotope.isotope({
			filter: jQuery(this).data("filter"),
		});
			jQuery('.homepage_menu_tab_content').css("cssText", "position: unset");
	});

	var galleryIsotope = jQuery(".homepage_gallery_tab_content").isotope({
		itemSelector: ".gallery-item",
		layoutMode: "fitRows",
	});
	jQuery('.gallery-item').css("cssText", "position: unset");
	jQuery('.homepage_gallery_tab_content').css("cssText", "position: unset");
	jQuery(".homepage_gallery_tab button").on("click", function () {
		jQuery(".homepage_gallery_tab button").removeClass("filter_active");
		jQuery(this).addClass("filter_active");
		galleryIsotope.isotope({
			filter: jQuery(this).data("filter"),
		});
			jQuery('.homepage_gallery_tab_content').css("cssText", "position: unset");
	});
		jQuery(document).on("click", ".homepage_gallery_tab button", function () {
			jQuery(".homepage_gallery_tab button").removeClass("filter_active");
			jQuery(this).addClass("filter_active");
			var galleryIsotope = jQuery(".homepage_gallery_tab_content").isotope({
				itemSelector: ".gallery-item",
				layoutMode: "fitRows",
				masonry: {
					columnWidth: 40,
					isFitWidth: true
				}
			});
			galleryIsotope.isotope({
				filter: jQuery(this).data("filter"),

			});
		});
		// isotope menu filter
    /* Mobile menu button add class / remove class */
    jQuery("button.navbar-toggler").click(function () {
        jQuery(".navbar-toggler").toggleClass("close_icon");
    });



    /* testimonial slider */
    jQuery(".testimonial__slider").slick({
        slidesToShow: 1,
        infinite: true,
        arrows: false,
        autoplay: true,
        speed: 300
    });
    jQuery(".prev-btn").click(function () {
        jQuery(".testimonial__slider").slick("slickPrev");
    });
/*jQuery('.forminator-button forminator-button-submit').click(function (e) {
    e.preventDefault();
    console.log('prevent');
});*/ 
    jQuery(".next-btn").click(function () {
        jQuery(".testimonial__slider").slick("slickNext");
    });
    jQuery(".prev-btn").addClass("slick-disabled");
    jQuery(".testimonial__slider").on("afterChange", function () {
        if (jQuery(".slick-prev").hasClass("slick-disabled")) {
            jQuery(".prev-btn").addClass("slick-disabled");
        } else {
            jQuery(".prev-btn").removeClass("slick-disabled");
        }
        if (jQuery(".slick-next").hasClass("slick-disabled")) {
            jQuery(".next-btn").addClass("slick-disabled");
        } else {
            jQuery(".next-btn").removeClass("slick-disabled");
        }
    });
    /* testimonial slider end*/


    /* Counter Up */
    jQuery('.counter').counterUp({
        delay: 10,
        time: 2000
    });


    /* properties-single-page slider */
    jQuery('.propertice__main__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        autoplay: true,
        asNavFor: '.propertice__slider__nav'
    });
    jQuery('.propertice__slider__nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.propertice__main__slider',
        dots: false,
        arrows: false,
        autoplay: true,
        centerMode: false,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

});