<section class="section-slider-hover <?php echo get_field("estilo")?>">
    <div class="row">
            <div class="col-12 text-center">
                <h2>Categorias</h2>
                <div class="carousel center-align">
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
    </div> 
</section>   
