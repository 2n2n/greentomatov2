</section>
<footer>
	<div class="gt-footer">
		<div class="gt-footer-logo">
			<img src="<?php echo get_template_directory_uri().'/html/images/page_template/menu_logo.png'?>" alt="greentomato footer logo">
		</div>
		<ul class="gt-partners auto">
			<?php $logo_count = 15; 
				for($i = 1; $i <= $logo_count; $i++) :
					$count = sprintf("%02d", $i);
			?>
			<li><a href="#"><img src="<?php echo get_template_directory_uri().'/html/images/partners/logo_'.$count.'.png'?>" alt=""></a></li>
			<?php endfor;?>
		</ul>
	</div>
	<?php wp_footer();?>
</footer>
</div>

</body>
</html>