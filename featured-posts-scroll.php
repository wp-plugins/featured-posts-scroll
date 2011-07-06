<?php
/*
Plugin Name: Featured Posts Scroll
Plugin URI: http://chasepettit.com
Description: A basic javascript based scrolling display of post titles and thumbnails.
Version: 1.9
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
        $post_display_heading = '0';
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

    $post_height = get_option('fps_height');
    if ( empty($post_height) ) {
        $post_height = '245';
        update_option('fps_height', $post_height);
    }

    $post_width = get_option('fps_width');
    if ( empty($post_width) ) {
        $post_width = '550';
        update_option('fps_width', $post_width);
    }

    $post_display_slidenumbers = get_option('fps_display_slidenumbers');
    if ( empty($post_display_slidenumbers) ) {
        $post_display_slidenumbers = '1';
        update_option('fps_display_slidenumbers', $post_display_slidenumbers);
    }

    $post_arrow_position = get_option('fps_arrow_position');
    if ( empty($post_arrow_position) ) {
        $post_arrow_position = 'below';
        update_option('fps_arrow_position', $post_arrow_position);
    }

    $post_arrow_custom_url = get_option('fps_arrow_custom_url');
    if ( empty($post_arrow_custom_url) ) {
        $post_arrow_custom_url = '';
        update_option('fps_arrow_custom_url', $post_arrow_custom_url);
    }

    $post_selectedslide_textcolor = get_option('fps_selectedslide_textcolor');
    if ( empty($post_selectedslide_textcolor) ) {
        $post_selectedslide_textcolor = 'ffffff';
        update_option('fps_selectedslide_textcolor', $post_selectedslide_textcolor);
    }

    $post_unselectedslide_textcolor = get_option('fps_unselectedslide_textcolor');
    if ( empty($post_unselectedslide_textcolor) ) {
        $post_unselectedslide_textcolor = 'ffffff';
        update_option('fps_unselectedslide_textcolor', $post_unselectedslide_textcolor);
    }

    $post_selectedslide_bgcolor = get_option('fps_selectedslide_bgcolor');
    if ( empty($post_selectedslide_bgcolor) ) {
        $post_selectedslide_bgcolor = '303030';
        update_option('fps_selectedslide_bgcolor', $post_selectedslide_bgcolor);
    }

    $post_unselectedslide_bgcolor = get_option('fps_unselectedslide_bgcolor');
    if ( empty($post_unselectedslide_bgcolor) ) {
        $post_unselectedslide_bgcolor = '545454';
        update_option('fps_unselectedslide_bgcolor', $post_unselectedslide_bgcolor);
    }

    $post_selectedslide_bold = get_option('fps_selectedslide_bold');
    if ( empty($post_selectedslide_bold) ) {
        $post_selectedslide_bold = '1';
        update_option('fps_selectedslide_bold', $post_selectedslide_bold);
    }

    $post_selectedslide_italics = get_option('fps_selectedslide_italics');
    if ( empty($post_selectedslide_italics) ) {
        $post_selectedslide_italics = '0';
        update_option('fps_selectedslide_italics', $post_selectedslide_italics);
    }

    $post_unselectedslide_bold = get_option('fps_unselectedslide_bold');
    if ( empty($post_unselectedslide_bold) ) {
        $post_unselectedslide_bold = '1';
        update_option('fps_unselectedslide_bold', $post_unselectedslide_bold);
    }

    $post_unselectedslide_italics = get_option('fps_unselectedslide_italics');
    if ( empty($post_unselectedslide_italics) ) {
        $post_unselectedslide_italics = '0';
        update_option('fps_unselectedslide_italics', $post_unselectedslide_italics);
    }

    $post_slide_bgradius = get_option('fps_slide_bgradius');
    if ( empty($post_slide_bgradius) ) {
        $post_slide_bgradius = '2.0';
        update_option('fps_slide_bgradius', $post_slide_bgradius);
    }

    $post_selectedslide_dropshadow_x = get_option('fps_selectedslide_dropshadow_x');
    if ( empty($post_selectedslide_dropshadow_x) ) {
        $post_selectedslide_dropshadow_x = '0';
        update_option('fps_selectedslide_dropshadow_x', $post_selectedslide_dropshadow_x);
    }

    $post_selectedslide_dropshadow_y = get_option('fps_selectedslide_dropshadow_y');
    if ( empty($post_selectedslide_dropshadow_y) ) {
        $post_selectedslide_dropshadow_y = '2';
        update_option('fps_selectedslide_dropshadow_y', $post_selectedslide_dropshadow_y);
    }

    $post_selectedslide_dropshadow_blur = get_option('fps_selectedslide_dropshadow_blur');
    if ( empty($post_selectedslide_dropshadow_blur) ) {
        $post_selectedslide_dropshadow_blur = '2';
        update_option('fps_selectedslide_dropshadow_blur', $post_selectedslide_dropshadow_blur);
    }

    $post_selectedslide_inset = get_option('fps_selectedslide_inset');
    if ( empty($post_selectedslide_inset) ) {
        $post_selectedslide_inset = '1';
        update_option('fps_selectedslide_inset', $post_selectedslide_inset);
    }

    $post_unselectedslide_dropshadow_x = get_option('fps_unselectedslide_dropshadow_x');
    if ( empty($post_unselectedslide_dropshadow_x) ) {
        $post_unselectedslide_dropshadow_x = '0';
        update_option('fps_unselectedslide_dropshadow_x', $post_unselectedslide_dropshadow_x);
    }

    $post_unselectedslide_dropshadow_y = get_option('fps_unselectedslide_dropshadow_y');
    if ( empty($post_unselectedslide_dropshadow_y) ) {
        $post_unselectedslide_dropshadow_y = '0';
        update_option('fps_unselectedslide_dropshadow_y', $post_unselectedslide_dropshadow_y);
    }

    $post_unselectedslide_dropshadow_blur = get_option('fps_unselectedslide_dropshadow_blur');
    if ( empty($post_unselectedslide_dropshadow_blur) ) {
        $post_unselectedslide_dropshadow_blur = '0';
        update_option('fps_unselectedslide_dropshadow_blur', $post_unselectedslide_dropshadow_blur);
    }

    $post_unselectedslide_inset = get_option('fps_unselectedslide_inset');
    if ( empty($post_unselectedslide_inset) ) {
        $post_unselectedslide_inset = '0';
        update_option('fps_unselectedslide_inset', $post_unselectedslide_inset);
    }

    $post_selectedslide_dropshadow_color = get_option('fps_selectedslide_dropshadow_color');
    if ( empty($post_selectedslide_dropshadow_color) ) {
        $post_selectedslide_dropshadow_color = '000000';
        update_option('fps_selectedslide_dropshadow_color', $post_selectedslide_dropshadow_color);
    }

    $post_unselectedslide_dropshadow_color = get_option('fps_unselectedslide_dropshadow_color');
    if ( empty($post_unselectedslide_dropshadow_color) ) {
        $post_unselectedslide_dropshadow_color = '000000';
        update_option('fps_unselectedslide_dropshadow_color', $post_unselectedslide_dropshadow_color);
    }

    $post_slide_textshadow_x = get_option('fps_slide_textshadow_x');
    if ( empty($post_slide_textshadow_x) ) {
        $post_slide_textshadow_x = '0';
        update_option('fps_slide_textshadow_x', $post_slide_textshadow_x);
    }

    $post_slide_textshadow_y = get_option('fps_slide_textshadow_y');
    if ( empty($post_slide_textshadow_y) ) {
        $post_slide_textshadow_y = '1';
        update_option('fps_slide_textshadow_y', $post_slide_textshadow_y);
    }

    $post_slide_textshadow_blur = get_option('fps_slide_textshadow_blur');
    if ( empty($post_slide_textshadow_blur) ) {
        $post_slide_textshadow_blur = '0';
        update_option('fps_slide_textshadow_blur', $post_slide_textshadow_blur);
    }

    $post_slide_textshadow_color = get_option('fps_slide_textshadow_color');
    if ( empty($post_slide_textshadow_color) ) {
        $post_slide_textshadow_color = '000000';
        update_option('fps_slide_textshadow_color', $post_slide_textshadow_color);
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

    delete_option('fps_height');
    delete_option('fps_width');

    delete_option('fps_arrow_position');
    delete_option('fps_arrow_custom_url');

    delete_option('fps_display_slidenumbers');

    delete_option('fps_selectedslide_textcolor');
    delete_option('fps_unselectedslide_textcolor');

    delete_option('fps_selectedslide_bgcolor');
    delete_option('fps_unselectedslide_bgcolor');

    delete_option('fps_selectedslide_bold');
    delete_option('fps_selectedslide_italics');

    delete_option('fps_unselectedslide_bold');
    delete_option('fps_unselectedslide_italics');

    delete_option('fps_slide_bgradius');

    delete_option('fps_selectedslide_dropshadow_x');
    delete_option('fps_selectedslide_dropshadow_y');
    delete_option('fps_selectedslide_dropshadow_blur');
    delete_option('fps_selectedslide_inset');

    delete_option('fps_unselectedslide_dropshadow_x');
    delete_option('fps_unselectedslide_dropshadow_y');
    delete_option('fps_unselectedslide_dropshadow_blur');
    delete_option('fps_unselectedslide_inset');

    delete_option('fps_selectedslide_dropshadow_color');
    delete_option('fps_unselectedslide_dropshadow_color');
    delete_option('fps_slide_textshadow_x');
    delete_option('fps_slide_textshadow_y');
    delete_option('fps_slide_textshadow_blur');
    delete_option('fps_slide_textshadow_color');
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
    $post_height = get_option('fps_height');
    $post_width = get_option('fps_width');

    add_image_size( 'fps-post', ($post_width-45), ($post_height-20), true ); // large size, hard crop mode
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

    $post_height = get_option('fps_height');
    $post_width = get_option('fps_width');

    $post_display_slidenumbers = get_option('fps_display_slidenumbers');

    $post_arrow_position = get_option('fps_arrow_position');
    $post_arrow_custom_url = get_option('fps_arrow_custom_url');

    $post_selectedslide_textcolor = get_option('fps_selectedslide_textcolor');
    $post_unselectedslide_textcolor = get_option('fps_unselectedslide_textcolor');

    $post_selectedslide_bgcolor = get_option('fps_selectedslide_bgcolor');
    $post_unselectedslide_bgcolor = get_option('fps_unselectedslide_bgcolor');

    $post_selectedslide_bold = get_option('fps_selectedslide_bold');
    $post_selectedslide_italics = get_option('fps_selectedslide_italics');

    $post_unselectedslide_bold = get_option('fps_unselectedslide_bold');
    $post_unselectedslide_italics = get_option('fps_unselectedslide_italics');

    $post_slide_bgradius = get_option('fps_slide_bgradius');

    $post_selectedslide_dropshadow_x = get_option('fps_selectedslide_dropshadow_x');
    $post_selectedslide_dropshadow_y = get_option('fps_selectedslide_dropshadow_y');
    $post_selectedslide_dropshadow_blur = get_option('fps_selectedslide_dropshadow_blur');
    $post_selectedslide_inset = get_option('fps_selectedslide_inset');

    $post_unselectedslide_dropshadow_x = get_option('fps_unselectedslide_dropshadow_x');
    $post_unselectedslide_dropshadow_y = get_option('fps_unselectedslide_dropshadow_y');
    $post_unselectedslide_dropshadow_blur = get_option('fps_unselectedslide_dropshadow_blur');
    $post_unselectedslide_inset = get_option('fps_unselectedslide_inset');

    $post_selectedslide_dropshadow_color = get_option('fps_selectedslide_dropshadow_color');
    $post_unselectedslide_dropshadow_color = get_option('fps_unselectedslide_dropshadow_color');
    $post_slide_textshadow_x = get_option('fps_slide_textshadow_x');
    $post_slide_textshadow_y = get_option('fps_slide_textshadow_y');
    $post_slide_textshadow_blur = get_option('fps_slide_textshadow_blur');
    $post_slide_textshadow_color = get_option('fps_slide_textshadow_color');


    // Format all color hex value strings
    $post_title_color = "#".$post_title_color;
    $post_excerpt_color = "#".$post_excerpt_color;
    $post_heading_color = "#".$post_heading_color;
    $post_bg_color = "#".$post_bg_color;
    $post_innershadow_color = "#".$post_innershadow_color;
    $post_outershadow_color = "#".$post_outershadow_color;
    $post_selectedslide_textcolor = "#".$post_selectedslide_textcolor;
    $post_unselectedslide_textcolor = "#".$post_unselectedslide_textcolor;
    $post_selectedslide_bgcolor = "#".$post_selectedslide_bgcolor;
    $post_unselectedslide_bgcolor = "#".$post_unselectedslide_bgcolor;

    $post_selectedslide_dropshadow_color = "#".$post_selectedslide_dropshadow_color;
    $post_unselectedslide_dropshadow_color = "#".$post_unselectedslide_dropshadow_color;
    $post_slide_textshadow_color = "#".$post_slide_textshadow_color;

    $post_textbg_rgba = 'rgba('.hex2RGB($post_textbg_color, true).','.$post_textbg_alpha.')';
    $post_textbg_hex = "#".$post_textbg_color;

    // Version 1.0 only supports single item layout
    $wrapper_classes .= "featured-posts-wrapper fps-single";
    $ul_classes .= "featured-posts fps-single";
    $bg_classes .= "featured-posts-background fps-single";
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

        
        $height_offset = 0;
        if ($post_display_slidenumbers == '1')
        {
            $height_offset += 25;
        }

        // Define element sizing
        $output .= '.featured-posts-wrapper.fps-single {height: '.($post_height + $height_offset).'px; width: '.$post_width.'px;}';
        $output .= '.featured-posts-background.fps-single {height: '.($post_height + $height_offset).'px; width: '.($post_width-25).'px;}';
        $output .= 'ul.featured-posts.fps-single {height: '.($post_height-20).'px; width: '.($post_width-45).'px;}';
        $output .= 'ul.featured-posts.fps-single li {height: '.($post_height-20).'px; width: '.($post_width-45).'px;}';
        $output .= 'ul.featured-posts.fps-single li .fps-text {width: '.($post_width-45).'px;}';
        $output .= '.scrollFeaturedPostsLeft, .scrollFeaturedPostsRight {margin: '.(($post_height-45)/2).'px 0px '.(($post_height-45)/2).'px;}';

        // Define slide number formatting
        if ($post_display_slidenumbers == '1')
        {
            // Define font style/weight
            $unselected_weight = 'normal';
            $unselected_style = 'normal';
            $selected_weight = 'normal';
            $selected_style = 'normal';

            if ($post_unselectedslide_bold == '1')
            {
                $unselected_weight = 'bold';
            }
            if ($post_selectedslide_bold == '1')
            {
                $selected_weight = 'bold';
            }

            if ($post_unselectedslide_italics == '1')
            {
                $unselected_style = 'italic';
            }
            if ($post_selectedslide_italics == '1')
            {
                $selected_style = 'italic';
            }

            // Define box shadow
            $unselected_shadow = $post_unselectedslide_dropshadow_x.'px '.
                                 $post_unselectedslide_dropshadow_y.'px '.
                                 $post_unselectedslide_dropshadow_blur.'px '.
                                 $post_unselectedslide_dropshadow_color.' ';
            $selected_shadow = $post_selectedslide_dropshadow_x.'px '.
                               $post_selectedslide_dropshadow_y.'px '.
                               $post_selectedslide_dropshadow_blur.'px '.
                               $post_selectedslide_dropshadow_color.' '; 

            if ($post_unselectedslide_inset == '1')
            {
                $unselected_shadow .= 'inset';
            }

            if ($post_selectedslide_inset == '1')
            {
                $selected_shadow .= 'inset';
            }

            $output .= '.fps-slideNumberList li {color: '.$post_unselectedslide_textcolor.
                        '; text-shadow: '.$post_slide_textshadow_x.'px '.$post_slide_textshadow_y.'px '.
                                          $post_slide_textshadow_blur.'px '.$post_slide_textshadow_color.
                        '; font-weight: '.$unselected_weight.
                        '; font-style: '.$unselected_style.
                        '; background: '.$post_unselectedslide_bgcolor.
                        '; -moz-border-radius: '.$post_slide_bgradius.
                        '; border-radius: '.$post_slide_bgradius.
                        '; -moz-box-shadow: '.$unselected_shadow.
                        '; -webkit-box-shadow: '.$unselected_shadow.
                        '; box-shadow: '.$unselected_shadow.';}';
            $output .= '.fps-slideNumberList li.fps-selectedSlide, .fps-slideNumberList li:hover {color: '.$post_selectedslide_textcolor.
                        '; text-shadow: '.$post_slide_textshadow_x.'px '.$post_slide_textshadow_y.'px '.
                                          $post_slide_textshadow_blur.'px '.$post_slide_textshadow_color.
                        '; font-weight: '.$selected_weight.
                        '; font-style: '.$selected_style.
                        '; background: '.$post_selectedslide_bgcolor.
                        '; -moz-box-shadow: '.$selected_shadow.
                        '; -webkit-box-shadow: '.$selected_shadow.
                        '; box-shadow: '.$selected_shadow.';}';
        }

        // Modify margin/height/width if arrows are below image
        if ($post_arrow_position == 'below')
        {
            $output .= '.featured-posts-wrapper.fps-single {width: '.($post_width - 25).'px;}';
            $output .= 'ul.featured-posts.fps-single {margin-left: 10px;}';
            $output .= 'ul.fps-slideNumberList {margin-top: 10px; margin-left: 10px;}';
            $output .= '.featured-posts-background.fps-single {margin: 0px 0px 12px;}';
        }

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
        $output .= '.fps-text {background: '.$post_textbg_hex.'; background: '.$post_textbg_rgba.';}';
        $output .= 'a:link.featured-posts-image,a:visited.featured-posts-image,a:hover.featured-posts-image {'.
                   'color: '.$post_title_color.';}';

        // Define the arrow image being used
        
        if ($post_arrow_color == 'custom')
        {
            $arrow_url = $post_arrow_custom_url;
        }
        else if ($post_arrow_position == 'below')
        {
            $arrow_url = WP_PLUGIN_URL.'/featured-posts-scroll/images/pos2-arrows-'.$post_arrow_color.'.png';
        }
        else
        {
            $arrow_url = WP_PLUGIN_URL.'/featured-posts-scroll/images/arrows-'.$post_arrow_color.'.png';
        }


        if ($post_arrow_position == 'sides')
        {
            $output .= '.scrollFeaturedPostsLeft, .scrollFeaturedPostsRight {background-image: url('.$arrow_url.');}';
        }
        else
        {
            $output .= '.scrollFeaturedPostsLeft-below, .scrollFeaturedPostsRight-below {background-image: url('.$arrow_url.');}';
        }
        $output .= '</style>';

        // div#featured-posts-wrapper
        $output .= '<div class="'.$wrapper_classes.'">';
        
        // Display heading if option selected
        if ($post_display_heading == '1')
        {
            $output .= '<p class="featured-posts-header" style="color:'.$post_heading_color.'">'.$post_heading_text.'</p>';
        }

        // Add left arrow and open unordered list
        if ($post_arrow_position == 'sides')
        {
            $output .= '<div class="scrollFeaturedPostsLeft"></div>';
        }
        $output .= '<ul class="'.$ul_classes.'">';

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
        if ($post_arrow_position == 'sides')
        {
            $output .= '<div class="scrollFeaturedPostsRight"></div>';
        }

        if ($post_display_slidenumbers == '1')
        {
            // Populate fps-slideNumberList li classes based on admin options


            $output .= '<ul class="fps-slideNumberList">';
            $output .= '<li class="fps-selectedSlide" title="'.$post_details[0]['post_title'].'">1</li>';
            for ( $i = 2; $i <= count($recent_posts) && $i <= $max_posts; $i++ )
            {
                $output .= '<li title="'.$post_details[($i-1)]['post_title'].'">'.$i.'</li>';
            }

            $output .= '</ul>';
        }

        if ($post_arrow_position == 'below')
        {
            $output .= '<div class="scrollFeaturedPostsRight-below"></div>';
            $output .= '<div class="scrollFeaturedPostsLeft-below"></div>';            
        }


        $output .= '<div class="'.$bg_classes.'" style="background:'.$post_bg_color.'"></div>';
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