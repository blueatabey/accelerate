<?php
/**
 * The template for displaying case studies.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
$sizemed = "medium";
$sizeful = "full";
get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post(); 

				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image01 = get_field('image_01');
				$image02 = get_field('image_02');
				$image03 = get_field('image_03'); ?>
				 
			

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?><h2>
						<h5><?php echo $services; ?></h5>
						<h6>Client: <?php echo $client; ?></h6>

						<?php the_content(); ?>
						<p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
					</aside>

					<div class="case-study-images">
						<?php if($image01){ 
								echo wp_get_attachment_image( $image01, $sizemed );
								} ?>
						<?php if($image02) {		
								echo wp_get_attachment_image( $image02, $sizeful );
								} ?>
						<?php if($image03) {
								echo wp_get_attachment_image( $image03, $sizeful );
								} ?>
					</div>						
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<nav id="navigation" class="container">
	<div class="left"><p><a href="<?php echo site_url('/case-studies/') ?>">&larr; BACK TO WORK</a></p></div>

</nav>	

<?php get_footer(); ?>
