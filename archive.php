<?php get_header(); ?>
<body>
	<div id="wrapper">
		<div id="container">
		<!-- Start of main navigation container -->
			<?php get_sidebar(); ?>
		<!-- End of main navigation container -->
		<!-- Begin of main content -->
			<div id="main">

				<?php if (have_posts()): ?>
				
					<?php if (is_category()){ ?>
						<h2 class="title">all in category: <?php single_cat_title(); ?></h2>
					<?php } elseif (is_month()) { ?>
						<h2 class="title">all in month: <?php the_time('F, Y'); ?></h2>
					<?php } elseif (is_tag()) {?>
						<h2 class="title">all about tag: <?php single_tag_title(); ?></h2>
					<?php } ?>	
					
					
					<?php while(have_posts()): the_post(); ?>
						<!-- Begin of single post -->
						<div <?php post_class();?>">
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<!-- Display posts thumbnail if available -->
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="post-thumb">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>
							<?php endif; ?>
							<!-- End posts thumbnail -->
		
							<?php the_content(''); ?>
							
							<!-- Begin of post meta information -->
							<ul class="meta">
								<li><?php the_time('F jS, Y');?></li>
								<li><?php the_tags('Tagged with: ',' • ','<br />'); ?></li>
								<li><?php comments_number('No Comments', '1 Comment', '% Comments');?></li>
							</ul>
							<hr noshade="0" size="1" />
							<!-- end of post meta information -->
						</div>
						<!-- End of single post -->
					<?php endwhile; ?>

					<!-- Begin of Pagination links -->
					<div class="pagination">
						<ul>
							<li class="older"><?php next_posts_link();?></li>
							<li class="newer"><?php previous_posts_link();?></li>
						</ul>
					</div>
					<!-- End of pagination links -->
					
					<?php else: ?>
						<div class="post">
							<h2>No Posts found.</h2>
						</div>
					<?php endif; ?>
				<?php get_footer(); ?>