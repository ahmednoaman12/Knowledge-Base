<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deltahub
 */

?>

  <!-- FOOTER -->
  <div class="container-fluid footer marg30">
        <div class="container">
            <!-- FOOTER COLUMN ONE -->
            <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
                <div class="panel-transparent">
                    <div class="footer-heading">How it works</div>
                    <div class="footer-body">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                            ex ea commodo consequat. </p>
                    </div>
                </div>
            </div>
            <!-- END FOOTER COLUMN ONE -->
            <!-- FOOTER COLUMN TWO -->
            <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
                <div class="panel-transparent">
                    <div class="footer-heading">Categories</div>
                    <div class="footer-body">
                        <ul>
                            <li>
                                <a href="single-category.html">General</a>
                            </li>
                            <li>
                                <a href="single-category.html">Getting Started</a>
                            </li>
                            <li>
                                <a href="single-category.html">Account Support</a>
                            </li>
                            <li>
                                <a href="single-category.html">Guides</a>
                            </li>
                            <li>
                                <a href="single-category.html">Payment &amp; Billing</a>
                            </li>
                            <li>
                                <a href="single-category.html">Misc</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END FOOTER COLUMN TWO -->
            <!-- FOOTER COLUMN THREE -->
            <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
                <div class="panel-transparent">
                    <div class="footer-heading">Popular Articles</div>
                    <div class="footer-body">
                        <ul>
                            <li>
                                <a href="single-article.html">How to change account password</a>
                            </li>
                            <li>
                                <a href="single-article.html">How to edit order details</a>
                            </li>
                            <li>
                                <a href="single-article.html">Add new user</a>
                            </li>
                            <li>
                                <a href="single-article.html">Change customer details</a>
                            </li>
                            <li>
                                <a href="single-article.html">Lookup existing customer in order form</a>
                            </li>
                            <li>
                                <a href="single-article.html">How do I reset my password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- COPYRIGHT INFO -->
    <div class="container-fluid footer-copyright marg30">
        <div class="container">
            <div class="pull-left">
                Copyright © 2018 Sunny Gohil</a>
            </div>
            <div class="pull-right">
                <i class="fa fa-facebook"></i> &nbsp;
                <i class="fa fa-twitter"></i> &nbsp;
                <i class="fa fa-linkedin"></i>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT INFO -->










	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'deltahub' ) ); ?>">
				<?php
			
				printf( esc_html__( 'Proudly powered by %s', 'deltahub' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'deltahub' ), 'deltahub', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer> -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
