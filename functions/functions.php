<?php
/*
Creado por: Ing. Domingo Ilarreta
Fecha: 15-03-2014
Email: webmetropoli.company@gmail.com
Website: http://www.webmetropoli.com
*/
class html5 {
    // Atributos
    //public $rutaGlobal = "http://127.0.0.1/proyectos/dino/";
    public $rutaGlobal = "http://127.0.0.1/proyectos/dino/";
    public $title_page;
    // Métodos
    public function __construct($title_page){
    $this->title_page = $title_page;        
        echo '<!doctype html>';
        echo '<html lang="es">';
            echo '<head>';  
                echo '<base href="'.$this->rutaGlobal.'"/>';
                echo '<meta charset="UTF-8">';
                echo '<meta name="author" content="Domingo José Ilarreta Heydras">';
                echo '<meta name="reply-to" content="webmetropoli.company@gmail.com">';
                echo '<meta rev="made" href="mailto:webmetropoli.company@gmail.com">';
                echo '<meta name="description" content="Recetas, Chef, Cocina, Videos de Cocina, Tips, Vegetales, Poder de los Vegetales">';
                echo '<meta name="Keywords" content="Recetas,Chef,Cocina,Videos de Cocina,Tips,Vegetales,Poder de los Vegetales">';
                echo '<meta name="Resource-type" content="Homepage">';
                echo '<meta name="Revisit-after" content="4 days">';
                echo '<meta name="robots" content="all">';
                
                if($title_page!=""){
                echo "<title>". $title_page ." - La Alegre Cocina de Dino's</title>";
                }else{
                    echo "<title>La Alegre Cocina de Dino's</title>";
                }
                echo '<link href="img/logo_mini.png" rel="icon" type="text/css">';
                echo '<link rel="stylesheet" href="css/foundation.css" type="text/css"/>';
                echo '<link rel="stylesheet" href="css/estilos.css" type="text/css"/>';
                echo '<link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" type="text/css">';
                echo '<script src="js/vendor/modernizr.js"></script>';
    }
    // Inicio del Body y Fin del head
    public function bodyI(){
        echo '</head>';
        echo '<body>';        
    }
    // Fin del Body y Fin del html y hojas JS
    public function bodyF(){
            echo '<script src="js/vendor/jquery.js"></script>';
            echo '<script src="js/foundation.min.js"></script>';
            echo '<script> $(document).foundation(); </script>';
            echo'</body>';
        echo '</html>';
    }
    
    
}
// Logo Dino's
class Logo{

    //Metodo
    public function __construct(){
        echo '<div class="large-12 columns">';
            echo '<div class="row">';                
                echo '<a href="principal"><img src="img/logo.png" alt="Logo"></a>';
            echo '</div>';
        echo '</div>';
    }
}
// Menu Principal
class MenuPrincipal{
    // Métodos
    public function menuPpal(){
                echo '<div class="large-12 columns">';
                    //echo '<div class="row">';
                        echo '<ul id="menuPrincipal" class="large-12 columns" class="side-nav">';
                            echo '<div class="row">';
                                echo '<li><a href="principal" title="Página Principal"><i class="fi-home"></i> Principal</a></li>';
                                echo '<li><a href="recetas" title="Recetas del Chef Dino"><i class="fi-clipboard-notes"></i> Recetas</a></li>';
                                echo '<li><a href="videos" title="Videos cortos de 10 minutos"><i class="fi-video"></i> Programas de Cocina</a></li>';
                                echo '<li><a href="#" title="Acerca de Mí"><i class="fi-torso"></i> Acerca de Mí</a></li>';
                                echo '<li><a href="#" title="Reflexiones para una Vida Mejor"><i class="fi-page-edit"></i> Reflexiones para una Vida Mejor</a></li>';
                                //echo '<li><a href="#" title="Curiosidades de la Cocina"><i class="fi-clipboard-notes"></i> Curiosidades de la Cocina</a></li>';                                 
                                echo '<li><a href="#" title="Descarga Gratis las Canciones del Chef"><i class="fi-sound"></i> Mis Canciones</a></li>';
                                echo '<li><a href="#" title="El Poder Curativo de los Vegetales"><i class="fi-trees"></i> El Poder Curativo de los Vegetales</a></li>';
                                echo '<li><a href="#" title="Medios de Contacto"><i class="fi-marker"></i> Contacto</a></li>';
                            echo '</div>';
                        echo '</ul>';
                    //echo '</div>';
                echo '</div>';
    }
    public function menuPpalPie(){
                echo '<div class="large-12 columns">';
                    
                        echo '<ul id="menuPrincipal" class="large-4 columns" class="side-nav">';
                            echo '<div class="row">';
                                echo '<li><a href="recetas" title="Recetas del Chef Dino"><i class="fi-clipboard-notes"></i> Recetas</a></li>';
                                echo '<li><a href="videos" title="Videos cortos de 10 minutos"><i class="fi-video"></i> Programas de Cocina</a></li>';                                                 
                            echo '</div>';
                        echo '</ul>';
                        
                        echo '<ul id="menuPrincipal" class="large-4 columns" class="side-nav">';
                            echo '<div class="row">';
                                echo '<li><a href="#" title="Acerca de Mí"><i class="fi-torso"></i> Acerca de Mí</a></li>';                                         
                                echo '<li><a href="#" title="Reflexiones para una Vida Mejor"><i class="fi-page-edit"></i> Reflexiones para una Vida Mejor</a></li>';                                                          
                            echo '</div>';
                        echo '</ul>';
                        
                        echo '<ul id="menuPrincipal" class="large-4 columns" class="side-nav">';
                            echo '<div class="row">'; 
                                echo '<li><a href="#" title="Descarga Gratis las Canciones del Chef"><i class="fi-sound"></i> Mis Canciones</a></li>';                               
                                echo '<li><a href="#" title="El Poder Curativo de los Vegetales"><i class="fi-trees"></i> El Poder Curativo de los Vegetales</a></li>';
                            echo '</div>';
                        echo '</ul>';
                    
                echo '</div>';
    }
}
// Google Map
class MapGoogle {
    // Método 
    public  function __construct(){
        echo '<div id="ubicacion" class="large-12 columns">';
            echo '<hr>';
            echo '<a class="th radius" href="#">';
                echo '<img src="img/google_maps.gif" alt="">';
            echo '</a>';
            echo '<hr>';
        echo '</div>';
    }

}

