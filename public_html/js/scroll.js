$(window).scroll(function() {
    var scrollVal = $(document).scrollTop();
    console.log($(document).attr('title'));
    if (($(document).attr('title') == "Kai Garrott | Developer") & (scrollVal < 50)) {
        $("#topnav-logo").css({
            'height': '14rem',
            'text-align' : 'center',
        });
        $('.navbar-brand').addClass('col-xs-4 col-xs-offset-4');
      /*  $("header").css({
          'height' : '14rem'
        });*/
    } else {
        $("#topnav-logo").css({
            'height': '8rem',
            'float' : 'left'
        });
    }
});
