<?php
/*
Template Name: Blog
*/
get_header(); ?>
	
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
		    <main class="main small-12 medium-10 large-10 cell" role="main">

	                <section>
	                    <?php
	                    $args=array(
	                        'post_type' => 'post',
	                        'order' => 'DESC',
	                        'post_status' => 'publish',
	                    );
	                    $my_query = null;
	                    $my_query = new WP_Query($args);
	                    if( $my_query->have_posts() ) {
	                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

	                        <div class="grid-x grid-margin-x">
	                            <div class="cell small-12 medium-12 large-12">
	                                <div class="post-block">
	                                    <div class="grid-x grid-margin-x">
	                                        <div class="cell small-12 medium-3 large-3">
	                                            <figure class="white">
	                                                <?php if ( has_post_thumbnail() ) {
	                                                    echo '<a href="'.get_the_permalink().'">';
	                                                    the_post_thumbnail('normal');
	                                                    echo '</a>';
	                                                } else { ?>
	                                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ap-logo.png" alt="<?php the_title(); ?>"></a>
	                                                <?php } ?>
	                                            </figure>
	                                        </div>
	                                        <div class="cell small-12 medium-9 large-9">
	                                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	                                            <?php the_excerpt(); ?>
	                                            <p class="plus"><a href="<?php the_permalink(); ?>" title="Read more here">Read more here...</a></p>
	                                        </div>
	                                    </div><!-- end .row -->
	                                </div>
	                            </div>
	                        </div><!-- end .row -->

	                    <?php endwhile; }
	                    wp_reset_query();  // Restore global post data stomped by the_post(). ?>
	                </section>

			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>