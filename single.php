<?php get_header(); ?>

        	<div id="wrapper" class="container">

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
							<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"><i class="icon-facebook"></i></a>
										<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title();?>&url=<?php the_permalink()?>&via=HollywoodAssoc"><i class="icon-twitter"></i></a>
										<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink()?>L&title=<?php the_title()?>&summary=<?php get_the_excerpt()?>&source=<?php the_permalink()?>"><i class="icon-linkedin"></i></a>

									</div>
								</footer> <?php // end article footer ?>

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <?php // end article ?>
			<?php endwhile; ?>
			<?php endif; ?>

			</div> <?php // end #main ?>


<?php get_footer(); ?>
