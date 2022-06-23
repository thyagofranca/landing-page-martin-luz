<?php 
function topteam_customizer_register($wp_customize) {
	//Copyright
	$wp_customize -> add_section( 'sec_copyright', array(
		'title' => __( 'Copyright', 'martin'), 
		'description' => sprintf(__( 'Copyright Section', 'martin' )),
	 	'priority' => 20
		)
	);
	$wp_customize -> add_setting( 'campo_copyright', array(
		'type' => 'theme_mod',
		'default' => _x( '© 2022. Todos os direitos reservados.', 'martin' ),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize -> add_control( 'campo_copyright', array(
		'label' =>  __( 'Copyright', 'martin' ), 
		'description' =>  __( 'Section to add copyright text', 'martin' ),
		'section' => 'sec_copyright',
		'priority' => 1,
		'type'   => 'text'
		)
	);
	//Segundo input para add a url do copyright
    $wp_customize -> add_setting( 'link_copyright', array(
    	'type' => 'theme_mod',
		'default' => _x( 'https://martinluz.com/', 'martin' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize -> add_control( 'link_copyright', array(
        'label' => esc_html__( 'Add the main URL of your site, ex: http://yourwebsite.com/', 'martin' ),
        'type' => 'url',
        'description' =>  __( 'Section to add the copyright url', 'martin' ),
        'section' => 'sec_copyright',
        'priority' => 2
        )
    );  
}
add_action( 'customize_register', 'martin_customizer_register' );
