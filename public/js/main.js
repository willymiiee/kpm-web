const productThumbnail = document.querySelectorAll('#home .product--thumbnail');
const productPreview = document.querySelectorAll('#home .product--preview');

productThumbnail.forEach(function (el) {
    el.addEventListener('click', function () {
        productPreview[0].children[0].src = el.children[0].src;
        productPreview[0].children[1].innerHTML = el.children[0].alt.toUpperCase();
    });
});

var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 800,
    speedAsDuration: true,
    easing: 'easeInOutQuad',
    topOnEmptyHash: true,
    updateURL: false,
});

const backToTop = document.querySelector('.back-to-top');

window.addEventListener('scroll', function () {
    if (window.scrollY >= 200) {
        backToTop.classList.remove('hidden');
    } else {
        backToTop.classList.add('hidden');
    }
});

