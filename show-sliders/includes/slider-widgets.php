<?php
/*
 *  Weaver X Widgets and shortcodes - widgets
 */

class WeaverSS_Widget_Text extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'WeaverSS_Widget_Slider',
		 'description' => esc_html__('Show a Slider','show-sliders' /*adm*/));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('wvr_showslider', esc_html__('Weaver Show Slider','show-sliders' /*adm*/), $widget_ops, $control_ops);
	}

	function widget($args, $instance) {
		// Get menu

		$instance['title'] = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);

		$slider_list = $instance['slider_list'];
		if (!$slider_list) $slider_list = 'default';

		$add_class = $instance['add_class'];
		if (!$add_class) $add_class ='';


		echo $args['before_widget'];

		if ( !empty($instance['title']) )
			echo $args['before_title'] . $instance['title'] . $args['after_title'];

		//echo "You will display: {$slider_list}";
		require_once(dirname( __FILE__ ) . '/atw-slider-shortcode.php');
		$before = $add_class ? "<div class='{$add_class}'>" : '';
		$after = $add_class ? "</div>" : '';

		echo $before . atw_slider_shortcode( array('name' => $slider_list) ) . $after;

		echo $args['after_widget'];
}

function update( $new_instance, $old_instance ) {
	$instance['title'] = strip_tags( stripslashes($new_instance['title']) );
	$instance['slider_list'] = $new_instance['slider_list'];
	$instance['add_class'] = strip_tags( stripslashes($new_instance['add_class']) );
	return $instance;
}

function form( $instance ) {
	$title = isset( $instance['title'] ) ? $instance['title'] : '';
	$slider_list = isset( $instance['slider_list'] ) ? $instance['slider_list'] : 'default';
	$add_class = isset( $instance['add_class'] ) ? $instance['add_class'] : '';


	// Get menus

	$sliders = atw_posts_getopt('sliders');



	// If no menus exists, direct the user to go and create some.
	if ( empty($sliders)  ) {
		echo '<p>' . 'No Sliders have been created yet. Create some on the <em>Weaver Posts & Slider Options -> Sliders</em> admin menu.' .'</p>';
		return;
	}
?>
	<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php echo('Title (optional):' /*a*/ ) ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_textarea($title); ?>" />
	</p>

	<p>
	<label for="<?php echo $this->get_field_id('slider_list'); ?>"><?php echo('Select a Slider'); ?></label><br />
	<select id="<?php echo $this->get_field_id('slider_list'); ?>" name="<?php echo $this->get_field_name('slider_list'); ?>">
<?php
		foreach ( $sliders as $slider) {
			$selected = $slider_list == $slider['slug'] ? ' selected="selected"' : '';
			echo '<option'. $selected .' value="' . $slider['slug'] .'">'. $slider['name'] .'</option>';
		}
?>
	</select>
	</p>

	<p>
	<label for="<?php echo $this->get_field_id('add_class'); ?>"><?php echo('Additional Classes to Wrap Slider (optional):'  ) ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('add_class'); ?>" name="<?php echo $this->get_field_name('add_class'); ?>" value="<?php echo esc_textarea($add_class); ?>" />
	</p>
<?php
   }
}


add_action("widgets_init", "wvrx_ss_load_widgets");


function wvrx_ss_load_widgets() {
	register_widget("WeaverSS_Widget_Text");
}
