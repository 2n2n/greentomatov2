<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>

<section id="main-wrapper" style="padding-bottom: 0px;">
	<div class="inner-page bp-rel auto landing">
		<div class="feature-holder">
			<div class="fh-inner">
				<section class="player">
				<video style="width: 100%" autoplay loop>
				  <source src="<?php echo get_bloginfo('url').'/wp-content/uploads/videos/teaser.mp4'?>" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
				</section>
				<section class="desc">
					<h2><span>Green</span> Tomato</h2>
					<h3>"WHERE STORIES UNFOLD."</h3>

					<table class="details">
						<tbody>
							<tr>
								<td class="label">Category:</td>
								<td></td>
							</tr>
							<tr>
								<td class="label">Services:</td>
								<td></td>
							</tr>
						</tbody>
					</table>
					
				</section>
			</div>
		</div>

		<?php get_template_part('partials/nav-no-header'); ?>
	</div>
</section>

<?php get_footer(); ?>
