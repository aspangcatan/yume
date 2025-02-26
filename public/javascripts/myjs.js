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

    $('#networkViewer').on('click', function(){
        Swal.fire({
            icon: 'warning', // Can be 'success', 'error', 'warning', 'info', or 'question'
            title: 'Access Denied',
            text: 'Access exclusively for those who have upgraded and placed in Binary Tree.',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33'
        });        
    });
    
    $('#loginbtn').on('click', function() {
        let url = $(this).data('url'); // Get route from data-url attribute
        window.location.href = url;
    });
    
});

