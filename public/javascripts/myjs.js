$(document).ready(function () {

    $(".noChildren").click(function(){
        $(".submenu-icon").removeClass("fa-chevron-down").addClass("fa-chevron-right");
        $(".submenu").slideUp(300);
    });

    $(".submenu-button").click(function () {
        var submenu = $(this).next(".submenu");
        $(".submenu-icon").removeClass("fa-chevron-down").addClass("fa-chevron-right");

        var iconID = $(this).find(".submenu-icon").attr("id"); // Get the ID of the <i>
    
        // Hide all other submenus except the clicked one
        $(".submenu").not(submenu).slideUp(300);
    
        // Slide toggle animation with a callback to change the icon
        submenu.stop().slideToggle(300, function () {
            if (submenu.is(":visible")) {
                $('#'+iconID).removeClass("fa-chevron-right").addClass("fa-chevron-down");
            } else {
                $('#'+iconID).removeClass("fa-chevron-down").addClass("fa-chevron-right");
            }
        });
    });
    
});

