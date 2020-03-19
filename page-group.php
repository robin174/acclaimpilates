<?php
/*
Template Name: Group Classes
*/
get_header(); ?>
	
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
		    <main class="main small-12 medium-12 large-11 cell" role="main">
				
						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-12 large-12">
								<h1>group classes</h1>
								<?php the_field('introduction'); ?>
							</div>
						</div>

						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-6 large-6 medium-order-1">
								<figure class="white">
									<img src="<?php the_field('group_beginner'); ?>" alt="">
								</figure>
							</div>
							<div class="cell small-12 medium-6 large-6 medium-order-2">
								<h3>beginners</h3>
								<?php if( have_rows('group_beginner_list') ): // Repeater 01 Field Name ?>
			    					<ul class="body-bullet">
			    						<?php while( have_rows('group_beginner_list') ): the_row(); ?>
											<li><?php the_sub_field('list_point'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>

						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-6 large-6 medium-order-2">
								<figure class="white">
									<img src="<?php the_field('group_intermediate'); ?>" alt="">
								</figure>
							</div>
							<div class="cell small-12 medium-6 large-6 medium-order-1">
								<h3>intermediate</h3>
								<?php if( have_rows('group_intermediate_list') ): // Repeater 01 Field Name ?>
			    					<ul class="body-bullet">
			    						<?php while( have_rows('group_intermediate_list') ): the_row(); ?>
											<li><?php the_sub_field('list_point'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>

						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-6 large-6 medium-order-1">
								<figure class="white">
									<img src="<?php the_field('group_advanced'); ?>" alt="">
								</figure>
							</div>
							<div class="cell small-12 medium-6 large-6 medium-order-2">
								<h3>advanced</h3>
								<?php if( have_rows('group_advanced_list') ): // Repeater 01 Field Name ?>
			    					<ul class="body-bullet">
			    						<?php while( have_rows('group_advanced_list') ): the_row(); ?>
											<li><?php the_sub_field('list_point'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>

						<div class="grid-x grid-margin-x">
							<div class="cell small-12 medium-6 large-6 medium-order-2">
								<figure class="white">
									<img src="<?php the_field('group_purestretch'); ?>" alt="">
								</figure>
							</div>
							<div class="cell small-12 medium-6 large-6 medium-order-1">
								<h3>pilates barre</h3>
								<?php if( have_rows('group_purestretch_list') ): // Repeater 01 Field Name ?>
			    					<ul class="body-bullet">
			    						<?php while( have_rows('group_purestretch_list') ): the_row(); ?>
											<li><?php the_sub_field('list_point'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-12 medium-centered large-12">
						<?php get_template_part('table'); ?>
						<p class="price"><?php the_field('price'); ?></p>
					</div>
				</div>

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-10 medium-centered large-12">
						<div class="bud">
							<a href="mailto:virginia@acclaimpilates.co.uk" class="button"><?php the_field('button_text') ;?></a>
						</div>
					</div>
				</div>

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-12 large-12">
						<?php get_template_part('parts/part-quotes'); ?>
					</div>
				</div>					
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>