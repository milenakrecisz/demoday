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
			the_title();
			the_content();
		}
	}

	?>

</main><!-- #site-content -->

<div class="blog-footer">

	<?php
	// Random posts
	$the_query = new WP_Query( array(
		'post_type'      => 'post',
		'orderby'        => 'rand',
		'posts_per_page' => 8,
	) ); ?>

	<?php

	if ( $the_query->have_posts() ) : ?>

		<div class="randomposts">
		<h2>Random posts</h2>
		<ul>
				<?php
				while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
					<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		</div>

		<div class="tags">
		<h2>Tags</h2>
		<ul>
		    <?php
		    $tags = get_the_tags();
		    if ( $tags ) :
		        foreach ( $tags as $tag ) : ?>
		            <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
		        <?php endforeach; ?>
		    <?php endif; ?>
		</ul>
	</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
