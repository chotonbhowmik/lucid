<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lucid
 */

//Home Page Banner Section 

      $banner_title        = get_field('banner_title');
      $banner_subtitle     = get_field('banner_subtitle');
      $banner_description  = get_field('banner_description');
      $button_one_text     = get_field('button_one_text');
      $button_one_url      = get_field('button_one_url');
      $button_two_text     = get_field('button_two_text');
      
      $button_two_url      = get_field('button_two_url');
      $background         = get_field('background');

      //Home page product section
      $product_section_title        = get_field('product_section_title');
      $product_section_subtitle     = get_field('product_section_subtitle');
      $product_one_icon             = get_field('product_one_icon');
      $product_one_title            = get_field('product_one_title');
      $product_one_description      = get_field('product_one_description');
      $product_two_icon             = get_field('product_two_icon');
      $product_two_title            = get_field('product_two_title');
      $product_two_description      = get_field('product_two_description');
      $product_three_icon           = get_field('product_three_icon');
      $product_three_title          = get_field('product_three_title');
      $product_three_description    = get_field('product_three_description');
      $product_four_icon            = get_field('product_four_icon');
      $product_four_title           = get_field('product_four_title');
      $product_four_description     = get_field('product_four_description');


      //phone section

      $phone_subtitle              = get_field('phone_subtitle');
      $phone_title                 = get_field('phone_title');
      $phone_description           = get_field('phone_description');
      $phone_image                 = get_field('phone_image');

      //about section

      $about_title                 = get_field('about_title');
      $about_subtitle              = get_field('about_subtitle');
      $about_description           = get_field('about_description');
      $about_image                 = get_field('about_image');



