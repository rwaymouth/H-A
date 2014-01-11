			<footer class="footer" role="contentinfo">
				<div class="row">
					<div class="col-md-8 col-sm-6 about clearfix">

					</div>
					<div class="col-md-4 col-sm-6 contact">

					</div>
				</div>

			</footer> <?php // end footer ?>


		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/equalize.js"></script>

        <script>

            function resnav(){
                jQuery('.sub-menu').before('<div class="menu-toggle"><i class="icon-chevron-down"></i> </div>');
                //jQuery('#menu-main-menu').append('<li class="last"><div class="social"><span>Follow us:</span><i class="icon-facebook"></i><i class="icon-twitter"></i><i class="icon-linkedin"></i></div></li>');
                jQuery('#last').appendTo('#menu-main-menu');
                jQuery('.menu-toggle').click(function () {
                  jQuery(this).toggleClass('active');
                  jQuery(this).nextAll('ul').slideToggle().toggleClass('active');
                        event.preventDefault();
                });
                }
                function re_size(){
                 jQuery('#services').equalize({children: 'p'});
                }
                resnav();
                jQuery(window).load(function (){
                    setTimeout('re_size()', 0);
                });
        </script>
	</body>

</html> <?php // end page. what a ride! ?>
