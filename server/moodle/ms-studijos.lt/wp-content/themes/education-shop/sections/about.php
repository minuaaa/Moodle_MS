<?php

add_action( 'bizberg_before_homepage_blog', 'education_shop_homepage_about' );
function education_shop_homepage_about(){ 

	$page_id  = bizberg_get_theme_mod( 'education_shop_about_section' );
	$subtitle = bizberg_get_theme_mod( 'education_shop_subtitle' );

	if( empty( $page_id ) ){
		return;
	} 

	$page_obj = get_post( $page_id );

	?>

	<div class="about_wrapper">
		
		<div class="container">
			
			<div class="about_inner">
				<div class="left" style="background-image:url(<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $page_obj->ID ) ) ); ?>);"></div>
				<div class="right">
					<h3><?php echo esc_html( $subtitle ); ?></h3>
					<h2><?php echo esc_html( $page_obj->post_title ); ?></h2>
					<p><?php echo esc_html( sanitize_text_field( $page_obj->post_content ) ); ?></p>
					<a href="<?php echo esc_url( get_permalink( $page_id ) ); ?>">
						<?php esc_html_e( 'Learn More' , 'education-shop' ); ?>
					</a>
				</div>
			</div>

		</div>

	</div>

	<?php
}