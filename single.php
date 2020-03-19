<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content grid-container">
	<div class="inner-content grid-x grid-margin-x grid-padding-x">
		<main class="main small-12 medium-12 large-11 cell" role="main">
		
			<?php while (have_posts()) : the_post(); ?>
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-3 large-3">
						<figure class="white">
							<?php the_post_thumbnail('normal'); ?>
						</figure>
					</div>
					<div class="cell small-12 medium-9 large-9">
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div class="entry-content">
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<?php get_template_part('buildingblock'); ?>
								<?php if (in_category('news')): ?>
									<div>
										<p><strong>All best wishes.</strong></p>
										<figure>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/signature-scan.png">
										</figure>
									</div>
								<?php endif;?>
							</div>
						</article>
					</div>
				</div>
			<?php endwhile; ?>

		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>