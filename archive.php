<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wilier
 */

get_header();

?>

	<main id="primary" class="site-main">

    <?php
        $the_query = new WP_Query( array(
        'post_type' => 'bicicleta'
        )  );
        if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
        ?>

			<header class="page-header">
				<?php
                $id_category=get_queried_object_id();
              $nombre=get_the_category_by_ID($id_category);
                ?>
     
			</header><!-- .page-header -->
     
        <?php if ( $the_query->have_posts() ) : ?>
            <!-- the loop -->
            <?php
$args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);
?>

<div class="header-home <?php echo $estilo ?>">
    <?php if ($estilo=="Amateur") {
        $imagenAmateur=get_term_meta(get_queried_object_id(),"background_amateur",true);?>
        <div class="header-general" style="background: url('<?php echo wp_get_attachment_image_src($imagenAmateur,'full')[0];?>')"> <?php }?>
    <?php if ($estilo=="Profesional") {
        $imagenPro=get_term_meta(get_queried_object_id(),"background_profesional",true);?>
       <div class="header-general" style="background: url('<?php echo wp_get_attachment_image_src($imagenPro,'full')[0];?>')"> <?php }?>
        <div class="container header-desk division">
            <h1 class="header-titulo"><?php echo get_term_meta(get_queried_object_id(),"titulo_header",true)?></h1>
            <p class="header-texto"><?php echo get_term_meta(get_queried_object_id(),"texto_header",true)?></p>
            <?php $imagenHeader=get_term_meta(get_queried_object_id(),"imagen_header",true);?>
            <img class="imagen-header" src="<?php echo wp_get_attachment_image_src($imagenHeader,'full')[0];?>">
        </div>
    <div class="container empty division"></div>
    
</div>
    <div class="menuFlotanteContainer">
    <?php $imagenMenu=get_term_meta(get_queried_object_id(),"imagen_menu_inferior",true);?>
    <?php $imagenMenuPro=get_term_meta(get_queried_object_id(),"imagen_menu_inferior_profesional",true);?>

        <div class="imagenMenuFlotante <?php if($estilo =="Profesional") echo "quitarSombra" ?>"  
        style="background: url('<?php if($estilo=="Amateur") echo wp_get_attachment_image_src($imagenMenu,'full')[0]; 
        else echo wp_get_attachment_image_src($imagenMenuPro,'full')[0]; ?>')"> 
			<div class=" menuContainer menuHeaderHomeContainer <?php if($estilo=="Profesional") echo "menuHeaderHomeDark";?>">
			<?php foreach($cats as $cat){
                $argsPost = array(
                    'post_type'=> 'bicicleta',
                    'order'    => 'ASC',
                    'category_name'=> $cat->name
                );
                $the_query_post = new WP_Query( $argsPost );
                if($the_query_post->posts){
                ?>
			 	<a href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php }} ?>	
		</div> 
        </div>
        
    </div>
<!--PARA RESPONSIVE-->
    <div class="container header-responsive">
        <div class="img-responsive">
        <?php $imagenHeaderResp=get_term_meta(get_queried_object_id(),"imagen_header_responsive",true);?>
        <?php $imagenHeader=get_term_meta(get_queried_object_id(),"imagen_header",true);?>
            <img class="imagen-header2" src="<?php echo wp_get_attachment_image_src($imagenHeaderResp,'full')[0];?>">
            <img class="imagen-header3" src="<?php echo wp_get_attachment_image_src($imagenHeader,'full')[0];?>">
        </div>
        <div class="texto-responsive2">
            <p class="header-texto2"><?php echo get_term_meta(get_queried_object_id(),"texto_header",true) ?></p>
        </div>    

    </div>


</div>

<div class="<?php if($estilo=="Profesional") echo "dark"; ?>">
<div class="imagenSingleCatFlotante">
    <?php if($estilo=="Profesional"){ ?>
    <img src="<?php echo get_post_meta(get_the_ID(),'imagen_flotante-'.$i,true) ?>"/>
    <?php }else{ ?>
    <img src="<?php echo get_post_meta(get_the_ID(),'imagen_flotante_profesional-'.$i,true) ?>"/>  
    <?php } ?>
</div>
<div class="seccion-intro container">
    <div class="por-categoria">
        <div class="izq">
            <p class="title <?php  if($estilo=="Profesional") echo "colorWhite"; ?>">
                <?php echo get_queried_object()->name ?>
            </p>
            <div class="foto-izq container">
            <?php
            $imagenCat=get_term_meta(get_queried_object_id(),"imagen_post_categoria",true);?>
            <img src="<?php echo wp_get_attachment_image_src($imagenCat,'full')[0];?>">
        </div>
            <div class="ContainerDescripcionSingCat">
                <?php echo the_archive_description(); ?>
            </div>
            <div class="fondo">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2021/07/Group-944.png" alt="">     
            </div>
        </div>
        <div class="foto-der container">
            <?php
            $imagenCat=get_term_meta(get_queried_object_id(),"imagen_post_categoria",true);?>
            <img src="<?php echo wp_get_attachment_image_src($imagenCat,'full')[0];?>">
        </div>
    </div>

