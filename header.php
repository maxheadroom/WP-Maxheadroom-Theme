<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title('&laquo',true,'right');?><?php bloginfo('name'); ?></title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />

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
