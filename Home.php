<?php /* Template Name: HomePage */ ?>

<?php get_header() ?>

<section class="main-hero-slider">
    <div class="first-hero-slide">
        <?php if (have_rows('banner_image')) :
            while (have_rows('banner_image')) : the_row();
        ?>
                <div class="item">
                    <img src="<?php the_sub_field('banner_images'); ?>" class="img-fluid slide-imgg" alt="">
                    <div class="slider-caption-main">
                        <h1><?php the_sub_field('heading_sec1'); ?></h1>
                        <h3><?php the_sub_field('sub_heading_sec'); ?></h3>
                        <!-- <a href="#">ORDER NOW</a> -->
                        <!-- <img src="https://wp.localserverpro.com/matterhorn/wp-content/uploads/2022/11/text-img.png" alt=""> -->
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      
    </div>
</section>


<section class="second-sec-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-head-bg-sec" data-aos="fade-up" data-aos-duration="1000">
                    <h2><?php the_field('heading_sec2'); ?></h2>
                    <?php the_field('details_sec2'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('foods_list')) :
                while (have_rows('foods_list')) : the_row();
            ?>
                    <div class="col-lg-4 col-md-6">
                        <a>
                            <div class="eats-box" data-aos="zoom-in-up" data-aos-duration="1000">
                                <img src="<?php the_sub_field('images_list'); ?>" alt="" class="img-fluid">
                                <h4><?php the_sub_field('title_list'); ?></h4>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>


<section class="book-sec">
    <div class="book-sec-bg">
        <h2 data-aos="fade-down" data-aos-duration="1500"><?php the_field('heading_book'); ?></h2>
        <?php the_field('details_sec3'); ?>
        <a href="<?php the_field('button_link_sec3'); ?>"><?php the_field('button_sec3'); ?></a>
    </div>
</section>

<section class="dish-menu-sec">
    <div class="all-menu-sec">
        <div class="container">
            <div class="main-head-bg-sec" data-aos="zoom-in-up" data-aos-duration="1500">
                <h2><?php the_field('menu_heading'); ?></h2>
                <h5><?php the_field('sub_menu'); ?></h5>
            </div>
            <div class="row">
                <?php if (have_rows('menu_images')) :
                    while (have_rows('menu_images')) : the_row();
                ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="menu-imgg" data-aos="slide-up" data-aos-duration="1500">
                                <img src="<?php the_sub_field('images_menu'); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
               
            </div>
            <div class="row">
                <?php if (have_rows('menu_lists')) :
                    while (have_rows('menu_lists')) : the_row();
                ?>
                        <div class="col-md-6">
                            <div class="menu-list-tab" data-aos="zoom-in" data-aos-duration="1500">
                                <h3><?php the_sub_field('main_hedaing_menu'); ?></h3>
                                <?php if (have_rows('each_menu')) :
                                    while (have_rows('each_menu')) : the_row();
                                ?>
                                        <div class="each-menu">
                                            <h4><?php the_sub_field('title_menu'); ?> <span><?php the_sub_field('prices'); ?></span></h4>
                                            <h6><?php the_sub_field('details_menu'); ?></h6>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                               
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
               
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="<?php the_field('button_link_menu'); ?>" class="full-menu"><?php the_field('menu_button'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gift" id="Gift">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img">
                    <img src="https://matterhornskibar.com/wp-content/uploads/2022/11/Gift-Card-01-01-01.png" alt="GIFT" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="giftform">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal"><input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="TTSTBL7PNLPNC" />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">

                                    <label><input type="hidden" name="on0" value="Gift Card Amount" /> Gift Card Amount
                                        <select name="os0" class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false">
                                            <option value="Amount 1">Amount 1 $25.00 USD</option>
                                            <option value="Amount 2">Amount 2 $50.00 USD</option>
                                            <option value="Amount 3">Amount 3 $75.00 USD</option>
                                            <option value="Amount 4">Amount 4 $100.00 USD</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label><input type="hidden" name="on1" value="Recipients Name" /> Recipients Name
                                        <input type="text" name="os1" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false">
                                        There is no need to enter the recipients address
                                        if same as paypal or credit card address.
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label><input type="hidden" name="on2" value="Recipients Address" /> Recipients Address: Type on 1 Line
                                        <input type="text" name="os2" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false"></label>
                                </div>
                            </div>
                        </div>



                  <a href="https://matterhornskibar.com/product/gift-card/" class="show_more">Show More</a>      

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery-sec">
    <div class="all-gally-img">
        <div class="row">
            <?php if (have_rows('galleries')) :
                while (have_rows('galleries')) : the_row();
            ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="gall-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="<?php the_sub_field('gallery_images'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
       
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