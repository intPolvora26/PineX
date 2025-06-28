document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Actualizar estado ARIA
            this.setAttribute('aria-expanded', !isExpanded);
            
            // Alternar visibilidad del menú
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('opacity-0');
            mobileMenu.classList.toggle('-translate-y-full');
            mobileMenu.classList.toggle('translate-y-0');
            mobileMenu.classList.toggle('opacity-100');
            
            // Cambiar ícono
            const icon = this.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
            
            // Bloquear/desbloquear scroll del body
            document.body.style.overflow = isExpanded ? 'auto' : 'hidden';
        });
        
        // Cerrar menú al hacer clic en un enlace
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuBtn.setAttribute('aria-expanded', 'false');
                mobileMenu.classList.add('hidden', 'opacity-0', '-translate-y-full');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100');
                menuBtn.querySelector('i')?.classList.replace('fa-times', 'fa-bars');
                document.body.style.overflow = 'auto';
            });
        });
    }
});