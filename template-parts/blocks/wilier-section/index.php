<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/13/2021
 * Time: 2:56 PM
 */
?>
<section class="wilier-section <?php echo get_field("estilo")?>">
     <div class="container contenidoinside">
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
        <img class="img-fluid marca-wilier" src="<?php echo get_field("wilier_marca")?>">
        </div>
    </div>
</section>

