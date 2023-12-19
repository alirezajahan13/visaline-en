<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package visaline
 */

?>
<header class="entry-header generalHeading highMargined centeredText">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :

				?>
	
			<?php endif; ?>
		</header><!-- .entry-header -->
		<?php visaline_post_thumbnail(); ?>
		<div class="archivePostFooter mediumPadding">
			<span class="centerFooter">Written on : </span>
			<span><?php echo get_the_date() ?></span>
			<span class="centerFooter">By : </span>
			<span><?php echo get_the_author() ?></span>
		</div>
<div class="generalSinglePostStyle lightBorder lowRadius mediumPadding mediumMargined">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="singlePostCard">

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'visaline' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				// wp_link_pages(
				// 	array(
				// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'visaline' ),
				// 		'after'  => '</div>',
				// 	)
				// );
				?>
			</div><!-- .entry-content -->
		</div>

		<!-- <footer class="entry-footer">
			<?php //visaline_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>