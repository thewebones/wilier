<?php
/**
 * Instagram Feed Footer Template
 * Adds pagination and html for errors and resized images
 *
 * @version 5.12 Instagram Feed Pro by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

$follow_btn_style   = SB_Instagram_Display_Elements_Pro::get_follow_styles( $settings ); // style="background: rgb();color: rgb();"  already escaped
$follow_btn_classes = strpos( $follow_btn_style, 'background' ) !== false ? ' sbi_custom' : '';
$show_follow_button = ( $settings['showfollow'] == 'on' || $settings['showfollow'] == 'true' || $settings['showfollow'] == true ) && $settings['showfollow'] !== 'false';
$follow_button_text = __( $settings['followtext'], 'instagram-feed' );

$load_btn_style   = SB_Instagram_Display_Elements_Pro::get_load_button_styles( $settings ); // style="background: rgb();color: rgb();"  already escaped
$load_btn_classes = strpos( $load_btn_style, 'background' ) !== false ? ' sbi_custom' : '';
$load_button_text = __( $settings['buttontext'], 'instagram-feed' );

?>
<div id="sbi_load" style="margin-top: 80px; display: flex; flex-wrap: wrap;justify-content: space-between;margin-bottom: 120px">
    <style>
        @media(max-width: 768px){
            .instagram-boton{
                width: 100% !important;
                text-align: center !important;
            }
            .instagram-texto{display: none !important;}
        }
    </style>
    <div class="instagram-texto" style="width: 60%; text-align: left">
<p style="font-family: Roboto;font-style: normal;font-weight: normal;font-size: 18px;line-height: 21px;letter-spacing: 0.005em;color: #0B0B0B;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus mus cum eget tristique lectus ultricies quis enim, ultrices. </p>
    </div>
    <div class="instagram-boton" style="width: 40%;text-align: end" >
    <?php if ( $use_pagination ) : ?>
        <a class="sbi_load_btn" href="javascript:void(0);" <?php echo $load_btn_style; ?>>
            <span class="sbi_btn_text"><?php echo esc_html( $load_button_text ); ?></span>
            <span class="sbi_loader sbi_hidden" style="background-color: rgb(255, 255, 255);" aria-hidden="true"></span>
        </a>
    <?php endif; ?>

    <?php if ( $first_username && $show_follow_button ) : ?>
        <span class="sbi_follow_btn<?php echo esc_attr( $follow_btn_classes ); ?>">
        <a style="border-radius: 0; background: #EE3031;display: flex; height: 50px; width: 230px;font-family: Roboto;font-style: normal;font-weight: 500;font-size: 18px;line-height: 21px;letter-spacing: 0.0125em;color: #FFFFFF;align-items: center;justify-content: center" href="<?php echo esc_url( 'https://www.instagram.com/' . $first_username . '/' ); ?>" <?php echo $follow_btn_style; ?> target="_blank" rel="nofollow noopener">
            <?php

            echo esc_html( $follow_button_text );
            ?>
        </a>
    </span>
    <?php endif; ?>
    </div>
</div>