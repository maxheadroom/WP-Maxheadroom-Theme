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
		
							<?php the_content(); ?>
						</div>
						<!-- End of single post -->
						<?php comments_template(); ?>
					<?php endwhile; ?>

					
					
					<?php else: ?>
						<div class="post">
							<h2>No Posts found.</h2>
						</div>
					<?php endif; ?>
				<?php get_footer(); ?>