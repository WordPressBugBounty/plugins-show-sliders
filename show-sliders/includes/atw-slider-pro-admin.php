<?php
/* Copyright 2014, 2015 - WeaverTheme.com, Bruce E. Wampler */
// ========================================= >>> atw_slider_pro_options <<< ===============================

function atw_slider_pro_options() {
?>
<!-- ** Advanced Options ** -->
<h3><u>Advanced Options</u></h3>
<p></p>

<?php


    atw_slider_start_section();
    atw_slider_general_slider_layout();
    atw_slider_post_video_layout();
    atw_slider_end_section();

    atw_posts_save_slider_button();

    atw_slider_start_section();
    atw_slider_image_slider_layout();
    atw_slider_post_slider_layout();
    atw_slider_carousel_options();
    atw_slider_end_section();


    atw_posts_save_slider_button();

    atw_slider_start_section();

    atw_slider_show_misc_opts();

    atw_slider_end_section();
    atw_posts_save_slider_button();

}

// ========================================= >>> atw_slider_general_slider_layout <<< ===============================

function atw_slider_general_slider_layout() {

?>
<div class="filter-title">&bull; General Slider Layout</em>
    <span class="filter-title-description">Options affecting general layout of sliders</span></div>

<?php
    atw_slider_subheader('Slider Width','Width and position of slider container');
    atw_posts_slider_val( 'sliderWidth', '+Slider Width - Percent of enclosing container slider will use. (Defalut:100%)', '%');

    $cur_pos = atw_posts_get_slider_opt('sliderPosition');
    if ($cur_pos == '' )
        $cur_pos = 'left';
?>
    <span style="margin-left:2.5em;margin-right:1.5em;">Position of slider if width specified:</span><br />
        <span style="margin-left:4em;"></span>
        <label for="sliderPosition">&nbsp;&nbsp;&nbsp;<input type="radio" name="sliderPosition" <?php checked($cur_pos, 'left'); ?> value="left">Left</label>
        <label for="sliderPosition">&nbsp;&nbsp;&nbsp;<input type="radio" name="sliderPosition" <?php checked($cur_pos, 'right'); ?> value="right">Right</label>
        <label for="sliderPosition">&nbsp;&nbsp;&nbsp;<input type="radio" name="sliderPosition" <?php checked($cur_pos, 'center'); ?> value="center">Center</label>
        <label for="sliderPosition">&nbsp;&nbsp;&nbsp;<input type="radio" name="sliderPosition" <?php checked($cur_pos, 'floatLeft'); ?> value="floatLeft">Float Left</label>
        <label for="sliderPosition">&nbsp;&nbsp;&nbsp;<input type="radio" name="sliderPosition" <?php checked($cur_pos, 'floatRight'); ?> value="floatRight">Float Right</label><br /><br />


<?php
    atw_slider_subheader('Slider Height');
    atw_posts_slider_checkbox( 'smoothHeight', '+Allow height of the slider shrink and grow to match slide height. (<em>* Not used with Thumbnail Paging or Carousels.</em>)','<br /><br />');



    atw_slider_subheader('Thumbnail Pagers','Attributes of thumbnail pager. (Do <em>not</em> apply to Carousels.)');
    atw_posts_slider_val( 'widthThumbs', '<em>Sliding Thumbnail</em> Area Width - Percent of main slider width Thumbnail Slider uses. (Defalut:100%)', '%');
    atw_posts_slider_checkbox('slidingAbove', 'Move <em>Sliding Thumbnail</em> pager above main slider','<br /></br>');
    atw_posts_slider_val( 'numberThumbs', '+Number of pager thumbnails (Default: Thumbnails - 5 per row; Sliding Thumbnails - 6)');
    atw_posts_slider_val( 'maxHeightThumbs', 'Maximum Height for thumbnail images - can make better looking thumbnails with mixed height images', 'px');
    atw_posts_slider_val( 'borderThumbs', '+Border around Thumbnails and Sliding Thumbnails pager images. (Transparent, so it will match slider bg color. Default:none)', 'px');
    atw_posts_slider_checkbox('noDimThumbs', "Don't dim thumbnails for non-current image.");
    atw_posts_slider_checkbox('fiOnlyforThumbs', 'Use Featured Image only for thumbnails (when FI is defined). Featured Image will <em>not</em> be used for slider main image. (for Image Sliders)');
    echo '<br />';

}

