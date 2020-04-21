<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
                <div class="container">
                <div class="footer-info">
                    <p class="footer-info-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <p class="footer-info-text">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    </p>
                    <p class="footer-info-text">
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    </p>
                </div>
                    <div class="footer-logo-section">
                        <a href="#">
                            <img src="<?php echo THEME_IMG_PATH; ?>/footer-logo.png" alt="footer-logo">
                        </a>


                    <?php
                    /**
                     * Displays the menus and widgets at the end of the main element.
                     * Visually, this output is presented as part of the footer element.
                     *
                     * @package WordPress
                     * @subpackage Twenty_Twenty
                     * @since 1.0.0
                     */

                    $has_footer_menu = has_nav_menu( 'footer' );
                    $has_social_menu = has_nav_menu( 'social' );

                    $has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
                    $has_sidebar_2 = is_active_sidebar( 'sidebar-2' );

                    // Only output the container if there are elements to display.
                    if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
                        ?>

                        <div class="footer-nav-widgets-wrapper">

                            <div class="">

                                <?php

                                $footer_top_classes = '';

                                $footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
                                $footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';

                                if ( $has_footer_menu || $has_social_menu ) {
                                    ?>
                                    <div class="footer-top<?php echo $footer_top_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
                                        <?php if ( $has_footer_menu ) { ?>

                                            <nav aria-label="<?php esc_attr_e( 'Footer', 'twentytwenty' ); ?>" role="navigation" class="footer-menu-wrapper">

                                                <ul class="footer-menu reset-list-style">
                                                    <?php
                                                    wp_nav_menu(
                                                        array(
                                                            'container'      => '',
                                                            'depth'          => 1,
                                                            'items_wrap'     => '%3$s',
                                                            'theme_location' => 'footer',
                                                        )
                                                    );
                                                    ?>
                                                </ul>

                                            </nav><!-- .site-nav -->

                                        <?php } ?>
                                        <?php if ( $has_social_menu ) { ?>

                                            <nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwenty' ); ?>" class="footer-social-wrapper">

                                                <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

                                                    <?php
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location'  => 'social',
                                                            'container'       => '',
                                                            'container_class' => '',
                                                            'items_wrap'      => '%3$s',
                                                            'menu_id'         => '',
                                                            'menu_class'      => '',
                                                            'depth'           => 1,
                                                            'link_before'     => '<span class="screen-reader-text">',
                                                            'link_after'      => '</span>',
                                                            'fallback_cb'     => '',
                                                        )
                                                    );
                                                    ?>

                                                </ul><!-- .footer-social -->

                                            </nav><!-- .footer-social-wrapper -->

                                        <?php } ?>
                                    </div><!-- .footer-top -->

                                <?php } ?>

                                <?php if ( $has_sidebar_1 || $has_sidebar_2 ) { ?>

                                    <aside class="footer-widgets-outer-wrapper" role="complementary">

                                        <div class="footer-widgets-wrapper">

                                            <?php if ( $has_sidebar_1 ) { ?>

                                                <div class="footer-widgets column-one grid-item">
                                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                                </div>

                                            <?php } ?>

                                            <?php if ( $has_sidebar_2 ) { ?>

                                                <div class="footer-widgets column-two grid-item">
                                                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                                                </div>

                                            <?php } ?>

                                        </div><!-- .footer-widgets-wrapper -->

                                    </aside><!-- .footer-widgets-outer-wrapper -->

                                <?php } ?>

                            </div><!-- .footer-inner -->

                        </div><!-- .footer-nav-widgets-wrapper -->

                    <?php } ?>
                    </div>


				<div class="footer-help-section">


					<div class="footer-help-wrapper">
                        <div>
                            <p class="footer-copyright">
                                <?php
                                echo date_i18n(
                                /* translators: Copyright date format, see https://secure.php.net/date */
                                    _x( 'Y', 'copyright date format', 'twentytwenty' )
                                );
                                ?>

                            </p><!-- .footer-copyright -->

                            <p class="powered-by-wordpress">
                                All rights reserved.
                            </p><!-- .powered-by-wordpress -->
                        </div>

                        <div class="footer-helplinks">
                            <a href="">Terms of service</a>
                            <a href="">Refund policy</a>
                            <a href="">Privacy policy</a>
                            <a href="">Sitemap</a>
                        </div>

					</div><!-- .footer-credits -->


                </div>
				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</body>
</html>
