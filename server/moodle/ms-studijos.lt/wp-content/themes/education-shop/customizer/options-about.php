<?php

add_action( 'init' , 'education_shop_about' );
function education_shop_about(){

	Kirki::add_section( 'education_shop_about_section', array(
        'title'   => esc_html__( 'About', 'education-shop' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', array(
    	'type'        => 'select',
    	'label'       => esc_html__( 'About Page', 'education-shop' ),
	    'section'     => 'education_shop_about_section',
	    'settings'    => 'education_shop_about_section',
	    'choices'     => bizberg_get_all_pages(),
    ));

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'education_shop_subtitle',
		'label'    => esc_html__( 'Subtitle', 'education-shop' ),
		'section'  => 'education_shop_about_section',
		'default'  => esc_html__( 'About Us', 'education-shop' ),
		'active_callback' => [
			[
				'setting'  => 'education_shop_about_section',
				'operator' => '!=',
				'value'    => false,
			]
		],
	] );

}