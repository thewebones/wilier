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
<div class="<?php if($estilo=="Profesional") echo "dark"?>">
<div class="container" >
    <div class="nombreSeccion mb-4">
        <h1 class="slider_title_bloque_mundo <?php if($estilo=="Profesional") echo "whiteColorText"; ?>" ><?php echo get_field("titulo") ?></h1>
    </div>
    <div class="seccionContainer">
    <div class="primeraImagen mb-4">
        <img src="<?php echo get_field("imagen_arriba") ?>"/>
    </div>
    <div class="containerTresFotos">
        <div class="imagenesLaterales mr-4">
            <div class="imagenizquierda mb-4">
                <img src="<?php echo get_field("imagen_izquierda_superior") ?>"/>
            </div>
            <div class="imagenizquierda">
                <img src="<?php echo get_field("imagen_izquierda_inferior") ?>"/>
            </div>
        </div>
        <div class="imagenDerecha">
            <img src="<?php echo get_field("imagen_derecha") ?>"/>
        </div>
    </div>
    </div>

    <!-- SLIDER RESPONSIVE -->
    <div class="slide-seccion">
    <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="imagenesLaterales">
                    <div class="imagenizquierda mb-4 responsiveImgSuperior">
                        <img src="<?php echo get_field("imagen_arriba") ?>"/>
                    </div>
                    <div class="imagenizquierda responsiveImgInferior">
                        <img src="<?php echo get_field("imagen_izquierda_superior") ?>"/>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="imagenesLaterales">
                    <div class="imagenizquierda mb-4 responsiveImgSuperior">
                        <img src="<?php echo get_field("imagen_izquierda_inferior") ?>"/>
                    </div>
                    <div class="imagenizquierda responsiveImgInferior">
                        <img src="<?php echo get_field("imagen_derecha") ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>