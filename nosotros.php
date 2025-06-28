<?php 
$page_title = "Nosotros";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/images/team-bg.jpg')] bg-cover bg-center opacity-30"></div>
    <div class="container mx-auto px-4 xl:px-0 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight">Conectamos <span class="text-pinex-accent">donde nadie más llega</span></h1>
        <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">Conoce más sobre quiénes somos, cómo trabajamos y por qué nuestros clientes nos recomiendan.</p>
    </div>
</section>

<!-- ¿Por qué elegirnos? -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-title text-pinex-dark">
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
            foreach ($beneficios as $b) {
                echo '<div class="bg-gray-50 p-6 rounded-xl border border-gray-200 hover:shadow-md transition">
                        <div class="text-pinex-primary text-4xl mb-4"><i class="fas '.$b['icono'].'"></i></div>
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
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 font-title text-pinex-dark">
            Lo que dicen nuestros <span class="text-pinex-primary">clientes</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $testimonios = [
                ['nombre' => 'María G.', 'texto' => 'Instalaron Starlink en mi rancho y ahora tengo mejor internet que en la ciudad. Excelente trato.'],
                ['nombre' => 'Luis R.', 'texto' => 'Me instalaron un sistema de cámaras muy confiable. Rápidos y profesionales.'],
                ['nombre' => 'Silvia P.', 'texto' => 'Su asesoría me ayudó a elegir el equipo correcto para mi negocio. ¡Gracias!']
            ];
            foreach ($testimonios as $t) {
                echo '<div class="bg-white p-6 rounded-xl shadow text-center">
                        <p class="italic text-gray-700 mb-4">“'.$t['texto'].'”</p>
                        <h4 class="font-bold text-pinex-primary">'.$t['nombre'].'</h4>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="py-20 bg-pinex-dark text-white text-center">
    <div class="container mx-auto px-4 xl:px-0">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 font-title">¿Listo para mejorar tu conectividad?</h2>
        <p class="text-lg mb-8">Envíanos un mensaje y uno de nuestros expertos te asesorará sin compromiso.</p>
        <a href="contacto.php" class="bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-4 px-8 rounded-full transition-all">
            <i class="fas fa-envelope mr-2"></i> Contactar ahora
        </a>
    </div>
</section>

<?php 
include 'includes/footer.php';
?>
