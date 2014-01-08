=== Fourteen Colors ===
Contributors: celloexpressions
Tags: Twenty Fourteen, Custom Colors, Custom, Colors, Theme Customizer, Twenty Fourteen Theme, Default Theme, 2014
Requires at least: 3.8
Tested up to: 3.8
Stable tag: 1.0
Description: Customize the colors of the Twenty Fourteen Theme, directly within the Theme Customizer.
License: GPLv2

== Description ==
Not a big fan of green and black? Love the layout of Twenty Fourteen, but need its colors to match your brand? Don't have time to create a child theme, or want to change up your site's look on a regular basis without technical overhead?

Fourteen Colors is the most efficient way to re-color the Twenty Fourteen theme. It provides two color pickers, which together control:
* Header/Sidebar/Footer Background Color
* Featured Content Background Color
* Link Color
* Search Bar Color
* Navigation Menu Hover Colors
* Text Selection/Highlight Color
* Audio/Video Player Colorschemes
* And more...

Fourteen Colors automatically adjusts your color choices to ensure the minimum required contrast to keep Twenty Fourteen accessible-ready, and to keep your site as readable as possible. The plugin is designed to support almost any combination of colors, so you can be creative and express yourself with your site! Please report any issues on the support forums.

The Accent Color feature was originally developed in Twenty Fourteen core, but it was removed near the end of the development cycle due to a variety of concerns. This plugin addresses those concerns and adds the contrast color feature to enable a broad range of custom colorschemes.

Special thanks to the entire Twenty Fourteen team for developing the accent color throughout the development cycle. This plugin (and Twenty Fourteen) would not exist without their hard work and attention to detail.

== Installation ==
1. Take the easy route and install through the WordPress plugin adder OR
1. Download the .zip file and upload the unzipped folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to the Theme Customizer (Appearance -> Customize) and adjust the two new color pickers under the "Colors" heading to your liking


== Frequently Asked Questions ==
= I tried using Fourteen Colors with a theme other than Twenty Fourteen and ... =
Don't. There is a known bug where the plugin may be applied to other themes when live previewing them, but Fourteen Colors will prevent itself from functioning when the current theme is not Twenty Fourteen or a child.

= Child Themes =
Fourteen Colors is a plugin, not a child theme, because it is primarily programmatic (ie, it would only consist of a functions.php file), and for flexibility.

You can use Fourteen Colors with both Twenty Fourteen and child themes. Be aware that the Fourteen Colors settings are stored with the active theme, so if you switch to a child theme or switch child themes, you'll need to re-set your colors. Child theme compatibility depends on the extent of changes made by the child theme.

= Suggested/Recommended Colors =
The contrast color option tends to work best with colors that are either grayscale or close to grayscale. Try dark light or dark grays in conjunction with any accent color if the default black feels too bold.

Accent colors work best when they are intense, fully saturated colors that avoid anything too light or too dark. However, lighter colors such as yellow do work well, as do darker colors such as black, with a good choice of contrast color. If a particular set of colors feels close, but not quite right, try making the accent color more intense and making the contrast color lighter (if it's already light) or darker (if it's already dark) to increase the overall contrast of your site.

= Supported Colors =
All colors are supported except for pure white (#fff), which should technically work but results in a poor user experience due to the lack of contrast, which helps to provide visual hierarchy. Pure black (#000) accent colors are more fully supported, but can also have (less significant) issues with providing proper visual hierarchy.

== Screenshots ==
1. Light theme with a touch of blue
2. Autumn colors
3. Happy Holidays!
4. Purple and Pink
5. Blue and Orange
6. Gray and Yellow

== Changelog ==
= 1.0 =
* Plugin is ready for general use, alongside Twenty Fourteen 1.0 and WordPress 3.8

= 0.7 =
* Screenshots, finalized documentation.

= 0.6 =
* Code cleanup, inline code documentation, coding standards to match Twenty Fourteen core.
* Tweaks post-code-review, props @lancewillett.

= 0.5 =
* Save the entire plugin CSS output as a single theme_mod to allow for more computationally intensive color calculations.
* Introduce a more robust set of color calculations; most importantly, the ability to calculate the contrast ratio between any two colors.
* Adjustments to make any color work as the accent color, addressing the concerns that led to the feature's removal from Twenty Fourteen core.
* Ensure that there is adequate contrast between all colors that are displayed against each other.

= 0.2 =
* Build out of the contrast color option.

= 0.1 =
* Initial port from the Twenty Fourteen Theme's implementation 
* Initial pass at an experimental "Contrast Color" option

== Upgrade Notice ==
= 1.0 =
* Please visit the customizer and re-set your colors after updating. This plugin is now ready for prime-time!

= 0.2 =
* Build out the contrast color option.

= 0.1 =
* Initial port from the Twenty Fourteen Theme's implementation and initial pass at a "Contrast Color" option