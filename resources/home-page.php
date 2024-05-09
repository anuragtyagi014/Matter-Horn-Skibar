<?php
// Template Name: Home Page
get_header();
?>
<main class="mt-5">
    <div class="container marketing">
        <div class="row">
            <?php
            get_template_part('resources/components/post', 'file');
            ?>


        </div>
        <hr class="featurette-divider">
    </div>
    <?php
    get_footer();
    ?>