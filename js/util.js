function goTo(section) {
    var cfg = {
        scrollDuration : 800
    };

    var target = this.hash,
        $target    = $('#'+section);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 72
    }, cfg.scrollDuration, 'swing', function () {
    });
}

function checkIfMobile() {
    return $('html body').width() <= 768;
}