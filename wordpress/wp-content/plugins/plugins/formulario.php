<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["guardar_registro"])) {
    // Obtener los valores enviados desde el formulario
    $titulo = sanitize_text_field($_POST["titulo"]);
    $descripcion = sanitize_text_field($_POST["descripcion"]);
    $codigo = sanitize_textarea_field($_POST["codigo"]);
    $urlImagen = esc_url($_POST["urlImagen"]); // Nueva línea para obtener la URL de la imagen

    // Verificar si los campos no están vacíos (puedes agregar más validaciones según tus necesidades)
    if (empty($titulo) || empty($descripcion) || empty($codigo) || empty($urlImagen)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Conectar a la base de datos
        global $wpdb;
        $tabla = $wpdb->prefix . "talleres"; // Reemplaza "mi_tabla" con el nombre de tu tabla personalizada

        // Insertar los datos en la tabla
        $wpdb->insert(
            $tabla,
            array(
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'codigo' => $codigo,
                'url_imagen' => $urlImagen // Nuevo campo para la URL de la imagen
            ),
            array(
                '%s',
                '%s',
                '%s',
                '%s'
            )
        );

        echo "Registro guardado correctamente.";
    }
}
?>

<h1>Formulario de Datos</h1>
<form action="" method="post">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required>
    <br><br>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
    <br><br>

    <label for="codigo">Código:</label>
    <textarea id="codigo" name="codigo" rows="6" required></textarea>
    <br><br>

    <label for="urlImagen">URL de la Imagen:</label>
    <input type="url" id="urlImagen" name="urlImagen" required>
    <br><br>

    <input type="submit" name="guardar_registro" value="Aceptar">
</form>
