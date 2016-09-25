<?php
get_header();
?>
	<?php get_template_part('partials/nav'); ?>
	<section id="main-wrapper">
		<div class="inner-page bp-rel auto moving-pic">
			<div class="wedding-post container-holder">
				<div class="custom-holder">
					<div class="custom leftie">
						<?php
						$category = term_exists('Moving Pictures', 'category');
						render_sub_categories($category['term_id']);
						?>
					</div>
					<div class="custom rightie">&nbsp;</div>
				</div>
				<ul class="item-list">
				<?php				
				
				$args = array('category' => $category['term_id']);
				$posts = get_posts( $args );
				
				if(count($posts) > 0): 
					foreach($posts as $key => $post): setup_postdata($post); ?>
					<?php $meta_video = get_meta_video(); ?>
					<li>
						<div class="wedding-left wedding-inner">
							<?php if($key == 0): ?>
							<?php endif;?>
							<div class="wedding-post-video img"><a class="video-popup" href="#the_post-id-<?php echo get_the_ID(); ?>">
								<?php echo $meta_video; ?>
							</div>
						</div>
						<div class="wedding-right wedding-inner wedding-right-1 fr">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<h3><?php the_date() ?></h3>
							<p><?php the_content(); ?></p>
							<div class="watch-video">
								<p>Watch their Prenup Video: <a class="fancybox-video" href="https://www.youtube.com/embed/I8KfD6z2DBY?autoplay=1&showinfo=0&rel=0">RIGHT IN FRONT OF ME MOVIE TRAILER</a></p>
								<p>Watch their Infographics: <a class="fancybox-video" href="https://www.youtube.com/embed/I8KfD6z2DBY?autoplay=1&showinfo=0&rel=0">Mike and Kit</a></p>
							</div>
						</div>
						<div class="clr"></div>
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