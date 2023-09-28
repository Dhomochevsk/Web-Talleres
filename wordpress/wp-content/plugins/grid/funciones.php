<?php
// Definir una función para mostrar la cuadrícula
function mostrar_cuadricula_talleres() {
    // Obtener los talleres de la base de datos
    global $wpdb;
    $tabla = $wpdb->prefix . 'talleres';
    $talleres = $wpdb->get_results("SELECT * FROM $tabla");

    // Inicializar una variable para el contenido de la cuadrícula
    $output = '';

    // Comprobar si se encontraron talleres
    if ($talleres) {
        $output .= '<div class="cuadricula-talleres" style="padding: 50px;">'; // Agregamos el padding aquí
        
        // Iterar a través de los talleres y mostrarlos en la cuadrícula
        foreach ($talleres as $taller) {
            $output .= '<div class="taller">';
            $output .= '<h2>' . esc_html($taller->titulo) . '</h2>';
            $output .= '<p>' . esc_html($taller->descripcion) . '</p>';
            $output .= '<p>' . esc_html($taller->codigo) . '</p>';
            $output .= '<img src="' . esc_url($taller->url_imagen) . '" alt="' . esc_attr($taller->titulo) . '">';
            $output .= '</div>';
        }
        
        $output .= '</div>';
    } else {
        $output .= 'No se encontraron talleres.';
    }

    // Imprimir el contenido de la cuadrícula
    echo $output;
}

// Registrar el shortcode para mostrar la cuadrícula
add_shortcode('cuadricula_talleres', 'mostrar_cuadricula_talleres');
?>
