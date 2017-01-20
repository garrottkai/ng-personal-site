$(window).scroll(function() {
    var scrollVal = $(document).scrollTop();
    console.log($(document).attr('title'));
    if (($(document).attr('title') == "Kai Garrott | Developer") && (scrollVal > 50)) {
        $("#topnav-logo").css({
            'height': '8rem',
            'float' : 'left',
        });
        $("header").css({
          'height' : '14rem'
        });
    } else {
        $("#topnav-logo").css({
            'height': '12rem'
        });
    }
});
