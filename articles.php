<?php
/*Template Name: Articles*/
$args = array('post_type' => 'post', 'posts_per_page' => 10, 'post_status' => 'publish');
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
?>

        <div class="hero-slide">
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="prss-art">
                        <img src="<?php echo thumbnail(); ?>" class="img-fluid" alt="">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-head-bg-sec excp">
                        <h2><?php echo the_title(); ?></h2>
                        <p><?php echo the_content(); ?></p>
                        <a href="http://www.portlandmonthly.com/portmag/2013/12/matterhorn-ski-bar-sunday-river/">Read More</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>