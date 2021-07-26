<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wilier
 */

get_header();

?>

	<main id="primary" class="site-main">


			<header class="page-header">
				<?php
                echo get_queried_object_id();
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
        <?php
        $the_query = new WP_Query( array(
        'post_type' => 'bicicleta',

        )  );
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <!-- the loop -->
            <div class="class1">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                if(get_the_category()[0]->term_id==get_queried_object_id()){
                ?>

                    <div class="class2">

                        <div class="class6">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php } endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!-- end of the loop -->
            <!-- <?php wp_reset_postdata(); ?> -->
        <?php endif; ?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
