<?php
/**
 * The template for Blog
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package packhelp
 */

get_header();
?>
<div class="blogpage">
  <h3> Latest posts </h3>
  <?php $myposts = get_posts( 'numberposts=6' );
   foreach( $myposts as $post) : setup_postdata( $post ) ?>
      <div class="blog-post">
       <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>

     </div>
   <?php endforeach; ?>
</div>

<?php get_footer(); ?>
