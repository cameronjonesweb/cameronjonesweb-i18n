<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<header>
			<div class="hello">
				<div class="container">
					<p>
						<?php
						/* translators: %1$s: current username */
						echo esc_html( sprintf( __( 'Hello %1$s', 'cameronjonesweb-i18n' ), wp_get_current_user()->display_name ) );
						?>
					</p>
					<p class="text-right"><?php cameronjonesweb_render_language_picker(); ?></p>
				</div>
			</div>
			<div class="container identity">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="text-right">
					<?php bloginfo( 'name' ); ?>
				</div>
			</div>
		</header>
		<main>
			<div class="container">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						?>
						<article <?php post_class(); ?>>
							<?php
							the_post();
							the_title( '<h1>', '</h1>' );
							the_content();
							?>
						</article>
						<?php
					}
				}
				?>
			</div>
		</main>
		<footer>
			<div class="container">
				<p>
					<?php echo esc_html( sprintf( __( 'Copyright %1$s', 'cameronjonesweb-i18n' ), wp_date( 'Y' ) ) ); ?>
				</p>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
