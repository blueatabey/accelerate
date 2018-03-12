<?php
/**
 * The template for displaying Accelerate-Theme-Child About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services">
		<div class="about-site-content">
			<div class="main-services">
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.</p>
				<p>Here's a brief overview of our offered services.</p>
				<br>
				<br>
			</div> <!-- .main-services -->	
	
			<?php query_posts('post_type=services'); ?>
						<?php while ( have_posts() ) : the_post(); 
								$services01 = get_field('services_01');
								$services02 = get_field('services_02');
								$services03 = get_field('services_03');
								$services04 = get_field('services_04');
								$description01 = get_field('description_01');
								$description02 = get_field('description_02');
								$description03 = get_field('description_03');
								$description04 = get_field('description_04');
								$image04 = get_field("image_04");
								$image05 = get_field("image_05");
								$image06 = get_field("image_06");
								$image07 = get_field("image_07");
								$size = "full";	
							?>	
				
					<div class="about-services">
						<div class="individual-service">
							<div class="layout-image-a">
								<figure>
									<?php echo wp_get_attachment_image($image04, $size); ?>
								</figure>
							</div>					
							<div class="layout-services-a">
								<h3><?php echo $services01; ?></h3>
								<p><?php echo $description01; ?></p>
							</div>
						</div>
						<div class="individual-service">										
							<div class="layout-services-b">
								<h3><?php echo $services02; ?></h3>
								<p><?php echo $description02; ?></p>
							</div>	
							<div class="layout-image-b">
								<figure>
									<?php echo wp_get_attachment_image($image05, $size); ?>
								</figure>	
							</div>
						</div>						
						<div class="individual-service">
							<div class="layout-image-a">
								<figure>
									<?php echo wp_get_attachment_image($image06, $size); ?>
								</figure>	
							</div>	
							<div class="layout-services-a">
								<h3><?php echo $services03; ?></h3>
								<p><?php echo $description03; ?></p>
							</div>
						</div>							
						<div class="individual-service">
							<div class="layout-services-b">
								<h3><?php echo $services04; ?></h3>
								<p><?php echo $description04; ?></p>
							</div>	
							<div class="layout-image-b">
								<figure>
									<?php echo wp_get_attachment_image($image07, $size); ?>
								</figure>	
							</div>	
						</div>					
						
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

				</div> <!-- .about-services	 -->					
		</div> <!-- .about-site-content -->
	</section>
		

			<div class="services-contact-us">
				<h2>Interested in working with us?</h2>
				<a class="button" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
			</div> <!-- .services-contact-us	 -->


<?php get_footer(); ?>
