<div id="nav">
				<div id="siteinfo">
					<h1><a href="<?php echo get_option('home');?>"><?php bloginfo('name');?></a></h1>
					<p><?php bloginfo('description');?></p>
				</div>
				<ul id="pages">
					<li><a href="<?php echo get_option('home');?>">Home</a></li>
					<?php wp_list_pages('title_li='); ?>
				</ul>

				<h2>Categories</h2>
				<ul id="categories">
					<?php wp_list_categories('show_count=0&title_li=&hide_empty=0&exclude=1');?>
				</ul>
				<?php get_template_part( 'personalized', 'sidebar-flattr' ); ?>	
				<?php if ( function_exists('wp_tag_cloud') ) : ?>

					<?php $args = array(
    							'taxonomy'  => array('post_tag','category'), 
   							); ?>
   
					<h2>Popular Tags</h2>
					<ul>
					<?php wp_tag_cloud(array( $args )); ?>
					</ul>
				<?php endif; ?>		
			</div>
