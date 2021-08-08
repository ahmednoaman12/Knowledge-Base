<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package deltahub
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
		while ( have_posts() ) :the_post();

			// get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'deltahub' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'deltahub' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

?>


	<!-- MAIN SECTION -->
	<div class="container featured-area-default padding-30">
		<div class="row">
			<div class="col-md-8 padding-20">
				<div class="row">
					<!-- BREADCRUMBS -->
					<div class="breadcrumb-container">
						<ol class="breadcrumb">
							<li>
								<a href="http://localhost/deltahub/">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_permalink(); ?>"><?php $categories = get_the_category(); 
                                       if ( ! empty( $categories ) ) {
                                       	echo esc_html( $categories[0]->name );   
                                       } ?></a>
							</li>
							<li class="active"><?php the_title()?></li>
						</ol>
					</div>
					<!-- END BREADCRUMBS -->
					<!-- ARTICLE  -->
					<div class="panel panel-default">
						<div class="article-heading margin-bottom-5">
							<a href="<?php the_permalink(); ?>">
								<i class="fa fa-pencil-square-o"></i> <?php the_title()?></a>
						</div>
						<div class="article-info">
							<div class="art-date">
								<a href="<?php the_permalink(); ?>">
									<i class="fa fa-calendar-o"></i>
									<?php
                                          $post_date = get_the_date( ' j F , Y' ); 
                                          echo $post_date;
                                          ?> </a>
							</div>
							<div class="art-category">
								<a href="<?php the_permalink(); ?>">
									<i class="fa fa-folder"></i>
									<?php $categories = get_the_category(); 
                                       if ( ! empty( $categories ) ) {
                                       	echo esc_html( $categories[0]->name );   
                                       } ?> </a>
							</div>
							<div class="art-comments">
								<a href="<?php the_permalink(); ?>">
									<i class="fa fa-comments-o"></i> <?php echo get_comments_number();  ?> Comments </a>
							</div>
						</div>
						<div class="article-content">
							<p>
								<?php the_content() ?>
							</p>

							<hr class="style-transparent">


						</div>
						<div class="article-content">
							<div class="article-tags">
								<b>Tags:</b>

								<?php
												$posttags =get_the_tags();
												if ($posttags) {
												foreach($posttags as $tag) {
												echo ' <a  class="btn btn-default btn-o btn-sm" href=" '. get_tag_link($tag->term_id) . '">'. $tag->name . ' </a>'                ; 
												}
												}
												?>


							</div>
						</div>


						<hr class="style-three">
						<div class="article-feedback">
							<h2>
								<small>Was This Article Helpful?</small>
							</h2>
							<a href="<?php echo add_query_arg('post_action', 'like'); ?>" type="button" class="btn btn-success btn-o btn-wide">
								<i class="fa fa-thumbs-o-up"></i> yes (<?php echo ip_get_like_count('likes')  ?>)</a>
							<a href="<?php echo add_query_arg('post_action', 'dislike'); ?>" type="button" class="btn btn-danger btn-o btn-wide">No
							(<?php echo ip_get_like_count('dislikes') ?>)
								<i class="fa fa-thumbs-o-down"></i>
							</a>
						</div>

						


					</div>
					<!-- END ARTICLE -->


				</div>

			</div>

			<!-- SIDEBAR STUFF -->


			<div class="col-md-4 padding-20">
				<?php 	get_sidebar(); ?>
			</div>
			<!-- END SIDEBAR STUFF -->
		</div>
	</div>
	<!-- END MAIN SECTION -->





	<?php




		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php

get_footer();