// ===== SWIPER INIT =====
export function initSwipers() {
    // Swiper de Marcas
    if (document.querySelector('.brands-swiper')) {
        new Swiper('.brands-swiper', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: { slidesPerView: 3 },
                1024: { slidesPerView: 5 }
            }
        });
    }
}

// Inicializar al cargar
document.addEventListener('DOMContentLoaded', initSwipers);