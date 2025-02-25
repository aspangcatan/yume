$(document).ready(function () {
    $("#submenu-button").click(function () {
        let submenu = $("#submenu");
        let icon = $("#submenu-icon");

        // Slide toggle animation with a callback to change the icon
        submenu.stop().slideToggle(300, function () {
            if (submenu.is(":visible")) {
                icon.removeClass("fa-chevron-right").addClass("fa-chevron-down");
            } else {
                icon.removeClass("fa-chevron-down").addClass("fa-chevron-right");
            }
        });
    });
});

$(document).ready(function () {
    $("#submenu-button-ewallet").click(function () {
        let submenu = $("#submenuewallet");
        let icon = $("#submenu-icon-ewallet");

        // Slide toggle animation with a callback to change the icon
        submenu.stop().slideToggle(300, function () {
            if (submenu.is(":visible")) {
                icon.removeClass("fa-chevron-right").addClass("fa-chevron-down");
            } else {
                icon.removeClass("fa-chevron-down").addClass("fa-chevron-right");
            }
        });
    });
});

