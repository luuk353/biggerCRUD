$("#slideshow > div:gt(0)").hide();

setInterval(() => {
    $('#slideshow > div:first')
        .fadeOut(0)
        .next()
        .fadeIn(800)
        .end()
        .appendTo('#slideshow');
}, 5000);