// Redes Sociales
class RedSocial{
    // Métodos
    public function redSocialPpal(){
        echo '<div id="social" class="large-12 columns">';          
            echo '<ul>';
                echo '<li><a href="https://www.facebook.com/laalegre.cocinadedino" target="_blank"><i class="fi-social-facebook"></i> laalegrecocinadedino</a></li>';
                echo '<li><a href="https://twitter.com/LaCocinaDeDino" target="_blank"><i class="fi-social-twitter"></i> @lacocinadedino</a></li>';
                echo '<li><a href="https://plus.google.com/u/0/108599586614211584379" target="_blank"><i class="fi-social-google-plus"></i> laalegrecocinadedino</a></li>';
                //echo '<li><a href="#"><i class="fi-social-instagram"></i> Instagram</a></li>';
                echo '<li><a href="http://www.pinterest.com/alegrecocinaded/" target="_blank"><i class="fi-social-pinterest"></i> alegrecocinaded</a></li>';
            echo '</ul>';
            echo '<hr>';
        echo '</div>';
    }
    
    public function redSocialPie(){
        echo '<div id="socialPie" class="large-12 columns">';          
            echo '<ul>';
                echo '<li>';
                    echo '<a href="https://www.facebook.com/laalegre.cocinadedino" target="_blank" title="laalegrecocinadedino"><i class="fi-social-facebook"></i> </a>';
                    echo '<a href="https://twitter.com/LaCocinaDeDino" target="_blank" title="@lacocinadedino"><i class="fi-social-twitter"></i> </a>';
                    echo '<a href="https://plus.google.com/u/0/108599586614211584379" target="_blank" title="laalegrecocinadedino"><i class="fi-social-google-plus"></i> </a>'; 
                    echo '<a href="http://www.pinterest.com/alegrecocinaded/" target="_blank" title="alegrecocinaded"><i class="fi-social-pinterest"></i> </a>';                   
                echo '</li>';
                //echo '<li>';
                    //echo '<a href="#"><i class="fi-social-instagram"></i> </a>';                    
                //echo '</li>';
            echo '</ul>';            
        echo '</div>';
    }
}

// Contador de Visitas
class ContadorVisitas {
    // Método 
    public function __construct(){
        echo '<div id="visitas" class="large-12 columns">';
            echo '<h4>2345 Visitas</h4>';
        echo '</div>';
    }
}
// Publicidad
class Publicidad {
    //Métodos
    public function publicidad_Izquierda(){
        echo '<div id="publicidad_izquierda" class="large-12 columns">';
            echo '<hr>';
            echo '<a class="fi-shopping-bag" href="#"></a>';
        echo '</div>';
    }
    public function publicidad_Derecha(){
        echo '<div id="publicidad_derecha" class="large-3 columns">';
            echo '<a class="fi-shopping-bag" href="#"></a>';
        echo '</div>';
    }
}

