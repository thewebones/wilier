<?php
$estilo=get_field("estilo");
?>

<div class="bloque_mapa_container <?php if($estilo=="profesional") echo "bloque_mapa_container_dark" ?>">
    <div class="menu_mapa_container">
        <p class="menu_title"><?php echo get_field("titulo") ?></p>
        <div class="radio_container">
            <?php if(get_field("repeater_opciones")) 
            foreach(get_field("repeater_opciones") as $radioItem){
            ?>
            <label class="content-input">
                <input type="radio" name="radio" id="autovia" onClick="load(event)">
                <i></i>
                <span><?php echo $radioItem["name_input_radio"] ?></span>
                <input type="hidden" value="<?php echo $radioItem["imagen"] ?>"/>
            </label>
            <?php } ?>
        </div>
    </div>
    <div class="imagen_mapa_container">
        <img class="showImagen" src=""/>
    </div>
</div>