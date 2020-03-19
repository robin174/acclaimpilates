<?php
/*
Template Name: FAQs
*/
get_header(); ?>
	
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
		    <main class="main small-12 medium-12 large-11 cell" role="main">
				
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-12 large-11">
						<h1>frequently asked questions</h1>
						<?php if( have_rows('faq_qanda') ): // Repeater 01 Field Name ?>
							<?php while( have_rows('faq_qanda') ): the_row(); ?>
								<section class="qs">
				           			<h4 class="question">Q.&nbsp;<?php the_sub_field('faq_question'); ?></h4>
				           			<p><?php the_sub_field('faq_answer'); ?></p>
				           		</section>
				           	<?php endwhile; ?>
						<?php endif; ?>	
					</div>
				</div>


				<ul class="body-bullet">
					<?php while( have_rows('bullet_points') ): the_row(); ?>
						<li><?php the_sub_field('bullet_point'); ?></li>
					<?php endwhile; ?>
				</ul>
				

				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-11 large-12">
						<?php get_template_part('parts/part-quotes'); ?>
					</div>
				</div>					
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>