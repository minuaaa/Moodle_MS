<?php

add_action( 'bizberg_before_homepage_blog', 'education_shop_homepage_faq' );
function education_shop_homepage_faq(){ 

	$status = bizberg_get_theme_mod( 'faq_status' );

	if( $status == false ){
		return;
	}

	$faq_subtitle = bizberg_get_theme_mod( 'faq_subtitle' );
	$page_id      = bizberg_get_theme_mod( 'education_shop_faq_page' );

	$page_obj = get_post( $page_id ); 

	$education_shop_faq = bizberg_get_theme_mod( 'education_shop_faq_section' );
	$education_shop_faq = json_decode($education_shop_faq,true); ?>

	<div class="faq">
		
		<div class="container">
			
			<div class="faq_inner">
				
				<div class="left">
					
					<h3><?php echo esc_html( $faq_subtitle ); ?></h3>

					<h2><?php echo esc_html( $page_obj->post_title ); ?></h2>
					<p><?php echo esc_html( sanitize_text_field( $page_obj->post_content ) ); ?></p>

				</div>
				<div class="right">

					<div class="panel-group" id="accordion">

						<?php 

						foreach( $education_shop_faq as $key => $value ){

							$page_id = !empty( $value['page_id'] ) ? $value['page_id'] : ''; 
							$pageobj = get_post( $page_id ); ?>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo absint($key); ?>">
									<?php echo esc_html( $pageobj->post_title ); ?>
									</a>
									</h4>
								</div>
								<div id="collapse<?php echo absint($key); ?>" class="panel-collapse collapse <?php echo ( $key == 0 ? 'in' : '' ); ?>">
									<div class="panel-body">
										<?php echo esc_html( sanitize_text_field( $pageobj->post_content ) ); ?>
									</div>
								</div>
							</div>

							<?php
						}

						?>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php
}