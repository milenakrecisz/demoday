<?php
/**
 * The template for Homepage
 * Template Name: Homepage
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package packhelp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
 			the_content();

		endwhile; // End of the loop.

    $args = array(
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => 9,
        'orderby'  => 'date',
        'order' => 'DESC',
    );

    $loop = new WP_Query( $args );
		?>
		<h2> Our recent products </h2>
		<div class="products-wrapper">
		<?php
    while ( $loop->have_posts() ) : $loop->the_post();
      ?> <div class="product"> <?php
        print the_post_thumbnail();
        the_title();
        the_excerpt();
        ?> <a href="<?php echo get_the_permalink(); ?>"> Buy now </a> <?php
        ?> </div> <?php

    endwhile;
		?></div><?php

    wp_reset_postdata();
		?>

	</main><!-- #main -->

<?php
get_footer();
