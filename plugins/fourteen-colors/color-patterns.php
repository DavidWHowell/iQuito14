<?php
/**
 * Fourteen Colors CSS Color Pattern Logic
 *
 * @package WordPress
 * @subpackage Fourteen Colors
 * @since Fourteen Colors 0.5
 */

require( 'color-calculations.php' );

/**
 * Returns the CSS for the Contrast Color option.
 *
 * @since Fourteen Colors 0.1
 *
 * @return String $css
 */
function fourteen_colors_contrast_css() {
	$contrast_color = get_theme_mod( 'contrast_color', '#000000' );

	// Don't do anything if the current color is the default.
	if ( '#000000' === $contrast_color ) {
		return '';
	}
	
	// Add the CSS for implementing the contrast color.
	$css = '/* Custom Contrast Color */
		.site:before,
		#secondary,
		.site-header,
		.site-footer,
		.featured-content,
		.featured-content .entry-header,
		.slider-direction-nav a {
			background-color: ' . $contrast_color . ';
		}
		
		.grid .featured-content .entry-header {
			border-color: ' . $contrast_color . ';
		}
		
		.slider-control-paging a:before {
			background-color: rgba(255,255,255,.33);
		}
		
		.hentry .mejs-mediaelement,
		.hentry .mejs-container .mejs-controls {
			background: ' . $contrast_color . ';
		}
	';
	
	// Adjustents to make lighter Contrast Colors looks just as good.
	if ( fourteen_colors_contrast_ratio( $contrast_color, '#fff' ) < 4.5 &&
		fourteen_colors_contrast_ratio( $contrast_color, '#fff' ) < fourteen_colors_contrast_ratio( $contrast_color, '#2b2b2b' ) ) {
		$css .= '
			.site-description,
			.secondary-navigation a,
			.widget,
			.widget a,
			.widget_calendar caption,
			.site-header a,
			.site-title a,
			.site-title a:hover,
			.menu-toggle:before,
			.site-footer,
			.site-footer a,
			.featured-content a,
			.featured-content .entry-meta,
			.slider-direction-nav a:before,
			.hentry .mejs-container .mejs-controls .mejs-time span,
			.hentry .mejs-controls .mejs-button button {
				color: #2b2b2b;
			}

			.primary-navigation ul ul a,
			.secondary-navigation ul ul a,
			.secondary-navigation li:hover > a,
			.secondary-navigation li.focus > a,
			.widget_calendar tbody a,
			.site-footer .widget_calendar tbody a,
			.slider-direction-nav a:hover:before {
				color: #fff;
			}

			.slider-control-paging a:before {
				background-color: rgba(0, 0, 0, .33);
			}
			
			.featured-content {
				background-image: url(' . plugins_url( '/pattern-dark-inverse.svg', __FILE__ ) . ');
			}

			.widget-title, .widget-title a {
				color: #000;
			}

			.secondary-navigation li {
				border-color: rgba(0, 0, 0, .2);
			}

			.secondary-navigation {
				border-color: rgba(0, 0, 0, .2);
			}

			.widget input,
			.widget textarea {
				background-color: rgba(0, 0, 0, .01);
				border-color: rgba(0, 0, 0, .2);
				color: #000;
			}

			.widget input:focus, .widget textarea:focus {
				border-color: rgba(0, 0, 0, 0.4);
			}

			#supplementary + .site-info {
				border-top: 1px solid rgba(0, 0, 0, 0.2);
			}
			
			.hentry .mejs-controls .mejs-time-rail .mejs-time-total, 
			.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
				background: rgba(0,0,0,.3);
			}
			
			.mejs-overlay .mejs-overlay-button {
				background-color: ' . $contrast_color . ';
			}

			.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
				background-color: #2b2b2b;
			}
		';
	}
	else {
		// These only really work well with darker colors.
		$css .= '
			.content-sidebar .widget_twentyfourteen_ephemera .widget-title:before {
				background: ' . $contrast_color . ';
			}

			.paging-navigation,
			.content-sidebar .widget .widget-title {
				border-top-color: ' . $contrast_color . ';
			}

			.content-sidebar .widget .widget-title, 
			.content-sidebar .widget .widget-title a,
			.paging-navigation,
			.paging-navigation a:hover,
			.paging-navigation a {
				color: ' . $contrast_color . ';
			}
		';
	}
	
	return $css;
}

