<?php 
$page_title = "Preguntas Frecuentes";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section FAQ -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
  <div class="absolute inset-0 bg-[url('/assets/images/faq-bg.jpg')] bg-cover bg-center opacity-30"></div>
  <div class="container mx-auto px-4 xl:px-0 relative z-10 text-center">
    <h1 class="text-4xl md:text-5xl font-bold font-title mb-4 animate-slide-up">Preguntas <span class="text-pinex-accent">Frecuentes</span></h1>
    <p class="text-xl md:text-2xl text-gray-200 animate-slide-up animate-delay-100">Encuentra respuestas a las dudas más comunes sobre nuestros servicios.</p>
  </div>
</section>

<!-- Preguntas con animaciones mejoradas -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 xl:px-0 max-w-4xl">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-pinex-dark mb-4 font-title animate-slide-up">¿Cómo podemos ayudarte?</h2>
      <p class="text-gray-600 max-w-2xl mx-auto animate-slide-up animate-delay-100">Selecciona una pregunta para ver la respuesta detallada.</p>
    </div>

    <div class="space-y-4 animate-fade-in animate-delay-200">
      
      <!-- FAQ Item 1 - Internet -->
      <div class="faq-item border border-gray-300 rounded-lg overflow-hidden transition-all duration-300 hover:border-pinex-accent hover:shadow-lg">
        <button class="faq-btn w-full text-left p-5 bg-gray-50 font-semibold flex justify-between items-center hover:bg-gray-100 transition-colors duration-300">
          <div class="flex items-center">
            <div class="bg-pinex-primary/10 text-pinex-primary rounded-full w-10 h-10 flex items-center justify-center mr-4">
              <i class="fas fa-wifi"></i>
            </div>
            <span>¿Qué cobertura tiene su servicio de internet?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform duration-300 ml-4 transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-700 bg-white border-t border-gray-100 hidden">
          <p>Ofrecemos cobertura en áreas urbanas, rurales y remotas mediante tecnologías como:</p>
          <ul class="list-disc pl-5 mt-2 space-y-1">
            <li>Starlink para conexión satelital</li>
            <li>Repetidores de señal para ampliar cobertura</li>
            <li>Enlaces inalámbricos punto a punto</li>
            <li>Conexión fibra óptica en zonas urbanas</li>
          </ul>
        </div>
      </div>

      <!-- FAQ Item 2 - Hardware -->
      <div class="faq-item border border-gray-300 rounded-lg overflow-hidden transition-all duration-300 hover:border-pinex-accent hover:shadow-lg">
        <button class="faq-btn w-full text-left p-5 bg-gray-50 font-semibold flex justify-between items-center hover:bg-gray-100 transition-colors duration-300">
          <div class="flex items-center">
            <div class="bg-pinex-primary/10 text-pinex-primary rounded-full w-10 h-10 flex items-center justify-center mr-4">
              <i class="fas fa-server"></i>
            </div>
            <span>¿Puedo comprar por mi cuenta el hardware que utilizaré?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform duration-300 ml-4 transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-700 bg-white border-t border-gray-100 hidden">
          <p>Sí, puedes adquirir el hardware por tu cuenta, pero considera que:</p>
          <ul class="list-disc pl-5 mt-2 space-y-1">
            <li>No aplicaremos garantía por fallas de fábrica o desperfectos</li>
            <li>El soporte técnico podría estar limitado</li>
            <li>Recomendamos nuestros equipos certificados para óptimo rendimiento</li>
          </ul>
          <p class="mt-3">Ofrecemos asesoría gratuita para seleccionar el equipo adecuado.</p>
        </div>
      </div>

      <!-- FAQ Item 3 - Instalación -->
      <div class="faq-item border border-gray-300 rounded-lg overflow-hidden transition-all duration-300 hover:border-pinex-accent hover:shadow-lg">
        <button class="faq-btn w-full text-left p-5 bg-gray-50 font-semibold flex justify-between items-center hover:bg-gray-100 transition-colors duration-300">
          <div class="flex items-center">
            <div class="bg-pinex-primary/10 text-pinex-primary rounded-full w-10 h-10 flex items-center justify-center mr-4">
              <i class="fas fa-clock"></i>
            </div>
            <span>¿Cuánto tiempo tarda la instalación?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform duration-300 ml-4 transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-700 bg-white border-t border-gray-100 hidden">
          <p>Nuestros tiempos de instalación varían según el servicio:</p>
          <div class="grid md:grid-cols-2 gap-4 mt-3">
            <div class="bg-gray-50 p-4 rounded-lg">
              <h4 class="font-bold text-pinex-primary">Servicios estándar</h4>
              <p>24-48 horas después de recibir los equipos</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
              <h4 class="font-bold text-pinex-primary">Servicios prioritarios</h4>
              <p>Mismo día (sujeto a disponibilidad)</p>
            </div>
          </div>
          <p class="mt-4">* Los tiempos pueden variar en temporada alta.</p>
        </div>
      </div>

      <!-- FAQ Item 4 - Cámaras -->
      <div class="faq-item border border-gray-300 rounded-lg overflow-hidden transition-all duration-300 hover:border-pinex-accent hover:shadow-lg">
        <button class="faq-btn w-full text-left p-5 bg-gray-50 font-semibold flex justify-between items-center hover:bg-gray-100 transition-colors duration-300">
          <div class="flex items-center">
            <div class="bg-pinex-primary/10 text-pinex-primary rounded-full w-10 h-10 flex items-center justify-center mr-4">
              <i class="fas fa-video"></i>
            </div>
            <span>¿Las cámaras pueden monitorearse desde el celular?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform duration-300 ml-4 transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-700 bg-white border-t border-gray-100 hidden">
          <div class="flex flex-col md:flex-row gap-6">
            <div class="md:w-1/2">
              <h4 class="font-bold text-pinex-primary mb-2">Características:</h4>
              <ul class="list-disc pl-5 space-y-1">
                <li>Acceso remoto desde cualquier dispositivo</li>
                <li>App móvil disponible para iOS y Android</li>
                <li>Notificaciones en tiempo real</li>
                <li>Grabación en la nube o local</li>
              </ul>
            </div>
            <div class="md:w-1/2">
              <h4 class="font-bold text-pinex-primary mb-2">Requisitos:</h4>
              <ul class="list-disc pl-5 space-y-1">
                <li>Conexión a internet estable</li>
                <li>Dispositivo compatible</li>
                <li>Credenciales de acceso</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ Item 5 - Mantenimiento -->
      <div class="faq-item border border-gray-300 rounded-lg overflow-hidden transition-all duration-300 hover:border-pinex-accent hover:shadow-lg">
        <button class="faq-btn w-full text-left p-5 bg-gray-50 font-semibold flex justify-between items-center hover:bg-gray-100 transition-colors duration-300">
          <div class="flex items-center">
            <div class="bg-pinex-primary/10 text-pinex-primary rounded-full w-10 h-10 flex items-center justify-center mr-4">
              <i class="fas fa-tools"></i>
            </div>
            <span>¿Qué tipo de mantenimiento ofrecen?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform duration-300 ml-4 transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-700 bg-white border-t border-gray-100 hidden">
          <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-pinex-primary/5 p-4 rounded-lg border border-pinex-primary/10">
              <h4 class="font-bold text-pinex-primary mb-2">Preventivo</h4>
              <p>Revisiones programadas para evitar fallos</p>
            </div>
            <div class="bg-pinex-primary/5 p-4 rounded-lg border border-pinex-primary/10">
              <h4 class="font-bold text-pinex-primary mb-2">Correctivo</h4>
              <p>Solución de problemas y reparaciones</p>
            </div>
            <div class="bg-pinex-primary/5 p-4 rounded-lg border border-pinex-primary/10">
              <h4 class="font-bold text-pinex-primary mb-2">Remoto</h4>
              <p>Monitoreo 24/7 y actualizaciones</p>
            </div>
          </div>
          <p class="mt-4">Ofrecemos planes de mantenimiento adaptados a tus necesidades.</p>
        </div>
      </div>

    </div>

    <!-- Sección de contacto adicional -->
    <div class="mt-16 p-8 bg-gray-50 rounded-xl border border-gray-200 text-center animate-fade-in">
      <h3 class="text-2xl font-bold text-pinex-dark mb-4">¿No encontraste tu respuesta?</h3>
      <p class="text-gray-600 mb-6">Estamos aquí para ayudarte. Contáctanos directamente.</p>
      <a href="contacto.php" class="inline-block bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-envelope mr-2"></i> Contactar Soporte
      </a>
    </div>
  </div>
</section>

<!-- Script para acordeón mejorado -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-btn');
    const content = item.querySelector('.faq-content');
    const icon = btn.querySelector('i');
    
    btn.addEventListener('click', () => {
      // Alternar el item actual
      const isOpen = content.classList.toggle('hidden');
      
      // Rotar el ícono
      if(isOpen) {
        icon.classList.remove('rotate-180');
      } else {
        icon.classList.add('rotate-180');
      }
      
      // Cerrar otros items
      faqItems.forEach(otherItem => {
        if(otherItem !== item) {
          otherItem.querySelector('.faq-content').classList.add('hidden');
          otherItem.querySelector('.faq-btn i').classList.remove('rotate-180');
        }
      });
    });
  });
});
</script>

<style>
.rotate-180 {
  transform: rotate(180deg);
}
</style>

<?php 
include 'includes/footer.php';
?>