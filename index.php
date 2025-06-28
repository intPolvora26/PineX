<?php 
$page_title = "Inicio";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/images/hero-bg.jpg')] bg-cover bg-center opacity-30"></div>
    <div class="container mx-auto px-4 xl:px-0 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight">Innovando  <span class="text-pinex-accent">en la conectividad</span></h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8">Te ayudamos a elegir la mejor solución para ti.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="servicios.php" class="bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-4 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg shadow-pinex-accent/30 flex items-center">
                    <i class="fas fa-wifi mr-3"></i> Nuestros Servicios
                </a>
                <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" class="border-2 border-white hover:border-pinex-accent hover:bg-white/10 text-white font-bold py-4 px-8 rounded-full transition-all flex items-center">
                    <i class="fab fa-whatsapp mr-3"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Servicios Destacados -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-title">Nuestros <span class="text-pinex-primary">Servicios</span></h2>
            <p class="max-w-2xl mx-auto text-gray-600">Soluciones tecnológicas integrales para hogares y negocios.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $servicios = [
                [
                    'icono' => 'fa-satellite-dish',
                    'titulo' => 'Instalación Starlink',
                    'descripcion' => 'Configuración profesional de Starlink Residencial y Móvil para conexión en zonas remotas.',
                    'modal_id' => 'starlink-modal'
                ],
                [
                    'icono' => 'fa-signal',
                    'titulo' => 'Repetidores Celular',
                    'descripcion' => 'Amplificamos la señal móvil en áreas con poca cobertura.',
                    'modal_id' => 'repetidores-modal'
                ],
                [
                    'icono' => 'fa-video',
                    'titulo' => 'Cámaras Vigilancia',
                    'descripcion' => 'Sistemas de seguridad con monitoreo remoto 24/7.',
                    'modal_id' => 'camaras-modal'
                ]
            ];
            
            foreach ($servicios as $servicio) {
                echo '
                <div class="service-card bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-pinex-accent transition-all duration-300 group">
                    <div class="service-icon w-20 h-20 bg-pinex-primary/10 text-pinex-primary rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-500 group-hover:bg-pinex-primary group-hover:text-white">
                        <i class="fas '.$servicio['icono'].'"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-center font-title text-pinex-dark group-hover:text-pinex-primary transition-colors">'.$servicio['titulo'].'</h3>
                    <p class="text-gray-600 mb-4 text-center">'.$servicio['descripcion'].'</p>
                    <div class="text-center mt-6">
                        <a href="servicios.php?modal='.$servicio['modal_id'].'" class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                            Ver servicio
                        </a>
                    </div>
                </div>';
            }
            ?>
        </div>
        
        <div class="text-center mt-12">
            <a href="servicios.php" class="inline-flex items-center text-pinex-primary hover:text-pinex-primary/80 font-bold">
                Ver todos nuestros servicios <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Nuestras Marcas -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 font-title text-pinex-dark">
            Nuestras <span class="text-pinex-primary">Marcas</span>
        </h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center justify-center"><img src="assets/images/brands/starlink-logo.png" alt="Starlink" class="h-16 object-contain grayscale hover:grayscale-0 transition" /></div>
                <div class="swiper-slide flex items-center justify-center"><img src="assets/images/brands/ubiquiti-logo.png" alt="Ubiquiti" class="h-16 object-contain grayscale hover:grayscale-0 transition" /></div>
                <div class="swiper-slide flex items-center justify-center"><img src="assets/images/brands/mikrotik-logo.png" alt="Mikrotik" class="h-16 object-contain grayscale hover:grayscale-0 transition" /></div>
                <div class="swiper-slide flex items-center justify-center"><img src="assets/images/brands/tp-link-logo.png" alt="TP-Link" class="h-16 object-contain grayscale hover:grayscale-0 transition" /></div>
                <div class="swiper-slide flex items-center justify-center"><img src="assets/images/brands/hik-vision-logo.png" alt="Hikvision" class="h-16 object-contain grayscale hover:grayscale-0 transition" /></div>
                <div class="swiper-slide flex items-center justify-center"><img src="assets/images/brands/dahua-logo.png" alt="Dahua" class="h-16 object-contain grayscale hover:grayscale-0 transition" /></div>
            </div>
        </div>
    </div>
</section>

<?php 
include 'includes/footer.php';
?>
