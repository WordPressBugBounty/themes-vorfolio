<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core Home Testimonial', 'vorfolio' ),
	'categories' => array( 'vorfolio-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"20px","left":"20px"}}},"layout":{"contentSize":"900px","type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:heading {"textAlign":"center","className":"vorfolio-animate vorfolio-move-down","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary","fontSize":"heading-4","fontFamily":"primary"} -->
<h2 class="wp-block-heading has-text-align-center vorfolio-animate vorfolio-move-down has-secondary-color has-text-color has-primary-font-family has-heading-4-font-size" style="font-style:normal;font-weight:500">Testimonials</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","className":"vorfolio-animate vorfolio-move-down vorfolio-delay-1","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"heading-2","fontFamily":"primary"} -->
<h2 class="wp-block-heading has-text-align-center vorfolio-animate vorfolio-move-down vorfolio-delay-1 has-primary-color has-text-color has-primary-font-family has-heading-2-font-size" style="font-style:normal;font-weight:600">What Our Client Says</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"1px"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","className":"vorfolio-animate vorfolio-move-up vorfolio-delay-3","style":{"typography":{"fontStyle":"italic","fontWeight":"500"}},"textColor":"fourth","fontSize":"large","fontFamily":"secondary"} -->
<p class="has-text-align-center vorfolio-animate vorfolio-move-up vorfolio-delay-3 has-fourth-color has-text-color has-secondary-font-family has-large-font-size" style="font-style:italic;font-weight:500">"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean ligula eget dolor. Massa cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus donec quam felis."</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"3px"} -->
<div style="height:3px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"id":718,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-resized vorfolio-animate vorfolio-move-up vorfolio-delay-5","style":{"border":{"radius":"30px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border vorfolio-animate vorfolio-move-up vorfolio-delay-5"><img src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/love-cute-portrait-beautiful-happy-man-new.webp" alt="portrait beautiful happy man" class="wp-image-718" style="border-radius:30px;object-fit:cover;width:70px;height:70px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"vorfolio-animate vorfolio-move-up vorfolio-delay-7","textColor":"primary","fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-text-align-center vorfolio-animate vorfolio-move-up vorfolio-delay-7 has-primary-color has-text-color has-heading-4-font-size">Harry Boer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"vorfolio-animate vorfolio-move-up vorfolio-delay-10","textColor":"secondary","fontSize":"tiny"} -->
<p class="has-text-align-center vorfolio-animate vorfolio-move-up vorfolio-delay-10 has-secondary-color has-text-color has-tiny-font-size">Client</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
