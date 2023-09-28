<?php
/*
Plugin Name: Mi Plugin Personalizado
Description: Un plugin personalizado para guardar datos en una tabla personalizada.
Version: 1.0
*/

// Registrar el shortcode para mostrar el formulario
function mostrar_formulario() {
    ob_start();
    include 'formulario.php'; // Coloca aquí el nombre de tu archivo de formulario
    return ob_get_clean();
}
add_shortcode('mi_formulario', 'mostrar_formulario');

// Definir la función para crear la tabla personalizada
function crear_tabla_personalizada() {
    global $wpdb;
    $tabla_nombre = $wpdb->prefix . 'talleres'; // Reemplaza 'mi_tabla' con el nombre de tu tabla
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla_nombre (
        id INT NOT NULL AUTO_INCREMENT,
        titulo VARCHAR(255) NOT NULL,
        descripcion TEXT NOT NULL,
        codigo TEXT NOT NULL,
        url_imagen VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Registrar la función para ejecutar al activar el plugin
register_activation_hook(__FILE__, 'crear_tabla_personalizada');
?>
