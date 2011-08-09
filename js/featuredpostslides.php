<?php 
    header('content-type: application/x-javascript'); 
    define('WP_USE_THEMES', false);
    require_once((dirname(dirname(dirname(dirname(dirname( __FILE__ ) ) )))).'/wp-config.php');
?>

<?php
    $post_scroll_speed = get_option('fps_scroll_speed');
    $post_scroll_fadeInSpeed = get_option('fps_scroll_fadeInSpeed');
    $post_scroll_fadeOutSpeed = get_option('fps_scroll_fadeOutSpeed');
    $post_scroll_interval = get_option('fps_scroll_interval');
?>

var type = 'none'; // Type of slider present (v1.0 only supports 'single')
var animationLocked = false; // Lock object for animations
var autoscrollInterval = new Array();
var $j = jQuery.noConflict(); // Prevent jQuery conflicts

/** Initialize jQuery based animations */
function init()
{
    // lock animations while initializing
    animationLocked = true;

    // determine if the single or triple flavor is in use
    if ($j('.fps-single').length != 0 && $j('.fps-single li').length > 1)
    {
        type = 'single'

        // hide all but first entry in featured posts list
        $j('.featured-posts-wrapper').each(function() {
           $j(this).find('.fps-text').slice(1).fadeOut();
           $j(this).find('ul.featured-posts li').slice(1).css('display','none');
        });      
    }

    // initialize the scroll buttons and autoscroll
    initScrollButtons();
    initSlideNumbers();
    initAutoscroll();

    animationLocked = false;
}

/** Add click event handlers to scroll buttons */
function initScrollButtons()
{
    if (type != 'none')
    {
        $j('.scrollFeaturedPostsRight').each(function(index) {
            $j(this).click(function() {
                if (animationLocked == false)
                {
                    scrollFeaturedPosts(this, 'right');
                }
                clearInterval(autoscrollInterval[index]);
            });
        });

        $j('.scrollFeaturedPostsLeft').each(function(index) {
            $j(this).click(function() {
                if (animationLocked == false)
                {
                    scrollFeaturedPosts(this, 'left');
                }
                clearInterval(autoscrollInterval[index]);
            });
        });

        $j('.scrollFeaturedPostsRight-below').each(function(index) {
            $j(this).click(function() {
                if (animationLocked == false)
                {
                    scrollFeaturedPosts(this, 'right');
                }
                clearInterval(autoscrollInterval[index]);
            });
        });

        $j('.scrollFeaturedPostsLeft-below').each(function(index) {
            $j(this).click(function() {
                if (animationLocked == false)
                {
                    scrollFeaturedPosts(this, 'left');
                }
                clearInterval(autoscrollInterval[index]);
            });
        });
    }
    else
    {
        $j('.scrollFeaturedPostsRight').remove(); 
        $j('.scrollFeaturedPostsLeft').remove();
        $j('.featured-posts-wrapper ul').css('margin-left', '22px');
    }
}

function initSlideNumbers()
{
    if (type != 'none')
    {
        $j('ul.fps-slideNumberList').each(function(index) {
            $j(this).children('li').click(function() {
                if (animationLocked == false)
                {
                    scrollToPost(this);
                }
                clearInterval(autoscrollInterval[index]);
            });
        });
    }
}

function initAutoscroll()
{
    if (type != 'none')
    {
        $j('.featured-posts-wrapper').each(function(index) {
            if ($j(this).hasClass('fps-autoscroll'))
            {
                if ($j('.featured-posts-wrapper').slice(index,index+1).children('.scrollFeaturedPostsRight').length > 0)
                {
                    var callback = 
                        "scrollFeaturedPosts($j('.featured-posts-wrapper').slice(" + 
                        index + "," + (index + 1) + ").children('.scrollFeaturedPostsRight'), 'right')";
                    autoscrollInterval[index] = setInterval(
                        callback, <?php echo $post_scroll_interval ?>);
                }
                else
                {
                    var callback = 
                        "scrollFeaturedPosts($j('.featured-posts-wrapper').slice(" + 
                        index + "," + (index + 1) + ").children('.scrollFeaturedPostsRight-below'), 'right')";
                    autoscrollInterval[index] = setInterval(
                        callback, <?php echo $post_scroll_interval ?>);
                }
            }
        });
    }
}