class Sliders{
    // Métodos
    public function sliderPrincipal(){
        echo '<div id="slider" class="large-12 columns">';
            echo '<div class="row">';
                echo '<ul class="example-orbit" data-orbit>';
                    echo '<li data-orbit-slide="slider1"><img src="img/slider/dino1.jpg" alt="slide 0" /><div class="orbit-caption tituloSlider">Recetas del Chef Dino</div></li>';
                    echo '<li data-orbit-slide="slider2"> <img src="img/slider/dino6.jpg" alt="slide 1" /><div class="orbit-caption tituloSlider2">Programas de Cocina</div></li>';
                    echo '<li data-orbit-slide="slider3"> <img src="img/slider/dino3.jpg" alt="slide 2" /> <div class="orbit-caption tituloSlider">El Poder Curativo de los Vegetales</div></li>';
                    echo '<li data-orbit-slide="slider4"> <img src="img/slider/dino7.jpg" alt="slide " /> <div class="orbit-caption tituloSlider2">Canciones del Chef</div></li>';
                echo '</ul>';
            echo '</div>';
        echo '</div>';
        
        echo '<div style="margin-top:-20px;" class="large-12 columns">';
            echo '<div id="sliderBoton" class="row">';
                echo '<a class="small button large-3 columns tituloSlider" data-orbit-link="slider1"> Recetas</a>';
                echo '<a class="small button large-3 columns tituloSlider2" data-orbit-link="slider2">Videos</a>';
                echo '<a class="small button large-3 columns tituloSlider" data-orbit-link="slider3"> Vegetales</a>';
                echo '<a class="small button large-3 columns tituloSlider2" data-orbit-link="slider4"> Canciones </a>';
            echo '</div>';
        echo '</div>';
        
        echo '<hr>';    
    }
}

// Ultimas Cargas
class UltimasCargas{
    //Métodos
    public function __construct(){      
                
                echo '<div class="large-3 columns">';
                    echo '<h5 class="text-left"><i class="fi-clipboard-notes"></i> Última Receta</h5>';
                    echo '<a class="th" href="recetas">';
                        echo '<img src="img/img_receta.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> VER RECETA &raquo;</a>';
                echo '</div>';
                    
                echo '<div class="large-3 columns">';
                    echo '<h5 class="text-left"><i class="fi-video"></i> Último Video</h5>';
                    echo '<a class="th" href="videos">';
                        echo '<img src="img/img_video.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="videos" class="button radius tiny boton large-12 columns"><i class="fi-video"></i> VER VIDEO &raquo;</a>';
                echo '</div>';
                    
                echo '<div class="large-3 columns">';
                    echo '<h5 class="text-left"><i class="fi-lightbulb"></i> Último Tip</h5>';
                    echo '<a class="th" href="principal">';
                        echo '<img src="img/img_tip.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="principal" class="button radius tiny boton large-12 columns"><i class="fi-lightbulb"></i> VER TIP &raquo;</a>';
                echo '</div>';
    }
}
class Categoria {
    // Métodos
    public function __construct(){
    echo '<div id="categoria" class="large-12 columns">';
        echo '<h4 style="color:#328925"><i class="fi-clipboard-notes"></i> Categorías</h4>';
            echo '<div class="row">'; // Inicio del row
                
                echo '<div class="large-4 columns">';
                    echo '<h5 style="color:#E00126" class="text-left"><i class="fi-clipboard-notes"></i> Ensaladas</h5>';
                    echo '<a class="th" href="recetas/ensaladas">';
                        echo '<img src="img/cat_ensalada.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas/ensaladas" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                echo '</div>';
                    
                echo '<div class="large-4 columns">';
                    echo '<h5 style="color:#E00126" class="text-left"><i class="fi-clipboard-notes"></i> Pastas y Arroces</h5>';
                    echo '<a class="th" href="recetas/pastas-y-arroces">';
                        echo '<img src="img/cat_pastasArroces.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas/pastas-y-arroces" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                echo '</div>';
                    
                echo '<div class="large-4 columns">';
                    echo '<h5 style="color:#E00126" class="text-left"><i class="fi-clipboard-notes"></i> Pescados y Mariscos</h5>';
                    echo '<a class="th" href="recetas/pescados-y-mariscos">';
                        echo '<img src="img/cat_pescadosMariscos.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas/pescados-y-mariscos" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                echo '</div>';
                
            echo '</div>'; // Fin del row    
            
            echo '<div class="row">'; // Inicio del row
                
                echo '<div class="large-4 columns">';
                    echo '<h5 style="color:#E00126" class="text-left"><i class="fi-clipboard-notes"></i> Aves</h5>';
                    echo '<a class="th" href="recetas/aves">';
                        echo '<img src="img/cat_aves.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas/aves" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                echo '</div>';
                    
                echo '<div class="large-4 columns">';
                    echo '<h5 style="color:#E00126" class="text-left"><i class="fi-clipboard-notes"></i> Carnes</h5>';
                    echo '<a class="th" href="recetas/carnes">';
                        echo '<img src="img/cat_carnes.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas/carnes" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                echo '</div>';
                    
                echo '<div class="large-4 columns">';
                    echo '<h5 style="color:#E00126" class="text-left"><i class="fi-clipboard-notes"></i> Postres</h5>';
                    echo '<a class="th" href="recetas/postres">';
                        echo '<img src="img/cat_postres.jpg" alt="">';
                    echo '</a>';
                    echo '<h5>Lorem ipsum dolor.</h5>';
                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque!</p>';
                    echo '<a href="recetas/postres" class="button radius tiny boton large-12 columns"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                echo '</div>';
                
            echo '</div>'; // Fin del row         
    echo '</div>';    
    }
}

