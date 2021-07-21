<section class="section-video-home <?php echo get_field("estilo")?>">
    <div class="embed-container text-center">
        <?php the_field('video'); ?>
    </div>
        <div class="boton-video-home ">
        <a class="boton-video" href="<?php echo get_field("boton")["url"]?>">
            <?php echo get_field("boton")["title"]?>
            <img class="flecha ml-3" src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/Group.png">
        </a>
        </div>
</section>