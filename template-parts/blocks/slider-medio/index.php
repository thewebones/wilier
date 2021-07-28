
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
<section class="section-slider-medio <?php echo $estilo?>">
<div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true}'>
  <?php 
                    if(get_field("repeater-slider-medio")){
                    foreach (get_field("repeater-slider-medio") as $item) {?>
                    <div class="carousel-cell">
                        <img src="<?php echo $item["imagen"] ?>" alt="">
                    </div>
  <?php }} ?>
  </div>
  <div class="fondo" style="background-image: url(<?php echo get_field("fondo")?>)">
</div>
</section>