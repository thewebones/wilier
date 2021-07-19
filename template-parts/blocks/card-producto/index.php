<section class="section-card-producto <?php echo get_field("estilo")?>">
    
    <div class="card-producto text-center row">

<div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
<?php 
       if(get_field("repeater-producto")){
       foreach (get_field("repeater-producto") as $item) {?>
        
        <div class="card">
            <div class="card-image">
                <img src="<?php echo $item["imagen"]?>">
            </div>
            <div class="card-content">
                <span class="categoria"><?php echo $item["categoria"]?></span>    
                <span class="card-title"><?php echo $item["titulo"]?></span>    
                <p class="descripcion"><?php echo $item["descripcion"]?></p>
            </div>
            <div class="action">
                <div class="precio">
                    <p class="precio"><?php echo $item["precio"]?></p>
                </div>
                
                <div class="boton">
                    <a class="btn-cotizar" href="<?php echo $item['boton']['url'] ?>"><?php echo $item['boton']['title'] ?></a>
                    <span>
                        <?php if(get_field("estilo") == 'profesional') { ?>
                            <img src="<?php echo get_site_url();?>/wp-contenet/themes/wilier/img/robe_recursos/dark/whatsapp.svg" alt="">
                            
                        <?php } else{?>
                            <img src="<?php echo get_site_url();?>/wp-contenet/themes/wilier/img/robe_recursos/light/whatsapp.svg" alt="">   
                        <?php } ?>     
                    </span>
                </div>
            </div>
        </div>
      
        <?php }} ?>  

</div>
</div>
<div class="boton-card-producto">
        <a class="boton" href="<?php echo get_field("boton")["url"]?>">
            <?php echo get_field("boton")["title"]?>
            <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
        </a>
</div>
</section>