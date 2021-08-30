<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/13/2021
 * Time: 6:44 PM
 */
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
?> 

<div class="profesional-section <?php echo $estilo?>">
<div class="carousel slide containerCarouselPA" style="background-image: url(<?php if($estilo=="Profesional")echo get_field("fondo_profesional"); else echo get_field("fondo_amateur");?>)">
    <div class="imagenCliente">
        <img src="<?php echo get_field("imagen") ?>" alt="">
    </div>  
    <div class="container pInnerComentarios">
        <div class="pComentariosWP">
            <h1 class="texto-profesional"><?php if($estilo=="Amateur") echo get_field("texto_profesional"); else echo get_field("texto_amateur");?></h1>
            <div class="boton-profesional">
                <a class="boton-profesional" onClick="change()">
                    <?php if($estilo=="Profesional") 
                    echo get_field("boton_amateur");
                    else
                    echo get_field("boton_profesional");
                    ?>
                    <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                </a>
            </div>
            
        </div>  
    </div>    
    <div class="vistaMovilPA container">
        <div class="imagenMovilComent">
            <img src="<?php echo get_field("imagen") ?>"/>
        </div>
        <div class="comentarioInfoContainer mt-4">
            <div class="pComentariosWP" onClick="prueba()">
                <h1 class="texto-profesional"><?php echo get_field("texto_profesional")?></h1>
                <div class="boton-profesional">
                    <a class="boton-profesional" onClick="change()">
                        <?php if($estilo=="Profesional") 
                        echo get_field("boton_amateur");
                        else
                        echo get_field("boton_profesional");
                        ?>
                        <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
