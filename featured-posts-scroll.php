<?php
/*
Plugin Name: Featured Posts Scroll
Plugin URI: http://chasepettit.com
Description: A basic javascript based scrolling display of post titles and thumbnails.
Version: 1.1
Author: Chaser324
Author URI: http://chasepettit.com
License: GNU GPL2

/*  Copyright 2011  Chase Pettit  (email : chasepettit@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// Register activate/deactivate hooks for the plugin
register_activation_hook( __FILE__, 'fps_activate' );
register_deactivation_hook( __FILE__, 'fps_deactivate' );

//Create menu for configure page
add_action('admin_menu', 'fps_admin_actions');

//Add the necessary stylesheet & script
add_action('wp_print_styles', 'fps_add_style');
add_action('init', 'fps_add_script');

// Register new image thumbnail sizes
add_action('admin_init', 'fps_define_image_sizes');

/* Activate the plugin by creating/initializing all options */
function fps_activate()
{
	$max_posts = get_option('fps_max_posts');
    if ( empty($max_posts) ) {
        $max_posts = '5';
        update_option('fps_max_posts', $max_posts);
    }

    $post_title_color = get_option('fps_title_color');
    if ( empty($post_title_color) ) {
        $post_title_color = 'ffffff';
        update_option('fps_title_color', $post_title_color);
    }

    $post_excerpt_color = get_option('fps_excerpt_color');
    if ( empty($post_excerpt_color) ) {
        $post_excerpt_color = 'ffffff';
        update_option('fps_excerpt_color', $post_excerpt_color);
    }

    $post_heading_color = get_option('fps_heading_color');
    if ( empty($post_heading_color) ) {
        $post_heading_color = 'b3320f';
        update_option('fps_heading_color', $post_heading_color);
    }

    $post_heading_text = get_option('fps_heading_text');
    if ( empty($post_heading_text) ) {
        $post_heading_text = 'Featured Posts';
        update_option('fps_heading_text', $post_heading_text);
    }
    
    $post_bg_color = get_option('fps_bg_color');
    if ( empty($post_bg_color) ) {
        $post_bg_color = '1b1b1b';
        update_option('fps_bg_color', $post_bg_color);
    }

    $post_textbg_color = get_option('fps_textbg_color');
    if ( empty($post_textbg_color) ) {
        $post_textbg_color = '000000';
        update_option('fps_textbg_color', $post_textbg_color);
    }

    $post_textbg_alpha = get_option('fps_textbg_alpha');
    if ( empty($post_textbg_alpha) ) {
        $post_textbg_alpha = '0.5';
        update_option('fps_textbg_alpha', $post_textbg_alpha);
    }
    
    $post_innershadow_color = get_option('fps_innershadow_color');
    if ( empty($post_innershadow_color) ) {
        $post_innershadow_color = '000000';
        update_option('fps_innershadow_color', $post_innershadow_color);
    }

    $post_outershadow_color = get_option('fps_outershadow_color');
    if ( empty($post_outershadow_color) ) {
        $post_outershadow_color = '000000';
        update_option('fps_outershadow_color', $post_outershadow_color);
    }

    $post_arrow_color = get_option('fps_arrow_color');
    if ( empty($post_arrow_color) ) {
        $post_arrow_color = 'orange';
        update_option('fps_arrow_color', $post_arrow_color);
    }
    
    $post_display_title = get_option('fps_display_title');
    if ( empty($post_display_title) ) {
        $post_display_title = '1';
        update_option('fps_display_title', $post_display_title);
    }

    $post_display_excerpt = get_option('fps_display_excerpt');
    if ( empty($post_display_excerpt) ) {
        $post_display_excerpt = '1';
        update_option('fps_display_excerpt', $post_display_excerpt);
    }

    $post_display_heading = get_option('fps_display_heading');
    if ( empty($post_display_heading) ) {
        $post_display_heading = '1';
        update_option('fps_display_heading', $post_display_heading);
    }

    $post_roundedconers = get_option('fps_roundedcorners');
    if ( empty($post_roundedconers) ) {
        $post_roundedconers = '1';
        update_option('fps_roundedcorners', $post_roundedconers);
    }

    $post_dropshadows = get_option('fps_dropshadows');
    if ( empty($post_dropshadows) ) {
        $post_dropshadows = '1';
        update_option('fps_dropshadows', $post_dropshadows);
    }

    $post_autoscroll = get_option('fps_autoscroll');
    if ( empty($post_autoscroll) ) {
        $post_autoscroll = '1';
        update_option('fps_autoscroll', $post_autoscroll);
    }

    $post_radius = get_option('fps_corner_radius');
    if ( empty($post_radius) ) {
        $post_radius = '5px';
        update_option('fps_corner_radius', $post_radius);
    }

    $post_dropshadow_x = get_option('fps_dropshadow_x');
    if ( empty($post_dropshadow_x) ) {
        $post_dropshadow_x = '0';
        update_option('fps_dropshadow_x', $post_dropshadow_x);
    }

    $post_dropshadow_y = get_option('fps_dropshadow_y');
    if ( empty($post_dropshadow_y) ) {
        $post_dropshadow_y = '5';
        update_option('fps_dropshadow_y', $post_dropshadow_y);
    }

    $post_dropshadow_blur = get_option('fps_dropshadow_blur');
    if ( empty($post_dropshadow_blur) ) {
        $post_dropshadow_blur = '5';
        update_option('fps_dropshadow_blur', $post_dropshadow_blur);
    }
}

