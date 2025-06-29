<?php 
$page_title = "Nosotros";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section - Mejorado con animaciones y gradiente -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden animate-fade-in">
    <!-- Fondo hero con overlay mejorado -->
    <div class="absolute inset-0 bg-[url('assets/images/team-bg.jpg')] bg-cover bg-center opacity-30 animate-zoom-in"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-pinex-dark/90 via-pinex-dark/60 to-transparent z-0"></div>

    <!-- Contenido -->
    <div class="container mx-auto px-4 xl:px-0 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight animate-slide-up">
            Conoce más sobre <span class="text-pinex-accent bg-clip-text bg-gradient-to-r from-pinex-primary to-pinex-accent">nosotros</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto animate-slide-up animate-delay-200">
            Somos una marca que impulsa la conectividad en zonas remotas. Descubre nuestra historia, valores y por qué confían en nuestro trabajo.
        </p>
    </div>
</section>

<!-- ¿Por qué elegirnos? - Iconos con colores vibrantes -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-title text-pinex-dark animate-slide-up">
            ¿Por qué <span class="text-pinex-primary bg-clip-text bg-gradient-to-r from-pinex-primary to-pinex-accent">elegirnos</span>?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            $beneficios = [
                ['icono' => 'fa-check-circle', 'color' => 'text-emerald-500', 'titulo' => 'Experiencia comprobada', 'texto' => 'Más de 10 años resolviendo problemas de conectividad en todo tipo de terreno.'],
                ['icono' => 'fa-tools', 'color' => 'text-amber-500', 'titulo' => 'Instalaciones profesionales', 'texto' => 'Equipo capacitado y herramientas de última generación.'],
                ['icono' => 'fa-headset', 'color' => 'text-sky-500', 'titulo' => 'Soporte cercano', 'texto' => 'Estamos disponibles vía WhatsApp o llamada para ayudarte rápido.'],
                ['icono' => 'fa-globe', 'color' => 'text-indigo-500', 'titulo' => 'Cobertura regional', 'texto' => 'Atendemos zonas rurales, urbanas y remotas de difícil acceso.'],
                ['icono' => 'fa-thumbs-up', 'color' => 'text-pink-500', 'titulo' => 'Clientes satisfechos', 'texto' => 'Testimonios reales que avalan la calidad de nuestro trabajo.'],
                ['icono' => 'fa-lightbulb', 'color' => 'text-yellow-400', 'titulo' => 'Soluciones a medida', 'texto' => 'No vendemos cajas cerradas. Escuchamos tu caso y te guiamos.']
            ];
            
            foreach ($beneficios as $index => $b) {
                echo '<div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:border-pinex-primary/30 animate-slide-up animate-delay-'.($index*100 + 200).'">
                        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center text-3xl mb-4 mx-auto transition-all duration-500 hover:rotate-6 hover:scale-110 shadow-md">
                            <i class="fas '.$b['icono'].' '.$b['color'].'"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-center">'.$b['titulo'].'</h3>
                        <p class="text-gray-600 text-center">'.$b['texto'].'</p>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Testimonios - Iconos con gradientes -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-title text-pinex-dark animate-slide-up">
            Lo que dicen nuestros <span class="text-pinex-primary bg-clip-text bg-gradient-to-r from-pinex-primary to-pinex-accent">clientes</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $testimonios = [
                ['nombre' => 'María G.', 'color' => 'from-purple-500 to-pink-500', 'texto' => 'Instalaron Starlink en mi rancho y ahora tengo mejor internet que en la ciudad. Excelente trato.'],
                ['nombre' => 'Luis R.', 'color' => 'from-blue-500 to-teal-400', 'texto' => 'Me instalaron un sistema de cámaras muy confiable. Rápidos y profesionales.'],
                ['nombre' => 'Silvia P.', 'color' => 'from-amber-500 to-orange-500', 'texto' => 'Su asesoría me ayudó a elegir el equipo correcto para mi negocio. ¡Gracias!']
            ];
            
            foreach ($testimonios as $index => $t) {
                echo '<div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 animate-slide-up animate-delay-'.($index*100 + 300).'">
                        <div class="text-4xl mb-4 bg-gradient-to-r '.$t['color'].' bg-clip-text text-transparent">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="italic text-gray-700 mb-6 text-lg">"'.$t['texto'].'"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r '.$t['color'].' rounded-full w-10 h-10 flex items-center justify-center mr-3 text-white">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">'.$t['nombre'].'</h4>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Sobre Mí - Iconos con estilo moderno -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0 max-w-6xl">
        <div class="flex flex-col md:flex-row gap-12 items-center animate-fade-in">
            <!-- Foto con efecto hover mejorado -->
            <div class="w-full md:w-1/3">
                <div class="relative group">
                    <img src="assets/images/20250430_112928.jpg" alt="Mi foto de perfil" class="rounded-xl shadow-lg transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-pinex-dark/70 to-transparent rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <span class="text-white font-bold text-lg">Ing. en Teleinformática</span>
                    </div>
                </div>
            </div>
            
            <!-- Descripción con mejor jerarquía visual -->
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl font-bold text-pinex-dark mb-6 font-title">Sobre Mí</h2>
                <div class="space-y-4 text-gray-700">
                    <p class="text-lg leading-relaxed">
                        Soy Ingeniero en Teleinformática egresado de la Universidad de Guadalajara, apasionado por la tecnología y con más de cinco años de experiencia en el sector.
                    </p>
                    <p class="leading-relaxed">
                        Inicié mi trayectoria en 2021 trabajando desde casa en pequeños proyectos, colaborando con docentes de distintas universidades. Con el tiempo, he participado en múltiples iniciativas exitosas, ayudando a clientes a superar desafíos de conectividad en entornos reales.
                    </p>
                    <p class="leading-relaxed">
                        Mi enfoque está centrado en redes y programación, siempre comprometido con ofrecer soluciones tecnológicas personalizadas que realmente generen impacto en la vida y operaciones de quienes confían en mi trabajo.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="faq.php" class="btn-primary transform hover:scale-105 transition-all bg-gradient-to-r from-purple-600 to-indigo-600">
                            <i class="fas fa-question-circle mr-2 text-white"></i> Preguntas Frecuentes
                        </a>
                        <a href="contacto.php" class="btn-outline border-pinex-primary text-pinex-primary hover:bg-pinex-primary/10 transform hover:scale-105 transition-all border-2">
                            <i class="fas fa-envelope mr-2 text-pinex-primary"></i> Contáctame
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action - Más llamativo -->
<section class="py-20 bg-gradient-to-r from-pinex-dark to-pinex-primary/90 text-white text-center animate-fade-in animate-delay-500">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 font-title animate-slide-up">¿Listo para mejorar tu conectividad?</h2>
        <p class="text-xl mb-8 animate-slide-up animate-delay-100">Envíanos un mensaje y te asesoramos sin compromiso.</p>
        <a href="contacto.php" class="btn-primary inline-block animate-pulse hover:shadow-xl hover:shadow-pinex-accent/30 bg-gradient-to-r from-pink-500 to-rose-500">
            <i class="fas fa-paper-plane mr-2 text-white"></i> Contactar ahora
        </a>
    </div>
</section>

<?php 
include 'includes/footer.php';
?>