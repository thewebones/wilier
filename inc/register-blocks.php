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