<?php
// ==============================================
// CONFIGURACIÓN DEL ENTORNO (cambiar según necesidad)
// ==============================================
define('ENVIRONMENT', 'development'); // 'development' o 'production'

// ==============================================
// CONFIGURACIÓN BÁSICA DEL SITIO
// ==============================================
define('SITE_NAME', 'PineX Networks');
define('SITE_URL', (ENVIRONMENT === 'development') ? 'http://localhost' : 'https://www.pinex.com.mx');
define('SITE_TIMEZONE', 'America/Mexico_City');
define('ADMIN_EMAIL', 'admin@pinex.com.mx');
define('CURRENT_YEAR', date('Y'));

// ==============================================
// CONFIGURACIÓN DE CONTACTOS
// ==============================================
define('CONTACT_EMAIL', 'contacto@pinex.com.mx');
define('SALES_EMAIL', 'ventas@pinex.com.mx');
define('SUPPORT_EMAIL', 'soporte@pinex.com.mx');
define('WHATSAPP_NUMBER', '523322058309');
define('PHONE_NUMBER', '+52 33 2205 8309');
define('ADDRESS', 'C. Abasolo #141, Villa Purificación,, Jalisco');

// ==============================================
// CONFIGURACIÓN DE BASE DE DATOS
// ==============================================
define('DB_ENABLED', true);
if (ENVIRONMENT === 'development') {
    // Configuración para desarrollo local
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'pinex_db');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    // Configuración para producción
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'pinex_prod_db');
    define('DB_USER', 'pinex_user');
    define('DB_PASS', 'P@ssw0rdS3gur0!');
}
define('DB_CHARSET', 'utf8mb4');

// ==============================================
// CONFIGURACIÓN DE EMAIL
// ==============================================
define('SMTP_ENABLED', true);
if (ENVIRONMENT === 'development') {
    // Configuración para desarrollo
    define('SMTP_HOST', 'localhost');
    define('SMTP_USER', '');
    define('SMTP_PASS', '');
    define('SMTP_PORT', 1025); // MailHog
    define('SMTP_SECURE', '');
    
    // Forzar el guardado de emails en archivo
    ini_set('SMTP', 'localhost');
    ini_set('smtp_port', 1025);
    ini_set('sendmail_path', '/usr/sbin/sendmail -t -i');
} else {
    // Configuración para producción
    define('SMTP_HOST', 'mail.pinex.com.mx');
    define('SMTP_USER', 'notificaciones@pinex.com.mx');
    define('SMTP_PASS', 'EmailP@ssw0rd');
    define('SMTP_PORT', 465);
    define('SMTP_SECURE', 'ssl');
}

// ==============================================
// CONFIGURACIÓN DE SEGURIDAD
// ==============================================
define('CSRF_PROTECTION', true);
define('MAX_LOGIN_ATTEMPTS', 5);
define('MAINTENANCE_MODE', false);

// Configuración de reCAPTCHA
if (ENVIRONMENT === 'development') {
    // Claves de prueba de Google
    define('RECAPTCHA_SITE_KEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI');
    define('RECAPTCHA_SECRET_KEY', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe');
} else {
    // Claves reales para producción
    define('RECAPTCHA_SITE_KEY', '6LcTuZApAAAAAKX...');
    define('RECAPTCHA_SECRET_KEY', '6LcTuZApAAAAAL...');
}

define('GA_MEASUREMENT_ID', 'G-XXXXXX');

// ==============================================
// RUTAS DEL SISTEMA
// ==============================================
define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
define('UPLOADS_DIR', ROOT_PATH . '/uploads');
define('LOGS_DIR', ROOT_PATH . '/logs');

// ==============================================
// CONFIGURACIÓN DE ERRORES
// ==============================================
if (ENVIRONMENT === 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    ini_set('log_errors', 1);
    ini_set('error_log', LOGS_DIR . '/php_errors.log');
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
    ini_set('log_errors', 1);
    ini_set('error_log', LOGS_DIR . '/php_errors.log');
}

// ==============================================
// FUNCIONES GLOBALES
// ==============================================
function site_url($path = '') {
    return rtrim(SITE_URL, '/') . '/' . ltrim($path, '/');
}

function asset_url($file) {
    return site_url('assets/' . ltrim($file, '/'));
}

function redirect($url, $permanent = false) {
    header('Location: ' . site_url($url), true, $permanent ? 301 : 302);
    exit();
}

// Iniciar sesión segura
if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_secure' => (ENVIRONMENT === 'production'),
        'cookie_httponly' => true,
        'use_strict_mode' => true
    ]);
}

// Autocarga básica de clases (opcional)
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../classes/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});