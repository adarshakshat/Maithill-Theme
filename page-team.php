<?php get_header('team') ?>

<?php the_post(); ?>

<?php



$entry_header_classes = '';

if (is_singular()) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr($entry_header_classes); ?>">

	<div class="entry-header-inner section-inner medium">

		<?php
		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool   Whether to show the categories in header, Default true.
		 */
		$show_categories = apply_filters('twentytwenty_show_categories_in_entry_header', true);

		if (true === $show_categories && has_category()) {
		?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e('Categories', 'twentytwenty'); ?></span>
				<div class="entry-categories-inner">
					<?php the_category(' '); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

		<?php
		}

		if (is_singular()) {
			the_title('<h1 class="entry-title">', '</h1>');
		} else {
			the_title('<h2 class="entry-title heading-size-1"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
		}

		$intro_text_width = '';

		if (is_singular()) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if (has_excerpt() && is_singular()) {
		?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output 
																?>">
				<?php the_excerpt(); ?>
			</div>

		<?php
		}

		// Default to displaying the post meta.
		twentytwenty_the_post_meta(get_the_ID(), 'single-top');
		?>

	</div><!-- .entry-header-inner -->

</header>












<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
<section class="card-section-imagia">
    <h1>Our team</h1>
    <h2>Posset maiora firmatum nunc cuniculis</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card-container-imagia">
                    <div class="card-imagia">
                        <div class="front-imagia">
                            <div class="cover-imagia"><img alt src="https://unsplash.it/720/500?image=1067" /></div>
                            <div class="user-imagia"><img class="img-circle" alt src="https://unsplash.it/120/120?image=64" /></div>
                            <div class="content-imagia">
                                <h3 class="name-imagia">John Doe</h3>
                                <p class="subtitle-imagia">Subtitle </p>
                                <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                            </div>
                            <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                        </div>
                        <div class="back-imagia">
                            <div class="content-imagia content-back-imagia">
                                <div>
                                    <h3 class="text-center">Lorem Ipsum</h3>
                                    <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                </div>
                            </div>
                            <div class="footer-imagia">
                                <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card-container-imagia">
                    <div class="card-imagia">
                        <div class="front-imagia">
                            <div class="cover-imagia cover-gradient"></div>
                            <div class="user-imagia"><img class="img-circle" alt src="https://unsplash.it/120/120?image=64" /></div>
                            <div class="content-imagia">
                                <h3 class="name-imagia">John Doe</h3>
                                <p class="subtitle-imagia">Subtitle </p>
                                <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                            </div>
                            <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                        </div>
                        <div class="back-imagia">
                            <div class="content-imagia content-back-imagia">
                                <div>
                                    <h3 class="text-center">Lorem Ipsum</h3>
                                    <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                </div>
                            </div>
                            <div class="footer-imagia">
                                <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card-container-imagia">
                    <div class="card-imagia">
                        <div class="front-imagia">
                            <div class="cover-imagia"><img alt src="https://unsplash.it/720/500?image=1067" /></div>
                            <div class="user-imagia"><img class="img-circle" alt src="https://unsplash.it/120/120?image=64" /></div>
                            <div class="content-imagia">
                                <h3 class="name-imagia">John Doe</h3>
                                <p class="subtitle-imagia">Subtitle </p>
                                <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                            </div>
                            <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                        </div>
                        <div class="back-imagia">
                            <div class="content-imagia content-back-imagia">
                                <div>
                                    <h3 class="text-center">Lorem Ipsum</h3>
                                    <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                </div>
                            </div>
                            <div class="footer-imagia">
                                <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	<div class="entry-content">

		<?php
		if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
			the_excerpt();
		} else {
			the_content(__('Continue reading', 'twentytwenty'));
		}
		?>
        


	</div><!-- .entry-content -->


</div><!-- .post-inner -->



<div class="section-inner">
	<?php
	wp_link_pages(
		array(
			'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
			'after'       => '</nav>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		)
	);

	edit_post_link();

	// Single bottom post meta.
	twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');

	if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {

		get_template_part('template-parts/entry-author-bio');
	}
	?>

</div><!-- .section-inner -->






<?php

if (is_single()) {

	get_template_part('template-parts/navigation');
}
if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
?>

	<div class="comments-wrapper section-inner">

		<?php comments_template(); ?>

	</div><!-- .comments-wrapper -->

<?php
}
?>


<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>