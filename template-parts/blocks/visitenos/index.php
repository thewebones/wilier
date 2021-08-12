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
<div class="<?php if($estilo=="Profesional")echo "dark"; ?>">
<section class="section-visitenos "> 
    <div class="visitenos">
        <div class="titulo container">
            <h2 class=" <?php if($estilo=="Profesional")echo "colorWhite"; ?>"><?php echo get_field('titulo-visitenos') ?></h2>
        </div> 
       <?php 
       if(get_field("repeater-visitenos")){
       foreach (get_field("repeater-visitenos") as $item) { ?>
       <div class="generalContainerVisita">
            <div class="contenido container mt-5">
                <div class="foto">
                    <div class="fotoContainer">
                        <img src="<?php echo $item["imagen-visitenos"] ?>">
                    </div>
                </div>

                <div class="descripcion <?php if($estilo=="Profesional")echo "descripcionDarkVisitenos"; ?>">    
                    <span class="destribuidor-visitenos <?php if($estilo=="Profesional")echo "colorWhite"; ?>"><?php echo $item["destribuidor-visitenos"] ?></span>
                    <h5 class="nombre-visitenos <?php if($estilo=="Profesional")echo "colorWhite"; ?>"><?php echo $item["nombre-visitenos"] ?></h5>
                    <?php echo $item["direccion-visitenos"] ?>
                </div>
                
            </div>
            <div class="fondo-visitenos" style="background-image: url(<?php echo $item["fondo-visitenos"] ?>)">
            </div>
        </div>
        <?php }} ?> 
    </div>
  
       
</section>
</div>