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

  
<div class="bloque_mapa_container <?php if($estilo=="Profesional") echo "bloque_mapa_container_dark" ?>" style="background: url('<?php echo get_site_url();?>/wp-content/themes/wilier/img/fondo_bloque_mapa.png')">
    <div class="menu_mapa_container">
        <p class="menu_title"><?php echo get_field("titulo") ?></p>
        <div class="radio_container">
            <?php if(get_field("repeater_opciones")) 
            foreach(get_field("repeater_opciones") as $radioItem){
                $address=$radioItem["imagen"];
                $adress_url=str_replace(' ','%20',$address);
            ?>
            <label class="content-input">
                <input type="radio" name="radio" id="autovia" onClick="load(event)">
                <i></i>
                <span><?php echo $radioItem["name_input_radio"] ?></span>
                <input type="hidden" value="<?php echo $adress_url ?>"/>
            </label>
            <?php } ?>
        </div>
    </div>
    <div class="imagen_mapa_container">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="framemap"  id="gmap_canvas"
                        src="https://maps.google.com/maps?q=<?php echo $adress_url; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                </iframe>
                <a href="https://www.whatismyip-address.com"></a><br>
                <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
            </div>
        </div>
    </div>

</div>

<script language='javascript'> 
document.getElementsByClassName('radio_container')[0].children[0].children[0].click();  


function load(event){
    const imagenLoad=event.currentTarget.parentElement.children[3].value;
    document.getElementsByClassName('framemap')[0].setAttribute('src','https://maps.google.com/maps?q='+imagenLoad+'&t=&z=13&ie=UTF8&iwloc=&output=embed');}
</script>