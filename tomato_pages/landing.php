<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>

<section id="main-wrapper" style="padding-bottom: 0px;">
	<div class="inner-page bp-rel auto landing">
		<div class="feature-holder">
			<div class="fh-inner">
				<section class="player">
				<video style="width: 100%" autoplay loop="true">
				  <source src="<?php echo get_bloginfo('url').'/wp-content/uploads/videos/teaser.mp4'?>" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
				</section>
				<section class="desc">
					<h2>Green Tomato</h2>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto illum architecto incidunt beatae nesciunt enim, praesentium modi voluptatum fugit! Provident labore voluptatibus illo quae sit officia id eaque ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex voluptatem dolorum dignissimos saepe a officiis veniam, eos nisi ratione delectus atque optio, pariatur nihil provident sint. Earum, ab, officiis! Ipsa.
				</section>
			</div>
		</div>

		<?php get_template_part('partials/nav-no-header'); ?>
	</div>
</section>

<?php get_footer(); ?>
