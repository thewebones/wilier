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
   
?>

<section class="wilier-section <?php echo $estilo?>">
    <div class="container">
     <div class="contenidoinside">
        <div class="contenido-wilier division">
            <div>
                <h1 class="titulo-wilier"><?php echo get_field("titulo_wilier")?></h1>
                <p class="texto-wilier"><?php echo get_field("texto_wilier")?></p>
            </div>
        </div>
        <div class="imagencontenedor">
            <div class="imageSectionContainer">
                <img class="imagen-wilier" src="<?php echo get_field("imagen_wilier")?>">
            </div>
            <div class="conainer texto-wilier2">
                <p class="texto-wilier2"><?php echo get_field("texto_wilier")?></p>
            </div>
        </div>
     </div>
    </div>
    <div class="imagen-marca" style="
    <?php if($estilo=="Profesional"){?>
    background: url('<?php echo get_site_url();?> /wp-content/themes/wilier/img/fondo_profesional.png')
    <?php }else{ ?>
    background: url('<?php echo get_site_url();?>/wp-content/themes/wilier/img/fondo_amateur.png')
    <?php } ?>
    ">
        <div class="container footerMovilSection">
            <div class="logoContainer">
	    			<a href="<?php echo get_site_url(); ?>">
	    			<img width="200px" 
	    				src=
	    				"<?php if($estilo=="Profesional")
	    				echo get_field("wilier_marca_profesional"); 
	    				else 
	    				echo get_field("wilier_marca_amateur");?>"/>
	    			</a>
	    	</div>
        </div>
    </div>
    
</section>

