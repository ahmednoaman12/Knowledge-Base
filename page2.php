<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                    <!-- BREADCRUMBS -->
                    <div class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <a href="knowledge-base.html">Knowledge Base</a>
                            </li>
                            <li class="active">General</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- ARTICLES -->
                    <div class="fb-heading">
                        <i class="fa fa-folder"></i> Category:
                        <?php $categories = get_the_category(); 
                                       if ( ! empty( $categories ) ) {
                                       	echo esc_html( $categories[0]->name );   
                                       } ?>
                        <span class="cat-count">(10)</span>
                    </div>
                    <hr class="style-three">




    <?php
							$allPosts = array('post_type' => 'post', 'posts_per_page' => '2' );
							$getAllPosts = new WP_Query($allPosts);
						
							if ($getAllPosts->have_posts() ) :
							while ($getAllPosts->have_posts()) : $getAllPosts->the_post();
					?>

                    <div class="panel panel-default">
                        <div class="article-heading-abb">
                            <a href="single-article.html">
                                <i class="fa fa-pencil-square-o"></i> How to change account password?</a>
                        </div>
                        <div class="article-info">
                            <div class="art-date">
                                <a href="#">
                                    <i class="fa fa-calendar-o"></i> 20 May, 2016 </a>
                            </div>
                            <div class="art-category">
                                <a href="#">
                                    <i class="fa fa-folder"></i> Account Settings </a>
                            </div>
                            <div class="art-comments">
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> 4 Comments </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <p class="block-with-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet finibus dui.
                                Fusce ac nulla nec ex ornare vehicula
                                non nec mi. Cras eget nisi sem. Cum sociis natoque penatibus et magnis dis parturient
                                montes,
                                nascetur ridiculus mus. Donec viverra faucibus magna sed interdum. Phasellus ultrices
                                sagittis
                                molestie. Sed sit amet nisl id risus egestas semper. In porta, arcu eu dignissim
                                vestibulum,
                                sapien justo imperdiet enim, sed facilisis quam justo in neque. Aliquam fermentum arcu
                                eget
                                hendrerit efficitur.
                            </p>
                        </div>
                        <div class="article-read-more">
                            <a href="single-article.html" class="btn btn-default btn-wide">Read more...</a>
                        </div>
                    </div>


                    <!-- END ARTICLES -->

                  





    <?php
	endwhile;  
	wp_reset_postdata(); 
	
	
	
endif;
		?>




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
<!-- END MAIN SECTION -->




<?php
// get_sidebar();
get_footer();

