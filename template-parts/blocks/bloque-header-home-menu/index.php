<?php
$estilo=get_field("estilo");

$args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);
?>

<section class="header-home <?php echo get_field("estilo")?>">
    <?php if (get_field("estilo")=="Amateur") {?>
        <div class="header-general" style="background: url('<?php echo get_field("background_amateur")?>')"> <?php }?>
    <?php if (get_field("estilo")=="Profesional") {?>
       <div class="header-general" style="background: url('<?php echo get_field("background_profesional")?>')"> <?php }?>
       <div class="container header-desk division">
       <h1 class="header-titulo"><?php echo get_field("titulo_header")?></h1>
       <p class="header-texto"><?php echo get_field("texto_header")?></p>
        <img class="imagen-header" src="<?php echo get_field("imagen_header")?>">
    </div>
    <div class="container empty division"></div>
    <div class="menuFlotanteContainer">
        <div class="imagenMenuFlotante <?php if($estilo =="Profesional") echo "quitarSombra" ?>"  
        style="background: url('<?php if($estilo=="Amateur") echo get_field("imagen_menu_inferior"); else echo get_field("imagen_menu_inferior_profesional"); ?>')"> 
			<div class="container menuContainer menuHeaderHomeContainer <?php if($estilo=="Profesional") echo "menuHeaderHomeDark";?>">
			<?php foreach($cats as $cat){ ?>
			 	<a href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php } ?>	
		</div> 
        </div>
        
    </div>
    </div>
<!--PARA RESPONSIVE-->
    <div class="container header-responsive">
        <div class="img-responsive">
            <img class="imagen-header2" src="<?php echo get_field("imagen_header_responsive")?>">
            <img class="imagen-header3" src="<?php echo get_field("imagen_header")?>">
        </div>
        <div class="texto-responsive2">
            <p class="header-texto2"><?php echo get_field("texto_header")?></p>
            </div>    

    </div>


</section>
