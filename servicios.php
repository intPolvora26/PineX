<?php 
$page_title = "Servicios";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section Servicios -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/images/services-bg.jpg')] bg-cover bg-center opacity-30"></div>
    <div class="container mx-auto px-4 xl:px-0 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight">Nuestros <span class="text-pinex-accent">Servicios</span></h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8">Soluciones completas para tus necesidades de conectividad.</p>
        </div>
    </div>
</section>

<!-- Todos los Servicios -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $servicios_completos = [
                [
                    'icono' => 'fa-satellite-dish',
                    'titulo' => 'Instalación Starlink',
                    'descripcion' => 'Configuración profesional de Starlink Residencial y Móvil para conexión en zonas remotas.',
                    'detalles' => 'Instalamos y configuramos tu kit Starlink para obtener el máximo rendimiento. Incluye orientación de antena, configuración de red y pruebas de velocidad.',
                    'modal_id' => 'starlink-modal'
                ],
                [
                    'icono' => 'fa-signal',
                    'titulo' => 'Repetidores Celular',
                    'descripcion' => 'Amplificamos la señal móvil en áreas con poca cobertura.',
                    'detalles' => 'Sistemas de repetidores certificados para todas las bandas de frecuencia. Mejora hasta 5x la intensidad de señal en tu propiedad.',
                    'modal_id' => 'repetidores-modal'
                ],
                [
                    'icono' => 'fa-video',
                    'titulo' => 'Cámaras Vigilancia',
                    'descripcion' => 'Sistemas de seguridad con monitoreo remoto 24/7.',
                    'detalles' => 'Instalación de cámaras IP de alta definición con almacenamiento en la nube. Notificaciones en tiempo real de movimiento.',
                    'modal_id' => 'camaras-modal'
                ],
                [
                    'icono' => 'fa-laptop',
                    'titulo' => 'Mantenimiento de PCs',
                    'descripcion' => 'Reparación y optimización de computadoras y laptops.',
                    'detalles' => 'Diagnóstico gratuito. Limpieza interna, actualización de hardware, instalación de software y optimización de sistemas.',
                    'modal_id' => 'pcs-modal'
                ],
                [
                    'icono' => 'fa-wifi',
                    'titulo' => 'Redes WiFi Mesh',
                    'descripcion' => 'Solución para eliminar zonas muertas en grandes espacios.',
                    'detalles' => 'Diseño e implementación de redes mesh profesionales. Cobertura uniforme en toda tu propiedad sin pérdida de señal.',
                    'modal_id' => 'wifi-modal'
                ],
                [
                    'icono' => 'fa-user-tie',
                    'titulo' => 'Consultoría IT',
                    'descripcion' => 'Soluciones personalizadas para tu negocio o hogar.',
                    'detalles' => 'Análisis de necesidades tecnológicas y diseño de soluciones a medida. Asesoramiento profesional para optimizar tu infraestructura.',
                    'modal_id' => 'consultoria-modal'
                ],
                [
                    'icono' => 'fa-passport',
                    'titulo' => 'Agendado de Citas de Visa',
                    'descripcion' => 'Asistencia para agendar tu cita de visa correctamente.',
                    'detalles' => 'Te asistimos paso a paso para programar correctamente tu cita de visa estadounidense, incluyendo llenado del DS-160, creación de perfil, y selección de fechas disponibles.',
                    'modal_id' => 'visa-modal'
                ],
                [
                    'icono' => 'fa-file-alt',
                    'titulo' => 'Documentación para Pasaporte',
                    'descripcion' => 'Guía completa sobre documentos para pasaporte.',
                    'detalles' => 'Te orientamos sobre los documentos necesarios para tramitar tu pasaporte mexicano, con revisión previa y preparación para la cita.',
                    'modal_id' => 'pasaporte-modal'
                ],
                [
                    'icono' => 'fa-user-cog',
                    'titulo' => 'Asesoría Personalizada',
                    'descripcion' => 'Soluciones a medida para proyectos o necesidades especiales.',
                    'detalles' => 'Si tienes un caso particular o un proyecto especial, podemos ayudarte a desarrollar la mejor solución tecnológica y de conectividad.',
                    'modal_id' => 'asesoria-modal'
                ]
            ];

            foreach ($servicios_completos as $servicio) {
                echo '
                <div class="service-card bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-pinex-accent transition-all duration-300 group">
                    <div class="service-icon w-20 h-20 bg-pinex-primary/10 text-pinex-primary rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-500 group-hover:bg-pinex-primary group-hover:text-white">
                        <i class="fas '.$servicio['icono'].'"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-center font-title text-pinex-dark group-hover:text-pinex-primary transition-colors">'.$servicio['titulo'].'</h3>
                    <p class="text-gray-600 mb-4 text-center">'.$servicio['descripcion'].'</p>
                    <div class="text-center mt-6">
                        <button onclick="openModal(\''.$servicio['modal_id'].'\')" class="text-pinex-primary hover:text-pinex-primary/80 font-medium inline-flex items-center group-hover:underline cursor-pointer">
                            Más detalles <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Modales de Servicios -->
<?php foreach ($servicios_completos as $servicio): ?>
<div id="<?php echo $servicio['modal_id']; ?>" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" role="dialog" aria-labelledby="titulo-<?php echo $servicio['modal_id']; ?>" tabindex="-1">
    <div class="modal-content bg-white rounded-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 id="titulo-<?php echo $servicio['modal_id']; ?>" class="text-2xl font-bold font-title text-pinex-primary"><?php echo $servicio['titulo']; ?></h3>
                <button onclick="closeModal('<?php echo $servicio['modal_id']; ?>')" class="text-gray-500 hover:text-pinex-primary">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex items-center justify-center">
                    <div class="bg-pinex-primary/10 text-pinex-primary rounded-2xl p-6 text-5xl w-32 h-32 flex items-center justify-center">
                        <i class="fas <?php echo $servicio['icono']; ?>"></i>
                    </div>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-700 mb-4"><?php echo $servicio['detalles']; ?></p>
                    <div class="mt-6">
                        <a href="contacto.php" class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-colors mr-4">
                            <i class="fas fa-envelope mr-2"></i> Consultar
                        </a>
                        <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%91%8B%0AMe%20interesa%20el%20servicio%20de%20<?php echo urlencode($servicio['titulo']); ?>.%20%C2%BFPodr%C3%ADan%20darme%20m%C3%A1s%20informaci%C3%B3n%3F" class="inline-block border border-pinex-accent text-pinex-accent hover:bg-pinex-accent hover:text-white font-bold py-3 px-6 rounded-full transition-colors">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php 
include 'includes/footer.php';
?>
