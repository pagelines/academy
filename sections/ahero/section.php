<?php
/*
	Section: Academy Hero
	Author: James Giroux
	Author URI: http://jamesgiroux.ca
	Description: A responsive full width image and text area with button.
	Class Name: aHero
	Workswith: templates, main, header, morefoot, content
	Cloning: true
	Filter: component
	Loading: active
*/

/*
 * Main section class
 *
 * @package PageLines Framework
 * @author PageLines
 */
class aHero extends PageLinesSection {

	function section_opts() {

		$opts = array(

			array(
				'title'			=> __( 'Academy Hero Settings', 'pagelines' ),
				'type'			=> 'multi',
				'opts'			=> array(

			array(
				'key'			=> 'pagelines_aherounit_title',
				'type'			=> 'text',
				'label'			=> __( 'Heading', 'pagelines' ) ),

			array(
				'key'			=> 'pagelines_aherounit_tagline',
				'type'			=> 'textarea',
				'label'			=> __( 'Subtext', 'pagelines' ) )
										)
									),

            array(
                'title'			=> __( 'Academy Hero Image', 'pagelines' ),
                'type'			=> 'multi',
                'opts'			=> array(
			array(
				'key'			=> 'pagelines_aherounit_image',
				'type'			=> 'image_upload',
				'label'			=> __( 'Upload Custom Image', 'pagelines' ) ),
            array(
                'key'			=> 'aherounit_reverse',
                'type'			=> 'check',
                'default'		=> false,
                'label'			=> __( 'Reverse the Academy Hero unit (image on left)', 'pagelines' ) ),
                )),

			array(
				'title'			=> __( 'Content Widths', 'pagelines' ),
				'type'			=> 'multi',
				'opts'			=> array(

			array(
				'label'			=> __( 'Text Area Width', 'pagelines' ),
				'key'			=> 'aherounit_left_width',
				'default'		=> 'span6',
				'type'			=> 'select',
				'opts'			=> array(

				'span3'			=> array( 'name' => '25%' ),
				'span4'			=> array( 'name' => '33%' ),
				'span6'			=> array( 'name' => '50%' ),
				'span8'			=> array( 'name' => '66%' ),
				'span9'			=> array( 'name' => '75%' ),
				'span7'			=> array( 'name' => '90%' )
										)
									),

			array(
				'label'			=> __( 'Image Area Width', 'pagelines' ),
				'key'			=> 'aherounit_right_width',
				'default'		=> 'span6',
				'type'			=> 'select',
				'opts'			=> array(

				'span3'			=> array( 'name' => '25%' ),
				'span4'			=> array( 'name' => '33%' ),
				'span6'			=> array( 'name' => '50%' ),
				'span8'			=> array( 'name' => '66%' ),
				'span9'			=> array( 'name' => '75%' ),
				'span7'			=> array( 'name' => '90%' )
										)
									)
								)
							),

			array(
				'title'			=> __( 'Academy Hero Action Button', 'pagelines' ),
				'type'			=> 'multi',
				'opts'			=> array(

			array(
				'key'			=> 'aherounit_button_link',
				'type'			=> 'text',
				'label'			=> __( 'Button link destination (URL - Required)', 'pagelines' ) ),

			array(
				'key'			=> 'aherounit_button_text',
				'type'			=> 'text',
				'label'			=> __( 'Academy Hero Button Text', 'pagelines' ) ),

			array(
				'key'			=> 'aherounit_button_target',
				'type'			=> 'check',
				'default'		=> false,
				'label'			=> __( 'Open link in new window', 'pagelines' ) ),

			array(
				'label'			=> __( 'Select Button Color', 'pagelines' ),
				'key'			=> 'aherounit_button_theme',
				'default'		=> 'academy',
				'type'			=> 'select',
				'opts'			=> array(

				'primary'		=> array( 'name' => __( 'Blue', 'pagelines' ) ),
				'warning'		=> array( 'name' => __( 'Orange', 'pagelines' ) ),
				'important'		=> array( 'name' => __( 'Red', 'pagelines' ) ),
				'success'		=> array( 'name' => __( 'Green', 'pagelines' ) ),
				'info'			=> array( 'name' => __( 'Light Blue', 'pagelines' ) ),
				'reverse'		=> array( 'name' => __( 'Grey', 'pagelines' ) ),
				'academy'		=> array( 'name' => __( 'Academy', 'pagelines') )
										)
									)
								)
							)
						);
	return $opts;
	}


	/**
	* Section template.
	*/
   function section_template() {

		$hero_lt_width = $this->opt( 'aherounit_left_width', $this->oset );
		$hero_rt_width = $this->opt( 'aherounit_right_width', $this->oset );
   		$hero_title = $this->opt( 'pagelines_aherounit_title', $this->tset );
		$hero_tag = $this->opt( 'pagelines_aherounit_tagline', $this->tset );
		$hero_img = $this->opt( 'pagelines_aherounit_image', $this->tset );
		$hero_butt_link = $this->opt( 'aherounit_button_link', $this->oset );
		$hero_butt_text = $this->opt( 'aherounit_button_text', $this->oset );
		$hero_butt_target = ( $this->opt( 'aherounit_button_target', $this->oset ) ) ? ' target="_blank"': '';
		$hero_butt_theme = $this->opt( 'aherounit_button_theme', $this->oset );
        $hero_reverse = ( $this->opt( 'aherounit_reverse', $this->oset ) ) ? 'pl-ahero-reverse': '';

		if ( ! $hero_rt_width )
			$hero_rt_width = 'span6';

		if ( ! $hero_lt_width )
			$hero_lt_width = 'span6';

		$hero_title = ($hero_title) ? $hero_title : __('Academy Hero!', 'pagelines');
		$hero_tag = ($hero_tag) ? $hero_tag : __('Now just set up your Academy Hero section options', 'pagelines');



	   	printf( '<div class="pl-ahero-wrap row %s">', $hero_reverse);


	   	if( $hero_lt_width )
			printf( '<div class="pl-ahero %s" >', $hero_lt_width );
			?>
				<?php

					if( $hero_title )
						printf( '<h1 class="m-bottom" data-sync="pagelines_aherounit_title">%s</h1>', $hero_title );

					if( $hero_tag )
		  				printf( '<p data-sync="pagelines_aherounit_tagline">%s</p>', $hero_tag );

	  			    if( $hero_butt_link )
					printf( '<a %s class="btn btn-%s btn-large" href="%s" data-sync="aherounit_button_text">%s</a> ', $hero_butt_target, $hero_butt_theme, $hero_butt_link, $hero_butt_text );
	  			?>
			</div>

	   	<?php
	   	if( $hero_rt_width )
			printf( '<div class="pl-ahero-image %s">', $hero_rt_width);

		if( $hero_img )
			printf( '<div class="ahero_image"><img class="pl-imageframe" data-sync="pagelines_aherounit_image" src="%s" /></div>', apply_filters( 'pl_ahero_image', $hero_img ) );

		?>
			</div>

		</div>

		<?php

	}

}