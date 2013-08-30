<?php
/*
	Section: Academy Callout
	Author: James Giroux
	Author URI: http://jamesgiroux.ca
	Description: A quick call to action for your users
	Class Name: aCallout
	Filter: component
	Loading: active
*/

class aCallout extends PageLinesSection {

	var $tabID = 'highlight_meta';


	function section_opts(){
		$opts = array(
			array(
				'type' 			=> 'select',
				'title' 		=> 'Select Format',
				'key'			=> 'acallout_format',
				'label' 		=> __( 'Callout Format', 'pagelines' ),
				'opts'=> array(
					'top'			=> array( 'name' => __( 'Text on top of button', 'pagelines' ) ),
					'inline'	 	=> array( 'name' => __( 'Text/Button Inline', 'pagelines' ) )
				),
			),
			array(
				'type' 			=> 'multi',
				'title' 		=> __( 'Callout Text', 'pagelines' ),
				'opts'	=> array(
					array(
						'key'			=> 'acallout_text',
						'type' 			=> 'text',
						'label' 		=> __( 'Callout Text', 'pagelines' ),
					),

				)
			),
			array(
				'type' 			=> 'multi',
				'title' 		=> 'Link/Button',
				'opts'	=> array(

					 array(
						'key'			=> 'acallout_link',
						'type' 			=> 'text',
						'label'			=> __( 'URL', 'pagelines' )
					),
					array(
						'key'			=> 'acallout_link_text',
						'type' 			=> 'text',
						'label'			=> __( 'Text on Button', 'pagelines' )
					),
					array(
						'key'			=> 'acallout_btn_theme',
						'type' 			=> 'select_button',
						'default'		=> 'academy',
						'label'			=> __( 'Button Color', 'pagelines' ),
					),

				)
			)

		);

		return $opts;

	}

	function section_template() {

		$text = $this->opt('acallout_text');
		$format = ( $this->opt('acallout_format') ) ? 'format-'.$this->opt('acallout_format') : 'format-inline';
		$link = $this->opt('acallout_link');
		$theme = ($this->opt('acallout_btn_theme')) ? $this->opt('acallout_btn_theme') : 'btn-academy';
		$link_text = ( $this->opt('acallout_link_text') ) ? $this->opt('acallout_link_text') : 'Learn More <i class="icon-angle-right"></i>';

		if(!$text && !$link){
			$text = __("Call to action!", 'pagelines');
		}

		?>
		<div class="acallout-container <?php echo $format;?>">

			<h2 class="acallout-head" data-sync="acallout_text"><?php echo $text; ?></h2>
			<a class="acallout-action btn <?php echo $theme;?> btn-large" href="<?php echo $link; ?>"  data-sync="acallout_link_text"><?php echo $link_text; ?></a>

		</div>
	<?php

	}
}