/* Deactivate plugin by deleting all option data */
function fps_deactivate()
{
    delete_option('fps_max_posts');
        
    delete_option('fps_title_color');
    delete_option('fps_excerpt_color');

    delete_option('fps_heading_color');
    delete_option('fps_heading_text');
    
    delete_option('fps_bg_color');
    delete_option('fps_textbg_color');
    delete_option('fps_textbg_alpha');
    
    delete_option('fps_innershadow_color');
    delete_option('fps_outershadow_color');

    delete_option('fps_arrow_color');
    
    delete_option('fps_display_title');
    delete_option('fps_display_excerpt');
    delete_option('fps_display_heading');

    delete_option('fps_roundedcorners');
    delete_option('fps_dropshadows');

    delete_option('fps_autoscroll');

    delete_option('fps_corner_radius');
    delete_option('fps_dropshadow_x');
    delete_option('fps_dropshadow_y');
    delete_option('fps_dropshadow_blur');
}

/* Setup menu page creation */
function fps_admin_actions()
{
	$page = add_menu_page('Featured Posts Scroll', 'Featured Posts Scroll', 'manage_options', 'featured-posts-scroll', 'fps_admin');
    
    add_action( 'admin_print_styles-' . $page, 'fps_menu_styles' );
}

/* Display the admin page if user has permissions */
function fps_admin() {
    if ( !current_user_can('manage_options') )
        wp_die( __('You do not have sufficient permissions to access this page.') );
    include('featured-posts-scroll-admin.php');
}

/* Enqueue stylesheets needed on the admin page */
function fps_menu_styles()
{
    wp_enqueue_style( 'jcolorpicker-style', WP_PLUGIN_URL.'/featured-posts-scroll/css/colorpicker.css' );
}

/* Enqueue styles necessary for the plugin */
function fps_add_style()
{
    wp_enqueue_style('fps-style', WP_PLUGIN_URL.'/featured-posts-scroll/css/featuredposts.css');
}

/* Enqueue scripts necessary for the plugin */
function fps_add_script()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('featuredpostslides', WP_PLUGIN_URL.'/featured-posts-scroll/js/featuredpostslides.js');
    }
    else {
        wp_enqueue_script('jquery');
        wp_enqueue_script('jcolorpicker', WP_PLUGIN_URL.'/featured-posts-scroll/js/colorpicker.js');
        wp_enqueue_script('admincolors', WP_PLUGIN_URL.'/featured-posts-scroll/js/admincolors.js');
    }
}

/* Define image sizes used by the plugin */
function fps_define_image_sizes()
{
    //add_theme_support( 'post-thumbnails' ); // Add support for posts
    add_image_size( 'fps-post', 480, 225, true ); // large size, hard crop mode
    add_image_size( 'fps-post-square', 240, 225, true ); // small size, hard crop mode
}

