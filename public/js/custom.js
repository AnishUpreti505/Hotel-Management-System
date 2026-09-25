/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
    "use strict";

    /* Preloader
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(window).on("load", function () {
        $(".loader_bg").fadeOut();
    });

    /* Tooltip
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    /* Mouseover
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function () {
        $(".main-menu ul li.megamenu").mouseover(function () {
            if (!$(this).parent().hasClass("#wrapper")) {
                $("#wrapper").addClass("overlay");
            }
        });
        $(".main-menu ul li.megamenu").mouseleave(function () {
            $("#wrapper").removeClass("overlay");
        });
    });

    /* Toggle sidebar
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
            $("#sidebar").toggleClass("active");
            $(this).toggleClass("active");
        });
    });

    /* Product slider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $("#blogCarousel").carousel({
        interval: 5000,
    });

    /* Smooth scroll + clean path URL without reload
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).on("click", ".nav-scroll", function (e) {
        e.preventDefault();

        var targetId = $(this).data("target");
        var target = $("#" + targetId);
        var newUrl = $(this).attr("href");

        if (target.length) {
            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop: target.offset().top,
                    },
                    600,
                    function () {
                        history.pushState(null, null, newUrl);
                    }
                );
        }
    });

});
