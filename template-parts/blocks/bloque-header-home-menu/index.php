<?php
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}

$args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);
?>

<section class="header-home <?php echo $estilo?>">
    <?php if ($estilo=="Amateur") {?>
        <div class="header-general" style="background: url('<?php echo get_field("background_amateur")?>')"> <?php }?>
    <?php if ($estilo=="Profesional") {?>
       <div class="header-general" style="background: url('<?php echo get_field("background_profesional")?>')"> <?php }?>
        <div class="container header-desk division">
            <h1 class="header-titulo"><?php echo get_field("titulo_header")?></h1>
            <p class="header-texto"><?php if($estilo=="Amateur") echo get_field("texto_header"); else echo get_field("encabezado_texto_profesional");?></p>
            <img class="imagen-header" src="<?php if($estilo=="Profesional") echo get_field("imagen_header"); else echo get_field("imagen_header_profesional");?>">
        </div>
    <div class="container empty division"></div>
    </div>
<!--PARA RESPONSIVE-->
    <div class="container header-responsive">
        <div class="img-responsive">
            <?php if($estilo=="Profesional"){ ?>
            <img class="" src="<?php echo get_field("imagen_header")?>">
            <?php } else{?>
            <img class="" src="<?php echo get_field("imagen_header_profesional")?>">
                <?php } ?>
        </div>
        <div class="texto-responsive2">
            <p class="header-texto2"><?php echo get_field("texto_header")?></p>
            </div>   
    </div>
</section>
<div class="menuFlotanteContainer">

    <div class="imagenMenuFlotante <?php if($estilo =="Profesional") echo "quitarSombra" ?>"  
        style="background-position-x: right !important;  background: url('<?php if($estilo=="Amateur") echo get_field("imagen_menu_inferior"); else echo get_field("imagen_menu_inferior_profesional"); ?>')">
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
			 	<a class="linkMenu" href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php }} ?>	
		</div> 
    </div>
        
</div>