<?php /* Template Name: Menu Page */ ?>
<?php get_header() ?>
<!-- <section class="bg-sec menubg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php //the_field('breadcrumbs_title');?></h1>
                <ul>
                    <li><a href="<?php //echo home_url();?>">Home /</a></li>
                    <li><a><?php //the_field('breadcrumbs_title');?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="dish-menu-sec">
    <div class="all-menu-sec">
        <div class="container">
            <div class="main-head-bg-sec" data-aos="zoom-in-up" data-aos-duration="1500">
                <h2><?php the_field('menu_heading'); ?></h2>
                <h5><?php the_field('sub_menu'); ?></h5>
            </div>
            <div class="row">
                <?php if(have_rows('menu_images')):
                 while(have_rows('menu_images')): the_row();
                 ?>
                <div class="col-lg-3 col-md-6">
                    <div class="menu-imgg" data-aos="slide-up" data-aos-duration="1500">
                        <img src="<?php the_sub_field('images_menu');?>" class="img-fluid" alt="">
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif;?>
               
            </div>
            <div class="row">
                <?php if(have_rows('menu_lists')):
                 while(have_rows('menu_lists')): the_row();
                 ?>
                <div class="col-md-6">
                    <div class="menu-list-tab" data-aos="zoom-in" data-aos-duration="1500">
                        <h3><?php the_sub_field('main_hedaing_menu');?></h3>
                         <?php if(have_rows('each_menu')):
                        while(have_rows('each_menu')): the_row();
                         ?>
                        <div class="each-menu">
                            <h4><?php the_sub_field('title_menu');?> <span><?php the_sub_field('prices');?></span></h4>
                            <h6><?php the_sub_field('details_menu');?></h6>
                        </div>
                         <?php endwhile;?>
                        <?php endif;?>
                    
                    </div>
                </div>
                 <?php endwhile;?>
                <?php endif;?>
           
            </div>
           
        </div>
    </div>
</section>

<section class="gallery-sec">
    <div class="all-gally-img">
        <div class="row">
             <?php if(have_rows('galleries')):
                 while(have_rows('galleries')): the_row();
                 ?>
            <div class="col-lg-3 col-md-6">
                <div class="gall-img" data-aos="zoom-in-up" data-aos-duration="2000">
                    <img src="<?php the_sub_field('gallery_images'); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <?php endwhile;?>
                <?php endif;?>
        
        </div>
    </div>
</section>

<section class="press-article">
    <div class="container">
        <div class="press-slider">
            <?php echo do_shortcode('[articles_shortcode]'); ?>
       </div>
    </div>
</section>

<?php get_footer() ?>