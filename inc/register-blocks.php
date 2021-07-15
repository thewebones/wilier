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
    'name'              => 'slider-hover',
    'title'             => __('Slider hover'),
    'description'       => __('slider hover'),
    'render_template'   => 'template-parts/blocks/slider-hover/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'slider-hover', 'article'),
    'category' => 'widgets'

));