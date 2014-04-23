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
            // Bloques Secundarios
            //$categoria->CatBloqueReceta($ruta_img, $titulo, $descripcion,$ruta_link);            
            $categoria->CatBloqueReceta('img/cat_entradas.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nulla exercitationem saepe earum facere quasi quaerat aut! Lorem ipsum dolor.',$_GET['id'],'receta');
            $categoria->CatBloqueReceta('img/cat_ensalada.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, sequi quasi quae asperiores beatae dolorem voluptatem consequatur vero reiciendis deserunt! Ipsa, iusto quia earum accusantium distinctio tenetur adipisci optio eligendi.',$_GET['id'],'receta');
            $categoria->CatBloqueReceta('img/cat_sopas-y-cremas.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, ab, quaerat, ea ut perspiciatis sunt natus harum fugit reiciendis et necessitatibus sed assumenda.','sopas-y-cremas','receta');
             $categoria->CatBloqueReceta('img/cat_pasapalos.png', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, aliquam, eos, tenetur repellat esse molestias totam voluptate qui doloremque nulla recusandae pariatur laudantium temporibus voluptas.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_pastasArroces.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, sed eaque aspernatur optio sint tenetur maiores praesentium maxime esse dicta perferendis voluptatibus numquam!',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_carnes.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, rerum, quibusdam, voluptates, minima dolores quis nemo officia ea magni id unde quo esse fuga alias eveniet veritatis iste laudantium non.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_aves.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, odit, iusto atque ipsa at similique perferendis velit hic tempore accusamus saepe voluptatum rerum nisi architecto quaerat magni est commodi corporis.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_pescadosMariscos.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, inventore, accusantium eveniet doloremque esse incidunt quidem animi dignissimos ratione soluta rerum minima porro illum minus est dolor vel eligendi reprehenderit.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_postres.jpg', 'Postres','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, amet, ab odio incidunt animi dolor laudantium eius eaque provident voluptatum.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_desayunos.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_almuerzos.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_cenas.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.',$_GET['id'],'receta');
             $categoria->CatBloqueReceta('img/cat_navidenias.jpg', 'Título de la Receta de '.$_GET['id'],'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.',$_GET['id'],'receta');              
    echo '</div>'; // Fin 70%
    echo '<hr>'; 
    /////////////////////////////////////////////////////////////////////////////////
    // Llamando al Template Inferior
    require_once('templateInferior.php');    
?>
<?php
$html5->bodyF();
?>
