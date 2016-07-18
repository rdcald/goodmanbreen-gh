/* Controls navbar transparency */
$(window).on("scroll", function () {
    if ($(this).scrollTop() > 550) {
        $(".navbar").addClass("not-transparent");
        $(".navItems").removeClass("transparent");
        $("img.logo2").addClass("add");       
        $("img.logo").removeClass("remove");
    }
    else {
        $(".navbar").removeClass("not-transparent");
        $(".navItems").addClass("transparent");
        $("img.logo2").removeClass("remove");        
        $("img.logo").addClass("add");
    }
});

/* Controls scroll */
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
            }
        }
    });
});

/* Scrollspy targets */
$('body').scrollspy({ target: '#services' });
$('body').scrollspy({ target: '#contact' });
$('body').scrollspy({ target: '#about' });

/* Parallax window image */
$('.parallax-window').parallax({imageSrc: 'file:///Users/roncaldwell/Documents/Developer/GoodmanBreen/assets/images/family.jpg'});