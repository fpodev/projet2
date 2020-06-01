<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelogged
 */
?>
<footer>
    <div class="footer_inner">
        <div class="container">
            <!--footer-widgets starts here-->
            <div class="footer-widgets row">
				<?php 
                    if ( is_active_sidebar( 'sidebar-footer' ) ) {
				        dynamic_sidebar( 'sidebar-footer' ); 
                    } else { ?>
					<p class="widget-notice"><?php esc_html_e('Please Add The Widgets First.','travelogged'); ?></p>	
				<?php } ?>
			 </div>
            <!--footer-widgets ends here-->
        </div>
        <!--Copyright section starts here-->
        <div class="coppy-right">
            <div class="container ">
                <div class="row">
                    <div class="col">
                        <p><?php echo esc_attr( get_theme_mod( 'copyright','Copyright' ) ); ?> <a href="<?php echo esc_url( get_theme_mod( 'copyright_link','www.projet2.fpodev.ovh' ) ); ?>"> <?php echo esc_attr( get_theme_mod( 'copyright_link_t','IREKI' ) ); ?> </a></p>
                    </div>
                </div>
            </div>
        </div>
       <!--Copyright section ends here-->
    </div>
</footer>
<!-- Footer section ends here -->
<div id="page-anim-preloader">
    <div class="page_preloader-inner content-center">
       <div class="loader"></div>
    </div>
</div>

<a href="javascript:" id="return-to-top"><i class="far fa-paper-plane h4 "></i></a>

<?php wp_footer(); ?>
</body>
</html>