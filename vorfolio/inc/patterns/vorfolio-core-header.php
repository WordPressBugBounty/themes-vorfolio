<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core Header', 'vorfolio' ),
	'categories' => array( 'vorfolio-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px"}}},"layout":{"inherit":false,"contentSize":"1140px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:10px;padding-left:10px"><!-- wp:group {"className":"is-style-default","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group is-style-default"><!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"}},"textColor":"white"} /-->

<!-- wp:navigation {"textColor":"white","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"spacing":[]},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left","flexWrap":"wrap"}} --><!-- wp:navigation-link {"label":"Home","type":"page","url":"#","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"About","type":"page","url":"#","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"Services","type":"page","url":"#","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"Pages","type":"page","url":"#","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"Blog","type":"page","url":"#","kind":"post-type"} /--><!-- /wp:navigation -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-custombuttonone","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"28px","right":"28px"}},"typography":{"fontSize":"14px"}}} -->
<div class="wp-block-button is-style-custombuttonone"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:8px;padding-right:28px;padding-bottom:8px;padding-left:28px;font-size:14px">Contact Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
