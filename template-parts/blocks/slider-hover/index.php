<section class="section-slider-hover <?php echo get_field("estilo")?>">
    <h2>Categorias</h2>
    <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false}'>
          <?php 
                        if(get_field("repeater-slider-hover")){
                        foreach (get_field("repeater-slider-hover") as $item) {?>
                      <div class="item text-center">
                            <a href="">
                            <img src="<?php echo $item["imagen-slider-hover"] ?>" alt="">
                            <h4><?php echo $item["nombre_categoria"] ?></h4>
                            </a>  
                      </div>       
          <?php }} ?>                  
    </div> 
    <div class="fondo">
        <div class="boton-slider">
            <a class="boton" href="<?php echo get_field("boton")["url"]?>">
                <?php echo get_field("boton")["title"]?>
                <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
            </a>
        </div>                     
    </div>   
</section>   
