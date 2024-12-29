    <?php if(get_field('add_contact_form', get_queried_object_id()) === true): ?>
        <?php get_template_part('template-parts/contact-form') ?>
    <?php endif; ?>

</main>

<footer class="footer footer--social">
    <div class="container">
        <div class="footer__inner">
            <a class="logo " href="<?= esc_url(home_url()); ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                if ($custom_logo_id) {
                    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
                    echo '<img class="logo__img" src="'. esc_url( $logo_url[0] ) .'" alt="logo of markupers" width="181" height="21" loading="lazy" decoding="async">';
                } else {
                    echo '<img class="logo__img" src="'. get_stylesheet_directory_uri() .'/assets/images/footer-logo.svg" alt="logo of markupers" width="181" height="21" loading="lazy">';
                }
                ?>
            </a>

            <a class="btn btn--transparent" href="#">Fill in the brief</a>

            <div class="footer__copyright">
                <span>
                   © <?php echo date('Y'); ?>
              </span>
                   <?php
                    wp_nav_menu(
                        $args = array(
                            'menu' => 'footer-menu',
                            'menu_class' => 'footer__link',
                            'container' => -1,
                        ));
                    ?>
            </div>

            <?php get_template_part('template-parts/socials-menu'); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

     <?php if(get_field('add_modal', get_queried_object_id()) === true): ?>
        <?php get_template_part('template-parts/modal') ?>
    <?php endif; ?>
</body>
</html>
