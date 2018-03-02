<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
						$image01 = get_field('image_01');
						$sizefull = "full";	
						$services = get_field('services');
						$client = get_field('client'); ?>
													
					<article class="case-study">
						<aside class="case-study-sidebar-archive">
							<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a><h2>
							<h4><?php echo $client; ?></h4>
							<h6><?php echo $services; ?></h6>
							<?php the_excerpt(); ?>
							<p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
						</aside>		
						<div class="case-study-images-archive clearfix">
							<a href="<?php the_permalink(); ?>">
								<?php if($image01){ 
									echo wp_get_attachment_image( $image01, $sizefull );
								} ?>
						</a>		
						</div>	
					</article>				
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->		
</div><!-- #primary -->

<?php get_footer(); ?>
