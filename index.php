<?php
get_header();
?>
	<?php get_template_part('partials/nav'); ?>
	<section id="main-wrapper">
		<div class="inner-page bp-rel auto about">
			<div class="wedding-post container-holder">
				<ul>
				<?php if(have_posts()): 
					while(have_posts()): the_post(); ?>
					<li>
						<?php 
							$meta_video = get_meta_video();
						?>
						<div class="wedding-left wedding-inner fl">
							<h2>WEDDINGS</h2>
							<div class="wedding-post-video img fl"><a class="video-popup" href="#the_post-id-<?php echo get_the_ID(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home/wedding_post.jpg" width="620" height="349" alt="" title=""/></a></div>
						</div>
						<div class="wedding-right wedding-inner wedding-right-1 fr">
							<h2><?php the_title(); ?></h2>
							<h3>Mike and Kit <span>Sunday: February 27, 2015</span></h3>
							<p><?php the_content(); ?></p>
							<div class="watch-video">
								<p>Watch their Prenup Video: <a class="fancybox-video" href="https://www.youtube.com/embed/I8KfD6z2DBY?autoplay=1&showinfo=0&rel=0">RIGHT IN FRONT OF ME MOVIE TRAILER</a></p>
								<p>Watch their Infographics: <a class="fancybox-video" href="https://www.youtube.com/embed/I8KfD6z2DBY?autoplay=1&showinfo=0&rel=0">Mike and Kit</a></p>
							</div>
						</div>
						<div class="clr"></div>

						<div id="the_post-id-<?php echo get_the_ID(); ?>" class="animatedModal">
							<div class="close-animatedModal close-the_post-id-<?php echo get_the_ID()?>"></div>
								<div class="modal-content">
									<div class="video-content fl">
										<?php echo $meta_video; ?>
									</div>
									<div class="video-content v-c-right fr">
										<h2><?php the_title(); ?></h2>
										<h3>Mike and Kit <span>Sunday: February 27, 2015</span></h3>
										<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>
										<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>
										<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>
									</div>
								</div>
						</div>
					</li>
				<?php 
					endwhile;
				endif; ?>
				</ul>
			</div>
			<div class="clr"></div>
		</div>
	</section>

<?php 
get_footer();
?>