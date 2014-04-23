<?php
//require_once('functions.php');
echo '<div id="contenedor" class="row">';
    // Columna Izquierda 30%
    echo '<div class="large-3 columns">'; // Inicio 30%
        echo '<div class="row">';
            $logo = new Logo();
            $menuPrincipal = new MenuPrincipal();
            $menuPrincipal->menuPpal();         
        echo '</div>';
        echo '<div class="row">';
            $map = new MapGoogle();
        echo '</div>';
        echo '<div class="row">';
            $red_social = new RedSocial();
            $red_social->redSocialPpal();
        echo '</div>';
        echo '<div class="row">';
            $contadorVisitas = new ContadorVisitas();
        echo '</div>';
        echo '<div class="row">';
            $publicidad = new Publicidad();
            $publicidad->publicidad_Izquierda();
        echo '</div>';
    echo '</div>'; // Fin 30% 
?>