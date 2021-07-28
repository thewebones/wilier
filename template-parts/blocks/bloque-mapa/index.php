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

  
<div class="bloque_mapa_container <?php if($estilo=="Profesional") echo "bloque_mapa_container_dark" ?>">
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

<script language='javascript'> 
document.getElementsByClassName('radio_container')[0].children[0].children[0].click();  


function load(event){
    const imagenLoad=event.currentTarget.parentElement.children[3].value;
    document.getElementsByClassName('showImagen')[0].setAttribute('src',imagenLoad);}
</script>