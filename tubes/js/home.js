$(document).ready(function() {

    $("#banner-slider .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: true
    });

});
const selectElement = function(element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function() {
    body.classList.toggle('open');
    hero.classList.add('open');
});
navlist.addEventListener('click', function(e) {
    let clickedelement = e.target;
    if (clickedelement.classList[0] === "nav-link") {
        bodyelement.classList.remove('is-open');
    }

});
window.addEventListener('click', function(e) {
    let clickedelement = e.target;

    if (clickedelement.matches('.open')) {
        bodyedlement.classList.remove('open');
        heroedlement.classList.remove('open')
    }

});