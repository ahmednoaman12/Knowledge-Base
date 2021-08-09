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

    <div class="container featured-area-default padding-30">
        <div class="row">
            <!-- ARTICLE OVERVIEW SECTION -->
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
                            <li class="active">All Articles</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- ARTICLES -->

					<?php

						if ( is_category() ) {    
							$title = single_cat_title( '', false );    
						} elseif ( is_tag() ) {    
							$title = single_tag_title( '', false );    
						} elseif ( is_author() ) {    
							$title = '<span class="vcard">' . get_the_author() . '</span>' ;    
						} elseif ( is_tax() ) { //for custom post types
							$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
						} elseif (is_post_type_archive()) {
							$title = post_type_archive_title( '', false );
						}

					?>

                    <div class="fb-heading">
                        All  <?php echo $title ?>
                        
                    </div>
                    <hr class="style-three">

                    <?php


						
							if (have_posts() ) :
							while (have_posts()) : the_post();
					?>




                    <div class="panel panel-default">
                        <div class="article-heading-abb">
                            <a href="<?php the_permalink(); ?>">
                                <i class="fa fa-pencil-square-o"></i> <?php  the_title(); ?></a>
                        </div>
                        <div class="article-info">
                            <div class="art-date">
                                <a href="<?php the_permalink(); ?>">
                                    <i class="fa fa-calendar-o"></i> <?php
                                          $post_date = get_the_date( ' j F , Y' ); 
                                          echo $post_date;
                                          ?>  </a>
                            </div>
                            <div class="art-category">
							<?php $categories = get_the_category(); 
                                       if ( ! empty( $categories ) ) {?>
                                    <a href="<?php echo get_category_link($categories[0]->term_id);?>">
                                    <i class="fa fa-folder"></i>
                                        <?php
                                       	echo esc_html( $categories[0]->name );   
                                       } ?> </a>




                            </div>
                            <div class="art-comments">
                                <a href="<?php the_permalink(); ?>">
                                    <i class="fa fa-comments-o"></i> <?php echo get_comments_number();  ?> Comments </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <p class="block-with-text">
							<?php  echo  get_the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="article-read-more">
                            <a href="<?php the_permalink(); ?>" class="btn btn-default btn-wide">Read more...</a>
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
                              
                                    
                                         <?php echo post_pagination(); ?>
                                    
                                        
                           
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

</main><!-- #main -->
</div>
</div>
<!-- END MAIN SECTION -->



<?php
// get_sidebar();
get_footer();