<?php
//require_once('functions.php');
// Menu y Redes Sociales  
    echo '<div class="large-12 columns">';
        // Columna Izquierda 80%
        echo '<div class="large-10 columns">';
            echo '<div class="row">';            
               $menuPrincipaPie = new MenuPrincipal();            
               $menuPrincipaPie->menuPpalPie();            
            echo '</div>';
         echo '</div>';
        // Columna Derecha 20% 
        echo '<div class="large-2 columns">';
            echo '<div class="row">';
                $red_social_pie = new RedSocial();
                $red_social_pie->redSocialPie();
            echo '</div>';
        echo '</div>';
        echo '<div class="row">';
            $pie_de_pagina = new Pie();
        echo '</div>';
    echo '</div>';
    

?>