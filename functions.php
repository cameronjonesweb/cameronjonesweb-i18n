<?php

add_action(
	'wp_head',
	function() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
	}
);

add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_style( 'cameronjonesweb-i18n', get_stylesheet_uri(), array(), 1.0 );
	}
);

add_action(
	'after_setup_theme',
	function() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
	}
);

function cameronjonesweb_render_language_picker() {
	$languages = array(
		array(
			'code' => 'US',
			'link' => 'https://wpleeds202307.local',
		),
		array(
			'code' => 'AU',
			'link' => 'https://en-au.wpleeds202307.local',
		),
	);
	if ( ! empty( $languages ) ) {
		for ( $i = 0, $c = count( $languages ); $i < $c; $i++ ) {
			if ( $languages[ $i ]['link'] === home_url() ) {
				?>
				<span><?php echo esc_html( $languages[ $i ]['code'] ); ?></span>
			<?php } else { ?>
				<a href="<?php echo esc_url( $languages[ $i ]['link'] ); ?>"><?php echo esc_html( $languages[ $i ]['code'] ); ?></a>
				<?php
			}
			if ( 1 + $i < $c ) {
				?>
				&nbsp;|&nbsp;
				<?php
			}
		}
	}
}
