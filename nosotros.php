<?php 
$page_title = "Nosotros";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->

<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <!-- Fondo hero -->
    <div class="absolute inset-0 bg-[url('assets/images/team-bg.jpg')] bg-cover bg-center opacity-30 animate-zoom-in"></div>

    <!-- Contenido -->
    <div class="container mx-auto px-4 xl:px-0 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight animate-slide-up">
            Conoce más sobre <span class="text-pinex-accent">nosotros</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto animate-slide-up delay-200">
            Somos una marca que impulsa la conectividad en zonas remotas. Aquí descubrirás nuestra historia, valores y por qué confían en nuestro trabajo.
        </p>
    </div>
</section>


<!-- ¿Por qué elegirnos? -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-title text-pinex-dark animate-slide-up">
            ¿Por qué <span class="text-pinex-primary">elegirnos</span>?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            $beneficios = [
                ['icono' => 'fa-check-circle', 'titulo' => 'Experiencia comprobada', 'texto' => 'Más de 10 años resolviendo problemas de conectividad en todo tipo de terreno.'],
                ['icono' => 'fa-tools', 'titulo' => 'Instalaciones profesionales', 'texto' => 'Equipo capacitado y herramientas de última generación.'],
                ['icono' => 'fa-headset', 'titulo' => 'Soporte cercano', 'texto' => 'Estamos disponibles vía WhatsApp o llamada para ayudarte rápido.'],
                ['icono' => 'fa-globe', 'titulo' => 'Cobertura regional', 'texto' => 'Atendemos zonas rurales, urbanas y remotas de difícil acceso.'],
                ['icono' => 'fa-thumbs-up', 'titulo' => 'Clientes satisfechos', 'texto' => 'Testimonios reales que avalan la calidad de nuestro trabajo.'],
                ['icono' => 'fa-lightbulb', 'titulo' => 'Soluciones a medida', 'texto' => 'No vendemos cajas cerradas. Escuchamos tu caso y te guiamos.']
            ];
            
            foreach ($beneficios as $index => $b) {
                echo '<div class="bg-gray-50 p-6 rounded-xl border border-gray-200 hover:shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-pinex-primary/20 animate-slide-up animate-delay-'.($index*100 + 200).'">
                        <div class="text-pinex-primary text-4xl mb-4 transition-all duration-500 hover:scale-110 hover:text-pinex-accent"><i class="fas '.$b['icono'].'"></i></div>
                        <h3 class="text-xl font-bold mb-2">'.$b['titulo'].'</h3>
                        <p class="text-gray-600">'.$b['texto'].'</p>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Testimonios -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-title text-pinex-dark animate-slide-up">
            Lo que dicen nuestros <span class="text-pinex-primary">clientes</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $testimonios = [
                ['nombre' => 'María G.', 'texto' => 'Instalaron Starlink en mi rancho y ahora tengo mejor internet que en la ciudad. Excelente trato.'],
                ['nombre' => 'Luis R.', 'texto' => 'Me instalaron un sistema de cámaras muy confiable. Rápidos y profesionales.'],
                ['nombre' => 'Silvia P.', 'texto' => 'Su asesoría me ayudó a elegir el equipo correcto para mi negocio. ¡Gracias!']
            ];
            
            foreach ($testimonios as $index => $t) {
                echo '<div class="testimonial-card animate-slide-up animate-delay-'.($index*100 + 300).'">
                        <div class="text-pinex-primary text-3xl mb-4"><i class="fas fa-quote-left"></i></div>
                        <p class="italic text-gray-700 mb-4">"'.$t['texto'].'"</p>
                        <h4 class="font-bold text-pinex-primary">'.$t['nombre'].'</h4>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Sobre Mí -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0 max-w-6xl">
        <div class="about-section animate-fade-in">
            <!-- Foto -->
            <div class="w-full md:w-1/3">
                <img src="/assets/images/foto-perfil.jpg" alt="Mi foto de perfil" class="about-image">
            </div>
            
            <!-- Descripción -->
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl font-bold text-pinex-dark mb-6 font-title">Sobre Mí</h2>
                <div class="prose text-gray-700">
                    <p class="text-lg mb-4">
                        Soy Ingeniero en Teleinformática egresado de la Universidad de Guadalajara, apasionado por la tecnología y con más de cinco años de experiencia en el sector.
                    </p>
                    <p class="mb-4">
                       Inicié mi trayectoria en 2021 trabajando desde casa en pequeños proyectos, colaborando con docentes de distintas universidades. Con el tiempo, he participado en múltiples iniciativas exitosas, ayudando a clientes a superar desafíos de conectividad en entornos reales.
                    </p>
                    <p class="mb-4">
                        Mi enfoque está centrado en redes y programación, siempre comprometido con ofrecer soluciones tecnológicas personalizadas que realmente generen impacto en la vida y operaciones de quienes confían en mi trabajo.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <a href="faq.php" class="btn-primary">
                            <i class="fas fa-question-circle mr-2"></i> Preguntas Frecuentes
                        </a>
                        <a href="contacto.php" class="btn-outline">
                            <i class="fas fa-envelope mr-2"></i> Contáctame
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="py-20 bg-pinex-dark text-white text-center animate-fade-in animate-delay-500">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 font-title animate-slide-up">¿Listo para mejorar tu conectividad?</h2>
        <p class="text-lg mb-8 animate-slide-up animate-delay-100">Envíanos un mensaje y te asesoramos sin compromiso.</p>
        <a href="contacto.php" class="btn-primary inline-block animate-pulse">
            <i class="fas fa-envelope mr-2"></i> Contactar ahora
        </a>
    </div>
</section>

<?php 
include 'includes/footer.php';
?>