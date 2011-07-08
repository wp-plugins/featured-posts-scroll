<?php 
	header('Content-type: text/css'); 
	define('WP_USE_THEMES', false);
    require_once((dirname(dirname( dirname( dirname ( __FILE__ ) ) ))).'/wp-config.php');
?>

<?php 
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


    // Height offset
	$height_offset = 0;
    if ($post_display_slidenumbers == '1')
    {
        $height_offset += 25;
    }

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

    // Define drop-shadow
    $shadow = $post_dropshadow_x.'px '.$post_dropshadow_y.'px '.$post_dropshadow_blur.'px ';
?>



.featured-posts-wrapper.fps-single {
height: <?php echo ($post_height + $height_offset) ?>px;
width: <?php echo $post_width ?>px;
}

.featured-posts-background.fps-single {
height: <?php echo ($post_height + $height_offset) ?>px;
width: <?php echo ($post_width-25) ?>px;
}

ul.featured-posts.fps-single {
height: <?php echo ($post_height-20) ?>px; 
width: <?php echo ($post_width-45) ?>px;
}

ul.featured-posts.fps-single li {
height: <?php echo ($post_height-20) ?>px; 
width: <?php echo ($post_width-45) ?>px;
}

ul.featured-posts.fps-single li .fps-text {
width: <?php echo ($post_width-55) ?>px;
}

.scrollFeaturedPostsLeft, .scrollFeaturedPostsRight {
margin: <?php echo (($post_height-45)/2) ?>px 0px <?php echo (($post_height-45)/2) ?>px;
}

.fps-slideNumberList li {
color: <?php echo $post_unselectedslide_textcolor ?>; 
text-shadow: <?php echo $post_slide_textshadow_x ?>px <?php echo $post_slide_textshadow_y ?>px <?php echo $post_slide_textshadow_blur ?>px <?php echo $post_slide_textshadow_color ?>; 
font-weight: <?php echo $unselected_weight ?>; 
font-style: <?php echo $unselected_style ?>; 
background: <?php echo $post_unselectedslide_bgcolor ?>; 
-moz-border-radius: <?php echo $post_slide_bgradius ?>; 
border-radius: <?php echo $post_slide_bgradius ?>; 
-moz-box-shadow: <?php echo $unselected_shadow ?> ; 
-webkit-box-shadow: <?php echo $unselected_shadow ?> ; 
box-shadow: <?php echo $unselected_shadow ?> ;
}

.fps-slideNumberList li.fps-selectedSlide, .fps-slideNumberList li:hover {
color: <?php echo $post_selectedslide_textcolor ?>; 
text-shadow: <?php echo $post_slide_textshadow_x ?>px <?php echo $post_slide_textshadow_y ?>px <?php echo $post_slide_textshadow_blur ?>px <?php echo $post_slide_textshadow_color ?>; 
font-weight: <?php echo $selected_weight ?>; 
font-style: <?php echo $selected_style ?>; 
background: <?php echo $post_selectedslide_bgcolor ?>; 
-moz-box-shadow: <?php echo $selected_shadow ?>; 
-webkit-box-shadow: <?php echo $selected_shadow ?>;
box-shadow: <?php echo $selected_shadow ?>;
}

.fps-rounded {
-moz-border-radius: <?php echo $post_corner_radius ?>; 
border-radius: <?php echo $post_corner_radius ?>;
}

.fps-shadowed-inner {
-moz-box-shadow: <?php echo $shadow ?> <?php echo $post_innershadow_color ?>; 
-webkit-box-shadow: <?php echo $shadow ?> <?php echo $post_innershadow_color ?>; 
box-shadow: <?php echo $shadow ?> <?php echo $post_innershadow_color ?>;
}

.fps-shadowed-outer {
-moz-box-shadow: <?php echo $shadow ?> <?php echo $post_outershadow_color ?>; 
-webkit-box-shadow: <?php echo $shadow ?> <?php echo $post_outershadow_color ?>; 
box-shadow: <?php echo $shadow ?> <?php echo $post_outershadow_color ?>;
}

.fps-text {
background: <?php echo $post_textbg_hex ?>; 
background: <?php echo $post_textbg_rgba ?>;
}

a:link.featured-posts-image,a:visited.featured-posts-image,a:hover.featured-posts-image {
color: <?php echo $post_title_color ?>;
}

.scrollFeaturedPostsLeft, .scrollFeaturedPostsRight {
background-image: url(<?php echo $arrow_url ?>);
}

.scrollFeaturedPostsLeft-below, .scrollFeaturedPostsRight-below {
background-image: url(<?php echo $arrow_url ?>);
}

.featured-posts-background {
background: <?php echo $post_bg_color ?>;
}

.fps-title {
color: <?php echo $post_title_color ?>;
}

.fps-excerpt {
color: <?php echo $post_excerpt_color ?>;
}



<?php 
// Modify margin/height/width if arrows are below image
if ($post_arrow_position == 'below') : 
?>

.featured-posts-wrapper.fps-single {
width: <?php echo ($post_width - 25) ?>px;
}

ul.featured-posts.fps-single {
margin-left: 10px;
}

ul.fps-slideNumberList {
margin-top: 10px; 
margin-left: 10px;
}

.featured-posts-background.fps-single {
margin: 0px 0px 12px;
}

<?php endif; ?>