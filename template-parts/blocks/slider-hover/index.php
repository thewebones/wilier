<?php 
                  // Listado de categorias
                  
                      $categories = get_categories( array(
                          'orderby' => 'name',
                          'order'   => 'ASC',
                      ) );?>

<section class="section-slider-hover <?php echo get_field("estilo")?>">
<h2>Categorias</h2>
                      

    <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false}'>
    <?php foreach( $categories as $category ) {
                        ?>
                      
                      <div class="item text-center">
                            <a href="<?php echo get_category_link( $category->term_id ); ?>">
                            <img src="<?php echo the_field('imagen', $category); ?>" alt="">
                            <h4><?php echo $category->name; ?></h4>
                            </a>  
                      </div>
                      <?php } ?> 
    </div>                          
                          
   
    <div class="fondo">
        <div class="boton-slider">
            <a class="boton" href="<?php echo get_field("boton")["url"]?>">
                <?php echo get_field("boton")["title"]?>  
                <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
            </a>
        </div>                     
    </div>   
</section>   
