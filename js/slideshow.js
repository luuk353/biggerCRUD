$("#slideshow > div:gt(0)").hide();
const pijlknop = document.querySelector("#pijlknop");

pijlknop.addEventListener("click", nextProject);

function nextProject() {
    $('#slideshow > div:first')
        .fadeOut(0)
        .next()
        .fadeIn(600)
        .end()
        .appendTo('#slideshow'