class Pie{
    //Métodos
    public function __construct(){
        echo '<div id="pie" class="large-12 columns">';
            echo '<div class="large-4 columns text-center">';
                echo '<i class="fi-telephone large-12 columns"></i>';
                echo '<p>0212-000-00-00</p>';
                echo '<p>0424-000-00-00</p>';
            echo '</div>';
            echo '<div class="large-4 columns text-center">';
                echo '<i class="fi-web large-12 columns text-center"></i>';
                echo '<p><a hre="">&copy; WebMetropoli.com</a></p>';
                echo '<p><i class="fi-html5"></i> Html5 <i class="fi-css3"></i> CSS3 <i class="fi-foundation"></i> Foundation5</p>';
            echo '</div>';
            echo '<div class="large-4 columns text-center ">';
                echo '<i class="fi-mail large-12 columns"></i>';
                echo '<p><i class="fi-mail"></i> laalegrecocinadedino@gmail.com</p>';
                echo '<p><i class="fi-mail"></i> alegrecocinadedino@hotmail.com</p>';           
            echo '</div>';           
        echo '</div>';           
    }
}

class MenuCategoria {
    // Métodos
    private $espacio;
    public function __construct($espacio){
    $this->espacio = $espacio;
    echo '<div id="menuCategoriaRecetas" class="large-12 columns verde1">
                  <nav class="breadcrumbs"> 
                     <a href="'. $espacio .'/entradas">Entradas</a> 
                     <a href="'. $espacio .'/ensaladas">Ensaladas</a>
                     <a href="'. $espacio .'/sopas-y-cremas">Sopas y Cremas</a>
                     <a href="'. $espacio .'/pasapalos">Pasapalos</a>
                     <a href="'. $espacio .'/pastas-y-arroces">Pastas y Arroces</a> 
                     <a href="'. $espacio .'/carnes">Carnes</a>
                     <a href="'. $espacio .'/aves">Aves</a>                     
                   </nav>
                  
                   <nav class="breadcrumbs"> 
                     <a href="'. $espacio .'/pescados-y-mariscos">Pescados y Mariscos</a> 
                     <a href="'. $espacio .'/postres">Postres</a>
                     <a href="'. $espacio .'/desayunos">Desayunos</a>
                     <a href="'. $espacio .'/almuerzos">Almuerzos</a>
                     <a href="'. $espacio .'/cenas">Cenas</a> 
                     <a href="'. $espacio .'/rapidas-y-faciles">Rápidas y Fáciles</a>
                     <a href="'. $espacio .'/navidad">Navideñas</a>                     
                   </nav>             
              </div>';
    
    }
}

class CategoriaBloque {
    // Atributos
    public $img_receta_ruta;
    public $titulo;
    public $descripcion;
    public $hipervinculo;
    public $icono;
    public $tipo;
    // Métodos
    public function CatBloquePpal($ruta_img, $titulo, $descripcion,$icono){
    $this->img_receta_ruta = $ruta_img;
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
    $this->icono = $icono;
    echo '<div id="recetas" class="row">
            <div class="large-12 columns panel">
                <div class="large-4 columns">
                    <div class="row">
                        <img class="th" src="'. $ruta_img .'">
                    </div>
                </div>
                <div class="large-8 columns">
                    <div class="row">
                <h1><i class="fi-'. $icono .'"></i> '. $titulo .'</h1>
                <p class="tex-justify">'. $descripcion .'</p>
                    </div>
                </div>
            </div>
        </div>';
    
    }
    
