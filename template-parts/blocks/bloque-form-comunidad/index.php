<?php if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}?>

<div class="<?php if($estilo=="Profesional") echo "dark";?>">
<div class="form_comunidad_container">
    <img src="<?php echo get_field("imagen_fondo_formulario","option")?>"/>
    <div class="form_container" style="background: url('<?php echo get_field("imagen_fondo_negra","option")?>')">
        <!-- <div class="img_form mb-3" ></div> -->
        <p class="form_titulo">FORMÁ PARTE DE NUESTRA COMUNIDAD</p>
        <div class="input_container">
        <?php Echo do_shortcode ("[mc4wp_form id=183]"); ?>
        </div>
</div>
</div>
<div class="form_comunidad_footer">
<img src="<?php echo get_field("imagen_inferior","option")?>"/>
</div>
</div>