<?php
/*
Template Name: One To One
*/
get_header(); ?>
	
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
		    <main class="main small-12 medium-12 large-11 cell" role="main">
				
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-12 large-11">
						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-12 large-12">
								<h1>one-to-one personal training sessions</h1>
								<?php the_field('introduction'); ?>
								<section>
									<?php if( have_rows('bullet_points') ): // Repeater 01 Field Name ?>
			    					<ul class="body-bullet">
			    						<?php while( have_rows('bullet_points') ): the_row(); ?>
											<li><?php the_sub_field('bullet_point'); ?></li>
										<?php endwhile; ?>
									</ul>
									<?php endif; ?>
								</section>
								<p class="price"><?php the_field('price'); ?></p>
							</div>
						</div><!-- end .row -->
						
						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-6 large-6">
								<figure class="white">
									<img src="<?php the_field('image_one'); ?>" alt="Acclaim Pilates - One-to-one">
								</figure>
							</div>
							<div class="cell small-12 medium-6 large-6">
								<figure class="white">
									<img src="<?php the_field('image_two'); ?>" alt="Acclaim Pilates - One-to-one">
								</figure>
							</div>
						</div><!-- end .row -->
					</div>
				</div><!-- end .row -->

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-11 large-12">
						<?php get_template_part('parts/part-quotes'); ?>
					</div>
				</div><!-- end .row -->						
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>