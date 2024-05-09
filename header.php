<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        p {
            text-transform: normal !important;
        }
    </style>
</head>


<body <?php body_class(); ?>>
    <!-- Main Start -->

    <header>
        <div class="desk-head">
            <div class="logo-desk">
                <a href="<?php echo home_url(); ?>"> <img src="<?php the_field('logo', 'option'); ?>" class="img-fluid" alt=""></a>
            </div>
            <div class="nav-desk">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

                <!--  <ul>
                    <li>
                        <a href="https://wp.localserverpro.com/matterhorn/index.php/menu/">Menu</a>
                    </li>
                    <li>
                        <a href="#">Mug Club</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="https://wp.localserverpro.com/matterhorn/index.php/employment-application/">Employment Application</a>
                    </li>
                    <li>
                        <a href="https://wp.localserverpro.com/matterhorn/index.php/contact-page/">Contact</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </header>

    <section class="res-header">
        <div class="phone-logo">
            <a href="<?php echo home_url(); ?>"> <img src="<?php the_field('mobile_logo', 'option'); ?>" alt=""></a>
        </div>
        <div class="phone-bar">
            <i class="fas fa-bars"></i>
        </div>
    </section>

    <div class="phone-navigation">
        <div class="res-asset">
            <div class="logo">
                <a href="<?php echo home_url(); ?>"> <img src="<?php the_field('sidebar_logo', 'option'); ?>" alt=""></a>
            </div>
            <div class="cross">
                <h3>X</h3>
            </div>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

        <!--     <ul>
            <li>
                <a href="https://wp.localserverpro.com/matterhorn/">Home</a>
            </li>
            <li>
                <a href="https://wp.localserverpro.com/matterhorn/index.php/menu/">Menu</a>
            </li>
            <li>
                <a href="#">Mug Club</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="https://wp.localserverpro.com/matterhorn/index.php/employment-application/">Employment Application</a>
            </li>
            <li>
                <a href="https://wp.localserverpro.com/matterhorn/index.php/contact-page/">Contact</a>
            </li>
        </ul> -->
    </div>