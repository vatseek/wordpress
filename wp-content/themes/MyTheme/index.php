<?php get_header(); ?>

	<section id="about" class="s_about bg_light">
		<div class="section_header">
			<h2><?php
				$idObj = get_category_by_slug('s_about');
				$id = $idObj->term_id;
				echo get_cat_name($id);
				?></h2>
			<div class="s_descr_wrap">
				<div class="s_descr"><?php
					echo category_description($id);
					?></div>
			</div>
		</div>

	</section>

<?php get_footer(); ?>