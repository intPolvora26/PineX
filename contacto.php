<?php 
$page_title = "Contacto";
$current_page = "contacto";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section - Mismas animaciones que inicio -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/images/contact-bg.jpg')] bg-cover bg-center opacity-30 animate-zoom-in"></div>
    <div class="container mx-auto px-4 xl:px-0 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-title leading-tight animate-slide-up">
                Contáctanos
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up animate-delay-100">
                Estamos disponibles para atenderte directamente
            </p>
        </div>
    </div>
</section>

<!-- Sección de Contacto - Mismo estilo que servicios en inicio -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <!-- Tarjeta WhatsApp -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-pinex-accent transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg cursor-pointer group animate-slide-up animate-delay-200">
                <div class="w-20 h-20 bg-pinex-primary/10 text-green-500 rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-500 group-hover:bg-pinex-primary group-hover:text-white">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-center font-title text-pinex-dark group-hover:text-pinex-primary transition-colors">WhatsApp</h3>
                <p class="text-gray-600 mb-4 text-center">Conversa con nosotros en tiempo real</p>
                <div class="text-center mt-6">
                    <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" 
                       class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        <i class="fab fa-whatsapp mr-2"></i> Abrir Chat
                    </a>
                </div>
            </div>
            
            <!-- Tarjeta Llamada -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-pinex-accent transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg cursor-pointer group animate-slide-up animate-delay-300">
                <div class="w-20 h-20 bg-pinex-primary/10 text-blue-500 rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-500 group-hover:bg-pinex-primary group-hover:text-white">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-center font-title text-pinex-dark group-hover:text-pinex-primary transition-colors">Llámanos</h3>
                <p class="text-gray-600 mb-4 text-center">Disponibles en horario comercial</p>
                <div class="text-center mt-6">
                    <a href="tel:<?= PHONE_NUMBER ?>" 
                       class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        <i class="fas fa-phone-alt mr-2"></i> <?= PHONE_NUMBER ?>
                    </a>
                </div>
            </div>
            
            <!-- Tarjeta Email (full width) -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-pinex-accent transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg cursor-pointer group md:col-span-2 animate-slide-up animate-delay-400">
                <div class="w-20 h-20 bg-pinex-primary/10 text-pinex-accent rounded-2xl flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-500 group-hover:bg-pinex-primary group-hover:text-white">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-center font-title text-pinex-dark group-hover:text-pinex-primary transition-colors">Correo Electrónico</h3>
                <p class="text-gray-600 mb-4 text-center">Responderemos en menos de 24 horas</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:<?= CONTACT_EMAIL ?>" 
                       class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        <i class="fas fa-envelope mr-2"></i> <?= CONTACT_EMAIL ?>
                    </a>
                    <a href="mailto:<?= SUPPORT_EMAIL ?>" 
                       class="inline-block bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        <i class="fas fa-headset mr-2"></i> Soporte Técnico
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa y Dirección - Mismo estilo que inicio -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="max-w-4xl mx-auto text-center mb-12 animate-slide-up">
            <h2 class="text-3xl font-bold mb-4 font-title text-pinex-dark">Visítanos</h2>   
            <h3 class="text-2xl font-semibold mb-1 text-pinex-dark">De lunes a viernes</h3>
            <h4 class="text-xl mb-4 text-pinex-dark">En un horario de 9:00 a 14:00 hrs</h4>
            <p class="text-gray-600 max-w-2xl mx-auto animate-slide-up animate-delay-100"><?= ADDRESS ?></p>
        </div>
        
        <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-xl overflow-hidden animate-fade-in animate-delay-200">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116.6260227343253!2d-104.60668805142113!3d19.71827391352989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424f5846b822945%3A0xafedbb593703742a!2sC.%20Abasolo%20141%2C%2048800%20Villa%20Purificaci%C3%B3n%2C%20Jal.!5e0!3m2!1sen!2smx!4v1751596288099!5m2!1sen!2smx"
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                class="rounded-xl shadow-sm">
            </iframe>
        </div>
    </div>
</section>

<?php 
include 'includes/footer.php';
?>

<!-- src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.415837386991!2d-103.3938209240349!3d20.68878198085711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDQxJzE5LjYiTiAxMDPCsDIzJzM0LjkiVw!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" 
