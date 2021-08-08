<?php
/**
 * Template Name: All Category Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package deltahub
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="container featured-area-default padding-30">
		<div class="row">
			<div class="col-md-8 padding-20">
				<div class="row">
					<div class="col-md-12">
						<div class="fb-heading">
						<?php the_title() ?>
						</div>
						<hr class="style-three">
						<div class="row">
							<?php
                               $args = array(
								'orderby' => 'name',
								'number' => 100
							 );
							$categories = get_categories( $args);
									foreach($categories as $cat) 
									{
										
										?>
							<div class="col-md-6 margin-bottom-20">
								<div class="fat-heading-abb">


								
									<a href="<?php echo get_term_link($cat->term_id); ?>">
										<i class="fa fa-folder"></i> <?php echo $cat->name ?> <span
											class="cat-count">(<?php echo $cat->count ?>) </span>
									</a>

									<?php
											$allPosts = array('post_type' => 'post', 'posts_per_page' => '5', 'cat' => $cat->term_id );
											$getAllPosts = new WP_Query($allPosts);
										
											if ($getAllPosts->have_posts() ) :
											while ($getAllPosts->have_posts()) : $getAllPosts->the_post();
									?>
									<div class="fat-content-small padding-left-30">
										<ul>
											<li>
												<a href="<?php the_permalink(); ?>">
													<i class="fa fa-file-text-o"></i><?php the_title();?></a>
											</li>
										</ul>
									</div>

									<?php
										endwhile;  
										wp_reset_postdata(); 
										
										echo '</div></div>';
										
									endif;	

									
								}
								?>


									<!-- <a href="http://localhost/deltahub/all-categories/" class="btn btn-primary ">
										<i class="fa fa-align-justify"></i> View All
									</a> -->




									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-20">
						<?php 	get_sidebar(); ?>
					</div>
				</div>
			</div>

</main><!-- #main -->

<?php

get_footer();