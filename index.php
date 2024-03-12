<?php
    $treks_src = get_stylesheet_directory_uri() . '/treks-src';
	$homeUrl = home_url();
?>
<!DOCTYPE html>
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="max-image-preview:large">
	<title>TinyLXP</title>

<style id="wp-block-site-logo-inline-css">
	.wp-block-site-logo{box-sizing:border-box;line-height:0}.wp-block-site-logo a{display:inline-block;line-height:0}.wp-block-site-logo.is-default-size img{height:auto;width:120px}.wp-block-site-logo img{height:auto;max-width:100%}.wp-block-site-logo a,.wp-block-site-logo img{border-radius:inherit}.wp-block-site-logo.aligncenter{margin-left:auto;margin-right:auto;text-align:center}.wp-block-site-logo.is-style-rounded{border-radius:9999px}
</style>
<style id="wp-block-site-title-inline-css">
	.wp-block-site-title a{color:inherit}
	.wp-block-site-title{font-family: var(--wp--preset--font-family--body);font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.542), 1.2rem);font-style: normal;font-weight: 600;}
	.wp-block-site-title a:where(:not(.wp-element-button)){text-decoration: none;}
	.wp-block-site-title a:where(:not(.wp-element-button)):hover{text-decoration: none;}
</style>
<style id="wp-block-page-list-inline-css">
.wp-block-navigation .wp-block-page-list{align-items:var(--navigation-layout-align,initial);background-color:inherit;display:flex;flex-direction:var(--navigation-layout-direction,initial);flex-wrap:var(--navigation-layout-wrap,wrap);justify-content:var(--navigation-layout-justify,initial)}.wp-block-navigation .wp-block-navigation-item{background-color:inherit}
</style>
<link rel="stylesheet" href="<?php echo $treks_src; ?>/style/style.min.css" />
 
<style id="wp-block-button-inline-css">
.wp-block-button__link{box-sizing:border-box;cursor:pointer;display:inline-block;text-align:center;word-break:break-word}.wp-block-button__link.aligncenter{text-align:center}.wp-block-button__link.alignright{text-align:right}:where(.wp-block-button__link){border-radius:9999px;box-shadow:none;padding:calc(.667em + 2px) calc(1.333em + 2px);text-decoration:none}.wp-block-button[style*=text-decoration] .wp-block-button__link{text-decoration:inherit}.wp-block-buttons>.wp-block-button.has-custom-width{max-width:none}.wp-block-buttons>.wp-block-button.has-custom-width .wp-block-button__link{width:100%}.wp-block-buttons>.wp-block-button.has-custom-font-size .wp-block-button__link{font-size:inherit}.wp-block-buttons>.wp-block-button.wp-block-button__width-25{width:calc(25% - var(--wp--style--block-gap, .5em)*.75)}.wp-block-buttons>.wp-block-button.wp-block-button__width-50{width:calc(50% - var(--wp--style--block-gap, .5em)*.5)}.wp-block-buttons>.wp-block-button.wp-block-button__width-75{width:calc(75% - var(--wp--style--block-gap, .5em)*.25)}.wp-block-buttons>.wp-block-button.wp-block-button__width-100{flex-basis:100%;width:100%}.wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-25{width:25%}.wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-50{width:50%}.wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-75{width:75%}.wp-block-button.is-style-squared,.wp-block-button__link.wp-block-button.is-style-squared{border-radius:0}.wp-block-button.no-border-radius,.wp-block-button__link.no-border-radius{border-radius:0!important}.wp-block-button .wp-block-button__link.is-style-outline,.wp-block-button.is-style-outline>.wp-block-button__link{border:2px solid;padding:.667em 1.333em}.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color),.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color){color:currentColor}.wp-block-button .wp-block-button__link.is-style-outline:not(.has-background),.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background){background-color:transparent;background-image:none}.wp-block-button .wp-block-button__link:where(.has-border-color){border-width:initial}.wp-block-button .wp-block-button__link:where([style*=border-top-color]){border-top-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-right-color]){border-right-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-bottom-color]){border-bottom-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-left-color]){border-left-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-style]){border-width:initial}.wp-block-button .wp-block-button__link:where([style*=border-top-style]){border-top-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-right-style]){border-right-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-bottom-style]){border-bottom-width:medium}.wp-block-button .wp-block-button__link:where([style*=border-left-style]){border-left-width:medium}
.is-style-outline.is-style-outline.wp-block-button .wp-block-button__link{border-width: 1px;padding-top: calc(0.6rem - 1px);padding-right: calc(1rem - 1px);padding-bottom: calc(0.6rem - 1px);padding-left: calc(1rem - 1px);}
</style>
<style id="twentytwentyfour-button-style-outline-inline-css">
.wp-block-button.is-style-outline
	> .wp-block-button__link:not(.has-text-color, .has-background):hover {
	background-color: var(--wp--preset--color--contrast-2, var(--wp--preset--color--contrast, transparent));
	color: var(--wp--preset--color--base);
	border-color: var(--wp--preset--color--contrast-2, var(--wp--preset--color--contrast, currentColor));
}

</style>

<style id="wp-block-heading-inline-css">
h1.has-background,h2.has-background,h3.has-background,h4.has-background,h5.has-background,h6.has-background{padding:1.25em 2.375em}h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]){rotate:180deg}

				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}
