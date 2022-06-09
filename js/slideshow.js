$("#slideshow > div:gt(0)").hide();

setInterval(() => {
    $('#slideshow > div:first')
        .fadeOut(0)
        .next()
        .fadeIn(600)
        .end()
        .appendTo('#slideshow');
}, 2000);
