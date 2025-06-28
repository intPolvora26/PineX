<?php 
$page_title = "Preguntas Frecuentes";
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero FAQ -->
<section class="pt-32 pb-20 bg-pinex-dark text-white relative overflow-hidden">
  <div class="absolute inset-0 bg-[url('/assets/images/hero-bg.jpg')] bg-cover bg-center opacity-30"></div>
  <div class="container mx-auto px-4 xl:px-0 relative z-10 text-center">
    <h1 class="text-4xl md:text-5xl font-bold font-title mb-4">¿Tienes <span class="text-pinex-accent">Dudas?</span></h1>
    <p class="text-xl md:text-2xl text-gray-200">Aquí respondemos las preguntas más comunes sobre nuestros servicios.</p>
  </div>
</section>

<!-- Preguntas -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 xl:px-0 max-w-4xl">
    <h2 class="text-3xl font-bold text-center text-pinex-dark mb-10 font-title">Preguntas Frecuentes</h2>

    <div class="space-y-4">
      
      <!-- FAQ Item 1 -->
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button class="w-full text-left p-5 bg-gray-100 font-semibold flex justify-between items-center toggle-faq">
          ¿Qué cobertura tiene su servicio de internet?
          <i class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <div class="hidden p-5 text-gray-700 bg-white">
          Ofrecemos cobertura en áreas urbanas, rurales y remotas mediante tecnologías como Starlink, repetidores y enlaces inalámbricos.
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button class="w-full text-left p-5 bg-gray-100 font-semibold flex justify-between items-center toggle-faq">
          ¿Puedo comprar por mi cuentan el hardware que utilizare?
          <i class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <div class="hidden p-5 text-gray-700 bg-white">
          Sí, mas en ese caso, no se podra aplicar una garantia si existe alguna falla de fabrica o un desperfecto con el equipo.
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button class="w-full text-left p-5 bg-gray-100 font-semibold flex justify-between items-center toggle-faq">
          ¿Cuánto tiempo tarda la instalación?
          <i class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <div class="hidden p-5 text-gray-700 bg-white">
          Por lo general, la instalación se realiza dentro de 24 a 48 horas después de la recibir de nuestros proveedores los equipos que se instalaran.
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button class="w-full text-left p-5 bg-gray-100 font-semibold flex justify-between items-center toggle-faq">
          ¿Las cámaras pueden monitorearse desde el celular?
          <i class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <div class="hidden p-5 text-gray-700 bg-white">
          Sí, puedes acceder a las cámaras desde cualquier parte del mundo usando una app móvil compatible con nuestros sistemas minetras tengan internet.
        </div>
      </div>

      <!-- FAQ Item 5 -->
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button class="w-full text-left p-5 bg-gray-100 font-semibold flex justify-between items-center toggle-faq">
          ¿Qué tipo de mantenimiento ofrecen?
          <i class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <div class="hidden p-5 text-gray-700 bg-white">
          Ofrecemos mantenimiento preventivo y correctivo, además de monitoreo remoto según el servicio contratado.
        </div>
      </div>


      <!-- Copia este bloque para agregar más -->
      <!--
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button class="w-full text-left p-5 bg-gray-100 font-semibold flex justify-between items-center toggle-faq">
          ¿Tu pregunta aquí?
          <i class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <div class="hidden p-5 text-gray-700 bg-white">
          Respuesta aquí.
        </div>
      </div>
      -->

    </div>
  </div>
</section>

<!-- Script para acordeón -->
<script>
  document.querySelectorAll('.toggle-faq').forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector('i');
      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });
</script>

<?php 
include 'includes/footer.php';
?>