// ========================================= >>> atw_slider_image_slider_layout <<< ===============================

function atw_slider_image_slider_layout() {

?>
<div class="filter-title">&bull; Image Slider Layout</em>
    <span class="filter-title-description">Options affecting layout of image sliders</span></div>
  <p>
<?php
    atw_slider_subheader('Image Height and Width','Make images fill the slider, control height');

    atw_posts_slider_checkbox( 'fullWidthImages', '+Force images to use full width of slider. (Note: this can make portrait images very large, but will make small images fit the slider.)');
    atw_posts_slider_val( 'maxImageHeight', '+Maximum Height of Image. Useful to control height when full width set, but will lead to clipping of taller images.', 'px');
    echo '<br />';

	atw_slider_subheader('Image Size from Media Library');


    // easing ----------------------------------------
    $imgSizes = array (
        'thumbnail', 'medium', 'large', 'full'
        );

    $cur_opt = atw_posts_get_slider_opt('imageSize');
    if ($cur_opt == '')
        $cur_opt = 'full';
?>
    &nbsp;&nbsp;&nbsp;
	<select name="imageSize" >

<?php
	foreach ( $imgSizes as $size ) {
		echo '<option value="' . $size . '" ' . selected( $cur_opt == $size) . ">{$size}</option>\n";
	}
?>
	</select>
    &nbsp;Media Library Image Size to use for main slider image.
	<p style="margin-left:5.5em;">
	Your slider images will responsively resize in the slider, and honor above Height and Width settings, but the quality (resolution)
	is determined by the image used. Using large, full size images can slow your site down, while thumbnails may not look good.
	WordPress Responsive Image Sizing (since WP 4.4) will also be included in the image HTML code.</p>

<?php
	echo '<br />';
    atw_slider_subheader('Prev/Next Navigation', 'Change style and behavior of navigation arrows');
    atw_posts_slider_checkbox( 'topNavArrows', 'Show Prev/Next Navigation Arrows at top right corner of slider.');
    atw_posts_slider_checkbox( 'disableArrowSlide', 'Disable arrow "slide-in" effect.');
    atw_posts_slider_checkbox( 'alwaysShowArrows', 'Always display navigation arrows.');

    $cur_opt = atw_posts_get_slider_opt( 'navArrows' );
    $src = atw_slider_plugins_url('/flex/images/nav-');
    define ( 'WEAVER_SLIDER_PI_NAV_ARROWS', 23 );
    // ddslick is a bit tricky to use with HTML. It takes over the <select>, so it doesn't work as a
    // <select> any more. You have process the callback (onSelected), fetch the dynamic value, and then
    // stick it into the hidden <input> field to pass the value back via the form.
 ?>
 <div style="padding:20px 15px 5px 30px;float:left;"><em>Select Navigation Arrows:</em></div>
 <div style="padding-top:5px;float:left;">
    <input type="hidden" name="navArrows" id="navArrows" value="" />
    <select id="navArrowsDD" name="navArrowsDD" style="padding-top:100px">
        <option value="" <?php selected( $cur_opt == '' );?>>Default</option>
<?php
        for ( $i = 1 ; $i <= WEAVER_SLIDER_PI_NAV_ARROWS ; $i++ ) {
            echo '<option value="' . $i . '" ' . selected( $cur_opt== $i) .
                'data-imagesrc="' . $src . $i . '.png"' .
                "></option>\n";
        }
?>
	</select></div>
 <div style="float:left;padding:5px 5px 5px 24px;max-width:350px;">
    <small>You may change the navigation arrows. Different arrows will
    look better or worse depending on margins and bg colors.</small>
 </div>

 <div style="clear:both;"></div>
    <script>jQuery(document).ready(function($) {
    $('#navArrowsDD').ddslick({selectText:'Select a Navigation Arrow',width:'110',height:'340',background:'#ddd',
        onSelected: function(data){$('#navArrows').val(data.selectedData.value);
        }
    });});
    </script>

  </p>

<?php
}

