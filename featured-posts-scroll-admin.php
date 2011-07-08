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

        $post_outer_corner_radius = $_POST['fps_outer_corner_radius'];
        update_option('fps_outer_corner_radius', $post_outer_corner_radius);

        $post_dropshadow_x = $_POST['fps_dropshadow_x'];
        update_option('fps_dropshadow_x', $post_dropshadow_x);

        $post_dropshadow_y = $_POST['fps_dropshadow_y'];
        update_option('fps_dropshadow_y', $post_dropshadow_y);

        $post_dropshadow_blur = $_POST['fps_dropshadow_blur'];
        update_option('fps_dropshadow_blur', $post_dropshadow_blur);

        $post_outer_dropshadow_x = $_POST['fps_outer_dropshadow_x'];
        update_option('fps_outer_dropshadow_x', $post_outer_dropshadow_x);

        $post_outer_dropshadow_y = $_POST['fps_outer_dropshadow_y'];
        update_option('fps_outer_dropshadow_y', $post_outer_dropshadow_y);

        $post_outer_dropshadow_blur = $_POST['fps_outer_dropshadow_blur'];
        update_option('fps_outer_dropshadow_blur', $post_outer_dropshadow_blur);

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
        $post_outer_corner_radius = get_option('fps_outer_corner_radius');

        $post_dropshadow_x = get_option('fps_dropshadow_x');
        $post_dropshadow_y = get_option('fps_dropshadow_y');
        $post_dropshadow_blur = get_option('fps_dropshadow_blur');

        $post_outer_dropshadow_x = get_option('fps_outer_dropshadow_x');
        $post_outer_dropshadow_y = get_option('fps_outer_dropshadow_y');
        $post_outer_dropshadow_blur = get_option('fps_outer_dropshadow_blur');

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


    <h3>Main Options</h3>
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">Max Number of Posts to Display</th>
                <td>
                    <input type="text" name="fps_max_posts" value="<?php echo $max_posts; ?>" size="4">
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Header Text</th>
                <td>
                    <input type="text" name="fps_heading_text" value="<?php echo $post_heading_text; ?>" size="20">
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Elements to Display</th>
                <td>
                    <fieldset>
                        <legend class="hidden">Elements to Display</legend>

                        <?php if($post_display_title == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="fps_display_title" value="true" <?php echo $checked; ?>><?php _e(" Post Title"); ?>
                        <br />

                        <?php if($post_display_excerpt == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="fps_display_excerpt" value="true" <?php echo $checked; ?>><?php _e(" Post Excerpt"); ?>
                        <br />

                        <?php if($post_display_heading == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="fps_display_heading" value="true" <?php echo $checked; ?>><?php _e(" Scroll Box Heading"); ?>
                        <br />

                        <?php if($post_display_slidenumbers == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="fps_display_slidenumbers" value="true" <?php echo $checked; ?>><?php _e(" Slide Numbers"); ?>
                        <br />

                    </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Scroll Size</th>
                <td>
                <fieldset>
                    <input type="text" name="fps_height" maxlength="5" size="5" value="<?php echo $post_height; ?>" />
                    <?php _e("Height"); ?>
                    <br />

                    <input type="text" name="fps_width" maxlength="5" size="5" value="<?php echo $post_width; ?>" />
                    <?php _e("Width"); ?>
                    <br />

                    <?php _e("Height and Width are in pixels."); ?>
                    <br />
                    <?php _e("Thumbnail images are height=(ScrollHeight-20) width=(ScrollWidth-45)"); ?>
                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Autoscroll</th>
                <td>
                    <fieldset>
                        <legend class="hidden">Autoscroll</legend>

                        <?php if($post_autoscroll == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="fps_autoscroll" value="true" <?php echo $checked; ?>><?php _e(" Automatically Scroll Posts"); ?>
                        <br />
                        <br />

                        <input type="text" name="fps_autoscroll_interval" maxlength="5" size="5" value="7" />
                        <?php _e("Autoscroll Interval (seconds)"); ?>
                        <br />
                        <?php _e("Note: Currently can not be changed. Hardcoded to 7 seconds."); ?>
                        <br />
                    </fieldset>

                </td>
            </tr>

        </tbody>
    </table>





    <h3>Arrow and BG Options</h3>
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">Arrow Color</th>
                <td>
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
                    <br />
                    
                    <fieldset>
                        <input type="text" name="fps_arrow_custom_url" size="100" value="<?php echo $post_arrow_custom_url; ?>" />
                        <?php _e("Custom Arrow Image URL"); ?>
                        <br />
                    </fieldset>
                    
                </td>
            </tr>


            <tr valign="top">
                <th scope="row">Arrow Position</th>
                <td>
                    <?php _e("<strong>Arrow Position:</strong>"); ?> 
                    <select name="fps_arrow_position">
                        <option value="sides" <?php if($post_arrow_position=="sides"){echo 'selected';} ?>>Image Sides</option>
                        <option value="below" <?php if($post_arrow_position=="below"){echo 'selected';} ?>>Below Image</option>
                    </select>                   
                </td>
            </tr>


            <tr valign="top">
                <th scope="row">BG Colors</th>
                <td>
                <fieldset>
                    <input type="text" name="fps_bg_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_bg_color; ?>" />
                    <?php _e("Main BG/Border"); ?>
                    <br />
                    
                    <input type="text" name="fps_textbg_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_textbg_color; ?>" />
                    <?php _e("Title/Excerpt BG Color"); ?>
                    <br />
                    
                    <input type="text" name="fps_selectedslide_bgcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_selectedslide_bgcolor; ?>" />
                    <?php _e("Selected Slide Number BG"); ?>
                    <br />
                    
                    <input type="text" name="fps_unselectedslide_bgcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_unselectedslide_bgcolor; ?>" />
                    <?php _e("Unselected Slide Number BG"); ?>
                    <br />
                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">BG Transparency</th>
                <td>
                    <input type="text" name="fps_textbg_alpha" value="<?php echo $post_textbg_alpha; ?>" size="6">
                    <?php _e("Title/Excerpt BG Alpha"); ?> 
                    <br />
                    <?php _e("Valid Range: 0.0(invisible) to 1.0(opaque)"); ?>
                </td>
            </tr>


        </tbody>
    </table>







    <h3>Text Options</h3>
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">Text Colors</th>
                <td>
                <fieldset>
                    <input type="text" name="fps_title_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_title_color; ?>" />
                    <?php _e("Title"); ?>
                    <br />

                    <input type="text" name="fps_excerpt_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_excerpt_color; ?>" />
                    <?php _e("Excerpt"); ?>
                    <br />

                    <input type="text" name="fps_heading_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_heading_color; ?>" />
                    <?php _e("Post Scroll Heading"); ?>
                    <br />

                    <input type="text" name="fps_selectedslide_textcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_selectedslide_textcolor; ?>" />
                    <?php _e("Selected Slide"); ?>
                    <br />

                    <input type="text" name="fps_unselectedslide_textcolor" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_unselectedslide_textcolor; ?>" />
                    <?php _e("Unselected Slide"); ?>
                    <br />
                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Selected Slide Number</th>
                <td>
                <fieldset>

                    <?php if($post_selectedslide_bold == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                    <input type="checkbox" name="fps_selectedslide_bold" value="true" <?php echo $checked; ?>><?php _e(" Bold"); ?>
                    <br />

                    <?php if($post_selectedslide_italics == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                    <input type="checkbox" name="fps_selectedslide_italics" value="true" <?php echo $checked; ?>><?php _e(" Italics"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Unselected Slide Number</th>
                <td>
                <fieldset>

                    <?php if($post_unselectedslide_bold == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                    <input type="checkbox" name="fps_unselectedslide_bold" value="true" <?php echo $checked; ?>><?php _e(" Bold"); ?>
                    <br />

                    <?php if($post_unselectedslide_italics == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                    <input type="checkbox" name="fps_unselectedslide_italics" value="true" <?php echo $checked; ?>><?php _e(" Italics"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>


        </tbody>
    </table>

    

        









    <h3>Drop Shadow Options</h3>
    <table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">Drop Shadow Colors</th>
                <td>                    
                <fieldset>
                    <input type="text" name="fps_innershadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_innershadow_color; ?>" />
                    <?php _e("Inner Box Drop Shadow"); ?>
                    <br />
                    
                    <input type="text" name="fps_outershadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_outershadow_color; ?>" />
                    <?php _e("Outer Box Drop Shadow"); ?>
                    <br />


                    <input type="text" name="fps_selectedslide_dropshadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_selectedslide_dropshadow_color; ?>" />
                    <?php _e("Selected Slide Number BG"); ?>
                    <br />
                    
                    <input type="text" name="fps_unselectedslide_dropshadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_unselectedslide_dropshadow_color; ?>" />
                    <?php _e("Unselected Slide Number BG"); ?>
                    <br />
                    
                    <input type="text" name="fps_slide_textshadow_color" maxlength="6" size="6" class="inp-heading" value="<?php echo $post_slide_textshadow_color; ?>" />
                    <?php _e("Slide Number Text"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Inner Box Drop Shadow</th>
                <td>                    
                <fieldset>

                    <input type="text" name="fps_dropshadow_x" value="<?php echo $post_dropshadow_x; ?>" size="4">
                    <?php _e("Horizontal Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_dropshadow_y" value="<?php echo $post_dropshadow_y; ?>" size="4">
                    <?php _e("Vertical Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_dropshadow_blur" value="<?php echo $post_dropshadow_blur; ?>" size="4">
                    <?php _e("Blur Distance"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Outer Box Drop Shadow</th>
                <td>                    
                <fieldset>

                    <input type="text" name="fps_outer_dropshadow_x" value="<?php echo $post_outer_dropshadow_x; ?>" size="4">
                    <?php _e("Horizontal Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_outer_dropshadow_y" value="<?php echo $post_outer_dropshadow_y; ?>" size="4">
                    <?php _e("Vertical Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_outer_dropshadow_blur" value="<?php echo $post_outer_dropshadow_blur; ?>" size="4">
                    <?php _e("Blur Distance"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Slide Number Text Drop Shadow</th>
                <td>                    
                <fieldset>
                    
                    <input type="text" name="fps_slide_textshadow_x" value="<?php echo $post_slide_textshadow_x; ?>" size="4">
                    <?php _e("Horizontal Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_slide_textshadow_y" value="<?php echo $post_slide_textshadow_y; ?>" size="4">
                    <?php _e("Vertical Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_slide_textshadow_blur" value="<?php echo $post_slide_textshadow_blur; ?>" size="4">
                    <?php _e("Blur Distance"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Selected Slide Number BG Drop Shadow</th>
                <td>                    
                <fieldset>
                    
                    <input type="text" name="fps_selectedslide_dropshadow_x" value="<?php echo $post_selectedslide_dropshadow_x; ?>" size="4">
                    <?php _e("Horizontal Offset"); ?>
                    <br />

                    
                    <input type="text" name="fps_selectedslide_dropshadow_y" value="<?php echo $post_selectedslide_dropshadow_y; ?>" size="4">
                    <?php _e("Vertical Offset"); ?>
                    <br />

                    
                    <input type="text" name="fps_selectedslide_dropshadow_blur" value="<?php echo $post_selectedslide_dropshadow_blur; ?>" size="4">
                    <?php _e("Blur Distance"); ?>
                    <br />

                    <?php if($post_selectedslide_inset == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                    <input type="checkbox" name="fps_selectedslide_inset" value="true" <?php echo $checked; ?>><?php _e(" Inset"); ?>
                    <br />

                </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Unselected Slide Number BG Drop Shadow</th>
                <td>                    
                <fieldset>
                    
                    <input type="text" name="fps_unselectedslide_dropshadow_x" value="<?php echo $post_unselectedslide_dropshadow_x; ?>" size="4">
                    <?php _e("Horizontal Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_unselectedslide_dropshadow_y" value="<?php echo $post_unselectedslide_dropshadow_y; ?>" size="4">
                    <?php _e("Vertical Offset"); ?>
                    <br />
                    
                    <input type="text" name="fps_unselectedslide_dropshadow_blur" value="<?php echo $post_unselectedslide_dropshadow_blur; ?>" size="4">
                    <?php _e("Blur Distance"); ?>
                    <br />

                    <?php if($post_unselectedslide_inset == 1){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                    <input type="checkbox" name="fps_unselectedslide_inset" value="true" <?php echo $checked; ?>><?php _e(" Inset"); ?>
                    <br />
                    <br />

                    <?php _e("Horizontal and Vertival Offsets can be a positive or negative pixel value. Blur Distance is a single positive value."); ?>
                    <br />
                    <?php _e("Enter a single number without 'px' unit."); ?>
                    <br />
                    <?php _e("Examples:'5', '10'"); ?>
                    <br />
                    <?php _e("Note: Enter '0' for all of an element's entries to remove its drop shadow entirely."); ?>
                    <br />
                    <a href="http://www.css3.info/preview/box-shadow/">See this site for more details</a>
                    <br />

                </fieldset>
                </td>
            </tr>


        </tbody>
    </table>



    <h3>Rounded Corners</h3>
    <table class="form-table">
        <tbody>

            <tr valign="top">
                <th scope="row">Corner Radius</th>
                <td>                    
                <fieldset>

                    <input type="text" name="fps_slide_bgradius" value="<?php echo $post_slide_bgradius; ?>" size="12">
                    <?php _e("Slide Number BG"); ?>
                    <br />
                    
                    <input type="text" name="fps_outer_corner_radius" value="<?php echo $post_outer_corner_radius; ?>" size="12">
                    <?php _e("Outer Box"); ?>
                    <br />
                    
                    <input type="text" name="fps_corner_radius" value="<?php echo $post_corner_radius; ?>" size="12">
                    <?php _e("Inner Box"); ?>
                    <br />
                    <br />

                    <?php _e("Valid corner radius is either one or two px or % values."); ?>
                    <br />
                    <?php _e("Examples:'5px', '10%', '3px 8px', '5% 2%' "); ?> 
                    <br />
                    <?php _e("Note: Enter '0' for all of an element's entries to remove its rounded corners entirely."); ?>
                    <br />
                    <a href="http://www.css3.info/preview/rounded-border/">See this site for more details</a>                
                    <br />

                </fieldset>
                </td>
            </tr>

        </tbody>
    </table>





    <p class="submit">
        <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
    </p>
</form>
</div>