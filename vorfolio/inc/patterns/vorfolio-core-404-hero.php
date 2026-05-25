<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core 404 Hero', 'vorfolio' ),
	'categories' => array( 'vorfolio-core' ),
	'content'    => '<!-- wp:group {"tagName":"main","layout":{"inherit":false}} -->
<main class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/gaussian-bg.webp","id":85,"dimRatio":0,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":530,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"305px"}}}} -->
<div class="wp-block-cover" style="padding-bottom:305px;min-height:530px"><img class="wp-block-cover__image-background wp-image-85" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/gaussian-bg.webp" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"200px"}}},"layout":{"contentSize":"1170px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:200px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","className":"vorfolio-animate vorfolio-move-up ","style":{"typography":{"lineHeight":"0.9","fontSize":"150px"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center vorfolio-animate vorfolio-move-up has-white-color has-text-color" style="font-size:150px;line-height:0.9">404</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","className":"vorfolio-animate vorfolio-move-up vorfolio-delay-3","style":{"spacing":{"margin":{"top":"20px"}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center vorfolio-animate vorfolio-move-up vorfolio-delay-3 has-white-color has-text-color" style="margin-top:20px">Page Not Found</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","className":"vorfolio-animate vorfolio-move-up vorfolio-delay-5","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"backgroundColor":"gv-color-accent","textColor":"white"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->',
	'is_sync' => false,
);