// ========================================= >>> atw_slider_post_slider_layout <<< ===============================

function atw_slider_post_slider_layout() {

?>
<div class="filter-title">&bull; Post Slider Layout</em>
    <span class="filter-title-description">Options affecting layout of post sliders</span></div>

<?php
    atw_posts_slider_val( 'postHeight', '+Maximum Hieght for Post Slides. Will automatically add scroll bar for taller posts.', 'px');
    echo '<br />';
}

// ========================================= >>> atw_slider_post_video_layout <<< ===============================

function atw_slider_post_video_layout() {

?>
<div class="filter-title">&bull; Video</em>
    <span class="filter-title-description">Options sliders with video</span></div>

<?php
    atw_posts_slider_checkbox( 'video', 'Slider contains Video. (Featured Image only used for thumbnails - for all slides.)');
?>
<p style="margin-left:3.5em;"><strong>Recommended:</strong> Also check <em>Basic Options</em> "Don't autostart animation" to prevent a playing video
from sliding out of view. Also, you must check the "Use FI only for Thumbnails" option above if you need to use an FI as thumbnail pager for videos. See Help file for more information about including Videos in your sliders.</p>
<?php
}


// ========================================= >>> atw_slider_show_misc_opts <<< ===============================

function atw_slider_show_misc_opts() {

?>

<div class="filter-title">&bull; Timing and Order:
    <span class="filter-title-description">Options for animation timing</span></div>
<?php
    atw_posts_slider_checkbox( 'randomize', '+Randomize slide order');
    atw_posts_slider_val( 'startAt', '+The slide that the slider should start on. (0 = first slide)' );

    atw_posts_slider_val( 'slideshowSpeed', '+Set the speed of the slideshow cycling, in milliseconds (Default: 5000ms = 5 seconds)', 'ms' );
    atw_posts_slider_val( 'animationSpeed', '+Set the speed of animations, in milliseconds (Default: 600ms)', 'ms' );
    atw_posts_slider_val( 'initDelay', '+Set an initialization delay, in milliseconds (Default: 0)', 'ms' );

?>

<br />
<div class="filter-title">&bull; Other Options:
    <span class="filter-title-description">Other Options less commonly used.</span></div>
<?php

    atw_slider_subheader('Navigation', 'Options to enhance navigation');

    atw_posts_slider_checkbox( 'inlineLink', 'For Image Slide from a post, use link as specified in "Add Media" link for image rather than link to post.');
    atw_posts_slider_checkbox( 'no_pauseOnHover', '+Don\'t pause slide show when user hovers over slider.');
    atw_posts_slider_checkbox( 'no_pauseOnAction', '+Don\'t pause slide show when user clicks a Slider control. Not recommended.');
    atw_posts_slider_checkbox( 'no_animationLoop', "+Don't loop animation at either end (ignored for Carousel)" );
    atw_posts_slider_checkbox( 'mousewheel', 'Allow slider navigating via mousewheel. Is a non-conventional navigation method.','<br /><br />');

    atw_slider_subheader('Visual Effects');


    // easing ----------------------------------------
    $easings = array (
        'easeOutQuad', 'easeInOutQuad', 'easeInOutQuad',  'easeInBounce', 'easeOutBounce', 'easeInOutBounce',
        'easeInQuart', 'easeOutQuart', 'easeInOutQuart',  'easeInQuint', 'easeOutQuint', 'easeInOutQuint',
        'easeInSine', 'easeOutSine', 'easeInOutSine',     'easeInExpo', 'easeOutExpo', 'easeInOutExpo',
        'easeInCirc', 'easeOutCirc', 'easeInOutCirc',     'easeInElastic', 'easeOutElastic', 'easeInOutElastic',
        'easeInBack', 'easeOutBack', 'easeInOutBack',     'easeInCubic', 'easeOutCubic', 'easeInOutCubic',
        );

    $cur_opt = atw_posts_get_slider_opt('easing');
    if ($cur_opt == '')
        $cur_opt = 'swing';
?>
    &nbsp;&nbsp;&nbsp;
	<select name="easing" >
        <option value="swing" <?php selected( $cur_opt == 'swing' );?>>Swing</option>
        <option value="linear" <?php selected( $cur_opt == 'linear' );?>>Linear</option>
<?php
    if ( atw_slider_pro() ) {
        foreach ( $easings as $easing ) {
            echo '<option value="' . $easing . '" ' . selected( $cur_opt==$easing) . ">$easing</option>\n";
        }
    }
?>
	</select>
    &nbsp;Easing method - only affects Fader Slider Type. Differences between methods are subtle.
    See <a href="http://api.jqueryui.com/easings/" target="_blank" alt="Easing graphs">graphs</a>.


<?php

    echo '</p>';

    atw_posts_slider_checkbox( 'directionVertical', '+Use Vertical sliding for single-image Slider Type (not Fader or Carousel). Only looks good with borderless, equal height slides.');
    //atw_posts_slider_checkbox( 'showLoading', 'Show "Loading" spinner - useful if you have slide shows that take extra time to load. Applies to <em>all</em> sliders.','<br /><br />');
	// showLoading needs special treatment
?>
	<div style="display:inline;padding-left:2.5em;text-indent:-1.7em;"><label><input type="checkbox" name="showLoading" id="showLoading"
        <?php checked(atw_posts_getopt('showLoading') ); ?> >&nbsp;
Show "Loading" spinner - useful if you have slide shows that take extra time to load. Applies to <em>all</em> sliders.
</label></div><br /><br />
<?php

    atw_slider_subheader('No [gallery]', 'Can avoid [gallery] within [gallery] issues.');

    atw_posts_slider_checkbox( 'noGallery', '+Do not use [gallery] as source for images - use this to avoid "nested" [gallery] shortcodes.','<br /><br />');

	// can't have global slider options...

	//atw_slider_subheader('Load Slide Script Early', 'May speed up display of slider when loading page.');

    //atw_posts_slider_checkbox( 'scriptsAtTop', '+This advanced option loads the slider script in the beginning instead of at the end of the page. This may slightly speed up the loading of the slider when it is near the top of your page content.','<br /><br />');

    atw_slider_subheader('Per-Slider Custom CSS', 'Advanced option. Add per-slider custom CSS. See Help file for more information.');

    if ( current_user_can('unfiltered_html') ) {

        atw_posts_slider_textarea('sliderCustomCSS',
            '<br /><span style="margin-left:40px;"></span>Prefix <em>all</em> custom rules with <code>.this-slider</code>, and
            use <code>.this-slider</code> <em>instead</em> of <code>.atwkslider</code>.
            See the Help file for details.',
            '<br />', 100, 3, $maxlength = 1200);
    } else {
?>
        <p>Sorry, due to security issues, you must have an Administrator user role to add Custom CSS Rules.</p>
<?php
    }

}

