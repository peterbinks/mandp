<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mandp
 */

get_header(); ?>
<main>
    <div class="row">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			  <h2><?php the_title();?></h2>
			  <?php the_content();?>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</main>
<?php
get_footer();
