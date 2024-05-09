<?php get_header();

if (have_posts()) {

	// Load posts loop.
	while (have_posts()) {
		the_post();
		//the_title();
		the_content();
	}
} else {

	echo "No related Post Found";
}
get_footer();
