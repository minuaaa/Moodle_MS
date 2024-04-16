<?php

add_action( 'init' , 'education_shop_homepage_faq_section' );
function education_shop_homepage_faq_section(){

	Kirki::add_section( 'education_shop_faq_section', array(
        'title'   => esc_html__( 'FAQ', 'education-shop' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'faq_status',
		'label'       => esc_html__( 'Enable / Disable', 'education-shop' ),
		'section'     => 'education_shop_faq_section',
		'default'     => false,
	] );

    Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'faq_subtitle',
		'label'    => esc_html__( 'Subtitle', 'education-shop' ),
		'section'  => 'education_shop_faq_section',
		'default'  => esc_html__( 'How We Help', 'education-shop' ),
		'active_callback' => [
			[
				'setting'  => 'faq_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'select',
    	'label'       => esc_html__( 'Select Page', 'education-shop' ),
	    'section'     => 'education_shop_faq_section',
	    'settings'    => 'education_shop_faq_page',
	    'choices'     => bizberg_get_all_pages(),
	    'active_callback' => [
			[
				'setting'  => 'faq_status',
				'operator' => '==',
				'value'    => true,
			]
		],
    ));

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'FAQ', 'education-shop' ),
	    'section'     => 'education_shop_faq_section',
	    'settings'    => 'education_shop_faq_section',
	    'active_callback' => [
			[
				'setting'  => 'faq_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	    'choices' => [
	        'button_label' => esc_html__( 'Add FAQ', 'education-shop' ),
	        'row_label' => [
	            'value' => esc_html__( 'FAQ', 'education-shop' ),
	        ],
	        'fields' => [
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'education-shop' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ]
    ));

}