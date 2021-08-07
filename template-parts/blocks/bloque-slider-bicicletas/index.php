    <?php
    $args=array(
        'post_type'=>'bicicleta',
        'order'    =>'ASC'
    );
    $the_query=new WP_Query($args);
    $cont=0;
    if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
    ?>
    <div>
    
   
   </div> 
   <div class="<?php if($estilo=="Profesional") echo "slider_container_dark"; ?>">
    <div class="slider_container container ">
    <h1 class="slider_title"><?php echo get_field("title_slider") ?></h1>
    <div id="carouselExampleIndicators3" class="carousel slide mt-5 slider_carousel" data-ride="carousel">
    <button class="btn btn-slider-change <?php if($estilo=='Profesional') echo 'borderWhite'; ?>" data-target="#carouselExampleIndicators3" data-slide="prev">
        <span>
        <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/prev.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/prev.svg"/>
        <?php } ?>
        </span>
    </button>
            <div class="carousel-inner carrusel_container">
            <?php if($the_query->have_posts())
                while($the_query->have_posts()){
                    $the_query->the_post();
            ?>
                <div class="carousel-item <?php if($cont==0) echo "active"?>">
                    <div class="slider_item">
                        <div class="imagen_slider_container">
                            <?php if($estilo=="Profesional") {
                                $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>"/>
                        <?php }else
                            the_post_thumbnail(); ?>
                        </div>
                        <div class="slider_text ml-3">
                            <div>
                                <p class="slider_categoria"><?php echo get_the_category()[0]->name ?></p>
                                <p class="slider_modelo mb-3"><?php echo the_title() ?></p>
                                <p class="slider_description"><?php echo get_the_content() ?></p>
                            </div>
                            <div class="slider_button_price">
                                <p class="slider_price"><?php echo get_post_meta( get_the_ID(), 'precio', true ) ?></p>
                                <a  href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-slider">
                                    <span>Consultar</span> 
                                    <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>">    
                                </span>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
                <?php 
                $cont++;
            } ?>
            </div>
    <button class="btn btn-slider-change <?php if($estilo=='Profesional') echo 'borderWhite'; ?>" data-target="#carouselExampleIndicators3" data-slide="next">
    <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/next.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/next.svg"/>
        <?php } ?>
    </button>
</div>
</div>
</div>
<script>
    if(window.matchMedia("(max-width:850px)").matches)
    document.getElementsByClassName("slider_description")[0].classList.add("expandable");
</script>

