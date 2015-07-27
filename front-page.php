<?php 
/**
 * template-home.php
 *
 * Template Name: Home Page
 */
 ?>

<?php get_header(); ?>


	<section class="banner clearfix">
		<div class="left"></div>
		<div class="center"></div>
		<div class="right"></div>
	</section>


		<div class="intro">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h3>Together we can build safer, healthier communities where people excel, ideas grow, and dreams are realized.</h3>
					</div>
				</div>
			</div>
		</div> <!-- End Intro -->




	<section class="news section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center section-title">
					<h2>Latest <strong>News and Updates</strong></h2>
					<p class='summary'><em>Stay in the loop and find out the lastest happenings at The FNC</em></p>
					<span class="divider"></span>
				</div>
			</div>

			<div class="row">
			<?php $latest = new WP_Query('showposts=2'); ?>
				
					<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
						<a href='<?php echo get_permalink(); ?>'><div class="col-md-6 blog-wrap">
							<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
							<div class="home-featured-img" style="background: url(<?php echo $src[0];?>);"></div>
							<div class="excerpt-home">
								<?php get_template_part( 'content', get_post_format() ); ?>
							</div>
						</div></a>
					<?php endwhile; ?>
				
			</div>
		</div>
	</section>

	<hr>

		<section class="about section ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center section-title">
						<h2>What <strong>Drives Us</strong></h2>
						<p class='summary'><em>We are working to change the system as a whole.</em></p>
						<span class="divider"></span>
					</div>
				</div> <!-- end row -->
			
				<div class="row">
					<div class="three-block clearfix">
						<div class="col-md-4">
							<p>We are an <strong>issue-focused, impact-driven organization</strong> whose mission is to be the catalyst for <strong>large-scale social 
							change</strong> through efforts that result in improvements of entire systems.</p>
						</div>
						<div class="col-md-4 ">
							<p>Our vision is a world where organizations from different 
							sectors work together around common goals to transform systems that result in thriving communities.</p>
						</div>
						<div class="col-md-4 ">
							<p>Our vision is a world where organizations from different 
							sectors work together around common goals to transform systems that result in thriving communities.</p>
						</div>
					</div>
				</div> <!-- end row -->

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="block-wrap">
							<div class="block-light">
								<h5>Integrity</h5>
								<p>Honesty, combined with ethical & principled behaviors is the basis of our work. 
								We convey this through mutual trust & respect for our customers & our peers.</p>
							</div>

							<div class="block-med">
								<h5>Shared Leadership</h5>
								<p>We believe that leadership comes from all levels. Our commitment to provide continual learning, individual growth & 
								professional development reflects our belief in the value of our staff, member agencies & their respective teams</p>
							</div>
							<div class="block-light">
								<h5>Collaboration</h5>
								<p>We understand the interdependence of FNC and its member agencies & actively seek to strengthen those relationships & to 
								forge new partnerships with others to achieve our common goals.</p>
							</div>
						</div>

						<div class="text-center">
						<span>
							<a href="" class="btn ">Learn More &rarr;</a>
						
							<a href="" class="btn btn-primary">Become a Volunteer &rarr;</a>
						</span>
						</div>
					</div>

				</div> <!-- end row -->
			</div> <!-- end containre -->
		</section> 

	<hr>
	

<section class="partners section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center section-title">
						<h2>Our <strong>Partners</strong></h2>
						<p class='summary'><em>We thank all that allow us to continue to do what's important.</em></p>
						<span class="divider"></span>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-6 funder-img">
						<img alt="Brand" src="/images/pic1.png">
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 funder-img">
						<img alt="Brand" src="/images/pic2.png">
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 funder-img">
						<img alt="Walmart" src="/images/pic3.png">
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 funder-img">
						<img alt="Brand" src="/images/pic4.png">
					</div>
					
					<div class="text-center">
					<a href="" class="btn btn-primary">See all Partners &rarr;</a>
					</div>
			</div>
		</div>
	</section>



<?php get_footer(); ?>
