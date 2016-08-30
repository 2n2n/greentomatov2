<?php
get_header();
?>
	<?php get_template_part('partials/nav'); ?>
	<section id="main-wrapper">
		<div class="inner-page bp-rel auto about">
			<div class="wedding-post container-holder">
				<ul>
				<?php 
				// dd($posts);
				if(count($posts) > 0): 
					foreach($posts as $post): setup_postdata($post); ?>
					<?php $meta_video = get_meta_video(); ?>
					<li>
						<div class="wedding-left wedding-inner fl">
							<h2>WEDDINGS</h2>
							<div class="wedding-post-video img fl"><a class="video-popup" href="#the_post-id-<?php echo get_the_ID(); ?>">
								<?php echo $meta_video; ?>
							</div>
						</div>
						<div class="wedding-right wedding-inner wedding-right-1 fr">
							<h2><?php the_title(); ?></h2>
							<h3><?php the_date() ?></h3>
							<p><?php the_content(); ?></p>
							<div class="watch-video">
								<p>Watch their Prenup Video: <a class="fancybox-video" href="https://www.youtube.com/embed/I8KfD6z2DBY?autoplay=1&showinfo=0&rel=0">RIGHT IN FRONT OF ME MOVIE TRAILER</a></p>
								<p>Watch their Infographics: <a class="fancybox-video" href="https://www.youtube.com/embed/I8KfD6z2DBY?autoplay=1&showinfo=0&rel=0">Mike and Kit</a></p>
							</div>
						</div>
						<div class="clr"></div>
						
							<!-- <div id="the_post-id-<?php echo get_the_ID(); ?>" class="animatedModal">
								<div class="close-animatedModal close-the_post-id-<?php echo get_the_ID()?>"></div>
									<div class="modal-content">
										<div class="video-content fl">
											<?php echo $meta_video;?>
										</div>
										<div class="video-content v-c-right fr">
											<h2><?php the_title(); ?></h2>
											<h3>Mike and Kit <span>Sunday: February 27, 2015</span></h3>
											<p><?php the_content(); ?></p>
										</div>
									</div>
							</div> -->
					</li>
				<?php 
					wp_reset_postdata();
					endforeach;
				endif; ?>
				</ul>
			</div>
			<div class="clr"></div>
		</div>
	</section>

<?php 
get_footer();
?>