<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h2><?php the_title(); ?></h2>
									<div class="meta"><?php
										//printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));

									?>
									<ul>
										<li><?php echo get_the_author();?></li>
										<li><?php echo get_the_time(get_option('date_format'));?></li>
										<li><?php echo get_the_category_list(', ');?></li>
									</ul>
									</div>

								</header> <?php // end article header ?>

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer>
									<div class="social">
										<a href="<?php echo $facebook; ?>"><i class="icon-facebook"></i></a>
										<a href="<?php echo $twitter; ?>"><i class="icon-twitter"></i></a>
										<a href="<?php echo $linkedin; ?>"><i class="icon-linkedin"></i></a>
									</div>
								</footer> <?php // end article footer ?>

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <?php // end article ?>

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
