<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

        	<div id="wrapper" class="container">

			<div class="row cta" style="background-image: url(<?php the_field("cta_background")?>)">
				<div class="col-md-12 cta">
					<h2><?php the_field("cta_title")?></h2>
					<p class="col-sm-8 col-md-6"><?php the_field("cta_text")?></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-7 latest">
				<h2>Latest News</h2>
				<?php
					$args = array( 'posts_per_page' => 3 );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="row entry">
						<div class="entry-info col-sm-4">
							<h4><?php the_title();?></h4>
							<ul>
								<li><?php echo get_the_time(get_option('date_format'));?></li>
								<li><?php echo get_the_category_list(', ');?></li>
							</ul>
						</div>
						<div class="excerpt col-sm-8">
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
					<hr>

					<?php endforeach;
					wp_reset_postdata();?>



</div>

<div class="col-md-4 col-md-offset-1 sign-up">
	<h2>Newsletter</h2>
	<p>
    <?php echo the_field('newsletter'); ?>
  	</p>

	<?php echo do_shortcode('[mc4wp_form]'); ?>
</div>

<div class="col-md-4 col-md-offset-1 sign-up">
	<h2>Contact Us</h2>
	<p>
		<?php echo the_field('contact'); ?>
  	</p>
	<a href="mailto:<?php echo $contact_email?>"><button class="btn">Email</button></a>



</div>

			</div>

			<div class="row services">
				<h2>Services</h2>
				<div id="services" class="col-md-12 clearfix">
					<div class="col-md-3 col-sm-6">
						<div class="crop">
						<a href="<?php the_field("service_#1_link");?>">
						<img src="<?php the_field("service_1_image");?>" alt="">
						</a>
						</div>
						<h3><a href="<?php the_field("service_#1_link");?>"><?php the_field("service_1_title");?></a></h3>
						<p>
							<?php the_field("service_1_text");?>
													<a href="<?php the_field("service_#1_link");?>">
Find out more...</a>
						</p>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="crop">
						<a href="<?php the_field("service_#2_link");?>">
						<img src="<?php the_field("service_2_image");?>" alt="">
						</a>
						</div>
						<h3><a href="<?php the_field("service_#2_link");?>"><?php the_field("service_2_title");?></a></h3>
						<p>
							<?php the_field("service_2_text");?>
							<a href="<?php the_field("service_#2_link");?>">
Find out more...</a>
						</p>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="crop">
							<a href="<?php the_field("service_#3_link");?>">
						<img src="<?php the_field("service_3_image");?>" alt="">
					</a>
						</div>
						<h3><a href="<?php the_field("service_#3_link");?>"><?php the_field("service_3_title");?></a></h3>
						<p>
							<?php the_field("service_3_text");?>
							<a href="<?php the_field("service_#3_link");?>">
Find out more...</a>
						</p>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="crop">
					<a href="<?php the_field("service_#4_link");?>">
						<img src="<?php the_field("service_4_image");?>" alt="">
					</a>
						</div>
						<h3><a href="<?php the_field("service_#4_link");?>"><?php the_field("service_4_title");?></a></h3>
						<p>
							<?php the_field("service_4_text");?>
								<a href="<?php the_field("service_#4_link");?>">
Find out more...</a>
						</p>
					</div>

				</div>




			</div>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
