<?php
/**
 * The main template file
 */
get_header(); ?>

<?php
$background_image = get_template_directory_uri() . '/assets/images/defaultPageBGImage.png';
if (has_post_thumbnail()) {
    $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}
?>

<main id="primary" class="site-main" style="
    background-image: url('<?php echo esc_url($background_image); ?>');
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    margin-top: -100px;
    padding-top: 100px;
">
    <div class="content-wrapper">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;
                        ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        the_content(sprintf(
                            wp_kses(
                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'stellarlightcustomtheme'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ));

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'stellarlightcustomtheme'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php
                        if ('post' === get_post_type()) :
                            ?>
                            <div class="entry-meta">
                                <?php
                                if (function_exists('stellarlightcustomtheme_posted_on')) {
                                    stellarlightcustomtheme_posted_on();
                                }
                                if (function_exists('stellarlightcustomtheme_posted_by')) {
                                    stellarlightcustomtheme_posted_by();
                                }
                                ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile;

            the_posts_navigation();

        else :
            ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e('Nothing Found', 'stellarlightcustomtheme'); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <?php
                    if (is_search()) :
                        ?>
                        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'stellarlightcustomtheme'); ?></p>
                        <?php
                        get_search_form();
                    else :
                        ?>
                        <p><?php esc_html_e('It seems we can’t find what you’re looking for. Perhaps searching can help.', 'stellarlightcustomtheme'); ?></p>
                        <?php
                        get_search_form();
                    endif;
                    ?>
                </div><!-- .page-content -->
            </section><!-- .no-results -->
        <?php
        endif;
        ?>
    </div><!-- .content-wrapper -->
</main><!-- #primary -->

<?php
get_footer();
?>