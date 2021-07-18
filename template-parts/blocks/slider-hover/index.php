<section class="section-slider-hover <?php echo get_field("estilo")?>">
    <!-- <div class="row">
            <div class="text-center">
                <h2>Categorias</h2>
                <div class="carousel text-center center-align">
                    <?php 
                        if(get_field("repeater-slider-hover")){
                        foreach (get_field("repeater-slider-hover") as $item) {?>
                        <div class="carousel-item">
                            <a href="">
                            <img src="<?php echo $item["imagen-slider-hover"] ?>" alt="">
                            <h4><?php echo $item["nombre_categoria"] ?></h4>
                            </a>    
                        </div>
                    <?php }} ?>            
                </div> 

            </div>
    </div>  -->
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
</section>   
