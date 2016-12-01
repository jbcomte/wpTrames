<?php 
// Adding customizer home page setting
function bluestreet_theme_style_customizer( $wp_customize ){
$wp_customize->remove_control('header_textcolor');

//Theme color
class WP_color_Customize_Control extends WP_Customize_Control {
public $type = 'new_menu';

       function render_content()
       
	   {
	   echo '<h3>Light & Dark Background Setting</h3>';
		  $name = '_customize-color-radio-' . $this->id; 
		  foreach($this->choices as $key => $value ) {
            ?>
               <label>
				<input type="radio" value="<?php echo $key; ?>" name="<?php echo esc_attr( $name ); ?>" data-customize-setting-link="<?php echo esc_attr( $this->id ); ?>" <?php if($this->value() == $key){ echo 'checked="checked"'; } ?>>
				<img <?php if($this->value() == $key){ echo 'class="color_scheem_active"'; } ?> src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg-pattern/<?php echo $value; ?>" alt="<?php echo esc_attr( $value ); ?>" />
				</label>
				
            <?php
		  }
		  ?>
		  <script>
			jQuery(document).ready(function($) {
				$("#customize-control-wallstreet_pro_options-webriti_stylesheet label img").click(function(){
					$("#customize-control-wallstreet_pro_options-webriti_stylesheet label img").removeClass("color_scheem_active");
					$(this).addClass("color_scheem_active");
				});
			});
		  </script>
		  <?php
       }

}
	/* Theme Style settings */
	$wp_customize->add_section( 'theme_style' , array(
		'title'      => __('Theme Style Setting', 'bluestreet'),
		'priority'   => 0,
   	) );
	
	 //Theme Color Scheme
	$wp_customize->add_setting(
	'wallstreet_pro_options[webriti_stylesheet]', array(
	'default' => 'default.css',  
	'capability'     => 'edit_theme_options',
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
    ));
	$wp_customize->add_control(new WP_color_Customize_Control($wp_customize,'wallstreet_pro_options[webriti_stylesheet]',
	array(
        'label'   => __('Predefined Colors', 'bluestreet'),
        'section' => 'theme_style',
		'type' => 'radio',
		'choices' => array(
            'default.css'=>'dark.png',
			'light.css'=>'light.png',
    )
	
	)));
}
add_action( 'customize_register', 'bluestreet_theme_style_customizer' );