/* Generate the plugin display */
function fps_show($atts)
{
    // Retrieve all admin options
	$max_posts = get_option('fps_max_posts');
        
    $post_title_color = get_option('fps_title_color');
    $post_excerpt_color = get_option('fps_excerpt_color');

    $post_heading_color = get_option('fps_heading_color');
    $post_heading_text = get_option('fps_heading_text');
    
    $post_bg_color = get_option('fps_bg_color');
    $post_textbg_color = get_option('fps_textbg_color');
    $post_textbg_alpha = get_option('fps_textbg_alpha');
    
    $post_innershadow_color = get_option('fps_innershadow_color');
    $post_outershadow_color = get_option('fps_outershadow_color');

    $post_arrow_color = get_option('fps_arrow_color');
    
    $post_display_title = get_option('fps_display_title');
    $post_display_excerpt = get_option('fps_display_excerpt');
    $post_display_heading = get_option('fps_display_heading');

    $post_roundedconers = get_option('fps_roundedcorners');
    $post_dropshadows = get_option('fps_dropshadows');

    $post_corner_radius = get_option('fps_corner_radius');
    $post_dropshadow_x = get_option('fps_dropshadow_x');
    $post_dropshadow_y = get_option('fps_dropshadow_y');
    $post_dropshadow_blur = get_option('fps_dropshadow_blur');

    $post_autoscroll = get_option('fps_autoscroll');

    // Format all color hex value strings
    $post_title_color = "#".$post_title_color;
    $post_excerpt_color = "#".$post_excerpt_color;
    $post_heading_color = "#".$post_heading_color;
    $post_bg_color = "#".$post_bg_color;
    $post_innershadow_color = "#".$post_innershadow_color;
    $post_outershadow_color = "#".$post_outershadow_color;
    $post_textbg_color = 'rgba('.hex2RGB($post_textbg_color, true).','.$post_textbg_alpha.')';

    // Version 1.0 only supports single item layout
    $wrapper_classes .= "fps-single";
    $ul_classes .= "fps-single";
    $bg_classes .= "fps-single";
    $li_classes = "";

    // Check if rounded corners are enabled
    if ($post_roundedconers == '1')
    {
        $ul_classes .= " fps-rounded";
        $bg_classes .= " fps-rounded";
        $li_classes .= " fps-rounded";
    }

    // Check if drop shadows are enabled
    if ($post_dropshadows == '1')
    {
        $ul_classes .= " fps-shadowed-inner";
        $bg_classes .= " fps-shadowed-outer";
    }

    // Check if auto scrolling is enabled
    if ($post_autoscroll == '1')
    {
        $wrapper_classes .= " fps-autoscroll";
    }

    // Generate the main output.
    // Do not generate if this is not on the first page (need to make this optional in 2.0)
    if (!is_paged())
    {
        $output .= '<!--Automatic Image Slider w/ CSS & jQuery with some customization-->';
        
        // Define styles that are based on admin options
        $output .= '<style type="text/css">';

        // Define rounded corner class
        $output .= '.fps-rounded {-moz-border-radius: '.$post_corner_radius.'; border-radius: '.$post_corner_radius.';}';

        // Define drop-shadow class
        $shadow = $post_dropshadow_x.'px '.$post_dropshadow_y.'px '.$post_dropshadow_blur.'px ';
        $output .= '.fps-shadowed-inner {-moz-box-shadow: '.$shadow.' '.$post_innershadow_color.
                   '; -webkit-box-shadow: '.$shadow.' '.$post_innershadow_color.
                   '; box-shadow: '.$shadow.' '.$post_innershadow_color.';}';
        $output .= '.fps-shadowed-outer {-moz-box-shadow: '.$shadow.' '.$post_outershadow_color.
                   '; -webkit-box-shadow: '.$shadow.' '.$post_outershadow_color.
                   '; box-shadow: '.$shadow.' '.$post_outershadow_color.';}';
        
        // Define classes for title/excerpt background
        $output .= '.fps-text {background: '.$post_textbg_color.';}';
        $output .= 'a:link.featured-posts-image,a:visited.featured-posts-image,a:hover.featured-posts-image {'.
                   'color: '.$post_title_color.';}';

        // Define the arrow image being used
        $output .= '#scrollFeaturedPostsLeft, #scrollFeaturedPostsRight {background: transparent url('.WP_PLUGIN_URL.
                   '/featured-posts-scroll/images/arrows-'.$post_arrow_color.'.png) no-repeat;}';
        $output .= '#scrollFeaturedPostsRight {background-position: -24px 0pt;};';
        $output .= '</style>';

        // div#featured-posts-wrapper
        $output .= '<div id="featured-posts-wrapper" class="'.$wrapper_classes.'">';
        
        // Display heading if option selected
        if ($post_display_heading == '1')
        {
            $output .= '<p id="featured-posts-header" style="color:'.$post_heading_color.'">'.$post_heading_text.'</p>';
        }

        // Add left arrow and open unordered list
        $output .= '<div id="scrollFeaturedPostsLeft"></div>';
        $output .= '<ul id="featured-posts" class="'.$ul_classes.'">';

        // Generate arguments for query
        $post_details = NULL;
        if ($atts == NULL)
        {
            $args = array(
                'numberposts'     => $max_posts,
                'offset'          => 0,
                'category'        => '',
                'orderby'         => 'post_date',
                'order'           => 'DESC',
                'include'         => '',
                'exclude'         => '',
                'post_type'       => 'post',
                'tag'             => '',
                'post_status'     => 'publish' );
        }
        else
        {
            $args = $atts;
            $args['numberposts'] = $max_posts;
            $args['post_status'] = 'publish';
        }
        $recent_posts = get_posts( $args );

        if ( count($recent_posts)< $max_posts ) {
            $max_posts = count($recent_posts);
        }

        // Get details for each article retrieved in query
        foreach ( $recent_posts as $key=>$val ) 
        {
            $post_details[$key]['post_title'] = $val->post_title;
            $post_details[$key]['post_excerpt'] = $val->post_excerpt;
            $post_details[$key]['post_permalink'] = get_permalink($val->ID);
            if (has_post_thumbnail($val->ID))
            {
                $post_details[$key]['post_img_src'] = wp_get_attachment_image_src( get_post_thumbnail_id($val->ID), 'fps-post');
            }
            else
            {
                $post_details[$key]['post_img_src'][0] = '';
            }
        }

        // Generate list item for each post retrieved in queue
        for ( $i = 0; $i < $max_posts; $i++ )
        {
            $post_permalink = $post_details[$i]['post_permalink'];
            $post_title = $post_details[$i]['post_title'];
            $post_excerpt = $post_details[$i]['post_excerpt'];
            $post_img = $post_details[$i]['post_img_src'][0];

                if ($post_img != '')
                {
                    $output .= '<li class="'.$li_classes.'" onclick="document.location.href=\''.$post_permalink.'\'" style="background:url('.$post_img.')">';
                }
                else
                {
                    $output .= '<li class="'.$li_classes.'" onclick="document.location.href=\''.$post_permalink.'\'">';
                }
                    $output .= '<div class="fps-text">';
                        if ($post_display_title == '1')
                        {
                            $output .= '<p class="fps-title" style="color:'.$post_title_color.'">'.$post_title.'</p>';
                        }
                        if ($post_display_excerpt == '1')
                        {
                            $output .= '<p class="fps-excerpt" style="color:'.$post_excerpt_color.'">'.$post_excerpt.'</p>';
                        }
                    $output .= '</div>';
                $output .= '</li>';
        }
        $output .= '</ul>';
        $output .= '<div id="scrollFeaturedPostsRight"></div>';
        $output .= '<div id="featured-posts-background" class="'.$bg_classes.'" style="background:'.$post_bg_color.'"></div>';
        $output .= '</div>'; // div#featured-posts-wrapper
    }
    else
    {
        $output = '';
    }

    return $output;
}

// Handle short code
function fps_shortcode_handler($atts)
{
    return fps_show(NULL);
}

// Add the short code [fps]
add_shortcode('fps', 'fps_shortcode_handler');

/* Convert a hex RGB string into individual RGB decimal values */
function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
}


?>