/**
 * Returns the CSS for the Accent Color option.
 *
 * Accent color styles should be added after contrast color styles 
 * because these override hover states.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return String $css
 */
function fourteen_colors_accent_css() {
	$accent_color = get_theme_mod( 'accent_color', '#24890d' );

	// Don't do anything if the current color is the default.
	if ( '#24890d' === $accent_color ) {
		return '';
	}

	$css = '
		/* Custom accent color. */
		button,
		.contributor-posts-link,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.search-toggle,
		.hentry .mejs-controls .mejs-time-rail .mejs-time-current,
		.mejs-overlay:hover .mejs-overlay-button,
		.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"],
		.widget_calendar tbody a,
		.content-sidebar .widget input[type="button"],
		.content-sidebar .widget input[type="reset"],
		.content-sidebar .widget input[type="submit"],
		.slider-control-paging .slider-active:before,
		.slider-control-paging .slider-active:hover:before,
		.slider-direction-nav a:hover {
			background-color: ' . $accent_color . ';
		}

		.site-navigation a:hover {
			color: ' . $accent_color . ';
		}

		::-moz-selection {
			background: ' . $accent_color . ';
		}

		::selection {
			background: ' . $accent_color . ';
		}

		.paging-navigation .page-numbers.current {
			border-color: ' .  $accent_color . ';
		}

		@media screen and (min-width: 782px) {
			.primary-navigation li:hover > a,
			.primary-navigation li.focus > a,
			.primary-navigation ul ul {
				background-color: ' . $accent_color . ';
			}
		}

		@media screen and (min-width: 1008px) {
			.secondary-navigation li:hover > a,
			.secondary-navigation li.focus > a,
			.secondary-navigation ul ul {
				background-color: ' . $accent_color . ';
			}
		}
	';

	// Darker accent color will only be created if needed for visibility on white background.
	$accent_dark = $accent_color;

	// Adjustments for light accent colors, including darkening the color where needed.
	if ( fourteen_colors_contrast_ratio( $accent_color, '#fff' ) < 4.5 &&
		fourteen_colors_contrast_ratio( $accent_color, '#fff' ) < fourteen_colors_contrast_ratio( $accent_color, '#2b2b2b' ) ) {

		$css .= '
			.primary-navigation ul ul a,
			.secondary-navigation ul ul a,
			.secondary-navigation li:hover > a,
			.secondary-navigation li.focus > a,
			.contributor-posts-link,
			button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			.search-toggle:before,
			.mejs-overlay:hover .mejs-overlay-button,
			.widget button,
			.widget input[type="button"],
			.widget input[type="reset"],
			.widget input[type="submit"],
			.widget_calendar tbody a,
			.widget_calendar tbody a:hover
			.site-footer .widget_calendar tbody a,
			.content-sidebar .widget input[type="button"],
			.content-sidebar .widget input[type="reset"],
			.content-sidebar .widget input[type="submit"],
			button:hover,
			button:focus,
			.contributor-posts-link:hover,
			.contributor-posts-link:active,
			input[type="button"]:hover,
			input[type="button"]:focus,
			input[type="reset"]:hover,
			input[type="reset"]:focus,
			input[type="submit"]:hover,
			input[type="submit"]:focus,
			.slider-direction-nav a:hover:before {
				color: #2b2b2b;
			}

			@media screen and (min-width: 782px) {
				.primary-navigation li:hover > a,
				.primary-navigation li.focus > a,
				.primary-navigation ul ul {
					color: #2b2b2b;
				}
			}

			@media screen and (min-width: 1008px) {
				.secondary-navigation li:hover > a,
				.secondary-navigation li.focus > a,
				.secondary-navigation ul ul {
					color: #2b2b2b;
				}
			}

			::selection {
				color: #2b2b2b;
			}

			::-moz-selection {
				color: #2b2b2b;
			}

			.hentry .mejs-controls .mejs-time-rail .mejs-time-loaded {
				background-color: #2b2b2b;
			}

		';
		
		// Darken the accent color, if needed, for adequate (4.5:1) contrast against white page background.
		// Unfortunately, this can result in some colors losing character, such as yellow -> gold.
		while( fourteen_colors_contrast_ratio( $accent_dark, '#fff' ) < 4.5 ) {
			$accent_dark = fourteen_colors_adjust_color( $accent_dark, -5 );
		}
	}
	
	// Base some color variants off of the potentially darkened color.
	$accent_mid = fourteen_colors_adjust_color( $accent_color, 29);
	$accent_mid_dark = fourteen_colors_adjust_color( $accent_dark, 29);
	$accent_light = fourteen_colors_adjust_color( $accent_color, 49);

	$css .= '
		/* Generated variants of custom accent color. */
		a,
		.content-sidebar .widget a {
			color: ' . $accent_dark . ';
		}
		
		.contributor-posts-link:hover,
		.slider-control-paging a:hover:before,
		.search-toggle:hover,
		.search-toggle.active,
		.search-box,
		.widget_calendar tbody a:hover,
		button:hover,
		button:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		.widget input[type="button"]:hover,
		.widget input[type="button"]:focus,
		.widget input[type="reset"]:hover,
		.widget input[type="reset"]:focus,
		.widget input[type="submit"]:hover,
		.widget input[type="submit"]:focus,
		.content-sidebar .widget input[type="button"]:hover,
		.content-sidebar .widget input[type="button"]:focus,
		.content-sidebar .widget input[type="reset"]:hover,
		.content-sidebar .widget input[type="reset"]:focus,
		.content-sidebar .widget input[type="submit"]:hover,
		.content-sidebar .widget input[type="submit"]:focus {
			background-color: ' . $accent_mid . ';
		}

		.featured-content a:hover,
		.featured-content .entry-title a:hover,
		.widget a:hover,
		.widget-title a:hover,
		.widget_twentyfourteen_ephemera .entry-meta a:hover,
		.hentry .mejs-controls .mejs-button button:hover,
		.site-info a:hover,
		.featured-content a:hover {
			color: ' . $accent_mid . ';
		}

		a:active,
		a:hover,
		.entry-title a:hover,
		.entry-meta a:hover,
		.cat-links a:hover,
		.entry-content .edit-link a:hover,
		.post-navigation a:hover,
		.image-navigation a:hover,
		.comment-author a:hover,
		.comment-list .pingback a:hover,
		.comment-list .trackback a:hover,
		.comment-metadata a:hover,
		.comment-reply-title small a:hover,
		.content-sidebar .widget a:hover,
		.content-sidebar .widget .widget-title a:hover,
		.content-sidebar .widget_twentyfourteen_ephemera .entry-meta a:hover {
			color: ' . $accent_mid_dark . ';
		}

		.page-links a:hover,
		.paging-navigation a:hover {
			border-color: ' . $accent_mid_dark . ';
			background-color: ' . $accent_mid_dark . ';
		}

		.entry-meta .tag-links a:hover:before {
			border-right-color: ' . $accent_mid_dark . ';
		}

		.entry-meta .tag-links a:hover {
			background-color: ' . $accent_mid_dark . ';
		}

		@media screen and (min-width: 782px) {
			.primary-navigation ul ul a:hover,
			.primary-navigation ul ul li.focus > a {
				background-color: ' . $accent_mid . ';
			}
		}

		@media screen and (min-width: 1008px) {
			.secondary-navigation ul ul a:hover,
			.secondary-navigation ul ul li.focus > a {
				background-color: ' . $accent_mid . ';
			}
		}

		button:active,
		.contributor-posts-link:active,
		input[type="button"]:active,
		input[type="reset"]:active,
		input[type="submit"]:active,
		.widget input[type="button"]:active,
		.widget input[type="reset"]:active,
		.widget input[type="submit"]:active,
		.content-sidebar .widget input[type="button"]:active,
		.content-sidebar .widget input[type="reset"]:active,
		.content-sidebar .widget input[type="submit"]:active {
			background-color: ' . $accent_light . ';
		}

		.site-navigation .current_page_item > a,
		.site-navigation .current_page_ancestor > a,
		.site-navigation .current-menu-item > a,
		.site-navigation .current-menu-ancestor > a {
			color: ' . $accent_light . ';
		}
	';

	return $css;
}

