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
     <div class="contenidoinside">
        <div class="contenido-wilier division">
         <h1 class="titulo-wilier"><?php echo get_field("titulo_wilier")?></h1>
         <p class="texto-wilier"><?php echo get_field("texto_wilier")?></p>
        </div>
        <div class="imagencontenedor division">

            <img class="img-fluid imagen-wilier" src="<?php echo get_field("imagen_wilier")?>">
              <div class="conainer texto-wilier2">
               <p class="texto-wilier2"><?php echo get_field("texto_wilier")?></p>
              </div>

     </div>
     </div>
    <div class="imagen-marca" style="background: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group 945.png')">
        <div class="container marca">
            <?php if ($estilo == 'Amateur') {?>
                <img class="img-fluid marca-wilier" src="<?php echo get_field("wilier_marca_amateur")?>">
            <?php } else { ?>
                <img class="img-fluid marca-wilier" src="<?php echo get_field("wilier_marca_profesional")?>">
            <?php } ?>   
    </div>
    </div>
</section>