    public function CatBloqueSec($ruta_img, $titulo, $descripcion,$ruta_link,$tipo){
    $this->img_receta_ruta = $ruta_img;
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
    $this->hipervinculo = $ruta_link;
    $this->tipo = $tipo;
    echo '<div id="recetasCat" class="row">
            <div class="large-12 columns panel">
                <div class="large-2 columns">
                    <div class="row">';
                        if($tipo=="video"){
                            echo '<a class="th" href="videos/'. $ruta_link .'">
                            <img src="'. $ruta_img .'" alt="" style="">
                        </a>';
                        }else {
                            echo '<a class="th" href="recetas/'. $ruta_link .'">
                            <img src="'. $ruta_img .'" alt="" style="">
                        </a>';
                        }
                    echo '
                    </div>
                </div>
                <div class="large-10 columns">
                    <div class="row">';
                    if($tipo=="video"){
                    echo '<h2><a href="videos/'. $ruta_link .'"><i class="fi-video"></i> '. $titulo .' &raquo;</a></h2>';
                    }else{
                    echo '<h2><a href="recetas/'. $ruta_link .'"><i class="fi-clipboard-notes"></i> '. $titulo .' &raquo;</a></h2>';
                    }                
                echo '<p class="tex-justify">'. $descripcion .'</p>                
                    </div>                
                </div>
                <div class="large-3 columns">
                    <div class="row">';
                    if($tipo=="video"){
                        echo '<a class="button tiny ruta" href="videos/'. $ruta_link .'"><i class="fi-video"></i> IR A LOS VIDEOS &raquo;</a>';
                    }else{
                    echo '<a class="button tiny ruta" href="recetas/'. $ruta_link .'"><i class="fi-clipboard-notes"></i> IR A LA CATEGORIA &raquo;</a>';
                    }
                    echo '            
                    </div>
                </div>
            </div>
        </div>';
    }
    
    public function CatBloqueReceta($ruta_img, $titulo, $descripcion,$ruta_link,$tipo){
    $this->img_receta_ruta = $ruta_img;
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
    $this->hipervinculo = $ruta_link;
    $this->tipo = $tipo;
    echo '<div id="recetasCat" class="row">
            <div class="large-12 columns panel">
                <div class="large-2 columns">
                    <div class="row">';
                        if($tipo=="video"){
                            echo '<a class="th" href="videos/'. $ruta_link .'">
                            <img src="'. $ruta_img .'" alt="" style="">
                        </a>
                        <i title="Ver Receta" class="fi-clipboard-notes" style="font-size:35px;"></i>';
                        }else{
                            echo '<a class="th" href="recetas/'. $ruta_link .'">
                            <img src="'. $ruta_img .'" alt="" style="">
                        </a>
                        <i title="Ver Video de la Receta" class="fi-play-video" style="font-size:35px;" data-reveal-id="myModal" data-reveal></i>';
                        }
                        echo '                        
                        <i title="Ver Galeria de Imagenes de la Receta" class="fi-camera" style="font-size:35px;" data-reveal-id="myVideoModal" data-reveal></i>
                    </div>
                </div>
                <div class="large-10 columns">
                    <div class="row">';
                    if($tipo=="video"){
                        echo '<h2><a href="videos/'. $ruta_link .'"><i class="fi-video"></i> '. $titulo .' &raquo;</a></h2>';
                    }else {
                        echo '<h2><a href="recetas/'. $ruta_link .'"><i class="fi-clipboard-notes"></i> '. $titulo .' &raquo;</a></h2>';
                    }
                echo '                
                <p class="tex-justify">'. $descripcion .'</p>                
                    </div>                
                </div>
                <div class="large-3 columns">
                    <div class="row">';
                    if($tipo=="video"){
                        echo '<a class="button tiny ruta" href="videos/'. $ruta_link .'"><i class="fi-video"></i> VER VIDEO &raquo;</a>';
                    }else {
                        echo '<a class="button tiny ruta" href="recetas/'. $ruta_link .'"><i class="fi-clipboard-notes"></i> VER RECETA &raquo;</a>';
                    }
                    echo '                    
                    </div>
                </div>
            </div>
        </div>';
    }
    
    
    
    
    
    
}

?>
