<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/15/2021
 * Time: 9:17 PM
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
<section class="header-home <?php echo $estilo?>">
    <?php if ($estilo=="Amateur") {?>
        <div class="header-general" style="background: url('<?php echo get_field("background_amateur")?>')"> <?php }?>
    <?php if ($estilo=="Profesional") {?>
       <div class="header-general" style="background: url('<?php echo get_field("background_profesional")?>')"> <?php }?>
       <div class="container header-desk division">
       <h1 class="header-titulo"><?php echo get_field("titulo_header")?></h1>
       <p class="header-texto"><?php echo get_field("texto_header")?></p>
        <div class="boton-header-home">
            <a class="boton-header" href="<?php echo get_field("boton_header")["url"]?>">
            <?php echo get_field("boton_header")["title"]?>
            <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
        </a>
        </div>
        <img class="imagen-header" src="<?php echo get_field("imagen_header")?>">
    </div>
    <div class="container empty division"></div>
        </div>
<!--PARA RESPONSIVE-->
    <div class="container header-responsive">
        <div class="img-responsive">
            <img class="imagen-header2" src="<?php echo get_field("imagen_header_responsive")?>">
            <img class="imagen-header3" src="<?php echo get_field("imagen_header")?>">
        </div>
        <div class="texto-responsive2">
            <p class="header-texto2"><?php echo get_field("texto_header")?></p>
            <div class="boton-header-home2">
                <a class="boton-header2" href="<?php echo get_field("boton_header")["url"]?>">
                    <?php echo get_field("boton_header")["title"]?>
                    <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                </a>
        </div>

    </div>


</section>
