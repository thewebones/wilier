<?php
    $args=array(
        'post_type'=>'evento',
        'order'    =>'ASC'
    );
    $the_query=new WP_Query($args);
    if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
?>
<div class="generalContainer" style="<?php if($estilo=="Profesional") echo "background:black" ?>">
<div class="container">
    <div class="mb-4">
        <h1 class="slider_title_bloque_mundo <?php if($estilo=="Profesional") echo "whiteColorText"; ?>"><?php echo get_field("titulo") ?></h1>
    </div>
    <?php if($the_query->have_posts())
    while($the_query->have_posts()){
        $the_query->the_post();
    ?>

    <div class="eventoContainer mb-5">
        <div class="imageInfoContainer responsive <?php if($estilo=="Profesional")echo "quitarSombra" ?>" >
            <svg width="100%" height="100%" id="icoOpen">
                <polygon class="poligon" fill="<?php if($estilo=="Profesional") echo "black"; else echo "white"?>" stroke="<?php if($estilo=="Profesional") echo "white"?>" stroke-width="2" points="" />
            </svg>
        </div>
        <div class="eventoInfoContainer">
            <div>
                <p class="evento_categoria responsive"><?php echo get_the_category()[0]->name?></p>
                <p class="evento_modelo responsive"><?php echo the_title() ?></p>
                <p class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo get_the_excerpt() ?> </p>
                <div class="compartir mb-3">
                    <span class="<?php if($estilo=="Profesional") echo "colorWhite"?>">Comparti con:</span>
                    <h3 class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo get_post_meta( get_the_ID(), 'compartido', true ) ?></h3>
                </div>
                <p class="evento_premio <?php if($estilo=="Profesional") echo "colorWhite"?>">Premio: <?php echo get_post_meta( get_the_ID(), 'premio', true )?></p>
            </div>
            <a  href="https://api.whatsapp.com/send?phone=<?php echo get_post_meta( get_the_ID(), 'numero_telefono', true ) ?>&text=<?php echo get_post_meta( get_the_ID(), 'mensaje', true )?>" target="_blank" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite" ?>">
                <span class="<?php if($estilo=="Profesional")echo "colorWhite" ?>">Consultar</span> 
                <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>">    
                </span>
            </a>
        </div>
        <div class="fleximagenContainer">
            <div class="imagenEventoContainer" >
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="fechaEventoContainer <?php if($estilo=="Profesional")echo "quitarSombra" ?>" style="background: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/imagefecha.png')">
                <?php
                $fecha=get_post_meta( get_the_ID(), 'fecha_evento', true );
                $date=new DateTime($fecha);
                ?>
                <span class="evento_hora"><?php echo $date->format("g:i a"); ?></span>
                <span class="evento_fecha"><?php echo $date->format("F j,Y");?> </span>
            </div>
            <div class="evento_name_responsive <?php if($estilo=="Profesional")echo "quitarSombra" ?>" style="background: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/imagenombre.png')">
                <?php
                $fecha=get_post_meta( get_the_ID(), 'fecha_evento', true );
                $date=new DateTime($fecha);
                ?>
                <span class="evento_fecha"><?php echo get_the_category()[0]->name; ?></span>
                <span class="evento_hora"><?php echo the_title();?> </span>
            </div>
        </div>
    </div>
    <?php } ?>
</div>    
</div>
                
<script>

const dimensionesEvento=document.getElementsByClassName("imageInfoContainer")[0].getBoundingClientRect();
const widthEvento=dimensionesEvento.width;
const heightEvento=dimensionesEvento.height;
const widthRelativeEvento=widthEvento*0.6;
const poligonosEvento=document.getElementsByClassName("poligon");
for(let i=0;i<poligonosEvento.length;i++)
poligonosEvento[i].setAttribute("points",`0,0 ${widthEvento},0 ${widthRelativeEvento},${heightEvento} 0,${heightEvento}`);

</script>
