<?php

// Load Framework //
require_once( dirname(__FILE__) . '/setup.php' );

class academyTheme {


	function __construct() {

		$this->init();
		$this->options();

	}

	function init() {


	}

	// Draw Welcome Panel
	function welcome(){

		ob_start();
		?>
			 <div style="font-size:12px;line-height:14px;color:#444;">
        <p><?php _e('Welcome to Academy Theme! Please let me know if you have any questions or comments, and enjoy your product.','academy');?></p>
      </div>
      <div class="row">
        <div class="span6 zmb" style="text-align:center;">
          <a href="http://jamesgiroux.ca" target="_blank" class="btn btn-info btn-mini"><i class="icon icon-globe"></i>  <?php _e('Website','academy');?></a>
        </div>
        <div class="span6 zmb" style="text-align:center;">
          <a href="http://forum.pagelines.com/68-store-products/" target="_blank" class="btn btn-info btn-mini"><i class="icon icon-ambulance"></i>  <?php _e('Support','academy');?></a>
        </div>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Overview','academy');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('Academy Theme is designed to work with core PageLines sections and also includes two customized sections (Academy Hero & Academy Callout). To edit sections, click the pencil icon in the top left corner.','academy');?></p>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Instructions','academy');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('In depth instructions are available in the theme folder, or by <a href="/wp-content/themes/academy/theme_installation_instructions.pdf" target="_blank">clicking here.</a></p>','academy');?>
        <ul class="unstyled" style="font-size:12px;line-height:14px;">
          <li style="margin-bottom:7px;"><strong><?php _e('1.','academy');?> </strong><?php _e('Activate the theme in Appearance > Themes. Well done!','academy');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('2.','academy');?> </strong><?php _e('Import <a href="/wp-content/themes/academy/content.xml" target="_blank">content.xml</a> using the WordPress Importer.','academy');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('3.','academy');?> </strong><?php _e('Click <a href="/wp-admin/options-reading.php">here</a> and set your front page to the home page, and the posts page to the blog page.','academy');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('4.','academy');?> </strong><?php _e('In the Global Options panel, locate the Import/Export area and click on it.','academy');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('5.','academy');?> </strong><?php _e('To recreate the demo, click the Child Theme Config Import button.','academy');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('6.','academy');?> </strong><?php _e('That\'s it! Templates and look will all be loaded.  If you want to create more pages, in your Templates area you can apply any of the templates from the demo to new pages.','academy');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('6.','academy');?> </strong><?php _e('To edit the main color of the theme, simply change the Link Color in Global Options and your entire theme will change to match.','academy');?></li>
				</ul>
			</div>
		<?php
		return ob_get_clean();
	}

	// Theme Options
	function options(){
		$theme_settings = array();

		$theme_settings['academy_theme_config'] = array(
		   'pos'                  => 50,
		   'name'                 => __('Academy Theme','academy'),
		   'icon'                 => 'icon-circle',
		   'opts'                 => array(
		   		array(
		       	    'type'          => 'template',
            		'title'         => __('Welcome to Academy Theme','academy'),
            		'template'      => $this->welcome()
		       	),
		   )
		);
		pl_add_theme_tab($theme_settings);
	}


}

new academyTheme;

add_filter( 'render_css_posix_', '__return_true' ); //Flywheel Support