</div>     

        <div class="titulo-modelo-categoria container">
              <p class="<?php if($estilo=="Profesional") echo "colorWhite";?>"><?php echo get_term_meta(get_queried_object_id(),"titulo_de_modelos",true)?></p>     
        </div>
            
        <div class="ProductosRelacionadosContainer container">
            <div class="productosRelacionados">
                <?php 
                $argsPost = array(
                    'post_type'=> 'bicicleta',
                    'order'    => 'ASC',
                    'category_name'=> $nombre
                );
                $the_query_post2 = new WP_Query( $argsPost );
                if($the_query_post2->have_posts()):
                while ( $the_query_post2->have_posts() ) : 
                    $the_query_post2->the_post();
                    if(get_the_category()[0]->term_id==get_queried_object_id()){?>       
                        <div class="SingleproductoRelacionado <?php if($estilo=="Profesional")echo "quitarFondo";?>" >
                            <a href="<?php the_permalink(); ?>" class="imagenProdRelaci" >
                                <?php if($estilo=="Profesional") {?>
                                <?php $imagenId=get_post_meta(get_the_ID(),'imagen_tema_profesional',true);?>
                                <img src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>">
                                <?php }else the_post_thumbnail(); ?>
                            </a>    
                            <div class="InfoProdRelacionado">
                                <p class="biciCategoria"><?php echo get_the_category()[0]->name ?></p>
                                <p class="biciNombreModelo cortarTexto <?php if($estilo=="Profesional")echo "colorWhite" ?>"><?php echo get_the_title();?></p>
                                <?php echo get_the_content()?>
                                <div class="precioBotonRelacio">
                                    <p class="biciPrecio"><?php echo get_post_meta(get_the_ID(), 'precio', true ) ?></p>
                                    <a  href="<?php echo get_post_meta( get_the_ID(), 'enlace_whatsapp', true )["url"]  ?>" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite" ?>">
                                        <span class="<?php if($estilo=="Profesional")echo "colorWhite" ?>">Consultar</span> 
                                        <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>"></span>
                                    </a>
                                </div>
                            </div>            
                        </div>
                <?php } ?>
            <?php endwhile;
            endif;
            ?>
            <?php wp_reset_query(); ?>
            </div>
        </div>
</div>
            <!-- end of the loop -->
            <!-- <?php wp_reset_postdata(); ?> -->
        <?php endif; ?>
        <div class="<?php if($estilo=="Profesional") echo "bloque_mapa_container_dark" ?>">
<div class="container bloque_mapa_container ">
    <div class="menu_mapa_container">
        <p class="menu_title"><?php echo get_field("titulo","option") ?></p>
        <div class="radio_container">
            <?php if(get_field("repeater_opciones","option"))
            foreach(get_field("repeater_opciones","option") as $radioItem){
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
</div>

<div class="<?php if($estilo=="Profesional") echo "dark";?>">
    <div class="form_comunidad_container" style="background-image:url(<?php echo get_field("imagen_fondo_formulario","option")?>;)">
        <div class="container">
            <div class="form_container" style="background-image: url('<?php echo get_field("imagen_fondo_negra","option")?>')">
                <p class="form_titulo"><?php echo get_field("titulo_formulario","option") ?></p>
                <div class="input_container">
                    <?php Echo do_shortcode ("[mc4wp_form id=183]");?>
                </div>
            </div>
        </div>
    </div>
    <div class="form_comunidad_footer">
        <?php if ($estilo=="Amateur"){?>
            <img src="<?php echo get_field("imagen_inferior","option")?>"/>
        <?php }else{ ?>
            <img src="<?php echo get_field("imagen_inferior_profesional","option")?>"/>  
        <?php } ?>    
    </div>
</div>
<script language='javascript'>
document.getElementsByClassName('radio_container')[0].children[0].children[0].click();
document.getElementsByClassName("ContainerDescripcionSingCat")[0].children[0].classList.add("Descripcion");
if("<?php echo $estilo ?>"=="Profesional")
document.getElementsByClassName("ContainerDescripcionSingCat")[0].children[0].classList.add("colorWhite");

const array=document.getElementsByClassName("InfoProdRelacionado");
    for(let i=0;i<array.length;i++){
    array[i].children[2].classList.add("biciDescripcionSingle");
    array[i].children[2].classList.add("expandable");
    if("<?php echo $estilo ?>"=="Profesional")
    array[i].children[2].classList.add("colorWhite");
}
   const arrayModelos=document.getElementsByClassName("cortarTexto");
   for(let i=0;i<arrayModelos.length;i++){
       arrayModelos[i].innerText=arrayModelos[i].innerText.toLowerCase();
       if(window.screen.width>990 && arrayModelos[i].innerText.length>18)
       arrayModelos[i].innerText=arrayModelos[i].innerText.substring(0,6)+"...";
   }
function load(event){
    const imagenLoad=event.currentTarget.parentElement.children[3].value;
    document.getElementsByClassName('framemap')[0].setAttribute('src','https://maps.google.com/maps?q='+imagenLoad+'&t=&z=13&ie=UTF8&iwloc=&output=embed');}
</script>
	</main><!-- #main -->
   
<?php
//get_sidebar();
get_footer();