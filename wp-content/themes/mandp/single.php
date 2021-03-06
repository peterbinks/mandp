<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mandp
 */

get_header(); ?>

<main>
    <div class="row">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			  <?php the_title();?>
			  <?php the_content();?>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</main>
<?php
get_footer();
