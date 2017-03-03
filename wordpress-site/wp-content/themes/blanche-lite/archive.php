<?php
/**
 * The template for displaying Archive pages.
 *
 *
 * @package Blanche
 */

get_header(); ?>

<div id="wrapper">
  <div id="contentwrapper" class="animated fadeIn">
    <?php
			the_archive_title( '<h1 class="entry-title"><span>', '</span></h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
    <div id="content">
      <?php if ( have_posts() ) : ?>
      <?php
				while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
				endwhile;
				?>
      <?php the_posts_pagination(); ?>
      <?php else : ?>
      <h2 class="center">
        <?php esc_html_e( 'Not Found', 'blanche-lite' ); ?>
      </h2>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
