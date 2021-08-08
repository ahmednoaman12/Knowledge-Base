<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package deltahub
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- MAIN SECTION -->
    <div class="container featured-area-default padding-30">
        <div class="row">
            <!-- ARTICLE OVERVIEW SECTION -->
            <div class="col-md-8 padding-20">
                <div class="row">
                    <!-- ARTICLES -->
                    <div class="fb-heading">
                        <i class="fa fa-search"></i> Search Results for:
                        <strong><?php echo get_search_query() ?></strong>

                    </div>
                    <hr class="style-three">
                    <?php if ( have_posts() ) : ?>
                    <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', 'search' );

				?>




                    <div class="panel panel-default">
                        <div class="article-heading-abb">
                            <a href="<?php echo esc_url( post_permalink() ); ?>">
                                <i class="fa fa-pencil-square-o"></i> Searched Item <?php echo  the_title() ?>
							</a>
                        </div>
                        <div class="article-info">
                            <div class="art-date">
                                <a href="#">
                                    <i class="fa fa-calendar-o"></i>  <?php
                                          $post_date = get_the_date( ' j F , Y' ); 
                                          echo $post_date;
                                          ?> </a>
                            </div>
                            <div class="art-category">
                                <a href="#">
                                    <i class="fa fa-folder"></i>
                                    <?php $categories = get_the_category(); 
                                       if ( ! empty( $categories ) ) {
                                       	echo esc_html( $categories[0]->name );   
                                       } ?> </a>
                            </div>
                            <div class="art-comments">
                                <a href="#">
                                    <i class="fa fa-comments-o"></i><?php echo get_comments_number();  ?> Comments </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <p class="block-with-text">
							<?php echo  get_the_excerpt();
                                       // This call the main content of the post, the stuff in the main text box while composing.
                                       // This will wrap everything in p tags
                                       ?>
                                    <?php 
									// wp_link_pages(); // This will display pagination links, if applicable to the post ?>
                            </p>
                        </div>
                        <div class="article-read-more">
                            <a href="<?php the_permalink(); ?>" class="btn btn-default btn-wide">Read more...</a>
                        </div>
                    </div>




                    <?php
			endwhile;

			

		else :
		echo ' <h1>Sorry, but nothing matched your search terms. Please try again with some different keywords   ' . get_search_query() . '</h1>';
			// get_template_part( 'template-parts/content', 'none' );

		endif;
		?>



                    <!-- END ARTICLES -->

                    <!-- PAGINATION -->
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="disabled">
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-arrow-circle-left"></i> Previous</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="enabled">
                                <a href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="enabled">
                                <a href="#">3
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="enabled">
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">Next
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END PAGINATION -->
                </div>
            </div>
            <!-- END ARTICLES OVERVIEW SECTION-->
            <!-- SIDEBAR STUFF -->
            <div class="col-md-4 padding-20">
                <?php 	get_sidebar(); ?>
            </div>
            <!-- END SIDEBAR STUFF -->
        </div>
    </div>
    <!-- END MAIN SECTION -->




</main><!-- #main -->

<?php

get_footer();