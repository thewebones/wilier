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
<section class="section-por-categoria <?php echo $estilo ?>">
    <?php
        // Listado de categorias                  
        $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
        ) );
    
        foreach( $categories as $category ) {
            $argsPost = array(
				'post_type'=> 'bicicleta',
				'order'    => 'ASC',
				'category_name'=> $category->name
			);
           
			$the_query_post = new WP_Query( $argsPost );
			if($the_query_post->have_posts()){          
    ?>
    <div class="por-categoria container">
        <div class="izq">
            <div class="title">
                <?php echo $category->name; ?>
            </div>
            <div class="descripcion">
                <?php echo $category->description; ?>
            </div>
            <div class="fondo">
                <?php if($estilo == 'Amateur'){ ?>
                <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/Group-944.png" alt="">     
                <?php }else { ?>
                    <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/Group-629.png" alt="">
            <?php } ?>   
            </div>
        </div>
        <div class="foto-der">
            <img class="img-fluid" src="<?php echo the_field('imagen_post_categoria', $category);?>">
        </div>
    </div> 
    <div class="container">
        <div class="carousel" data-flickity='{ "wrapAround": false, "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false}'>
            <?php 
                while($the_query_post->have_posts()) :
                    $the_query_post->the_post();
                        ?> 
                        <div class="ContainerProductSlider">
                            <div class="SingleProductSlider" >
                                <a href="<?php the_permalink();?>" class="imagenProdRelaci">
                                    <?php if($estilo=="Profesional") {?>
                                    <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                                    <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                                    <?php }else the_post_thumbnail(); ?>
                                </a>    
                                <div class="InfoProdRelacionado">
                                    <p class="biciCategoria"><?php echo get_the_category()[0]->name ?></p>
                                    <p class="biciNombreModelo cortarTexto <?php if($estilo=="Profesional")echo "colorWhite"; ?>"><?php echo get_the_title();?></p>
                                    <?php echo get_the_content()?>
                                    <div class="precioBotonRelacio">
                                        <p class="biciPrecio"><?php echo get_post_meta(get_the_ID(), 'precio', true ) ?></p>
                                        <a  href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"] ?>" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite"; ?>">
                                            <span class="<?php if($estilo=="Profesional")echo "colorWhite"; ?>">Consultar</span> 
                                            <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>"></span>
                                        </a>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    <?php 
                endwhile;?>  
        </div>          
        <div class="botonVerTodoProdRelacio">
            <a class="btn botonVerTodo" href="<?php echo get_category_link(get_cat_ID($category->term_id))?>">
            Ver todo los productos
            <img class="flecha-btn ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
            </a>                      
        </div>   
    </div>
    <?php }} ?>
</section>
<script>
    const array=document.getElementsByClassName("InfoProdRelacionado");
   const arrayModelos=document.getElementsByClassName("cortarTexto");
   for(let i=0;i<arrayModelos.length;i++){
    array[i].children[2].classList.add("biciDescripcion");
    if("<?php echo $estilo ?>"=="Profesional")
    array[i].children[2].classList.add("colorWhite");
    if(array[i].children[2].innerText.length>110)
    array[i].children[2].innerText=array[i].children[2].innerText.substring(0,90)+"...";
    arrayModelos[i].innerText=arrayModelos[i].innerText.toLowerCase();
    if(window.screen.width>990 && arrayModelos[i].innerText.length>18)
        arrayModelos[i].innerText=arrayModelos[i].innerText.substring(0,6)+"...";
   }
</script>