</style>
<style id="wp-block-buttons-inline-css">
.wp-block-buttons.is-vertical{flex-direction:column}.wp-block-buttons.is-vertical>.wp-block-button:last-child{margin-bottom:0}.wp-block-buttons>.wp-block-button{display:inline-block;margin:0}.wp-block-buttons.is-content-justification-left{justify-content:flex-start}.wp-block-buttons.is-content-justification-left.is-vertical{align-items:flex-start}.wp-block-buttons.is-content-justification-center{justify-content:center}.wp-block-buttons.is-content-justification-center.is-vertical{align-items:center}.wp-block-buttons.is-content-justification-right{justify-content:flex-end}.wp-block-buttons.is-content-justification-right.is-vertical{align-items:flex-end}.wp-block-buttons.is-content-justification-space-between{justify-content:space-between}.wp-block-buttons.aligncenter{text-align:center}.wp-block-buttons:not(.is-content-justification-space-between,.is-content-justification-right,.is-content-justification-left,.is-content-justification-center) .wp-block-button.aligncenter{margin-left:auto;margin-right:auto;width:100%}.wp-block-buttons[style*=text-decoration] .wp-block-button,.wp-block-buttons[style*=text-decoration] .wp-block-button__link{text-decoration:inherit}.wp-block-buttons.has-custom-font-size .wp-block-button__link{font-size:inherit}.wp-block-button.aligncenter{text-align:center}
.wp-block-buttons-is-layout-flow > :first-child:first-child{margin-block-start: 0;}.wp-block-buttons-is-layout-flow > :last-child:last-child{margin-block-end: 0;}.wp-block-buttons-is-layout-flow > *{margin-block-start: 0.7rem;margin-block-end: 0;}.wp-block-buttons-is-layout-constrained > :first-child:first-child{margin-block-start: 0;}.wp-block-buttons-is-layout-constrained > :last-child:last-child{margin-block-end: 0;}.wp-block-buttons-is-layout-constrained > *{margin-block-start: 0.7rem;margin-block-end: 0;}.wp-block-buttons-is-layout-flex{gap: 0.7rem;}.wp-block-buttons-is-layout-grid{gap: 0.7rem;}
</style>
<link rel="stylesheet" href="<?php echo $treks_src; ?>/style/style_2.min.css" />
<style id="wp-block-image-inline-css">
.is-style-rounded.is-style-rounded.wp-block-image img,.is-style-rounded.is-style-rounded.wp-block-image  .wp-block-image__crop-area,.is-style-rounded.is-style-rounded.wp-block-image  .components-placeholder{border-radius: var(--wp--preset--spacing--20);}
</style>
<style id="wp-block-columns-inline-css">
.wp-block-columns{align-items:normal!important;box-sizing:border-box;display:flex;flex-wrap:wrap!important}@media (min-width:782px){.wp-block-columns{flex-wrap:nowrap!important}}.wp-block-columns.are-vertically-aligned-top{align-items:flex-start}.wp-block-columns.are-vertically-aligned-center{align-items:center}.wp-block-columns.are-vertically-aligned-bottom{align-items:flex-end}@media (max-width:781px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:100%!important}}@media (min-width:782px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis]{flex-grow:0}}.wp-block-columns.is-not-stacked-on-mobile{flex-wrap:nowrap!important}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis]{flex-grow:0}:where(.wp-block-columns){margin-bottom:1.75em}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}.wp-block-column{flex-grow:1;min-width:0;overflow-wrap:break-word;word-break:break-word}.wp-block-column.is-vertically-aligned-top{align-self:flex-start}.wp-block-column.is-vertically-aligned-center{align-self:center}.wp-block-column.is-vertically-aligned-bottom{align-self:flex-end}.wp-block-column.is-vertically-aligned-stretch{align-self:stretch}.wp-block-column.is-vertically-aligned-bottom,.wp-block-column.is-vertically-aligned-center,.wp-block-column.is-vertically-aligned-top{width:100%}
</style>
<style id="wp-block-list-inline-css">
ol,ul{box-sizing:border-box}ol.has-background,ul.has-background{padding:1.25em 2.375em}

				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}
ol,ul{padding-left: var(--wp--preset--spacing--10);}
</style>
<style id="wp-block-separator-inline-css">
.wp-block-separator.is-style-dots{background:none!important;border:none;height:auto;line-height:1;text-align:center}.wp-block-separator.is-style-dots:before{color:currentColor;content:"···";font-family:serif;font-size:1.5em;letter-spacing:2em;padding-left:2em}
</style>
<style id="wp-block-post-terms-inline-css">
.wp-block-post-terms{box-sizing:border-box}.wp-block-post-terms .wp-block-post-terms__separator{white-space:pre-wrap}

				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}
.wp-block-post-terms{font-size: var(--wp--preset--font-size--small);}
.wp-block-post-terms a:where(:not(.wp-element-button)){text-decoration: none;}
.wp-block-post-terms a:where(:not(.wp-element-button)):hover{text-decoration: underline;}
</style>
<style id="wp-block-post-template-inline-css">
.wp-block-post-template{list-style:none;margin-bottom:0;margin-top:0;max-width:100%;padding:0}.wp-block-post-template.wp-block-post-template{background:none}.wp-block-post-template.is-flex-container{display:flex;flex-direction:row;flex-wrap:wrap;gap:1.25em}.wp-block-post-template.is-flex-container>li{margin:0;width:100%}@media (min-width:600px){.wp-block-post-template.is-flex-container.is-flex-container.columns-2>li{width:calc(50% - .625em)}.wp-block-post-template.is-flex-container.is-flex-container.columns-3>li{width:calc(33.33333% - .83333em)}.wp-block-post-template.is-flex-container.is-flex-container.columns-4>li{width:calc(25% - .9375em)}.wp-block-post-template.is-flex-container.is-flex-container.columns-5>li{width:calc(20% - 1em)}.wp-block-post-template.is-flex-container.is-flex-container.columns-6>li{width:calc(16.66667% - 1.04167em)}}@media (max-width:600px){.wp-block-post-template-is-layout-grid.wp-block-post-template-is-layout-grid.wp-block-post-template-is-layout-grid.wp-block-post-template-is-layout-grid{grid-template-columns:1fr}}.wp-block-post-template-is-layout-constrained>li>.alignright,.wp-block-post-template-is-layout-flow>li>.alignright{-webkit-margin-start:2em;-webkit-margin-end:0;float:right;margin-inline-end:0;margin-inline-start:2em}.wp-block-post-template-is-layout-constrained>li>.alignleft,.wp-block-post-template-is-layout-flow>li>.alignleft{-webkit-margin-start:0;-webkit-margin-end:2em;float:left;margin-inline-end:2em;margin-inline-start:0}.wp-block-post-template-is-layout-constrained>li>.aligncenter,.wp-block-post-template-is-layout-flow>li>.aligncenter{-webkit-margin-start:auto;-webkit-margin-end:auto;margin-inline-end:auto;margin-inline-start:auto}
</style>
<style id="wp-block-query-no-results-inline-css">
.wp-block-query-no-results{padding-top: var(--wp--preset--spacing--30);}
</style>
<style id="wp-block-site-tagline-inline-css">
.wp-block-site-tagline{color: var(--wp--preset--color--contrast-2);font-size: var(--wp--preset--font-size--small);}
</style>
<style id="wp-block-navigation-link-inline-css">
.wp-block-navigation .wp-block-navigation-item__label{overflow-wrap:break-word}.wp-block-navigation .wp-block-navigation-item__description{display:none}

				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}
