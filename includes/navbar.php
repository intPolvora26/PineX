<nav id="navbar" class="fixed w-full z-50 transition-all duration-500 bg-pinex-dark/90 backdrop-blur-md">
    <div class="container mx-auto px-4 xl:px-0 py-3 flex justify-between items-center">
        <a href="index.php" class="flex items-center space-x-2">
            <img src="assets/images/Pina.png" alt="<?php echo SITE_NAME; ?>" class="h-10">
            <span class="text-2xl font-bold text-white font-title">PineX</span>
        </a>
        
        <div class="hidden lg:flex items-center space-x-8">
            <a href="index.php" class="nav-link text-white hover:text-pinex-accent transition-colors duration-300 relative group">
                Inicio
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pinex-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="servicios.php" class="nav-link text-white hover:text-pinex-accent transition-colors duration-300 relative group">
                Servicios
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pinex-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="contacto.php" class="nav-link text-white hover:text-pinex-accent transition-colors duration-300 relative group">
                Contacto
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pinex-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
             <a href="FAQ.php" class="nav-link text-white hover:text-pinex-accent transition-colors duration-300 relative group">
                Dudas
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pinex-accent transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="nosotros.php" class="nav-link text-white hover:text-pinex-accent transition-colors duration-300 relative group">
                Quienes somos?
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-pinex-accent transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" class="bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-2 px-5 rounded-full transition-all flex items-center space-x-2">
                <i class="fab fa-whatsapp"></i>
                <span>WhatsApp</span>
            </a>
        </div>
        
        <button id="menu-btn" class="lg:hidden text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-pinex-dark/95 backdrop-blur-md absolute w-full px-4 pb-4 pt-2">
        <a href="index.php" class="block py-3 text-white hover:text-pinex-accent border-b border-gray-800 transition-colors">Inicio</a>
        <a href="servicios.php" class="block py-3 text-white hover:text-pinex-accent border-b border-gray-800 transition-colors">Servicios</a>
        <a href="contacto.php" class="block py-3 text-white hover:text-pinex-accent border-b border-gray-800 transition-colors">Contacto</a>
        <a href="FAQ.php" class="block py-3 text-white hover:text-pinex-accent border-b border-gray-800 transition-colors">Dudas</a>
        <a href="nosotros.php" class="block py-3 text-white hover:text-pinex-accent border-b border-gray-800 transition-colors">Quienes somos?</a>
        <div class="pt-4">
            <a href="https://wa.me/523322058309?text=Hola%20%F0%9F%98%81%0AMe%20interesa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios%20de%20conectividad.%20%C2%BFPodr%C3%ADan%20asesorarme%2C%20por%20favor%3F" class="bg-pinex-accent hover:bg-pinex-accent/90 text-white font-bold py-3 px-5 rounded-full transition-all flex items-center justify-center space-x-2 w-full">
                <i class="fab fa-whatsapp"></i>
                <span>Contactar por WhatsApp</span>
            </a>
        </div>
    </div>
</nav>