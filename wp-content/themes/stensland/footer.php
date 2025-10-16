</main></div><footer class="site-footer main-footer">
        <div class="container footer-container">

            <div class="footer-branding">
                <?php
                // Replicate the logo structure from header.php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url(home_url('/')) . '" rel="home">';
                    // Assuming the logo file is stensland-logo.svg
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="' . get_bloginfo('name') . '">';
                    echo '</a>';
                }
                ?>
            </div>

            <div class="footer-contact-info">
                <a href="mailto:haakonstensland@email.com" class="footer-email">haakonstensland@email.com</a>
            </div>

            <div class="footer-social-icons">
                <a href="mailto:haakonstensland@email.com" class="social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt="Email">
                </a>
                <a href="#" class="social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="YouTube">
                </a>
                <a href="tel:#" class="social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Phone">
                </a>
            </div>
            
        </div>
        </footer>

<?php wp_footer(); ?>
</body>
</html>