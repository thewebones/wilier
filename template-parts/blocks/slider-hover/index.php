<?php 
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
                  // Listado de categorias
                  
                      $categories = get_categories( array(
                          'orderby' => 'name',
                          'order'   => 'ASC',
                      ) );?>

<section class="section-slider-hover <?php echo $estilo?>">
<div class="container">
<h2>Categorias</h2>
                      

    <div class="carousel container" data-flickity='{ "wrapAround": false, "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false}'>
    <?php foreach( $categories as $category ) {
         $argsPost = array(
            'post_type'=> 'bicicleta',
            'order'    => 'ASC',
            'category_name'=> $category->name
        );
        $the_query_post = new WP_Query( $argsPost );
        if($the_query_post->posts){
                        ?>
                      
                      <div class="item text-center">
                            <a href="<?php echo get_category_link( $category->term_id ); ?>">
                                <img src="<?php echo the_field('imagen', $category); ?>" alt="">
                                <h4><?php echo $category->name; ?></h4>
                            </a>  
                      </div>
                      <?php } }?> 
    </div>                          
                          
   
    <div class="fondo" style="background-image: url(<?php echo get_field("fondo")?>)">
        <div class="boton-slider">
            <a class="boton" href="<?php echo get_field("boton")["url"]?>">
                <?php echo get_field("boton")["title"]?>  
                <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
            </a>
        </div>                     
    </div>   
</div>
</section>   
