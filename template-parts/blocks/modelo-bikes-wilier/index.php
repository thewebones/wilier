<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/17/2021
 * Time: 9:08 PM
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
<section class="modelo-bikes-wilier <?php echo $estilo?>">
    <div class="container modelo-bike">
        <div class="division contenido-modelo">
            <h1 class="titulo-modelo"><?php echo get_field("titulo_modelo")?></h1>
            <p class="modelo-texto"><?php echo get_field("texto_modelo")?></p>
            <img class="tres-flechas" src="<?php echo get_field("imagen_tres_flechas")?>">
            <a class="boton-ver-modelos" href="<?php echo get_field("boton_ver_modelos")["url"]?>">
                <?php echo get_field("boton_ver_modelos")["title"]?>
                <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
            </a>
        </div>
        <div class="division2 imagen-modelo">
            <img class="img-fluid imagen-modelo-bike" src="<?php echo get_field("imagen_modelo_bike")?>">
        </div>
    </div>
</section>
