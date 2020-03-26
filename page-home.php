<?php
/*
Template Name: Home
*/
get_header(); ?>

	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
		    <main class="main small-12 medium-12 large-11 cell" role="main">
				
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-6 large-5">
						<h1 class="welcome"><?php the_field('home_title'); ?></h1>
						<?php the_field('home_welcome_text'); ?>
					</div>
					<div class="cell small-12 medium-6 large-7">
						<?php /*
						<figure class="white">
							<img src="<?php the_field('home_welcome_image'); ?>" alt="<?php the_field('home_title'); ?>">
						</figure>
						*/ ?>
						<div class="flex-video vimeo">
					        <iframe src="//player.vimeo.com/video/<?php the_field('home_welcome_video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					    </div>
					</div>
				</div>

				<?php if (get_field('home_alert')): ?>
					<div class="grid-x grid-margin-x">
						<div class="cell small-12 medium-12 large-12">
							<a href="<?php the_field('home_alert_link'); ?>" title="<?php the_field('home_alert'); ?>"><?php the_field('home_alert'); ?></a>
						</div>
					</div>
				<?php endif; ?>

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-12 large-12 text-center">
						<p class="price" style="margin-bottom: 5px; font-size: 150%;">New Classes for Autumn 2018</p>
							<p style="font-size: 110%;"><strong>Beginners - Wednesdays 10am &amp; 7pm<br>
							Pilates Barre - Mondays 8pm, and Wednesdays 9.15am</strong></p>
							<p><a href="https://www.acclaimpilates.co.uk/group-classes/"><strong>Find out more on our Group Classes page.</strong></a></p>
					</div>
				</div>

				<div class="grid-x grid-margin-x">
					<?php if( have_rows('home_core_benefits') ): ?><!-- Parent repeater -->
						<?php while( have_rows('home_core_benefits') ): the_row(); ?>
							<div class="cell small-12 medium-4 large-4">
								<figure class="white"><img src="<?php the_sub_field('benefit_image'); ?>" alt="<?php the_sub_field('benefit_title'); ?>"></figure>
								<h3><?php the_sub_field('benefit_title'); ?></h3>
								<?php if( have_rows('benefit_bullet_points') ): ?>
									<ul class="body-bullet">
										<?php while( have_rows('benefit_bullet_points') ): the_row(); ?>
											<li><?php the_sub_field('benefit_bullet'); ?></li>
										<?php endwhile; ?>
									</ul>
								<p class="plus"><a href="<?php the_sub_field('benefit_link'); ?>" title="Read more here">Read more here...</a></p>
								<?php endif; //if( get_sub_field('items') ): ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-11 large-12">
						<?php get_template_part('parts/part-quotes'); ?>
					</div>
				</div>

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-6 large-6">
						<figure class="white">
							<img src="<?php the_field('home_biography_image'); ?>" alt="<?php the_field('home_biography_title'); ?>">
						</figure>
						<h3><?php the_field('home_biography_title'); ?></h3>
						<?php the_field('home_biography_text'); ?>
					</div>
					<div class="cell small-12 medium-6 large-6">
						<a id="benefits">
							<figure class="white">
								<img src="<?php the_field('home_benefits_image'); ?>" alt="<?php the_field('home_benefits_title'); ?>">
							</figure>
						</a>
						<h3><?php the_field('home_benefits_title'); ?></h3>
						<?php if( have_rows('home_pilates_benefits') ): // Repeater 01 Field Name ?>
	    					<ul class="body-copy">
	    						<?php while( have_rows('home_pilates_benefits') ): the_row(); ?>
									<li><?php the_sub_field('benefits_bullet_points'); ?></li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div><!-- end .row -->

				<?php get_footer(); ?>						
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>