<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage DeltaHub
 * @since DeltaHub 1.0
 */
?>

<!-- search -->





<div class="row search-row">
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="clearfix search-form" >
        <input type="Search" class="search" name="s" id="keyword" onkeyup="fetch()" autocomplete="off" placeholder="What do you need help with?" style="background:  #ffffff url('<?php echo get_template_directory_uri(); ?>/images/search.png')no-repeat scroll 10px 14px">
        <button class="buttonsearch btn btn-info btn-lg"  type="submit">Search</button>
    
    </form>
    <div class="awesome-menu " id="datafetch">
        <!-- <ul class="bg-info">
            <li >Please wait..</li>
        </ul> -->
    </div>
</div>






<!-- ./search -->