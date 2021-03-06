<?php
/**
 * Left sidebar check.
 *
 * @package piproomz
 */

?>

<?php
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>
	<?php get_sidebar( 'left' ); ?>
<?php endif; ?>

<?php {
	$html = '';
	if ( 'right' === $sidebar_pos || 'left' === $sidebar_pos ) {
		$html = '<div';
		if ( is_active_sidebar( 'right-sidebar' ) || is_active_sidebar( 'left-sidebar' ) ) {
			$html .= '>';
		} else {
			$html .= '">';
		}
		echo $html; // WPCS: XSS OK.
	} elseif ( is_active_sidebar( 'right-sidebar' ) && is_active_sidebar( 'left-sidebar' ) ) {
		$html = '<div';
		if ( 'both' === $sidebar_pos ) {
			$html .= '>';
		} else {
			$html .= '>';
		}
		echo $html; // WPCS: XSS OK.
	} else {
	    echo '';
	}
}
