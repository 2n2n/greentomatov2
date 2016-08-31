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
								<td>Videography</td>
							</tr>
							<tr>
								<td class="label">Services:</td>
								<td>Same-day Edits, Prenupital Videos, Graphic Animations, Corporate Videos (AVPs, Advertisments, Protfolio)</td>
							</tr>
						</tbody>
					</table>
					
					<section class='pitch'>
						<h3 class='greenify'>We are green tomato productions.</h3>
						We capture life events, film different stories about love & unfold stories to inspire others.
						<p>
							Our company has been around form 5 fruitful years doing same-day edits, short love stories, save the dates, 2D graphics and other film-related services.
						</p>
						<p>
							Fresh ideas and out-of-this-world concept is the core of our passion for videography. We like to make films to spread happiness and love and to share our talents as well.
						</p>
						<p>
							We are the Greentomato Production.. and we would like you to be part of our life, our diary.
						</p>

						<p><i class='greenify'>Spread the love and be loved.</i></p>
					</section>
				</section>
			</div>
		</div>

		<?php get_template_part('partials/nav-no-header'); ?>
	</div>
</section>

<?php get_footer(); ?>
