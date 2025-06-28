<footer class="bg-pinex-dark text-white pt-16 pb-8">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <img src="assets/images/Nombre.png" alt="<?php echo SITE_NAME; ?>" class="h-8">
                    <span class="text-xl font-bold font-title"></span>
                </div>
                <p class="text-gray-400 mb-6">Conectividad donde otros no llegan. Soluciones para tu casa, rancho o negocio.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <div>
                <h4 class="text-lg font-bold mb-6 font-title">Servicios</h4>
                <ul class="space-y-3">
                    <li><a href="servicios.php" class="text-gray-400 hover:text-pinex-accent transition-colors">Instalación Starlink</a></li>
                    <li><a href="servicios.php" class="text-gray-400 hover:text-pinex-accent transition-colors">Repetidores Celular</a></li>
                    <li><a href="servicios.php" class="text-gray-400 hover:text-pinex-accent transition-colors">Cámaras Vigilancia</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-lg font-bold mb-6 font-title">Contacto</h4>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-pinex-accent mt-1 mr-3"></i>
                        <span class="text-gray-400">Av. Principal 123,  Villa Purificacion, Jalisco, Mexico</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt text-pinex-accent mr-3"></i>
                        <a href="tel:<?php echo WHATSAPP_NUMBER; ?>" class="text-gray-400 hover:text-pinex-accent transition-colors"><?php echo WHATSAPP_NUMBER; ?></a>
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-whatsapp text-pinex-accent mr-3"></i>
                        <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" class="text-gray-400 hover:text-pinex-accent transition-colors">WhatsApp</a>
                    </li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-lg font-bold mb-6 font-title">Horario</h4>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex justify-between">
                        <span>Lunes a Viernes</span>
                        <span>9:00 - 18:00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Sábados</span>
                        <span>9:00 - 13:00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Emergencias</span>
                        <span class="text-pinex-accent">24/7</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<!-- Botón Flotante WhatsApp -->
<a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" class="fixed bottom-6 right-6 bg-pinex-accent hover:bg-pinex-accent/90 text-white w-14 h-14 rounded-full flex items-center justify-center text-2xl shadow-lg z-50 transition-all transform hover:scale-110" aria-label="Contactar por WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/modal.js"></script>

<!-- Swiper.js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
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
</script>

</body>
</html>