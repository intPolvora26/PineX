<?php 
$page_title = "Inicio";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section Mejorada -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/images/hero-bg.jpg')] bg-cover bg-center opacity-30 animate-zoom-in"></div>
    <div class="container mx-auto px-4 xl:px-0 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight animate-slide-up">
                Innovando <span class="text-pinex-accent">en la conectividad</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up animate-delay-100">
                Te ayudamos a elegir la mejor solución para ti.
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-slide-up animate-delay-200">
                <a href="servicios.php" 
                   class="bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-4 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg shadow-pinex-accent/30 flex items-center">
                    <i class="fas fa-wifi mr-3"></i> Nuestros Servicios
                </a>
                <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" 
                   class="border-2 border-white hover:border-pinex-accent hover:bg-white/10 text-white font-bold py-4 px-8 rounded-full transition-all flex items-center">
                    <i class="fab fa-whatsapp mr-3"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Servicios Destacados Mejorados -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-title">
                Nuestros <span class="text-pinex-primary">Servicios</span>
            </h2>
            <p class="max-w-2xl mx-auto text-gray-600">
                Soluciones tecnológicas integrales para hogares y negocios.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $servicios = [
                [
                    'icono' => 'fa-satellite-dish',
                    'titulo' => 'Instalación Starlink',
                    'descripcion' => 'Configuración profesional de Starlink Residencial y Móvil para conexión en zonas remotas.',
                    'modal_id' => 'starlink-modal',
                    'color' => 'text-blue-500'
                ],
                [
                    'icono' => 'fa-signal',
                    'titulo' => 'Repetidores Celular',
                    'descripcion' => 'Amplificamos la señal móvil en áreas con poca cobertura.',
                    'modal_id' => 'repetidores-modal',
                    'color' => 'text-green-500'
                ],
                [
                    'icono' => 'fa-video',
                    'titulo' => 'Cámaras Vigilancia',
                    'descripcion' => 'Sistemas de seguridad con monitoreo remoto 24/7.',
                    'modal_id' => 'camaras-modal',
                    'color' => 'text-red-500'
                ]
            ];
            
            foreach ($servicios as $index => $servicio) {
                echo '
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-pinex-accent transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg cursor-pointer group animate-slide-up animate-delay-'.($index*100 + 200).'" 
                     data-modal-target="'.$servicio['modal_id'].'">
                    <div class="w-20 h-20 bg-pinex-primary/10 '.$servicio['color'].' rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-500 group-hover:bg-pinex-primary group-hover:text-white">
                        <i class="fas '.$servicio['icono'].'"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-center font-title text-pinex-dark group-hover:text-pinex-primary transition-colors">'.$servicio['titulo'].'</h3>
                    <p class="text-gray-600 mb-4 text-center">'.$servicio['descripcion'].'</p>
                    <div class="text-center mt-6">
                        <button class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg modal-open-btn">
                            Ver servicio
                        </button>
                    </div>
                </div>';
            }
            ?>
        </div>
        
        <div class="text-center mt-12 animate-slide-up animate-delay-500">
            <a href="servicios.php" class="inline-flex items-center text-pinex-primary hover:text-pinex-primary/80 font-bold">
                Ver todos nuestros servicios <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Nuestras Marcas Mejorado -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 font-title text-pinex-dark animate-slide-up">
            Nuestras <span class="text-pinex-primary">Marcas</span>
        </h2>
        <div class="swiper animate-fade-in">
            <div class="swiper-wrapper">
                <?php
                $marcas = [
                    ['src' => 'assets/images/brands/starlink-logo.png', 'alt' => 'Starlink'],
                    ['src' => 'assets/images/brands/ubiquiti-logo.png', 'alt' => 'Ubiquiti'],
                    ['src' => 'assets/images/brands/mikrotik-logo.png', 'alt' => 'Mikrotik'],
                    ['src' => 'assets/images/brands/tp-link-logo.png', 'alt' => 'TP-Link'],
                    ['src' => 'assets/images/brands/hik-vision-logo.png', 'alt' => 'Hikvision'],
                    ['src' => 'assets/images/brands/dahua-logo.png', 'alt' => 'Dahua']
                ];
                
                foreach ($marcas as $marca) {
                    echo '
                    <div class="swiper-slide flex items-center justify-center">
                        <img src="'.$marca['src'].'" alt="'.$marca['alt'].'" 
                             class="h-16 max-w-[120px] object-contain grayscale hover:grayscale-0 transition duration-300" />
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Modales Mejorados -->
<?php
foreach ($servicios as $servicio) {
    echo '
    <div id="'.$servicio['modal_id'].'" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 scale-95 z-50">
        <div class="bg-white rounded-lg p-8 max-w-lg mx-4 relative transform transition-transform duration-300">
            <button class="modal-close absolute top-4 right-4 text-gray-500 hover:text-gray-900 text-2xl font-bold">&times;</button>
            <div class="text-center mb-6">
                <div class="w-16 h-16 '.$servicio['color'].' bg-pinex-primary/10 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                    <i class="fas '.$servicio['icono'].'"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">'.$servicio['titulo'].'</h3>
            </div>
            <p class="text-gray-600 mb-6">'.$servicio['descripcion'].'</p>
            <div class="text-center">
                <a href="contacto.php" class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-envelope mr-2"></i> Solicitar información
                </a>
            </div>
        </div>
    </div>';
}
?>

<script>
// Swiper inicialización
document.addEventListener('DOMContentLoaded', function() {
    // Configuración del slider de marcas
    const swiper = new Swiper('.swiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 5 }
        }
    });

    // Control de modales mejorado
    const modalButtons = document.querySelectorAll('.modal-open-btn');
    const closeButtons = document.querySelectorAll('.modal-close');
    
    modalButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('[data-modal-target]');
            const modalId = card.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);
            
            if (modal) {
                // Cerrar cualquier modal abierto
                document.querySelectorAll('[id$="-modal"]').forEach(m => {
                    m.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
                    m.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
                });
                
                // Abrir el modal seleccionado
                modal.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
                modal.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');
                
                // Deshabilitar scroll
                document.body.style.overflow = 'hidden';
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('[id$="-modal"]');
            modal.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
            modal.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
            document.body.style.overflow = 'auto';
        });
    });

    // Cerrar al hacer clic fuera del contenido
    document.querySelectorAll('[id$="-modal"]').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
                this.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
                document.body.style.overflow = 'auto';
            }
        });
    });

    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('[id$="-modal"]').forEach(modal => {
                modal.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
                modal.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
                document.body.style.overflow = 'auto';
            });
        }
    });
});
</script>

<?php 
include 'includes/footer.php';
?>