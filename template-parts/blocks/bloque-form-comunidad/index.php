<?php $estilo=get_field("estilo"); ?>

<div class="<?php if($estilo=="profesional") echo "dark";?>">
<div class="form_comunidad_container">
    <img src="<?php echo get_field("imagen_fondo_formulario")?>"/>
    <div class="form_container">
        <!-- <div class="img_form mb-3" ></div> -->
        <p class="form_titulo">FORMÁ PARTE DE NUESTRA COMUNIDAD</p>
        <div class="input_container">
        <?php Echo do_shortcode ("[mc4wp_form id=57]"); ?>
        </div>
        <!-- <div class="img_form mt-3"></div> -->
</div>
</div>
<div class="form_comunidad_footer">
<img src="<?php echo get_field("imagen_inferior")?>"/>
</div>
</div>