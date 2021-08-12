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
                                <a href="<?php the_permalink();?>" class="imagenProdSlider">
                                    <?php if($estilo=="Profesional") {?>
                                    <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                                    <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                                    <?php }else the_post_thumbnail(); ?>
                                </a>    
                                <div class="InfoProdRelacionado">
                                    <p class="biciCategoria"><?php echo get_the_category()[0]->name ?></p>
                                    <a class="linkTextosModelo" href="<?php the_permalink(); ?>">
                                        <p class="biciNombreModelo <?php if($estilo=="Profesional")echo "colorWhite"; ?>"><?php echo get_the_title();?></p>
                                        <?php echo get_the_content()?>
                                    </a>
                                    <div class="precioBotonRelacio">
                                        <p class="biciPrecio"><?php echo get_post_meta(get_the_ID(), 'precio', true ) ?></p>
                                        <a  href="https://api.whatsapp.com/send?phone=<?php echo get_field("numero_telefono","option") ?>&text=<?php echo get_field("mensaje","option")." ".get_the_title();?>" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite"; ?>">
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
            <a class="btn botonVerTodo" href="<?php echo get_category_link($category->term_id)?>">
                Ver todo los productos
            <img class="flecha-btn ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
            </a>                      
        </div>   
    </div>
    <?php }} ?>
</section>
<script>
    const array=document.getElementsByClassName("InfoProdRelacionado");
   for(let i=0;i<array.length;i++){
    array[i].children[1].children[1].classList.add("biciDescripcionSingle");
    if("<?php echo $estilo ?>"=="Profesional")
    array[i].children[1].children[1].classList.add("colorWhite");
    if(array[i].children[1].children[1].innerText.length>110)
    array[i].children[1].children[1].innerText=array[i].children[1].children[1].innerText.substring(0,90)+"...";
   }
</script>