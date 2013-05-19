<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title('&laquo',true,'right');?><?php bloginfo('name'); ?></title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/jquery-1.9.1.min.js"></script>
 
	  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/socialshareprivacy/jquery.socialshareprivacy.js"></script>
	  <script type="text/javascript">
	    jQuery(document).ready(function($){
	      if($('#socialshareprivacy').length > 0){
	        $('#socialshareprivacy').socialSharePrivacy({
					'info_link' : 'http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html',
					'css_path' : '<?php echo get_template_directory_uri(); ?>/socialshareprivacy/socialshareprivacy.css',
				  services : {
				    facebook : {
					  'status' : 'on',
				      'perma_option': 'off',
					  'dummy_img' : '<?php echo get_template_directory_uri(); ?>/socialshareprivacy/images/dummy_facebook.png'

				    }, 
				    twitter : {
				        'status' : 'on',
						  'dummy_img' : '<?php echo get_template_directory_uri(); ?>/socialshareprivacy/images/dummy_twitter.png'
				    },
				    gplus : {
					  'status' : 'on',
				      'display_name' : 'Google Plus',
						'dummy_img' : '<?php echo get_template_directory_uri(); ?>/socialshareprivacy/images/dummy_gplus.png'
				    }
				  },
				  'cookie_domain' : 'explain-it.org'
				});
				// ende
	
	      }
	    });
	  </script>

http://www.explain-it.org/wordpress/2013/05/18/why-hacked-twitter-accounts-are-good/socialshareprivacy/socialshareprivacy.css

	<!-- 
		insert personalized header content in the separate file 
		create the file: personalized-header.php
		see also: http://codex.wordpress.org/Function_Reference/get_template_part
	-->
	<?php get_template_part( 'personalized', 'header' ); ?>
	<!-- end personalized content -->
	
	<!-- insert WordPress header stuff -->
	<?php wp_head(); ?>
</head>	
