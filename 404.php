<?php
require_once('functions/functions.php');
$html5 = new html5('404');
$html5->bodyI();
    // Llamando al Template Superior
    require_once('templateSuperior.php');
    ////////////////////////////////////////////////////////////////////////////////
    // Columna Derecha 70%
    echo '<div class="large-9 columns">'; // Inicio 70%
        echo '<div class="row">';
            // Espacio de Recetas
            echo '<h1>404</h1>';
            echo '<h2>Pagina no Encontrada</h2>';
        echo '</div>';        
    echo '</div>'; // Fin 70%
    echo '<hr>'; 
    /////////////////////////////////////////////////////////////////////////////////
    // Llamando al Template Inferior
    require_once('templateInferior.php');    
?>
<?php
$html5->bodyF();
?>
