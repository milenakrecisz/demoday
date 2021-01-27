<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>

<main id="site-content" role="main">


	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {

			the_post();
			?>   <div class="product_thumbnail">  <?php

			the_post_thumbnail();

			?>
			</div>
			<div class="product_info"> <?php
			the_title();
			the_excerpt();
			the_content();

			?>
			</div>
			<!--
			<div class="moreproducts"><?php /*

			$post_id = get_the_ID();
    	$cat_ids = array();
			$categories = get_the_category( $post_id );



			if ( $categories && ! is_wp_error( $categories ) ) {
    		foreach ( $categories as $category ) {
        	array_push( $cat_ids, $category->term_id );
    		}
			}

			$current_post_type = get_post_type( $post_id );

			$args = array(
			    'category__in' => $cat_ids,
			    'post_type' => $current_post_type,
			    'posts_per_page' => '5',
			    'post_not_in' => array( $post_id )
			);

			$query = new WP_Query( $args );

		if ( $query->have_posts() ) {

		    ?>
		        <h3> <?php _e( 'More awesome products' ); ?> </h3>
						<ul class="more-custom-posts">
		          <?php
		            while ( $query->have_posts() ) {
		              $query->the_post();
		                ?>
										<li>
		                  <a href="<?php the_permalink(); ?>">
		                    <?php the_title(); ?>
		                  </a>
		                </li>
		              <?php
		            }
							?>
						</ul>
		    <?php

}

wp_reset_postdata();

		 */?> </div> --> <?php
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
