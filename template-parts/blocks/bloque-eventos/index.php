<?php
    $args=array(
        'post_type'=>'evento',
        'order'    =>'ASC'
    );
    $the_query=new WP_Query($args);
    $estilo=get_field("estilo");
?>
<div class="generalContainer" style="<?php if($estilo=="Profesional") echo "background:black" ?>">
<?php if($the_query->have_posts())
    while($the_query->have_posts()){
        $the_query->the_post();
?>
<div class="eventoContainer container mb-5">
    <div class="imageInfoContainer responsive" >
    <svg width="100%" height="100%" id="icoOpen">
        <polygon class="poligon" fill="<?php if($estilo=="Profesional") echo "black"; else echo "white"?>" stroke="<?php if($estilo=="Profesional") echo "white" ?>" stroke-width="2"
        points="" />
    </svg>
    </div>
    <div class="eventoInfoContainer">
        <p class="evento_categoria responsive"><?php echo get_the_category()[0]->name?></p>
        <p class="evento_modelo responsive"><?php echo the_title() ?></p>
        <p><?php echo get_the_excerpt() ?> </p>
        <div class="compartir mb-3">
            <span>Comparti con:</span>
            <h3><?php echo get_post_meta( get_the_ID(), 'compartido', true ) ?></h3>
        </div>
        <p class="evento_premio">Premio: <?php echo get_post_meta( get_the_ID(), 'premio', true )?></p>
        <a href="#" class="btn btn-slider">
            Consultar 
            <span>
                <?php if($estilo=="Profesional"){ ?>
                <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/dark/whatsapp.svg"/>
                <?php }else{?>
                <img src="<?php echo get_site_url();?>/wp-content/themes/wilier/img/robe_recursos/light/whatsapp.svg"/>   
                <?php } ?>        
            </span>
        </a>
    </div>
    <div class="fleximagenContainer">
    <div class="imagenEventoContainer" >
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="fechaEventoContainer" style="background: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/imagefecha.png')">
        <?php
        $fecha=get_post_meta( get_the_ID(), 'fecha_evento', true );
        $date=new DateTime($fecha);
        ?>
        <span class="evento_hora"><?php echo $date->format("g:i a"); ?></span>
        <span class="evento_fecha"><?php echo $date->format("F j,Y");?> </span>
    </div>
    <div class="evento_name_responsive" style="background: url('<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/imagenombre.png')">
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
