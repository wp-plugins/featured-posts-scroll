<?php 
    if ( isset($_POST['fps_opt_hidden']) && $_POST['fps_opt_hidden'] == 'Y' ) {
        $max_posts = $_POST['fps_max_posts'];
        if ( is_numeric($max_posts) )
            update_option('fps_max_posts', $max_posts);
        else
            $error[] = "ERROR: Max Posts - Please enter a number.";
        
        $post_title_color = $_POST['fps_title_color'];
        update_option('fps_title_color', $post_title_color);

        $post_excerpt_color = $_POST['fps_excerpt_color'];
        update_option('fps_excerpt_color', $post_excerpt_color);

        $post_heading_color = $_POST['fps_heading_color'];
        update_option('fps_heading_color', $post_heading_color);

        $post_heading_text = $_POST['fps_heading_text'];
        update_option('fps_heading_text', $post_heading_text);

        $post_bg_color = $_POST['fps_bg_color'];
        update_option('fps_bg_color', $post_bg_color);

        $post_textbg_color = $_POST['fps_textbg_color'];
        update_option('fps_textbg_color', $post_textbg_color);

        $post_textbg_alpha = $_POST['fps_textbg_alpha'];
        if ( is_numeric($post_textbg_alpha) )
        {
            if ($post_textbg_alpha >= 0.0 && $post_textbg_alpha <= 1.0)
            {
                update_option('fps_textbg_alpha', $post_textbg_alpha);
            }
            else
            {
                $error[] = "ERROR: Text BG Alpha - Please enter a valid number in range (0.0-1.0).";
            }
        }
        else
        {
            $error[] = "ERROR: Text BG Alpha - Please enter a valid number in range (0.0-1.0).";
        }

        $post_height = $_POST['fps_height'];
        if ( is_numeric($post_height) )
        {
            if ($post_height >= 50 && $post_height <= 2000)
            {
                update_option('fps_height', $post_height);
            }
            else
            {
                $error[] = "ERROR: Scroll Height - Please enter a valid number in range (50-2000).";
            }
        }
        else
        {
            $error[] = "ERROR: Scroll Height - Please enter a valid number in range (50-2000).";
        }

        $post_width = $_POST['fps_width'];
        if ( is_numeric($post_width) )
        {
            if ($post_width >= 70 && $post_width <= 2000)
            {
                update_option('fps_width', $post_width);
            }
            else
            {
                $error[] = "ERROR: Scroll Width - Please enter a valid number in range (70-2000).";
            }
        }
        else
        {
            $error[] = "ERROR: Scroll Width - Please enter a valid number in range (70-2000).";
        }

        $post_innershadow_color = $_POST['fps_innershadow_color'];
        update_option('fps_innershadow_color', $post_innershadow_color);

        $post_outershadow_color = $_POST['fps_outershadow_color'];
        update_option('fps_outershadow_color', $post_outershadow_color);

        $post_arrow_color = $_POST['fps_arrow_color'];
        update_option('fps_arrow_color', $post_arrow_color);

        $post_corner_radius = $_POST['fps_corner_radius'];
        update_option('fps_corner_radius', $post_corner_radius);

        $post_dropshadow_x = $_POST['fps_dropshadow_x'];
        update_option('fps_dropshadow_x', $post_dropshadow_x);

        $post_dropshadow_y = $_POST['fps_dropshadow_y'];
        update_option('fps_dropshadow_y', $post_dropshadow_y);

        $post_dropshadow_blur = $_POST['fps_dropshadow_blur'];
        update_option('fps_dropshadow_blur', $post_dropshadow_blur);

        $post_arrow_position = $_POST['fps_arrow_position'];
        update_option('fps_arrow_position', $post_arrow_position);

        $post_arrow_custom_url = $_POST['fps_arrow_custom_url'];
        update_option('fps_arrow_custom_url', $post_arrow_custom_url);

        $post_selectedslide_textcolor = $_POST['fps_selectedslide_textcolor'];
        update_option('fps_selectedslide_textcolor', $post_selectedslide_textcolor);

        $post_unselectedslide_textcolor = $_POST['fps_unselectedslide_textcolor'];
        update_option('fps_unselectedslide_textcolor', $post_unselectedslide_textcolor);

        $post_selectedslide_bgcolor = $_POST['fps_selectedslide_bgcolor'];
        update_option('fps_selectedslide_bgcolor', $post_selectedslide_bgcolor);

        $post_unselectedslide_bgcolor = $_POST['fps_unselectedslide_bgcolor'];
        update_option('fps_unselectedslide_bgcolor', $post_unselectedslide_bgcolor);

        $post_selectedslide_bold = isset($_POST['fps_selectedslide_bold']) ? 1:0;
        update_option('fps_selectedslide_bold', $post_selectedslide_bold);

        $post_selectedslide_italics = isset($_POST['fps_selectedslide_italics']) ? 1:0;
        update_option('fps_selectedslide_italics', $post_selectedslide_italics);

        $post_unselectedslide_bold = isset($_POST['fps_unselectedslide_bold']) ? 1:0;
        update_option('fps_unselectedslide_bold', $post_unselectedslide_bold);

        $post_unselectedslide_italics = isset($_POST['fps_unselectedslide_italics']) ? 1:0;
        update_option('fps_unselectedslide_italics', $post_unselectedslide_italics);

        $post_slide_bgradius = $_POST['fps_slide_bgradius'];
        update_option('fps_slide_bgradius', $post_slide_bgradius);

        $post_selectedslide_dropshadow_x = $_POST['fps_selectedslide_dropshadow_x'];
        update_option('fps_selectedslide_dropshadow_x', $post_selectedslide_dropshadow_x);

        $post_selectedslide_dropshadow_y = $_POST['fps_selectedslide_dropshadow_y'];
        update_option('fps_selectedslide_dropshadow_y', $post_selectedslide_dropshadow_y);

        $post_selectedslide_dropshadow_blur = $_POST['fps_selectedslide_dropshadow_blur'];
        update_option('fps_selectedslide_dropshadow_blur', $post_selectedslide_dropshadow_blur);

        $post_selectedslide_inset = isset($_POST['fps_selectedslide_inset']) ? 1:0;
        update_option('fps_selectedslide_inset', $post_selectedslide_inset);

        $post_unselectedslide_dropshadow_x = $_POST['fps_unselectedslide_dropshadow_x'];
        update_option('fps_unselectedslide_dropshadow_x', $post_unselectedslide_dropshadow_x);

        $post_unselectedslide_dropshadow_y = $_POST['fps_unselectedslide_dropshadow_y'];
        update_option('fps_unselectedslide_dropshadow_y', $post_unselectedslide_dropshadow_y);

        $post_unselectedslide_dropshadow_blur = $_POST['fps_unselectedslide_dropshadow_blur'];
        update_option('fps_unselectedslide_dropshadow_blur', $post_unselectedslide_dropshadow_blur);

        $post_selectedslide_dropshadow_color = $_POST['fps_selectedslide_dropshadow_color'];
        update_option('fps_selectedslide_dropshadow_color', $post_selectedslide_dropshadow_color);

        $post_unselectedslide_dropshadow_color = $_POST['fps_unselectedslide_dropshadow_color'];
        update_option('fps_unselectedslide_dropshadow_color', $post_unselectedslide_dropshadow_color);

        $post_slide_textshadow_x = $_POST['fps_slide_textshadow_x'];
        update_option('fps_slide_textshadow_x', $post_slide_textshadow_x);

        $post_slide_textshadow_y = $_POST['fps_slide_textshadow_y'];
        update_option('fps_slide_textshadow_y', $post_slide_textshadow_y);

        $post_slide_textshadow_blur = $_POST['fps_slide_textshadow_blur'];
        update_option('fps_slide_textshadow_blur', $post_slide_textshadow_blur);

        $post_slide_textshadow_color = $_POST['fps_slide_textshadow_color'];
        update_option('fps_slide_textshadow_color', $post_slide_textshadow_color);

        $post_unselectedslide_inset = isset($_POST['fps_unselectedslide_inset']) ? 1:0;
        update_option('fps_unselectedslide_inset', $post_unselectedslide_inset);

        $post_display_title = isset($_POST['fps_display_title']) ? 1:0;
        update_option('fps_display_title', $post_display_title);

        $post_display_excerpt = isset($_POST['fps_display_excerpt']) ? 1:0;
        update_option('fps_display_excerpt', $post_display_excerpt);

        $post_display_heading = isset($_POST['fps_display_heading']) ? 1:0;
        update_option('fps_display_heading', $post_display_heading);

        $post_roundedconers = isset($_POST['fps_roundedcorners']) ? 1:0;
        update_option('fps_roundedcorners', $post_roundedconers);

        $post_dropshadows = isset($_POST['fps_dropshadows']) ? 1:0;
        update_option('fps_dropshadows', $post_dropshadows);

        $post_autoscroll = isset($_POST['fps_autoscroll']) ? 1:0;
        update_option('fps_autoscroll', $post_autoscroll);

        $post_display_slidenumbers = isset($_POST['fps_display_slidenumbers']) ? 1:0;
        update_option('fps_display_slidenumbers', $post_display_slidenumbers);
        
        if( empty($error) ){ ?>
            <div class="updated"><p><strong><?php _e('Settings Saved.', 'wp-rp' ); ?></strong></p></div>
        <?php }else{ ?>
        <div class="error"><p><strong><?php 
            foreach ( $error as $key=>$val ) {
                _e($val); 
                echo "<br/>";
            }
        ?></strong></p></div>
        <?php }
    } else {
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

        $post_autoscroll = get_option('fps_autoscroll');

        $post_corner_radius = get_option('fps_corner_radius');
        $post_dropshadow_x = get_option('fps_dropshadow_x');
        $post_dropshadow_y = get_option('fps_dropshadow_y');
        $post_dropshadow_blur = get_option('fps_dropshadow_blur');

        $post_height = get_option('fps_height');
        $post_width = get_option('fps_width');

        $post_display_slidenumbers = get_option('fps_display_slidenumbers');
        $post_arrow_position = get_option('fps_arrow_position');
        $post_arrow_custom_url = get_option('fps_arrow_custom_url');

        $post_selectedslide_dropshadow_x = get_option('fps_selectedslide_dropshadow_x');
        $post_selectedslide_dropshadow_y = get_option('fps_selectedslide_dropshadow_y');
        $post_selectedslide_dropshadow_blur = get_option('fps_selectedslide_dropshadow_blur');
        $post_selectedslide_inset = get_option('fps_selectedslide_inset');

        $post_unselectedslide_dropshadow_x = get_option('fps_unselectedslide_dropshadow_x');
        $post_unselectedslide_dropshadow_y = get_option('fps_unselectedslide_dropshadow_y');
        $post_unselectedslide_dropshadow_blur = get_option('fps_unselectedslide_dropshadow_blur');
        $post_unselectedslide_inset = get_option('fps_unselectedslide_inset');

        $post_selectedslide_bold = get_option('fps_selectedslide_bold');
        $post_selectedslide_italics = get_option('fps_selectedslide_italics');

        $post_unselectedslide_bold = get_option('fps_unselectedslide_bold');
        $post_unselectedslide_italics = get_option('fps_unselectedslide_italics');

        $post_selectedslide_textcolor = get_option('fps_selectedslide_textcolor');
        $post_unselectedslide_textcolor = get_option('fps_unselectedslide_textcolor');

        $post_selectedslide_bgcolor = get_option('fps_selectedslide_bgcolor');
        $post_unselectedslide_bgcolor = get_option('fps_unselectedslide_bgcolor');

        $post_slide_bgradius = get_option('fps_slide_bgradius');

        $post_selectedslide_dropshadow_color = get_option('fps_selectedslide_dropshadow_color');
        $post_unselectedslide_dropshadow_color = get_option('fps_unselectedslide_dropshadow_color');
        $post_slide_textshadow_x = get_option('fps_slide_textshadow_x');
        $post_slide_textshadow_y = get_option('fps_slide_textshadow_y');
        $post_slide_textshadow_blur = get_option('fps_slide_textshadow_blur');
        $post_slide_textshadow_color = get_option('fps_slide_textshadow_color');
        
    }