// ========================================= >>> atw_slider_carousel_options <<< ===============================

function atw_slider_carousel_options() {

?>
<div class="filter-title">&bull; Carousel Options:
    <span class="filter-title-description">Options to configure carousel slider</span></div>

<?php
    atw_posts_slider_checkbox( 'reverse', '+Reverse the animation direction' );

    // atw_posts_slider_checkbox( 'no_allowOneSlide', '+Don\'t allow a slider comprised of a single slide'); // this one doesn't seem useful, so let's not show it
?>
<p style="margin-left:5.5em;text-indent:-3em;"><strong><em>Note:&nbsp;</em></strong>
    The following 4 options interact, and are used to control number of items in a Carousel Slider. The actual width of the slider in the browser
    window will also interact responsively with these values.
    If the Minimum and Maximum values are <em>not</em> the same, you can get "partial" slides displayed, depending on the item width set. This works fine,
    but you might want only complete images. Experiment with the values to get the the look you want.
</p>
<?php
    atw_posts_slider_val( 'minItems', '+Minimum number of visible carousel items. (Default: 4)' );
    atw_posts_slider_val( 'maxItems', '+Maxmimum number of visible carousel items. (Default: 4)' );
    atw_posts_slider_val( 'itemWidth', '+Width of individual carousel items. Interacts with Min/Max items and actual width of slider in browser. (Default: 250px)', 'px');
    atw_posts_slider_val( 'move', '+Number of carousel items that should move on animation. By default, slider will move all visible items.', '', '60px','<br /><br />' );

?>

<?php
}