</style>
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id="wp-block-library-inline-css">
:root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px;--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223}@media (min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{clip:rect(1px,1px,1px,1px);word-wrap:normal!important;border:0;-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.screen-reader-text:focus{clip:auto!important;background-color:#ddd;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}
</style>
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--base: #f9f9f9;--wp--preset--color--base-2: #ffffff;--wp--preset--color--contrast: #111111;--wp--preset--color--contrast-2: #636363;--wp--preset--color--contrast-3: #A4A4A4;--wp--preset--color--accent: #cfcabe;--wp--preset--color--accent-2: #c2a990;--wp--preset--color--accent-3: #d8613c;--wp--preset--color--accent-4: #b1c5a4;--wp--preset--color--accent-5: #b5bdbc;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--gradient--gradient-1: linear-gradient(to bottom, #cfcabe 0%, #F9F9F9 100%);--wp--preset--gradient--gradient-2: linear-gradient(to bottom, #C2A990 0%, #F9F9F9 100%);--wp--preset--gradient--gradient-3: linear-gradient(to bottom, #D8613C 0%, #F9F9F9 100%);--wp--preset--gradient--gradient-4: linear-gradient(to bottom, #B1C5A4 0%, #F9F9F9 100%);--wp--preset--gradient--gradient-5: linear-gradient(to bottom, #B5BDBC 0%, #F9F9F9 100%);--wp--preset--gradient--gradient-6: linear-gradient(to bottom, #A4A4A4 0%, #F9F9F9 100%);--wp--preset--gradient--gradient-7: linear-gradient(to bottom, #cfcabe 50%, #F9F9F9 50%);--wp--preset--gradient--gradient-8: linear-gradient(to bottom, #C2A990 50%, #F9F9F9 50%);--wp--preset--gradient--gradient-9: linear-gradient(to bottom, #D8613C 50%, #F9F9F9 50%);--wp--preset--gradient--gradient-10: linear-gradient(to bottom, #B1C5A4 50%, #F9F9F9 50%);--wp--preset--gradient--gradient-11: linear-gradient(to bottom, #B5BDBC 50%, #F9F9F9 50%);--wp--preset--gradient--gradient-12: linear-gradient(to bottom, #A4A4A4 50%, #F9F9F9 50%);--wp--preset--font-size--small: 0.9rem;--wp--preset--font-size--medium: 1.05rem;--wp--preset--font-size--large: clamp(1.39rem, 1.39rem + ((1vw - 0.2rem) * 0.767), 1.85rem);--wp--preset--font-size--x-large: clamp(1.85rem, 1.85rem + ((1vw - 0.2rem) * 1.083), 2.5rem);--wp--preset--font-size--xx-large: clamp(2.5rem, 2.5rem + ((1vw - 0.2rem) * 1.283), 3.27rem);--wp--preset--font-family--body: "Inter", sans-serif;--wp--preset--font-family--heading: Cardo;--wp--preset--font-family--system-sans-serif: -apple-system, BlinkMacSystemFont, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif;--wp--preset--font-family--system-serif: Iowan Old Style, Apple Garamond, Baskerville, Times New Roman, Droid Serif, Times, Source Serif Pro, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;--wp--preset--spacing--10: 1rem;--wp--preset--spacing--20: min(1.5rem, 2vw);--wp--preset--spacing--30: min(2.5rem, 3vw);--wp--preset--spacing--40: min(4rem, 5vw);--wp--preset--spacing--50: min(6.5rem, 8vw);--wp--preset--spacing--60: min(10.5rem, 13vw);--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}body { margin: 0;--wp--style--global--content-size: 620px;--wp--style--global--wide-size: 1280px; }.wp-site-blocks { padding-top: var(--wp--style--root--padding-top); padding-bottom: var(--wp--style--root--padding-bottom); }.has-global-padding { padding-right: var(--wp--style--root--padding-right); padding-left: var(--wp--style--root--padding-left); }.has-global-padding :where(.has-global-padding:not(.wp-block-block)) { padding-right: 0; padding-left: 0; }.has-global-padding > .alignfull { margin-right: calc(var(--wp--style--root--padding-right) * -1); margin-left: calc(var(--wp--style--root--padding-left) * -1); }.has-global-padding :where(.has-global-padding:not(.wp-block-block)) > .alignfull { margin-right: 0; margin-left: 0; }.has-global-padding > .alignfull:where(:not(.has-global-padding):not(.is-layout-flex):not(.is-layout-grid)) > :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]),p,h1,h2,h3,h4,h5,h6,ul,ol) { padding-right: var(--wp--style--root--padding-right); padding-left: var(--wp--style--root--padding-left); }.has-global-padding :where(.has-global-padding) > .alignfull:where(:not(.has-global-padding)) > :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]),p,h1,h2,h3,h4,h5,h6,ul,ol) { padding-right: 0; padding-left: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 1.2rem; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child:first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child:last-child { margin-block-end: 0; }body { --wp--style--block-gap: 1.2rem; }:where(body .is-layout-flow)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-flow)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-flow)  > *{margin-block-start: 1.2rem;margin-block-end: 0;}:where(body .is-layout-constrained)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-constrained)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-constrained)  > *{margin-block-start: 1.2rem;margin-block-end: 0;}:where(body .is-layout-flex) {gap: 1.2rem;}:where(body .is-layout-grid) {gap: 1.2rem;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}body{background-color: var(--wp--preset--color--base);color: var(--wp--preset--color--contrast);font-family: var(--wp--preset--font-family--body);font-size: var(--wp--preset--font-size--medium);font-style: normal;font-weight: 400;line-height: 1.55;--wp--style--root--padding-top: 0px;--wp--style--root--padding-right: var(--wp--preset--spacing--50);--wp--style--root--padding-bottom: 0px;--wp--style--root--padding-left: var(--wp--preset--spacing--50);}a:where(:not(.wp-element-button)){color: var(--wp--preset--color--contrast);text-decoration: underline;}a:where(:not(.wp-element-button)):hover{text-decoration: none;}h1, h2, h3, h4, h5, h6{color: var(--wp--preset--color--contrast);font-family: var(--wp--preset--font-family--heading);font-weight: 400;line-height: 1.2;}h1{font-size: var(--wp--preset--font-size--xx-large);line-height: 1.15;}h2{font-size: var(--wp--preset--font-size--x-large);}h3{font-size: var(--wp--preset--font-size--large);}h4{font-size: clamp(1.1rem, 1.1rem + ((1vw - 0.2rem) * 0.767), 1.5rem);}h5{font-size: var(--wp--preset--font-size--medium);}h6{font-size: var(--wp--preset--font-size--small);}.wp-element-button, .wp-block-button__link{background-color: var(--wp--preset--color--contrast);border-radius: .33rem;border-color: var(--wp--preset--color--contrast);border-width: 0;color: var(--wp--preset--color--base);font-family: inherit;font-size: var(--wp--preset--font-size--small);font-style: normal;font-weight: 500;line-height: inherit;padding-top: 0.6rem;padding-right: 1rem;padding-bottom: 0.6rem;padding-left: 1rem;text-decoration: none;}.wp-element-button:hover, .wp-block-button__link:hover{background-color: var(--wp--preset--color--contrast-2);border-color: var(--wp--preset--color--contrast-2);color: var(--wp--preset--color--base);}.wp-element-button:focus, .wp-block-button__link:focus{background-color: var(--wp--preset--color--contrast-2);border-color: var(--wp--preset--color--contrast-2);color: var(--wp--preset--color--base);outline-color: var(--wp--preset--color--contrast);outline-offset: 2px;outline-style: dotted;outline-width: 1px;}.wp-element-button:active, .wp-block-button__link:active{background-color: var(--wp--preset--color--contrast);color: var(--wp--preset--color--base);}.wp-element-caption, .wp-block-audio figcaption, .wp-block-embed figcaption, .wp-block-gallery figcaption, .wp-block-image figcaption, .wp-block-table figcaption, .wp-block-video figcaption{color: var(--wp--preset--color--contrast-2);font-family: var(--wp--preset--font-family--body);font-size: 0.8rem;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-base-color{color: var(--wp--preset--color--base) !important;}.has-base-2-color{color: var(--wp--preset--color--base-2) !important;}.has-contrast-color{color: var(--wp--preset--color--contrast) !important;}.has-contrast-2-color{color: var(--wp--preset--color--contrast-2) !important;}.has-contrast-3-color{color: var(--wp--preset--color--contrast-3) !important;}.has-accent-color{color: var(--wp--preset--color--accent) !important;}.has-accent-2-color{color: var(--wp--preset--color--accent-2) !important;}.has-accent-3-color{color: var(--wp--preset--color--accent-3) !important;}.has-accent-4-color{color: var(--wp--preset--color--accent-4) !important;}.has-accent-5-color{color: var(--wp--preset--color--accent-5) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-base-background-color{background-color: var(--wp--preset--color--base) !important;}.has-base-2-background-color{background-color: var(--wp--preset--color--base-2) !important;}.has-contrast-background-color{background-color: var(--wp--preset--color--contrast) !important;}.has-contrast-2-background-color{background-color: var(--wp--preset--color--contrast-2) !important;}.has-contrast-3-background-color{background-color: var(--wp--preset--color--contrast-3) !important;}.has-accent-background-color{background-color: var(--wp--preset--color--accent) !important;}.has-accent-2-background-color{background-color: var(--wp--preset--color--accent-2) !important;}.has-accent-3-background-color{background-color: var(--wp--preset--color--accent-3) !important;}.has-accent-4-background-color{background-color: var(--wp--preset--color--accent-4) !important;}.has-accent-5-background-color{background-color: var(--wp--preset--color--accent-5) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-base-border-color{border-color: var(--wp--preset--color--base) !important;}.has-base-2-border-color{border-color: var(--wp--preset--color--base-2) !important;}.has-contrast-border-color{border-color: var(--wp--preset--color--contrast) !important;}.has-contrast-2-border-color{border-color: var(--wp--preset--color--contrast-2) !important;}.has-contrast-3-border-color{border-color: var(--wp--preset--color--contrast-3) !important;}.has-accent-border-color{border-color: var(--wp--preset--color--accent) !important;}.has-accent-2-border-color{border-color: var(--wp--preset--color--accent-2) !important;}.has-accent-3-border-color{border-color: var(--wp--preset--color--accent-3) !important;}.has-accent-4-border-color{border-color: var(--wp--preset--color--accent-4) !important;}.has-accent-5-border-color{border-color: var(--wp--preset--color--accent-5) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-gradient-1-gradient-background{background: var(--wp--preset--gradient--gradient-1) !important;}.has-gradient-2-gradient-background{background: var(--wp--preset--gradient--gradient-2) !important;}.has-gradient-3-gradient-background{background: var(--wp--preset--gradient--gradient-3) !important;}.has-gradient-4-gradient-background{background: var(--wp--preset--gradient--gradient-4) !important;}.has-gradient-5-gradient-background{background: var(--wp--preset--gradient--gradient-5) !important;}.has-gradient-6-gradient-background{background: var(--wp--preset--gradient--gradient-6) !important;}.has-gradient-7-gradient-background{background: var(--wp--preset--gradient--gradient-7) !important;}.has-gradient-8-gradient-background{background: var(--wp--preset--gradient--gradient-8) !important;}.has-gradient-9-gradient-background{background: var(--wp--preset--gradient--gradient-9) !important;}.has-gradient-10-gradient-background{background: var(--wp--preset--gradient--gradient-10) !important;}.has-gradient-11-gradient-background{background: var(--wp--preset--gradient--gradient-11) !important;}.has-gradient-12-gradient-background{background: var(--wp--preset--gradient--gradient-12) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-xx-large-font-size{font-size: var(--wp--preset--font-size--xx-large) !important;}.has-body-font-family{font-family: var(--wp--preset--font-family--body) !important;}.has-heading-font-family{font-family: var(--wp--preset--font-family--heading) !important;}.has-system-sans-serif-font-family{font-family: var(--wp--preset--font-family--system-sans-serif) !important;}.has-system-serif-font-family{font-family: var(--wp--preset--font-family--system-serif) !important;}
</style>
<style id="core-block-supports-inline-css">
.wp-container-core-group-layout-1.wp-container-core-group-layout-1 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-layout-1.wp-container-core-group-layout-1.wp-container-core-group-layout-1.wp-container-core-group-layout-1 > * + *{margin-block-start:0px;margin-block-end:0;}.wp-container-core-group-layout-2.wp-container-core-group-layout-2{gap:var(--wp--preset--spacing--20);}.wp-container-core-navigation-layout-1.wp-container-core-navigation-layout-1{gap:var(--wp--preset--spacing--20);justify-content:flex-end;}.wp-container-core-group-layout-3.wp-container-core-group-layout-3{justify-content:space-between;}.wp-container-core-buttons-layout-1.wp-container-core-buttons-layout-1{justify-content:center;}.wp-container-core-group-layout-5.wp-container-core-group-layout-5 > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width:565px;margin-left:auto !important;margin-right:auto !important;}.wp-container-core-group-layout-5.wp-container-core-group-layout-5 > .alignwide{max-width:565px;}.wp-container-core-group-layout-5.wp-container-core-group-layout-5 .alignfull{max-width:none;}.wp-container-core-group-layout-5.wp-container-core-group-layout-5 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-layout-5.wp-container-core-group-layout-5.wp-container-core-group-layout-5.wp-container-core-group-layout-5 > * + *{margin-block-start:0px;margin-block-end:0;}.wp-container-content-2{flex-basis:1.25rem;}.wp-container-core-group-layout-7.wp-container-core-group-layout-7{gap:0px;flex-direction:column;align-items:center;}.wp-container-core-column-layout-1.wp-container-core-column-layout-1 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-column-layout-1.wp-container-core-column-layout-1.wp-container-core-column-layout-1.wp-container-core-column-layout-1 > * + *{margin-block-start:var(--wp--preset--spacing--10);margin-block-end:0;}.wp-container-core-column-layout-2.wp-container-core-column-layout-2 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-column-layout-2.wp-container-core-column-layout-2.wp-container-core-column-layout-2.wp-container-core-column-layout-2 > * + *{margin-block-start:var(--wp--preset--spacing--10);margin-block-end:0;}.wp-container-core-column-layout-3.wp-container-core-column-layout-3 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-column-layout-3.wp-container-core-column-layout-3.wp-container-core-column-layout-3.wp-container-core-column-layout-3 > * + *{margin-block-start:var(--wp--preset--spacing--10);margin-block-end:0;}.wp-container-core-columns-layout-1.wp-container-core-columns-layout-1{flex-wrap:nowrap;gap:var(--wp--preset--spacing--30) var(--wp--preset--spacing--40);}.wp-container-core-column-layout-4.wp-container-core-column-layout-4 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-column-layout-4.wp-container-core-column-layout-4.wp-container-core-column-layout-4.wp-container-core-column-layout-4 > * + *{margin-block-start:var(--wp--preset--spacing--10);margin-block-end:0;}.wp-container-core-column-layout-5.wp-container-core-column-layout-5 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-column-layout-5.wp-container-core-column-layout-5.wp-container-core-column-layout-5.wp-container-core-column-layout-5 > * + *{margin-block-start:var(--wp--preset--spacing--10);margin-block-end:0;}.wp-container-core-column-layout-6.wp-container-core-column-layout-6 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-column-layout-6.wp-container-core-column-layout-6.wp-container-core-column-layout-6.wp-container-core-column-layout-6 > * + *{margin-block-start:var(--wp--preset--spacing--10);margin-block-end:0;}.wp-container-core-columns-layout-2.wp-container-core-columns-layout-2{flex-wrap:nowrap;gap:var(--wp--preset--spacing--30) var(--wp--preset--spacing--40);}.wp-container-core-group-layout-9.wp-container-core-group-layout-9{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:center;}.wp-container-core-columns-layout-3.wp-container-core-columns-layout-3{flex-wrap:nowrap;gap:var(--wp--preset--spacing--50) var(--wp--preset--spacing--60);}.wp-container-core-columns-layout-4.wp-container-core-columns-layout-4{flex-wrap:nowrap;gap:var(--wp--preset--spacing--50) var(--wp--preset--spacing--60);}.wp-container-core-group-layout-10.wp-container-core-group-layout-10 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-layout-10.wp-container-core-group-layout-10.wp-container-core-group-layout-10.wp-container-core-group-layout-10 > * + *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-layout-12.wp-container-core-group-layout-12{flex-wrap:nowrap;gap:0;flex-direction:column;align-items:center;}.wp-container-core-group-layout-15.wp-container-core-group-layout-15{gap:0.3em;justify-content:flex-start;}.wp-container-core-columns-layout-5.wp-container-core-columns-layout-5{flex-wrap:nowrap;}.wp-container-core-buttons-layout-2.wp-container-core-buttons-layout-2{justify-content:center;}.wp-container-core-group-layout-21.wp-container-core-group-layout-21 > *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-layout-21.wp-container-core-group-layout-21.wp-container-core-group-layout-21.wp-container-core-group-layout-21 > * + *{margin-block-start:0;margin-block-end:0;}.wp-container-core-group-layout-22.wp-container-core-group-layout-22{flex-direction:column;align-items:flex-start;}.wp-container-core-navigation-layout-2.wp-container-core-navigation-layout-2{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:flex-start;}.wp-container-core-group-layout-23.wp-container-core-group-layout-23{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:flex-start;}.wp-container-core-group-layout-24.wp-container-core-group-layout-24{flex-direction:column;align-items:stretch;}.wp-container-core-navigation-layout-3.wp-container-core-navigation-layout-3{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:flex-start;}.wp-container-core-group-layout-25.wp-container-core-group-layout-25{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:flex-start;}.wp-container-core-group-layout-26.wp-container-core-group-layout-26{flex-direction:column;align-items:stretch;}.wp-container-core-navigation-layout-4.wp-container-core-navigation-layout-4{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:flex-start;}.wp-container-core-group-layout-27.wp-container-core-group-layout-27{gap:var(--wp--preset--spacing--10);flex-direction:column;align-items:flex-start;}.wp-container-core-group-layout-28.wp-container-core-group-layout-28{flex-direction:column;align-items:stretch;}.wp-container-core-group-layout-29.wp-container-core-group-layout-29{justify-content:space-between;align-items:flex-start;}.wp-container-core-columns-layout-6.wp-container-core-columns-layout-6{flex-wrap:nowrap;}.wp-elements-69a005592d8de9c85f5c3744bd9a4e03 a{color:var(--wp--preset--color--contrast);}
</style>

<meta name="generator" content="WordPress 6.4.3">
<style id="wp-fonts-local">
@font-face{font-family:Inter;font-style:normal;font-weight:300 900;font-display:fallback;src:url('<?php echo $treks_src; ?>/assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:Cardo;font-style:normal;font-weight:400;font-display:fallback;src:url('<?php echo $treks_src; ?>/assets/fonts/cardo/cardo_normal_400.woff2') format('woff2');}
@font-face{font-family:Cardo;font-style:italic;font-weight:400;font-display:fallback;src:url('<?php echo $treks_src; ?>/assets/fonts/cardo/cardo_italic_400.woff2') format('woff2');}
@font-face{font-family:Cardo;font-style:normal;font-weight:700;font-display:fallback;src:url('<?php echo $treks_src; ?>/assets/fonts/cardo/cardo_normal_700.woff2') format('woff2');}
</style>
<script src="<?php echo $treks_src; ?>/js/wp-emoji-release.min.js" defer=""></script></head>

<body class="home blog wp-embed-responsive">

<div class="wp-site-blocks">
	<header class="wp-block-template-part">
		<div class="wp-block-group alignwide has-base-background-color has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="padding-top:20px;padding-bottom:20px">
			
			<div class="wp-block-group alignwide is-content-justification-space-between is-layout-flex wp-container-core-group-layout-3 wp-block-group-is-layout-flex">
				<div class="wp-block-group is-layout-flex wp-container-core-group-layout-2 wp-block-group-is-layout-flex">
					<div class="wp-block-group is-layout-flow wp-container-core-group-layout-1 wp-block-group-is-layout-flow">
						<p class="wp-block-site-title">
							<a href="<?php echo $homeUrl; ?>/" target="_self" rel="home" aria-current="page">TinyLXP</a>
						</p>
					</div>
					
				</div>
				<nav class="is-responsive items-justified-right is-fallback wp-block-navigation is-horizontal is-content-justification-right is-layout-flex wp-container-core-navigation-layout-1 wp-block-navigation-is-layout-flex" aria-label="" data-wp-interactive="" data-wp-context="{&quot;core&quot;:{&quot;navigation&quot;:{&quot;overlayOpenedBy&quot;:[],&quot;type&quot;:&quot;overlay&quot;,&quot;roleAttribute&quot;:&quot;&quot;,&quot;ariaLabel&quot;:&quot;Menu&quot;}}}">
					<button aria-haspopup="true" aria-label="Open menu" class="wp-block-navigation__responsive-container-open " data-wp-on--click="actions.core.navigation.openMenuOnClick" data-wp-on--keydown="actions.core.navigation.handleMenuKeydown">
						<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5"></rect><rect x="4" y="15" width="16" height="1.5"></rect></svg>
					</button>
					<div class="wp-block-navigation__responsive-container" style="" id="modal-1" data-wp-class--has-modal-open="selectors.core.navigation.isMenuOpen" data-wp-class--is-menu-open="selectors.core.navigation.isMenuOpen" data-wp-effect="effects.core.navigation.initMenu" data-wp-on--keydown="actions.core.navigation.handleMenuKeydown" data-wp-on--focusout="actions.core.navigation.handleMenuFocusout" tabindex="-1">
						<div class="wp-block-navigation__responsive-close" tabindex="-1">
							<div class="wp-block-navigation__responsive-dialog" data-wp-bind--aria-modal="selectors.core.navigation.ariaModal" data-wp-bind--aria-label="selectors.core.navigation.ariaLabel" data-wp-bind--role="selectors.core.navigation.roleAttribute" data-wp-effect="effects.core.navigation.focusFirstElement">
									<button aria-label="Close menu" class="wp-block-navigation__responsive-container-close" data-wp-on--click="actions.core.navigation.closeMenuOnClick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg></button>
								<div class="wp-block-navigation__responsive-container-content" id="modal-1-content">
									<ul class="wp-block-page-list">
										<li class="wp-block-pages-list__item wp-block-navigation-item open-on-hover-click">
											<a class="wp-block-pages-list__item__link wp-block-navigation-item__content" href="<?php echo $homeUrl; ?>/login/">Login</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			
		</div>
	</header>


<main class="wp-block-group is-layout-flow wp-container-core-group-layout-21 wp-block-group-is-layout-flow" style="margin-top:0" id="wp--skip-link--target">
	


	<div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

		
		<div class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-layout-5 wp-block-group-is-layout-constrained">

			
			<h1 class="wp-block-heading has-text-align-center has-x-large-font-size">A commitment to innovation and sustainability</h1>
			

			
			<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
			

			
			<p class="has-text-align-center">Études is a pioneering firm that seamlessly merges creativity and functionality to redefine architectural excellence.</p>
			

			
			<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
			

			
			<div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-layout-1 wp-block-buttons-is-layout-flex">
				
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button">About us</a>
				</div>
				
			</div>
			
		</div>
		

		
		<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer">
		</div>
		

		
		<figure class="wp-block-image alignwide size-full is-style-rounded">
			<img src="<?php echo $treks_src; ?>/assets/img/building-exterior.webp" alt="Building exterior in Toronto, Canada">
		</figure>
		
	</div>




	<div class="wp-block-group alignfull has-base-2-background-color has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		
		<div class="wp-block-group is-vertical is-content-justification-center is-layout-flex wp-container-core-group-layout-7 wp-block-group-is-layout-flex">
			
			<h2 class="wp-block-heading has-text-align-center is-style-asterisk">A passion for creating spaces</h2>
			

			
			<div style="height:0px" aria-hidden="true" class="wp-block-spacer wp-container-content-2"></div>
			

			
			<p class="has-text-align-center">Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.</p>
			
		</div>
		

		
		<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer">
		</div>
		

		
		<div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-layout-1 wp-block-columns-is-layout-flex">
			
			<div class="wp-block-column is-layout-flow wp-container-core-column-layout-1 wp-block-column-is-layout-flow">
				
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">Renovation and restoration</h3>
				

				
				<p class="has-text-align-left">Experience the fusion of imagination and expertise with Études Architectural Solutions.</p>
				
			</div>
			

			
			<div class="wp-block-column is-layout-flow wp-container-core-column-layout-2 wp-block-column-is-layout-flow">
				
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">Continuous Support</h3>
				

				
				<p class="has-text-align-left">Experience the fusion of imagination and expertise with Études Architectural Solutions.</p>
				
			</div>
			

			
			<div class="wp-block-column is-layout-flow wp-container-core-column-layout-3 wp-block-column-is-layout-flow">
				
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">App Access</h3>
				

				
				<p class="has-text-align-left">Experience the fusion of imagination and expertise with Études Architectural Solutions.</p>
				
			</div>
			
		</div>
		

		
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer">
		</div>
		

		
		<div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-layout-2 wp-block-columns-is-layout-flex">
			
			<div class="wp-block-column is-layout-flow wp-container-core-column-layout-4 wp-block-column-is-layout-flow">
				
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">Consulting</h3>
				

				
				<p class="has-text-align-left">Experience the fusion of imagination and expertise with Études Architectural Solutions.</p>
				
			</div>
			

			
			<div class="wp-block-column is-layout-flow wp-container-core-column-layout-5 wp-block-column-is-layout-flow">
				
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">Project Management</h3>
				

				
				<p class="has-text-align-left">Experience the fusion of imagination and expertise with Études Architectural Solutions.</p>
				
			</div>
			

			
			<div class="wp-block-column is-layout-flow wp-container-core-column-layout-6 wp-block-column-is-layout-flow">
				
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk has-body-font-family has-medium-font-size" style="font-style:normal;font-weight:600">Architectural Solutions</h3>
				

				
				<p class="has-text-align-left">Experience the fusion of imagination and expertise with Études Architectural Solutions.</p>
				
			</div>
			
		</div>
		
	</div>




	<div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		
		<div class="wp-block-group alignwide has-global-padding is-layout-constrained wp-container-core-group-layout-10 wp-block-group-is-layout-constrained">
			
			<div class="wp-block-group is-vertical is-content-justification-center is-layout-flex wp-container-core-group-layout-9 wp-block-group-is-layout-flex">

				
				<h2 class="wp-block-heading has-text-align-center is-style-asterisk">An array of resources</h2>
				

				
				<p class="has-text-align-center is-layout-flow wp-block-paragraph-is-layout-flow">Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.</p>
				
			</div>
			

			
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			

			
			<div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-layout-3 wp-block-columns-is-layout-flex">
				
				<div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:40%">
					
					<h3 class="wp-block-heading is-style-asterisk">Études Architect App</h3>
					

					
					<ul class="is-style-checkmark-list" style="line-height:1.75">

						
						<li>Collaborate with fellow architects.</li>
						

						
						<li>Showcase your projects.</li>
						

						
						<li>Experience the world of architecture.</li>
						

					</ul>
					
				</div>
				

				
				<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:50%">
					
					<figure class="wp-block-image size-large is-style-rounded">
						<img src="<?php echo $treks_src; ?>/assets/img/tourist-and-building.webp" alt="Tourist taking photo of a building">
					</figure>
					
				</div>
				
			</div>
			

			
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			

			
			<div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-layout-4 wp-block-columns-is-layout-flex">
				
				<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:50%">
					
					<figure class="wp-block-image size-large is-style-rounded">
						<img src="<?php echo $treks_src; ?>/assets/img/windows.webp" alt="Windows of a building in Nuremberg, Germany">
					</figure>
					
				</div>
				

				
				<div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:40%">
					
					<h3 class="wp-block-heading is-style-asterisk">Études Newsletter</h3>
					

					
					<ul class="is-style-checkmark-list" style="line-height:1.75">
						
						<li>A world of thought-provoking articles.</li>
						

						
						<li>Case studies that celebrate architecture.</li>
						

						
						<li>Exclusive access to design insights.</li>
						
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
	</div>




	<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
		
		<div class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">
			
			<p class="has-text-align-center has-base-color has-text-color has-heading-font-family has-x-large-font-size" style="line-height:1.2">
				<em>“Études has saved us thousands of hours of work and has unlocked insights we never thought possible.”</em>
			</p>
			

			
			<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
			

			
			<div class="wp-block-group is-vertical is-content-justification-center is-nowrap is-layout-flex wp-container-core-group-layout-12 wp-block-group-is-layout-flex">
				

				
				<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:0">Annie Steiner</p>
				

				
				<p class="has-text-align-center has-contrast-3-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300">CEO, Greenprint</p>
				
			</div>
			

		</div>
		
	</div>




	<div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		
			<h2 class="wp-block-heading alignwide has-x-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);line-height:1">Watch, Read, Listen</h2>
		

				
				<div class="wp-block-group alignwide has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">
					
					<div class="wp-block-query alignwide is-layout-flow wp-block-query-is-layout-flow">
						<ul class="wp-block-post-template is-layout-flow wp-block-post-template-is-layout-flow"><li class="wp-block-post post-1 post type-post status-publish format-standard hentry category-uncategorized">
						
						<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background alignwide is-style-wide">
						

						
						<div class="wp-block-columns alignwide are-vertically-aligned-center is-layout-flex wp-container-core-columns-layout-5 wp-block-columns-is-layout-flex" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">
							
							<div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:72%">
								<h2 style="font-size:clamp(0.984rem, 0.984rem + ((1vw - 0.2rem) * 0.86), 1.5rem);line-height:1.1;" class="wp-block-post-title"><a href="<?php echo $homeUrl; ?>/hello-world/" target="_self">Hello world!</a></h2>
							</div>
							

							
							<div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:28%">
								<div class="wp-block-template-part">

			<div class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">
				
				<div class="wp-block-group is-content-justification-left is-layout-flex wp-container-core-group-layout-15 wp-block-group-is-layout-flex">
					<div class="wp-block-post-date"><time datetime="2023-10-12T14:47:33+00:00"><a href="<?php echo $homeUrl; ?>/hello-world/">Oct 12, 2023</a></time></div>

					
					<p class="has-contrast-2-color has-text-color">—</p>
					

					
					<p class="has-small-font-size has-contrast-2-color has-text-color">by</p>
					

					<div class="wp-block-post-author-name"><a href="<?php echo $homeUrl; ?>/author/admin/" target="_self" class="wp-block-post-author-name__link">admin</a></div>

					<div class="taxonomy-category wp-block-post-terms"><span class="wp-block-post-terms__prefix">in </span><a href="<?php echo $homeUrl; ?>/category/uncategorized/" rel="tag">Uncategorized</a></div>

				</div>
				
			</div>


		</div>
					</div>
					
				</div>
				
				</li></ul>

				
				<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
				

				

				
			</div>
			
		</div>
	
	</div>




	<div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<div class="wp-block-group alignwide has-base-2-background-color has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
			<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
			<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Join 900+ subscribers</h2>
			<p class="has-text-align-center">Stay in the loop with everything you need to know.</p>
			<div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-layout-2 wp-block-buttons-is-layout-flex">
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button">Sign up</a>
				</div>
			</div>
			<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
			
		</div>
		
	</div>



</main>


<footer class="wp-block-template-part">

<div class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	
	<div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-layout-6 wp-block-columns-is-layout-flex">
		
		<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:30%">
			
			<div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-layout-22 wp-block-group-is-layout-flex">
				

				<p class="wp-block-site-title has-medium-font-size"><a href="<?php echo $homeUrl; ?>/" target="_self" rel="home" aria-current="page">TinyLXP</a></p>

				
			</div>
			
		</div>
		

		
		<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:20%">
		</div>
		

		
		<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:50%">
			
			<div class="wp-block-group is-content-justification-space-between is-layout-flex wp-container-core-group-layout-29 wp-block-group-is-layout-flex">
				
				<div class="wp-block-group is-vertical is-content-justification-stretch is-layout-flex wp-container-core-group-layout-24 wp-block-group-is-layout-flex">
					
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600">About</h2>
					

					
					<div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-layout-23 wp-block-group-is-layout-flex">

						<nav style="font-style:normal;font-weight:400;" class="has-small-font-size  is-vertical wp-block-navigation has-small-font-size is-layout-flex wp-container-core-navigation-layout-2 wp-block-navigation-is-layout-flex" aria-label="About">
							<ul style="font-style:normal;font-weight:400;" class="wp-block-navigation__container has-small-font-size  is-vertical wp-block-navigation has-small-font-size">
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#"><span class="wp-block-navigation-item__label">Team</span></a>
								</li>
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#"><span class="wp-block-navigation-item__label">History</span></a>
								</li>
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#"><span class="wp-block-navigation-item__label">Careers</span></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			
				<div class="wp-block-group is-vertical is-content-justification-stretch is-layout-flex wp-container-core-group-layout-26 wp-block-group-is-layout-flex">
					
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600">Privacy</h2>
					

					
					<div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-layout-25 wp-block-group-is-layout-flex">

						<nav style="font-style:normal;font-weight:400;" class="has-small-font-size  is-vertical wp-block-navigation has-small-font-size is-layout-flex wp-container-core-navigation-layout-3 wp-block-navigation-is-layout-flex" aria-label="Privacy">
							<ul style="font-style:normal;font-weight:400;" class="wp-block-navigation__container has-small-font-size  is-vertical wp-block-navigation has-small-font-size">
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#"><span class="wp-block-navigation-item__label">Privacy Policy</span></a>
								</li>
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="#"><span class="wp-block-navigation-item__label">Terms and Conditions</span></a></li>
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="#"><span class="wp-block-navigation-item__label">Contact Us</span></a>
								</li>
							</ul>
						</nav>

					</div>
					
				</div>
				

				
				<div class="wp-block-group is-vertical is-content-justification-stretch is-layout-flex wp-container-core-group-layout-28 wp-block-group-is-layout-flex">
					
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600">Social</h2>
					

					
					<div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-layout-27 wp-block-group-is-layout-flex">

						<nav style="font-style:normal;font-weight:400;" class="has-small-font-size  is-vertical wp-block-navigation has-small-font-size is-layout-flex wp-container-core-navigation-layout-4 wp-block-navigation-is-layout-flex" aria-label="Social Media">
							<ul style="font-style:normal;font-weight:400;" class="wp-block-navigation__container has-small-font-size  is-vertical wp-block-navigation has-small-font-size">
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#">
										<span class="wp-block-navigation-item__label">Facebook</span>
									</a>
								</li>
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#">
										<span class="wp-block-navigation-item__label">Instagram</span>
									</a>
								</li>
								<li class="has-small-font-size wp-block-navigation-item wp-block-navigation-link">
									<a class="wp-block-navigation-item__content" href="#">
										<span class="wp-block-navigation-item__label">Twitter/X</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="wp-block-group alignwide is-layout-flow wp-block-group-is-layout-flow" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0">
		
		<p class="has-contrast-2-color has-text-color has-link-color has-small-font-size wp-elements-69a005592d8de9c85f5c3744bd9a4e03">
		Designed with <a href="https://wordpress.org/" rel="nofollow">WordPress</a>		</p>
		
	</div>
	
</div>


</footer>

</div>


</body></html>