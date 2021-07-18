<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/13/2021
 * Time: 4:43 PM
 */
?>
<section class="embajador-section <?php echo get_field("estilo")?>">
    <div class="imagen-embajador division-embajador">
        <h1 class="nombre-embajador2"><?php echo get_field("nombre_embajador")?></h1>
        <h2 class="embajador-wilier2"><?php echo get_field("embajador_wilier")?></h2>
        <img class="img-fluid marca-wilier" src="<?php echo get_field("imagen_embajador")?>">
    </div>
    <div class="container embajador-contenido division-embajador">
        <h1 class="nombre-embajador"><?php echo get_field("nombre_embajador")?></h1>
        <h2 class="embajador-wilier"><?php echo get_field("embajador_wilier")?></h2>
        <div class="embajador-texto">
            <p class="embajador-texto"><?php echo get_field("embajador_texto")?></p>
        </div>
    </div>
</section>
