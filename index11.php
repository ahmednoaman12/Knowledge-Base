<?php
/**
 * The main template file
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

    <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
    <?php
			endif;

?>


<?php if ( have_posts() ) : 
                              // Do we have any posts in the databse that match our query?
                              ?>
                           <?php while ( have_posts() ) : the_post(); 

?>





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
                            <li class="active">All Articles</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- ARTICLES -->
                    <div class="fb-heading">
                        All Articles
                    </div>
                    <hr class="style-three">


                    <?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				 get_template_part( 'template-parts/content', get_post_type() );
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
                    <?php

			endwhile;
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

        </div>
    </div>
    <!-- END MAIN SECTION -->


    <?php



			// the_posts_navigation();

		else :
echo "<h1>ztujmnrfd</h1>";
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</main><!-- #main -->

<?php
get_footer();


?>