function scrollToPost(slideButton)
{
    if (!($j(slideButton).hasClass('fps-selectedSlide')))
    {
        // lock animations
        animationLocked = true;

        // get the currently displayed element(s)
        var currentItem = $j(slideButton).parent().siblings('ul.featured-posts').children().children('li:visible');

        if (currentItem.length == 0)
        {
            currentItem = $j(slideButton).parent().siblings('ul.featured-posts').children('li:visible');
        }

        // get the next item to display
        var nextItemIndex = parseInt($j(slideButton).text());
        
        if (currentItem.parent('a').length == 1)
        {
            var nextItem = $j(slideButton).parent().siblings('ul.featured-posts').children().children('li').eq(nextItemIndex-1);
        }
        else
        {
            var nextItem = $j(slideButton).parent().siblings('ul.featured-posts').children('li').eq(nextItemIndex-1);
        }

        setSelectedSlide(nextItem);
        animate(nextItem, currentItem, 'right')
    }
}

function scrollFeaturedPosts(button, dir)
{
    if (animationLocked != true)
    {
        // lock animations
        animationLocked = true;

        // get the currently displayed element(s)
        var currentItem = $j(button).siblings('ul.featured-posts').children().children('li:visible');

        if (currentItem.length == 0)
        {
            currentItem = $j(button).siblings('ul.featured-posts').children('li:visible');
        }

        var nextItem;

        if (type == 'single')
        {        
            if (dir == 'right')
            {
                if (currentItem.parent('a').length == 1)
                {
                    nextItem = currentItem.parent().next().children('li');
                }
                else
                {
                    nextItem = currentItem.next().next();
                }

                if (nextItem.length == 0)
                {
                    if (currentItem.parent('a').length == 1)
                    {
                        nextItem = currentItem.parent().siblings().first().children('li');
                    }
                    else
                    {
                        nextItem = currentItem.siblings().first().next();
                    }
                }
            }
            else if (dir == 'left')
            {
                if (currentItem.parent('a').length == 1)
                {
                    nextItem = currentItem.parent().prev().children('li');
                }
                else
                {
                    nextItem = currentItem.prev().prev();
                }

                if (nextItem.length == 0)
                {
                    if (currentItem.parent('a').length == 1)
                    {
                        nextItem = currentItem.parent().siblings().last().children('li');
                    }
                    else
                    {
                        nextItem = currentItem.siblings().last();
                    }
                }
            }
        }

        setSelectedSlide(nextItem);
        animate(nextItem, currentItem, dir);
    }
}

function setSelectedSlide(toShow)
{
    // Remove class from current slide
    if (toShow.parent('a').length == 1)
    {
        $j(toShow).parent().parent().siblings('ul.fps-slideNumberList').children('li.fps-selectedSlide').removeClass('fps-selectedSlide');
    }
    else
    {
        $j(toShow).parent().siblings('ul.fps-slideNumberList').children('li.fps-selectedSlide').removeClass('fps-selectedSlide');
    }

    // Get the index of the next item to be displayed
    var nextSlideIndex;
    if (toShow.parent('a').length == 1)
    {
        nextSlideIndex = $j(toShow).parent().index();
    }
    else
    {
        nextSlideIndex = (($j(toShow).index()) - 1) / 2;
    }

    if (toShow.parent('a').length == 1)
    {
        $j(toShow).parent().parent().siblings('ul.fps-slideNumberList').children('li').eq(nextSlideIndex).addClass('fps-selectedSlide');
    }
    else
    {
        $j(toShow).parent().siblings('ul.fps-slideNumberList').children('li').eq(nextSlideIndex).addClass('fps-selectedSlide');
    }
}

function animate(toShow, toHide, dir)
{
    var shownWidth = toHide.width();

    // fade out text on currently displayed item
    $j(toHide).find('.fps-text').fadeOut(<?php echo $post_scroll_fadeOutSpeed ?>, function() {
        // Make new item visible.
        toShow.css('display','');

        // Position the elements to animate based on direction
        if (dir == 'right')
        {
            toShow.css({float:'right'});
            toShow.css({width:'0px'});
            toHide.css({float:'left'});
        }
        else
        {
            toShow.css({float:'left'});
            toShow.css({width:'0px'});
            toHide.css({float:'right'});
        }

        toHide.animate({width:'0px'}, <?php echo $post_scroll_speed ?>, function() {
            toHide.css('display','none');
            toHide.css('width','');
            toShow.css('float','');
            toHide.css('float','');
            $j(toShow).find('.fps-text').fadeIn(<?php echo $post_scroll_fadeInSpeed ?>, function() {
                animationLocked = false;
            });
        });

        toShow.animate({width: shownWidth},<?php echo $post_scroll_speed ?>);
    });
}

jQuery(document).ready(init);