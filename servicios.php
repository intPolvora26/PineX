<?php 
$page_title = "Servicios";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section Servicios - Mismas animaciones que inicio -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/images/services-bg.jpg')] bg-cover bg-center opacity-30 animate-zoom-in"></div>
    <div class="container mx-auto px-4 xl:px-0 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight animate-slide-up">
                Nuestros <span class="text-pinex-accent">Servicios</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up animate-delay-100">
                Soluciones completas para tus necesidades de conectividad.
            </p>
        </div>
    </div>
</section>

<!-- Todos los Servicios - Mismo estilo que servicios destacados en inicio -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $servicios_completos = [
                ['icono'=>'fa-satellite-dish','titulo'=>'Instalación Starlink','descripcion'=>'Configuración profesional de Starlink Residencial y Móvil para conexión en zonas remotas.','modal_id'=>'starlink-modal','color'=>'text-blue-500'],
                ['icono'=>'fa-signal','titulo'=>'Repetidores Celular','descripcion'=>'Amplificamos la señal móvil en áreas con poca cobertura.','modal_id'=>'repetidores-modal','color'=>'text-green-500'],
                ['icono'=>'fa-video','titulo'=>'Cámaras Vigilancia','descripcion'=>'Sistemas de seguridad con monitoreo remoto 24/7.','modal_id'=>'camaras-modal','color'=>'text-red-500'],
                ['icono'=>'fa-laptop','titulo'=>'Mantenimiento de PCs','descripcion'=>'Reparación y optimización de computadoras y laptops.','modal_id'=>'pcs-modal','color'=>'text-purple-500'],
                ['icono'=>'fa-wifi','titulo'=>'Redes WiFi Mesh','descripcion'=>'Solución para eliminar zonas muertas en grandes espacios.','modal_id'=>'wifi-modal','color'=>'text-yellow-500'],
                ['icono'=>'fa-user-tie','titulo'=>'Consultoría IT','descripcion'=>'Soluciones personalizadas para tu negocio o hogar.','modal_id'=>'consultoria-modal','color'=>'text-indigo-500'],
                ['icono'=>'fa-passport','titulo'=>'Agendado de Citas de Visa','descripcion'=>'Asistencia para agendar tu cita de visa correctamente.','modal_id'=>'visa-modal','color'=>'text-pink-500'],
                ['icono'=>'fa-file-alt','titulo'=>'Documentación para Pasaporte','descripcion'=>'Guía completa sobre documentos para pasaporte.','modal_id'=>'pasaporte-modal','color'=>'text-teal-500'],
                ['icono'=>'fa-user-cog','titulo'=>'Asesoría Personalizada','descripcion'=>'Soluciones a medida para proyectos o necesidades especiales.','modal_id'=>'asesoria-modal','color'=>'text-orange-500'],
            ];

            foreach ($servicios_completos as $index => $servicio) {
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
    </div>
</section>

<!-- Modales - Mismo estilo que en inicio -->
<?php foreach ($servicios_completos as $servicio): ?>
<div id="<?php echo $servicio['modal_id']; ?>" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 scale-95 z-50">
    <div class="bg-white rounded-lg p-8 max-w-lg mx-4 relative transform transition-transform duration-300">
        <button class="modal-close absolute top-4 right-4 text-gray-500 hover:text-gray-900 text-2xl font-bold">&times;</button>
        <div class="text-center mb-6">
            <div class="w-16 h-16 <?php echo $servicio['color']; ?> bg-pinex-primary/10 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                <i class="fas <?php echo $servicio['icono']; ?>"></i>
            </div>
            <h3 class="text-2xl font-bold mb-2"><?php echo $servicio['titulo']; ?></h3>
        </div>
        <p class="text-gray-600 mb-6">
            <?php 
            echo match($servicio['modal_id']) {
                'starlink-modal' => 'Instalamos y configuramos tu kit Starlink para obtener el máximo rendimiento. Incluye orientación de antena, configuración de red y pruebas de velocidad.',
                'repetidores-modal' => 'Sistemas de repetidores certificados para todas las bandas de frecuencia. Mejora hasta 5x la intensidad de señal en tu propiedad.',
                'camaras-modal' => 'Instalación de cámaras IP de alta definición con almacenamiento en la nube. Notificaciones en tiempo real de movimiento.',
                'pcs-modal' => 'Diagnóstico gratuito. Limpieza interna, actualización de hardware, instalación de software y optimización de sistemas.',
                'wifi-modal' => 'Diseño e implementación de redes mesh profesionales. Cobertura uniforme en toda tu propiedad sin pérdida de señal.',
                'consultoria-modal' => 'Análisis de necesidades tecnológicas y diseño de soluciones a medida. Asesoramiento profesional para optimizar tu infraestructura.',
                'visa-modal' => 'Te asistimos paso a paso para programar correctamente tu cita de visa estadounidense, incluyendo llenado del DS-160, creación de perfil, y selección de fechas disponibles.',
                'pasaporte-modal' => 'Te orientamos sobre los documentos necesarios para tramitar tu pasaporte mexicano, con revisión previa y preparación para la cita.',
                'asesoria-modal' => 'Si tienes un caso particular o un proyecto especial, podemos ayudarte a desarrollar la mejor solución tecnológica y de conectividad.',
                default => $servicio['descripcion']
            };
            ?>
        </p>
        <div class="text-center">
            <a href="contacto.php" class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-envelope mr-2"></i> Solicitar información
            </a>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
// Mismo script de modales que en inicio
document.addEventListener('DOMContentLoaded', function() {
    const modalButtons = document.querySelectorAll('.modal-open-btn');
    const closeButtons = document.querySelectorAll('.modal-close');
    
    modalButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('[data-modal-target]');
            const modalId = card.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);
            
            if (modal) {
                document.querySelectorAll('[id$="-modal"]').forEach(m => {
                    m.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
                    m.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
                });
                
                modal.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
                modal.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');
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

    document.querySelectorAll('[id$="-modal"]').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
                this.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
                document.body.style.overflow = 'auto';
            }
        });
    });

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