get_header();
?>
	<!-- banner-content Code start -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="banner-content" style="background-image: url(<?php echo $background; ?>);" >

						<h5 class="sub-title"><?php echo $banner_subtitle; ?></h5>
						<h1 class="title"><?php echo $banner_title; ?></h1>
						<p>
							<?php echo $banner_description; ?>
						</p>

						<div class="btn-group">
							<a href="<?php echo $button_one_url; ?>" class="btn btn-primary" ><?php echo $button_one_text; ?></a>
							<a href="<?php echo $button_two_url; ?>" class="btn btn-primary extra" ><?php echo $button_two_text; ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-content Code end -->
	</header>
	<!-- header-section Code end  -->
	
	<!-- features-section Code end  -->
	<section class="features-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h5 class="sub-title"><?php echo $product_section_title; ?></h5>
					<h1 class="title"><?php echo $product_section_subtitle; ?></h1>
					<div class="divider-c"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="inner-content">
						<div class="icon-box">
							<i class="<?php echo $product_one_icon; ?>"></i>
						</div>	
						<h4><?php echo $product_one_title; ?></h4>
						<p><?php echo $product_one_description; ?></p>
					</div>
				</div>

				<div class="col-md-3">
					<div class="inner-content">
						<div class="icon-box">
							<i class="<?php echo $product_two_icon; ?>"></i>
						</div>	
						<h4><?php echo $product_two_title; ?></h4>
						<p><?php echo $product_two_description; ?></p>
					</div>
				</div>


				<div class="col-md-3">
					<div class="inner-content">
						<div class="icon-box">
							<i class="<?php echo $product_three_icon; ?>"></i>
						</div>	
						<h4><?php echo $product_three_title; ?></h4>
						<p><?php echo $product_three_description; ?></p>
					</div>
				</div>

				<div class="col-md-3">
					<div class="inner-content">
						<div class="icon-box">
							<i class="<?php echo $product_four_icon; ?>"></i>
						</div>	
						<h4><?php echo $product_four_title; ?></h4>
						<p><?php echo $product_four_description; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- features-section Code end  -->

	<!-- about-section Code end  -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/devices.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-6">
					<h5 class="sub-title">dip into the details</h5>
					<h1 class="title">Beautiful on every device</h1>
					<div class="divider-l"></div>

					<p>
						Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.  
					</p>
					<ul>
						<li><i class="fa fa-trophy"></i> Awesome design</li>
						<li><i class="fa fa-trophy"></i> Awesome design</li>
						<li><i class="fa fa-trophy"></i> Awesome design</li>
						<li><i class="fa fa-trophy"></i> Awesome design</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- about-section Code end  -->


	<!-- About Phone Section Start -->
	<section class="about-phone">
		<div class="container">
			<div class="row">
				<div class="col-md-6 content">
					<div class="content-middle">
						<h5 class="sub-title"><?php echo $phone_subtitle; ?></h5>
						<h1 class="title"><?php echo $phone_title; ?></h1>
						<div class="divider-l"></div>
						<p><?php echo $phone_description; ?></p>
					</div>
				</div>

				<div class="col-md-6">
					<?php 
					$image = get_field('phone_image');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>


				</div>
			</div>
		</div>
	</section>
	<!-- About Phone Section End -->


	<!-- Testimonials Section Start -->
	<section class="testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h5 class="sub-title">dip into the details</h5>
					<h1 class="title">Super easy to customize</h1>
					<div class="divider-c"></div>
				</div>
			</div>

			<div class="row testimonials-content">
				<div class="col-md-12">
					<!-- Testimonials Slider Start-->
					<div class="owl-carousel owl-theme">

						<?php
						$loop = new WP_Query(array(
							'post_type' => 'testimonials',
							'orderby'   => 'post_id',
							'order'     => 'ASC',
						));

						?>

						<?php while($loop->have_posts()): $loop->the_post(); ?>

						<!-- Client Testimonial -->
					    <div class="item">
					    	<h4><?php the_content(); ?></h4>
					    	<div class="row client-details">
					    		<div class="col-md-2">
					    			<?php
					    			if (has_post_thumbnail()) {
					    				the_post_thumbnail('post-thumbnail', ['class' => 'test-client', 'title' => 'Client image']);
					    			}
					    			?>
					    		</div>

					    		<div class="col-md-10">
					    			<h5><?php the_title(); ?></h5>
					    			<h6>CEO, THE RIVERS COMPANY</h6>
					    		</div>
					    	</div>
					    </div>

                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>

					  
					    
					</div>
					<!-- Testimonials Slider End-->
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials Section End -->


	<!-- Download Section Start -->
	<section class="download-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1><span>Like what you see?</span> Get this great theme now!</h1>
				</div>

				<div class="col-md-4">
					<button type="button" class="btn btn-primary">View Features</button>
					<button type="button" class="btn btn-download">Download Now</button>
				</div>
			</div>
		</div>
	</section>
	<!-- Download Section End -->


	<!-- Pricing Table Section Start -->
	<section class="pricing-section">
		<div class="container">
			<!-- Heading Row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<h5 class="sub-title">dip into the details</h5>
					<h1 class="title">Super easy to customize</h1>
					<div class="divider-c"></div>
				</div>
			</div>

			<!-- Table Row -->
			<div class="row">
				<div class="col-md-3 text-center">
					<!-- Table Start -->
					<div class="pricing-table">
						<div class="table-heading">
							<h2>FREE</h2>
						</div>
						<div class="table-pricing">
							<p class="price-tag"><sup>$</sup><span class="counter">0</span></p>
							<p>/per month</p>
						</div>
						<div class="pricing-details">
							<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <span>lacinia</span> consectetur.</p>
							<a href="" class="btn-pricing">Order Now</a>
						</div>
					</div>
					<!-- Table End -->
				</div>

				<div class="col-md-3 text-center">
					<!-- Table Start -->
					<div class="pricing-table">
						<div class="table-heading">
							<h2>Personal</h2>
						</div>
						<div class="table-pricing">
							<p class="price-tag"><sup>$</sup><span class="counter">25</span></p>
							<p>/per month</p>
						</div>
						<div class="pricing-details">
							<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <span>lacinia</span> consectetur.</p>
							<a href="" class="btn-pricing">Order Now</a>
						</div>
					</div>
					<!-- Table End -->
				</div>

				<div class="col-md-3 text-center">
					<!-- Table Start -->
					<div class="pricing-table">
						<div class="table-heading">
							<h2>Business</h2>
						</div>
						<div class="table-pricing">
							<p class="price-tag"><sup>$</sup><span class="counter">50</span></p>
							<p>/per month</p>
						</div>
						<div class="pricing-details">
							<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <span>lacinia</span> consectetur.</p>
							<a href="" class="btn-pricing">Order Now</a>
						</div>
					</div>
					<!-- Table End -->
				</div>

				<div class="col-md-3 text-center">
					<!-- Table Start -->
					<div class="pricing-table">
						<div class="table-heading">
							<h2>Ultimate</h2>
						</div>
						<div class="table-pricing">
							<p class="price-tag"><sup>$</sup><span class="counter">99</span></p>
							<p>/per month</p>
						</div>
						<div class="pricing-details">
							<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <span>lacinia</span> consectetur.</p>
							<a href="" class="btn-pricing">Order Now</a>
						</div>
					</div>
					<!-- Table End -->
				</div>
			</div>

		</div>
	</section>
	<!-- Pricing Table Section End -->


	<section class="google-map">
		<div class="container-fluid">
			<div class="row">
				 <div class="col-md-12 no-padding">
				 	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.073431874336!2d90.36405251536347!3d23.815987692183647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c128b15cc4df%3A0x37adf8155b1773d0!2sMirpur%2011!5e0!3m2!1sen!2sbd!4v1576822140713!5m2!1sen!2sbd" width="100%"height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				 </div>
			</div>
		</div>
	</section>
	

	

<?php

get_footer();
