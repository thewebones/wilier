<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 7/13/2021
 * Time: 6:44 PM
 */
?>
<div class="profesional-section  <?php echo get_field("estilo")?>">
    <?php if (get_field("estilo")=="Amateur") {?>
        <div class="background-profesional" style="background: url('<?php echo get_field("background_amateur")?>')"> <?php }?>
    <?php if (get_field("estilo")=="Profesional") {?>
            <div class="background-profesional" style="background: url('<?php echo get_field("background_profesional")?>')"> <?php }?>
    <div class="container profesional-contenido">
        <div class="contenedor-profesional">
            <h1 class="texto-profesional"><?php echo get_field("texto_profesional")?></h1>
            <div class="boton-profesional">
                <a class="boton-profesional" href="<?php echo get_field("boton_profesional")["url"]?>">
                    <?php echo get_field("boton_profesional")["title"]?>
                    <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
                </a>
            </div>
        </div>
        <div class="vacio"></div>
    </div>
    </div>
    </div>
</div>
