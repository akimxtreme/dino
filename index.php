<?php
require_once('functions/functions.php');
$html5 = new html5();
$html5->bodyI();

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
    
    // Columna Derecha 70%
    echo '<div class="large-9 columns">'; // Inicio 70%
        ?>
        <div class="row">
            
  <div id="usuario" class="large-7 columns large-offset-6">
    <ul class="button-group">  
    <li><a class="button tiny user" href="#" data-dropdown="sesion" data-options="align:left" ><i class="fi-torso"></i> INICIO DE SESIÓN</a></li>
        <div id="sesion" data-dropdown-content class="f-dropdown content small">
          <div class="row">
              <form data-abide action="#" class="large-12 columns text-left">
                  <fieldset>
                      <legend><i class="fi-torso"></i> Iniciar Sesión</legend>
                      <div class="large-12 columns">
                          <label for="correo">Correo Electrónio</label>
                          <input name="correo" type="text">
                      </div>
                      <div class="large-12 columns">
                          <label for="contrasenia">Contraseña</label>
                          <input type="password" name="contrasenia">
                      </div>
                      <div class="large-12 columns">
                          <button type="submit" class="large-12 columns tiny button success">Ingresar</button>
                      </div>
                      
                  </fieldset>
              </form>
          </div>
        </div>
    <li><a class="button tiny registry" href="#" data-dropdown="registro" data-options="align:left" ><i class="fi-pencil"></i> REGISTRATE COMO USUARIO</a></li>
        <div id="registro" data-dropdown-content class="f-dropdown content medium">
          <div class="row">
              <form data-abide action="#" class="large-12 columns text-left">
                  <fieldset>
                      <legend><i class="fi-pencil"></i> Registro de Usuario</legend>
                      <div class="large-12 columns correo">
                          <label for="correo">Correo Electrónio <small>requerido</small>
                          <input name="correo" id="correo" type="email" required pattern="correo">
                          </label>
                          <small class="error">Campo Obligatorio</small>
                      </div>
                      <div class="large-12 columns correo-repite">
                          <label for="correo-repite">Repita Correo <small>requerido</small>
                          <input name="correo-repite" type="email" required data-equalto="correo">
                          </label>
                          <small class="error">Campo Obligatorio</small>
                      </div>
                      <div class="large-12 columns">
                          <label for="contrasenia">Contraseña</label>
                          <input type="password" name="contrasenia" required>
                      </div>
                      <div class="large-12 columns">
                          <label for="contrasenia">Repita su Contraseña</label>
                          <input type="password" name="contrasenia" required>
                      </div>
                      <div class="large-12 columns">
                          <button type="submit" class="large-12 columns tiny button success">Registrarse</button>
                      </div>
                      
                  </fieldset>
              </form>
          </div>
        </div>
    </ul>
  </div>
        </div>
        <?php
        echo '<div class="row">';
            // Slider Principal
            $slider = new Sliders();
            $slider->sliderPrincipal();
        echo '</div>';
        //////////////////////////////////////////////////////////////////////////
        echo '<div class="row">';
            echo '<div id="ultimo" class="large-12 columns">';
                echo '<div class="row">';
                    // Ultimas Cargas Agregadas (Receta - Video - Tip)
                    $ultimasCargas = new UltimasCargas();
                    // Publicidad Derecha
                    $publicidad_derecha = new Publicidad;
                    $publicidad_derecha->publicidad_Derecha();
                echo '</div>';
            echo '</div>';
            echo '<hr>';
        echo '</div>';
        /////////////////////////////////////////////////////////////////////////
        echo '<div class="row">';
            $categoria = new Categoria();
        echo '</div>';
    echo '</div>'; // Fin 70%
    echo '<hr>';  
    
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
    //echo '<hr>';      
?>
<?php
$html5->bodyF();
?>
