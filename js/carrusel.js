const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 3000, // Desplazamiento automático cada 3 segundos
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
