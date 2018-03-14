<?php
/**
 * The template for displaying 404 page (Not Found)
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div class="error-main-content">
		<article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
			<h1 class="error-title"><?php esc_html_e('Hmmm, where am I?','WP Loop'); ?></h1>
				<img class="error-img" src="http://localhost:8888/accelerate/wp-content/uploads/2018/03/toa-heftiba-183785-unsplash.jpg">	
				<p class="error-text"><?php esc_html_e('Sorry, but it looks like you landed on a page that no longer exists, never existed or has been moved.', 'WP Loop'); ?></p>
				<p class="error-text">Feel free to take a look around our <a class="error-link" href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a class="error-link" href="<?php echo site_url('/about/') ?>">work</a>.</p>
		</article> <!-- .et_pb_post -->
	</div> <!-- .error-main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
