<?php /* Template Name: About Us */ ?>

<?php
get_header();
?>
	<?php get_template_part('partials/nav'); ?>
	<section id="main-wrapper">
		<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();
					the_content(); 
			}
		}
		else {
			echo "<h1>No Content</h1>";
		}

		?>
	</section>

<?php 
get_footer();
?>