<?php

get_header();

?>

	<div class='sutun-12'>

		<div class="arama">

			<?php get_search_form(); ?>

		</div>
<?php

if (have_posts()) :

	while (have_posts()) : the_post();

		get_template_part("icerikler/icerik", get_post_format());

	endwhile;

	echo paginate_links();
	previous_posts_link('Önceki Sayfaya geçiver');
	next_posts_link('Sonraki Sayfaya geçiver');

else :

	echo "<p>İçerik bulunamadı.</p>";

endif;

echo "</div>";

get_footer();

?>