?>

<div class="wrap">
<?php    echo "<h2>" . __( 'Featured Posts Scroll Options', 'fps_opt' ) . "</h2>"; ?>

<form name="fps_form" method="post" action="">
    <input type="hidden" name="fps_opt_hidden" value="Y">
    <p>    
        <?php _e("Max Number of Posts to Display"); ?> 
        <input type="text" name="fps_max_posts" value="<?php echo $max_posts; ?>" size="4"><?php _e(" example : 5" ); ?>
    </p>
    <p>    
        <?php _e("Header Text"); ?> 
        <input type="text" name="fps_heading_text" value="<?php echo $post_heading_text; ?>" size="20">
    </p>
    <p> ----------------------------------------------------- </p>
    <p>    
        <?php _e("<strong>Text Elements:</strong>"); ?> 
        <?php if($post_display_title == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_display_title" value="true" <?php echo $checked; ?>><?php _e(" Display Post Title | "); ?>

        <?php if($post_display_excerpt == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_display_excerpt" value="true" <?php echo $checked; ?>><?php _e(" Display Post Excerpt | "); ?>

        <?php if($post_display_heading == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_display_heading" value="true" <?php echo $checked; ?>><?php _e(" Display Scroll Box Heading"); ?>
    </p>
    <p>    
        <?php _e("<strong>Visual Elements:</strong>"); ?> 
        <?php if($post_roundedconers == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_roundedcorners" value="true" <?php echo $checked; ?>><?php _e(" Use Rounded Corners | "); ?>

        <?php if($post_dropshadows == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_dropshadows" value="true" <?php echo $checked; ?>><?php _e(" Use Drop Shadows"); ?>
        <?php _e("<em>(note: these will only work in CSS3 compatible browsers)</em>"); ?>
    </p>
    <p>
        <?php _e("<strong>Autoscroll:</strong>"); ?>
        <?php if($post_autoscroll == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_autoscroll" value="true" <?php echo $checked; ?>><?php _e(" Autoscroll Posts (7 second interval)"); ?>
    </p>
    <p> ----------------------------------------------------- </p>
    <p>
        <?php _e("<strong>Scroll Size:</strong>"); ?>
        <?php _e("Height"); ?>
        <input type="text" name="fps_height" maxlength="5" size="5" value="<?php echo $post_height; ?>" />
        <?php _e(" | Width"); ?>
        <input type="text" name="fps_width" maxlength="5" size="5" value="<?php echo $post_width; ?>" />
    </p>
    <p>
        <?php _e("Height and Width are in pixels."); ?>
    </p>
    <p>
        <?php _e("Recommended thumbnail image sizes are height=(ScrollHeight-20) width=(ScrollWidth-45)"); ?>
    </p>
    <p> ----------------------------------------------------- </p>
    <p>    
        <?php _e("<strong>Arrow Color:</strong>"); ?> 
        <select name="fps_arrow_color">
            <option value="orange" <?php if($post_arrow_color=="orange"){echo 'selected';} ?>>Orange</option>
            <option value="green" <?php if($post_arrow_color=="green"){echo 'selected';} ?>>Green</option>
            <option value="black" <?php if($post_arrow_color=="black"){echo 'selected';} ?>>Black</option>
            <option value="blue" <?php if($post_arrow_color=="blue"){echo 'selected';} ?>>Blue</option>
            <option value="pink" <?php if($post_arrow_color=="pink"){echo 'selected';} ?>>Pink</option>
            <option value="red" <?php if($post_arrow_color=="red"){echo 'selected';} ?>>Red</option>
            <option value="yellow" <?php if($post_arrow_color=="yellow"){echo 'selected';} ?>>Yellow</option>
            <option value="dark-blue" <?php if($post_arrow_color=="dark-blue"){echo 'selected';} ?>>Dark Blue</option>
            <option value="dark-green" <?php if($post_arrow_color=="dark-green"){echo 'selected';} ?>>Dark Green</option>
            <option value="darker-green" <?php if($post_arrow_color=="darker-green"){echo 'selected';} ?>>Darker Green</option>            
            <option value="dark-grey" <?php if($post_arrow_color=="dark-grey"){echo 'selected';} ?>>Dark Grey</option>
            <option value="dark-red" <?php if($post_arrow_color=="dark-red"){echo 'selected';} ?>>Dark Red</option>
            <option value="dark-yellow" <?php if($post_arrow_color=="dark-yellow"){echo 'selected';} ?>>Dark Yellow</option>            
            <option value="light-blue" <?php if($post_arrow_color=="light-blue"){echo 'selected';} ?>>Light Blue</option>
            <option value="light-grey" <?php if($post_arrow_color=="light-grey"){echo 'selected';} ?>>Light Grey</option>            
            <option value="custom" <?php if($post_arrow_color=="custom"){echo 'selected';} ?>>Custom URL</option>
        </select>
        <?php _e(" | Custom Arrow Image URL"); ?>
        <input type="text" name="fps_arrow_custom_url" size="100" value="<?php echo $post_arrow_custom_url; ?>" />
    </p>
    <p>    
        <?php _e("<strong>Arrow Position:</strong>"); ?> 
        <select name="fps_arrow_position">
            <option value="sides" <?php if($post_arrow_position=="sides"){echo 'selected';} ?>>Image Sides (default)</option>
            <option value="below" <?php if($post_arrow_position=="below"){echo 'selected';} ?>>Below Image</option>
        </select>
    </p>
    <p>
        <?php _e("<strong>Text Colors:</strong>"); ?>
        <?php _e("Title"); ?>
        <input type="text" name="fps_title_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_title_color; ?>" />
        <?php _e(" | Excerpt"); ?>
        <input type="text" name="fps_excerpt_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_excerpt_color; ?>" />
        <?php _e(" | Heading"); ?>
        <input type="text" name="fps_heading_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_heading_color; ?>" />
    </p>
    <p>
        <?php _e("<strong>Drop Shadow Colors:</strong>"); ?>
        <?php _e("Inner Drop Shadow"); ?>
        <input type="text" name="fps_innershadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_innershadow_color; ?>" />
        <?php _e(" | Outer Drop Shadow"); ?>
        <input type="text" name="fps_outershadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_outershadow_color; ?>" />
    </p>
    <p>
        <?php _e("<strong>Misc Colors:</strong>"); ?>
        <?php _e("Main BG/Border"); ?>
        <input type="text" name="fps_bg_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_bg_color; ?>" />
        <?php _e(" | Text BG Color"); ?>
        <input type="text" name="fps_textbg_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_textbg_color; ?>" />
        <?php _e(" | Text BG Alpha"); ?> 
        <input type="text" name="fps_textbg_alpha" value="<?php echo $post_textbg_alpha; ?>" size="4"><?php _e(" 0.0(not visible) to 1.0(solid)"); ?>
    </p>
    <p> ----------------------------------------------------- </p>
    <p>
        <?php _e("<strong>Slide Numbers:</strong>"); ?>
        <?php if($post_display_slidenumbers == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_display_slidenumbers" value="true" <?php echo $checked; ?>><?php _e(" Show Slide Numbers"); ?>
    </p>
    <p>
        <?php _e("<strong>Slide Number Text Colors:</strong>"); ?>
        <?php _e("Selected Slide"); ?>
        <input type="text" name="fps_selectedslide_textcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_selectedslide_textcolor; ?>" />
        <?php _e(" | Unselected Slide"); ?>
        <input type="text" name="fps_unselectedslide_textcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_unselectedslide_textcolor; ?>" />
    </p>
    <p>
        <?php _e("<strong>Slide Number BG Colors:</strong>"); ?>
        <?php _e("Selected Slide BG"); ?>
        <input type="text" name="fps_selectedslide_bgcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_selectedslide_bgcolor; ?>" />
        <?php _e(" | Unselected Slide BG"); ?>
        <input type="text" name="fps_unselectedslide_bgcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_unselectedslide_bgcolor; ?>" />
    </p>
    <p>
        <?php _e("<strong>Slide Number Dropshadow Colors:</strong>"); ?>
        <?php _e("Selected Slide BG"); ?>
        <input type="text" name="fps_selectedslide_dropshadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_selectedslide_dropshadow_color; ?>" />
        <?php _e(" | Unselected Slide BG"); ?>
        <input type="text" name="fps_unselectedslide_dropshadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_unselectedslide_dropshadow_color; ?>" />
        <?php _e(" | Slide Text"); ?>
        <input type="text" name="fps_slide_textshadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_slide_textshadow_color; ?>" />
    </p>
    <p>
        <?php _e("<strong>Selected Slide Number Weight:</strong>"); ?>
        <?php if($post_selectedslide_bold == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_selectedslide_bold" value="true" <?php echo $checked; ?>><?php _e(" Bold | "); ?>
        <?php if($post_selectedslide_italics == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_selectedslide_italics" value="true" <?php echo $checked; ?>><?php _e(" Italics"); ?>
    </p>
    <p>
        <?php _e("<strong>Unselected Slide Number Weight:</strong>"); ?>
        <?php if($post_unselectedslide_bold == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_unselectedslide_bold" value="true" <?php echo $checked; ?>><?php _e(" Bold | "); ?>
        <?php if($post_unselectedslide_italics == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_unselectedslide_italics" value="true" <?php echo $checked; ?>><?php _e(" Italics"); ?>
    </p>
    <p>    
        <?php _e("<strong>Slide Number BG Corner Radius:</strong>"); ?>
        <input type="text" name="fps_slide_bgradius" value="<?php echo $post_slide_bgradius; ?>" size="12">
        <?php _e(" examples:'5px', '10%', '3px 8px', '5% 2%' "); ?>
    </p>
    <p>    
        <?php _e("<strong>Slide Text Drop Shadow Settings:</strong>"); ?>
        <?php _e("Horizontal Offset"); ?>
        <input type="text" name="fps_slide_textshadow_x" value="<?php echo $post_slide_textshadow_x; ?>" size="4">
        <?php _e(" | Vertical Offset"); ?>
        <input type="text" name="fps_slide_textshadow_y" value="<?php echo $post_slide_textshadow_y; ?>" size="4">
        <?php _e(" | Blur Distance"); ?>
        <input type="text" name="fps_slide_textshadow_blur" value="<?php echo $post_slide_textshadow_blur; ?>" size="4">
    </p>
    <p>    
        <?php _e("<strong>Selected Slide Drop Shadow Settings:</strong>"); ?>
        <?php _e("Horizontal Offset"); ?>
        <input type="text" name="fps_selectedslide_dropshadow_x" value="<?php echo $post_selectedslide_dropshadow_x; ?>" size="4">
        <?php _e(" | Vertical Offset"); ?>
        <input type="text" name="fps_selectedslide_dropshadow_y" value="<?php echo $post_selectedslide_dropshadow_y; ?>" size="4">
        <?php _e(" | Blur Distance"); ?>
        <input type="text" name="fps_selectedslide_dropshadow_blur" value="<?php echo $post_selectedslide_dropshadow_blur; ?>" size="4">
        <?php if($post_selectedslide_inset == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_selectedslide_inset" value="true" <?php echo $checked; ?>><?php _e("Inset"); ?>
    </p>
    <p>    
        <?php _e("<strong>Unselected Slide Drop Shadow Settings:</strong>"); ?>
        <?php _e("Horizontal Offset"); ?>
        <input type="text" name="fps_unselectedslide_dropshadow_x" value="<?php echo $post_unselectedslide_dropshadow_x; ?>" size="4">
        <?php _e(" | Vertical Offset"); ?>
        <input type="text" name="fps_unselectedslide_dropshadow_y" value="<?php echo $post_unselectedslide_dropshadow_y; ?>" size="4">
        <?php _e(" | Blur Distance"); ?>
        <input type="text" name="fps_unselectedslide_dropshadow_blur" value="<?php echo $post_unselectedslide_dropshadow_blur; ?>" size="4">
        <?php if($post_unselectedslide_inset == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="fps_unselectedslide_inset" value="true" <?php echo $checked; ?>><?php _e("Inset"); ?>
    </p>
    <p> ----------------------------------------------------- </p>
    <p>    
        <?php _e("<strong>Rounded Corner Radius:</strong>"); ?>
        <input type="text" name="fps_corner_radius" value="<?php echo $post_corner_radius; ?>" size="12">
        <?php _e(" examples:'5px', '10%', '3px 8px', '5% 2%' "); ?>
    </p>
    <p>
        <?php _e("Valid corner radius is either one or two px or % values."); ?>
    </p>
    <p>
        <a href="http://www.css3.info/preview/rounded-border/">See this site for more details</a>
    </p>
    <p> ----------------------------------------------------- </p>
    <p>    
        <?php _e("<strong>Drop Shadow Settings:</strong>"); ?>
        <?php _e("Horizontal Offset"); ?>
        <input type="text" name="fps_dropshadow_x" value="<?php echo $post_dropshadow_x; ?>" size="4">
        <?php _e(" | Vertical Offset"); ?>
        <input type="text" name="fps_dropshadow_y" value="<?php echo $post_dropshadow_y; ?>" size="4">
        <?php _e(" | Blur Distance"); ?>
        <input type="text" name="fps_dropshadow_blur" value="<?php echo $post_dropshadow_blur; ?>" size="4">
    </p>
    <p>
        <?php _e("Horizontal and Vertival Offsets can be a positive or negative pixel value. Blur Distance is a single positive value."); ?>
    </p>
    <p>
        <?php _e("Enter a single number without 'px' unit. Examples:'5', '10'"); ?>
    </p>
    <p>
        <a href="http://www.css3.info/preview/box-shadow/">See this site for more details</a>
    </p>
    <p class="submit">
    <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
    </p>
</form>
</div>