/**
 * Returns the CSS that increases contrast between the Contrast and Accent Colors is needed.
 *
 * These styles should be added after the styles for each individual component. The default colors
 * pass the initial contrast tests here, so no modifications are made.
 *
 * @since Fourteen Colors 0.5
 *
 * @return String $css
 */
function fourteen_colors_general_css() {
	$accent_color = get_theme_mod( 'accent_color', '#24890d' );
	$contrast_color = get_theme_mod( 'contrast_color', '#000000' );

	if ( fourteen_colors_contrast_ratio( $accent_color, $contrast_color ) > 3 ) {
		// We're good. Accent-on-contrast is all hover states except for
		// current nav item, so contrast ratio of 3:1 is acceptable.
		return '';
	}

	// Try lightening accent color to acheive desired contrast, until hitting white.
	$accent_lightened = $accent_color;
	while( fourteen_colors_contrast_ratio( $accent_lightened, $contrast_color ) < 3
		   && fourteen_colors_relative_luminance( $accent_lightened ) < 1 ) {
		$accent_lightened = fourteen_colors_adjust_color( $accent_lightened, 8 );
	}

	// Did we make it?
	if ( fourteen_colors_contrast_ratio( $accent_lightened, $contrast_color ) > 3 ) {
		$accent_color = $accent_lightened;
	}
	else {
		// Try darkening accent color to acheive desired contrast, until hitting black.
		$accent_darkened = $accent_color;
		while( fourteen_colors_contrast_ratio( $accent_darkened, $contrast_color ) < 3
			   && fourteen_colors_relative_luminance( $accent_darkened ) > 0 ) {
			$accent_darkened = fourteen_colors_adjust_color( $accent_darkened, -8 );
		}

		// Do we acheive higher contrast with the lightened or darkened color?
		if ( fourteen_colors_contrast_ratio( $accent_lightened, $contrast_color ) < fourteen_colors_contrast_ratio( $accent_darkened, $contrast_color ) ) {
			$accent_color = $accent_darkened;
		}
		else {
			$accent_color = $accent_lightened;
		}
	}

	// Replace the accent color with the higher-contrast version against the contrast color.
	$css = '
		/* Higher contrast Accent Color against contrast color */
		.site-navigation .current_page_item > a,
		.site-navigation .current_page_ancestor > a,
		.site-navigation .current-menu-item > a,
		.site-navigation .current-menu-ancestor > a,
		.site-navigation a:hover,
		.featured-content a:hover,
		.featured-content .entry-title a:hover,
		.widget a:hover,
		.widget-title a:hover,
		.widget_twentyfourteen_ephemera .entry-meta a:hover,
		.hentry .mejs-controls .mejs-button button:hover,
		.site-info a:hover,
		.featured-content a:hover {
			color: ' . $accent_color . ';
		}

		.hentry .mejs-controls .mejs-time-rail .mejs-time-current,
		.mejs-overlay:hover .mejs-overlay-button,
		.slider-control-paging a:hover:before,
		.slider-control-paging .slider-active:before,
		.slider-control-paging .slider-active:hover:before {
			background-color: ' . $accent_color . ';
		}
	';

	return $css;
}