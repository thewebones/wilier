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
        <div class="container">
            <div class="form_container" style="background: url('<?php echo get_field("imagen_fondo_negra","option")?>')">
       
                <p class="form_titulo"><?php echo get_field("titulo_formulario","option") ?></p>
                <div class="input_container">
                    <?php echo "[mc4wp_form id=183]"?>
                </div>
            </div>
        </div>
</div>
<div class="form_comunidad_footer">
    <?php if ($estilo=="Amateur"){?>
        <img src="<?php echo get_field("imagen_inferior","option")?>"/>
    <?php }else{ ?>
        <img src="<?php echo get_field("imagen_inferior_profesional","option")?>"/>  
    <?php } ?>    
</div>
</div>

