<?php
require_once('functions/functions.php');
$html5 = new html5('Mis Recetas');
$html5->bodyI();
    // Llamando al Template Superior
    require_once('templateSuperior.php');
    ////////////////////////////////////////////////////////////////////////////////
    // Columna Derecha 70%
    echo '<div class="large-9 columns">'; // Inicio 70%
        echo '<div class="row">';
            // Espacio de Recetas
            
            // Menu de las Categorias
            $menu_categoria = new MenuCategoria('recetas');
            
        echo '</div>'; 
           
            
            
            $categoria = new CategoriaBloque();
            ?>
            
            <div id="myModal"  class="reveal-modal medium " data-reveal>
                

                  <ul style="min-height:250px;" class="example-orbit-content verde1" data-orbit>
                      <li data-orbit-slide="headline-1"> <div><img src="img/slider/dino2.jpg" alt=""> </div> </li> 
                      <li data-orbit-slide="headline-2"> <div><img src="img/slider/dino3.jpg" alt=""> </div> </li>
                      <li data-orbit-slide="headline-3"> <div><img src="img/slider/dino4.jpg" alt=""> </div> </li> 
                       
                </ul>

                
                
          
                <a class="close-reveal-modal">&#215;</a>
            </div>
            
            <div id="myVideoModal" class="reveal-modal large" data-reveal="">
            <h2>Lorem ipsum dolor sit amet.</h2>
        <div class="flex-video">
        <iframe width="420" height="315" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/aiBt44rrslw">
            #document
        </iframe>
    </div>
    <a class="close-reveal-modal">&#215;</a>

</div>
            
            <?php
            //$categoria->CatBloquePpal ($ruta_img, $titulo, $descripcion);
            // Bloque Principal
            $categoria->CatBloquePpal ('img/recetas-de-cocina.jpg', $_GET['id'], 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nulla exercitationem saepe earum facere quasi quaerat aut! Deserunt, exercitationem labore aperiam ut quibusdam ipsa distinctio consequatur adipisci optio id neque. Lorem ipsum dolor sit amet, consectetur adipisicing elit.','clipboard-notes');
            
    echo '</div>'; // Fin 70%
    echo '<hr>'; 
    /////////////////////////////////////////////////////////////////////////////////
    // Llamando al Template Inferior
    require_once('templateInferior.php');    
?>
<?php
$html5->bodyF();
?>
