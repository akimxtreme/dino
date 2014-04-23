<?php
require_once('functions/functions.php');
$html5 = new html5('Mis Videos');
$html5->bodyI();
    // Llamando al Template Superior
    require_once('templateSuperior.php');
    ////////////////////////////////////////////////////////////////////////////////
    // Columna Derecha 70%
    echo '<div class="large-9 columns">'; // Inicio 70%
        echo '<div class="row">';
            // Espacio de Recetas
            
            // Menu de las Categorias
            $menu_categoria = new MenuCategoria('videos');
            
        echo '</div>'; 
            $categoria = new CategoriaBloque();
            //$categoria->CatBloquePpal ($ruta_img, $titulo, $descripcion);
            // Bloque Principal
            $categoria->CatBloquePpal ('img/programa_de_cocina.jpg', 'Programa de Cocina', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nulla exercitationem saepe earum facere quasi quaerat aut! Deserunt, exercitationem labore aperiam ut quibusdam ipsa distinctio consequatur adipisci optio id neque. Lorem ipsum dolor sit amet, consectetur adipisicing elit.','video');
            // Bloques Secundarios
            //$categoria->CatBloqueSec($ruta_img, $titulo, $descripcion,$ruta_link);            
            $categoria->CatBloqueSec('img/cat_entradas.jpg', 'Entradas','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nulla exercitationem saepe earum facere quasi quaerat aut! Lorem ipsum dolor.','entradas','video');
            $categoria->CatBloqueSec('img/cat_ensalada.jpg', 'Ensaladas','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, sequi quasi quae asperiores beatae dolorem voluptatem consequatur vero reiciendis deserunt! Ipsa, iusto quia earum accusantium distinctio tenetur adipisci optio eligendi.','ensaladas','video');
            $categoria->CatBloqueSec('img/cat_sopas-y-cremas.jpg', 'Sopas y Cremas','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, ab, quaerat, ea ut perspiciatis sunt natus harum fugit reiciendis et necessitatibus sed assumenda.','sopas-y-cremas','video');
             $categoria->CatBloqueSec('img/cat_pasapalos.png', 'Pasapalos','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, aliquam, eos, tenetur repellat esse molestias totam voluptate qui doloremque nulla recusandae pariatur laudantium temporibus voluptas.','pasapalos','video');
             $categoria->CatBloqueSec('img/cat_pastasArroces.jpg', 'Pastas y Arroces','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, sed eaque aspernatur optio sint tenetur maiores praesentium maxime esse dicta perferendis voluptatibus numquam!','pastas-y-arroces','video');
             $categoria->CatBloqueSec('img/cat_carnes.jpg', 'Carnes','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, rerum, quibusdam, voluptates, minima dolores quis nemo officia ea magni id unde quo esse fuga alias eveniet veritatis iste laudantium non.','carnes','video');
             $categoria->CatBloqueSec('img/cat_aves.jpg', 'Aves','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, odit, iusto atque ipsa at similique perferendis velit hic tempore accusamus saepe voluptatum rerum nisi architecto quaerat magni est commodi corporis.','aves','video');
             $categoria->CatBloqueSec('img/cat_pescadosMariscos.jpg', 'Pescados y Mariscos','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, inventore, accusantium eveniet doloremque esse incidunt quidem animi dignissimos ratione soluta rerum minima porro illum minus est dolor vel eligendi reprehenderit.','pescados-y-mariscos','video');
             $categoria->CatBloqueSec('img/cat_postres.jpg', 'Postres','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, amet, ab odio incidunt animi dolor laudantium eius eaque provident voluptatum.','postres','video');
             $categoria->CatBloqueSec('img/cat_desayunos.jpg', 'Desayunos','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.','desayunos','video');
             $categoria->CatBloqueSec('img/cat_almuerzos.jpg', 'Almuerzos','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.','almuerzos','video');
             $categoria->CatBloqueSec('img/cat_cenas.jpg', 'Cenas','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.','recetas/cenas');
             $categoria->CatBloqueSec('img/cat_navidenias.jpg', 'Navideñas','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt facere dolor sit minus minima.','navidad','video');              
    echo '</div>'; // Fin 70%
    echo '<hr>'; 
    /////////////////////////////////////////////////////////////////////////////////
    // Llamando al Template Inferior
    require_once('templateInferior.php');    
?>
<?php
$html5->bodyF();
?>
