<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/13/2021
 * Time: 2:56 PM
 */
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
    $estilo="Amateur";
?>

<section class="wilier-section <?php echo $estilo?>">
     <div class="container contenidoinside">
        <div class="contenido-wilier division">
            <h1 class="titulo-wilier"><?php echo get_field("titulo_wilier")?></h1>
            <p class="texto-wilier"><?php echo get_field("texto_wilier")?></p>
        </div>
        <div class="imagencontenedor division">
            <div class="imageSectionContainer">
                <img class="imagen-wilier" src="<?php echo get_field("imagen_wilier")?>">
            </div>
            <div class="conainer texto-wilier2">
                <p class="texto-wilier2"><?php echo get_field("texto_wilier")?></p>
            </div>
        </div>
     </div>
    <div class="imagen-marca" style="
    <?php if($estilo="Profesional"){?>
    background: url('<?php echo get_site_url();?> /wp-content/themes/wilier/img/fondo_profesional.jpg')
    <?php }else{ ?>
    background: url('<?php echo get_site_url();?>/wp-content/themes/wilier/img/fondo_amateur.jpg')
    <?php } ?>
    ">
        <div class="container">
            <div class="logoContainer">
	    			<a href="<?php echo get_site_url(); ?>">
	    			<img width="200px" 
	    				src=
	    				"<?php if($estilo=="Profesional")
	    				echo get_field("logo_profesional","option"); 
	    				else 
	    				echo get_field("logo_amateur","option");?>"/>
	    			</a>
	    	</div>
        </div>
    </div>
</section>

