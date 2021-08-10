<?php
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
    ?>
<div class="<?php if($estilo=="Profesional")echo "dark" ?>">
<div class="container ContainerDosFotos">
    <div class="fotoIzquierdaDI">
        <img src="<?php echo get_field("imagen_izquierda_dosImg") ?>"/>
    </div>
    <div class="fotoDerechaDI">
        <img src="<?php echo get_field("imagen_derecha_dosImg") ?>"/>
    </div>
</div>
</div>