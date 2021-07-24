<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 6/07/21
 * Time: 0:23
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Ajustes Generales',
        'menu_title'	=> 'Ajustes Generales',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}
acf_register_block_type(array(
    'name'              => 'bloque-entrar',
    'title'             => __('Bloque entrar'),
    'description'       => __('bg-cta-section'),
    'render_template'   => 'template-parts/blocks/bg-cta-section/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'slider-medio',
    'title'             => __('Slider'),
    'description'       => __('slider'),
    'render_template'   => 'template-parts/blocks/slider-medio/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'slider', 'article'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'bloque1',
    'title'             => __('bloque1'),
    'description'       => __('bloque1'),
    'render_template'   => 'template-parts/blocks/bloque1/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'slider', 'article'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'bloque-slider-bicicletas',
    'title'             => __('Bloque slider bicicletas'),
    'description'       => __('bg-cta-section'),
    'render_template'   => 'template-parts/blocks/bloque-slider-bicicletas/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel','slider', 'bicicles'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'wilier-section',
    'title'             => __('wilier section'),
    'description'       => __('definicion de wilier'),
    'render_template'   => 'template-parts/blocks/wilier-section/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('section', 'wilier'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'bloque-mapa',
    'title'             => __('Bloque mapa'),
    'description'       => __('bg-cta-section'),
    'render_template'   => 'template-parts/blocks/bloque-mapa/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel','mapa'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'bloque-form-comunidad',
    'title'             => __('Bloque form comunidad'),
    'description'       => __('bg-cta-section'),
    'render_template'   => 'template-parts/blocks/bloque-form-comunidad/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel','comunidad'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'embajador-section',
    'title'             => __('embajador section'),
    'description'       => __('embajador de wilier'),
    'render_template'   => 'template-parts/blocks/wilier-embajador/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('section', 'embajador', 'wilier'),
    'category' => 'widgets'

));
    

acf_register_block_type(array(
    'name'              => 'wilier-profesional-section',
    'title'             => __('profesional section'),
    'description'       => __('embajador de wilier'),
    'render_template'   => 'template-parts/blocks/wilier-profesional-section/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('section', 'profesional', 'wilier'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'header-home',
    'title'             => __('header home'),
    'description'       => __('header de la home'),
    'render_template'   => 'template-parts/blocks/header-home/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('section', 'header','home','wilier'),
    'category' => 'widgets'

));


acf_register_block_type(array(
    'name'              => 'slider-hover',
    'title'             => __('Slider hover'),
    'description'       => __('slider hover'),
    'render_template'   => 'template-parts/blocks/slider-hover/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'slider-hover', 'article'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'video-home',
    'title'             => __('video home'),
    'description'       => __('video home'),
    'render_template'   => 'template-parts/blocks/video-home/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'video-home', 'article'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'card-producto',
    'title'             => __('card producto'),
    'description'       => __('card producto'),
    'render_template'   => 'template-parts/blocks/card-producto/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'card-producto', 'card'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'modelo-bikes-wilier',
    'title'             => __('modelo bikes wilier'),
    'description'       => __('section modelos bikes'),
    'render_template'   => 'template-parts/blocks/modelo-bikes-wilier/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('modelo', 'wilier', 'bikes'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'por-categoria',
    'title'             => __('por categoria'),
    'description'       => __('por categoria'),
    'render_template'   => 'template-parts/blocks/por-categoria/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('por-categoria', 'categoria', 'bikes'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'header',
    'title'             => __('header'),
    'description'       => __('header'),
    'render_template'   => 'template-parts/blocks/header/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('header', 'menu'),
    'category' => 'widgets'
));

acf_register_block_type(array(
    'name'              => 'footer',
    'title'             => __('footer'),
    'description'       => __('footer'),
    'render_template'   => 'template-parts/blocks/footer/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('footer', 'social','policy','term','conditions'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'header home menu',
    'title'             => __('header home menu'),
    'description'       => __('header home menu'),
    'render_template'   => 'template-parts/blocks/bloque-header-home-menu/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('header', 'menu','modelo'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'eventos',
    'title'             => __('eventos'),
    'description'       => __('eventos'),
    'render_template'   => 'template-parts/blocks/bloque-eventos/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('eventos',),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'visitenos',
    'title'             => __('Visitenos'),
    'description'       => __('visitenos'),
    'render_template'   => 'template-parts/blocks/visitenos/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('visitenos',),
    'category' => 'widgets'

));