<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deltahub
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <?php 
    // dynamic_sidebar( 'sidebar-1' ); ?>






    <div class="row margin-bottom-30">
        <div class="col-md-12 ">
            <div class="support-container">
                <h2 class="support-heading">Need more Support?</h2>
                If you cannot find an answer in the knowledgebase, you can
                <a href="https://alexwebstage.com/delta-scientific-services/contact/">contact us</a> for further help.
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Popular Articles
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>


                    <?php
  $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
  while ( $popularpost->have_posts() ) : $popularpost->the_post(); 
 
  ?>
                    <li>
                        <a href="<?php the_permalink(); ?> ">
                            <i class="fa fa-file-text-o"></i>
                            <?php the_title(); echo '  (' . get_post_meta(get_the_id(),'wpb_post_views_count', true ) . ')' ?></a>


                    </li>
                    <?php
   
  
   
  endwhile; ?>

                 
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Latest Articles
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">

                <?php 
                        // the query
                        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>5)); ?>

                <?php if ( $wpb_all_query->have_posts() ) : ?>

                <ul>

                    <!-- the loop -->
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><i class="fa fa-file-text-o"></i><?php the_title(); ?></a>
                    </li>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                </ul>

                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- POPULAR TAGS (SHOW MAX 20 TAGS) -->
    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Popular Tags
            </div>
            <hr class="style-three">
            <div class="fat-content-tags padding-left-10">


                <?php
                    $posttags = get_tags();
                    if ($posttags) {
                    foreach($posttags as $tag) {
                    echo ' <a  class="btn btn-default btn-o btn-sm" href=" '. get_tag_link($tag->term_id) . '">'. $tag->name . ' </a>'                ; 
                    }
                    }
                ?>

            </div>
        </div>
    </div>
    <!-- END POPULAR TAGS (SHOW MAX 20 TAGS) -->























</aside>