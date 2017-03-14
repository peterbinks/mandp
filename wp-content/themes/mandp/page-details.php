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
		<div class="content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				  <h2 class="page-title"><?php the_title();?></h2>
                  <article>
                      <div class="invite-copy">
                          <h2>
                              There are <div id="days"></div>, <div id="hrs"></div>, <div id="mins"></div>, and <div id="sec"></div> until we tie the knot. <br>Won't you join us?
                          </h2>
                      </div>
    				  <?php the_content();?>
                </article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
    </div>
</main>
<?php
get_footer();
