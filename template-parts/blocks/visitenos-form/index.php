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
<div class="<?php if($estilo=="Profesional")echo "dark"; ?> relativeVisitenosForm">
<section class="section-visitenos-form container">
  <div class="visitenos-form">
      <div class="form" style="background-image: url(<?php echo get_field("fondo-form")?>); background-size: cover">
        <div class="contenido-form">
          <p class="form_titulo">FORMÁ PARTE DE NUESTRA COMUNIDAD</p>
          <div class="input_container_visitenos">
            <?php echo "[mc4wp_form id=183]" ?>
          </div>
        </div>
      </div>

      <div class="foto">
        <img src="<?php echo get_field("imagen-visitenos-form")?>" alt="">
      </div>
  </div> 
</section>

</div>