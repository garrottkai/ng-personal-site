$(window).scroll(function() {
    var scrollVal = $(document).scrollTop();
    if (scrollVal > 50) {
        $("#topnav-logo").css({
            'height': '8rem',
            'float' : 'left',
        });
    } else {
        $("#topnav-logo").css({
            'height': '12rem'
        });
    }
});
