<?php

define( 'O2_DIRECTORY', get_template_directory() . '/inc/o2/' );
define( 'O2_DIRECTORY_URI', get_template_directory_uri() . '/inc/o2/' );

// Register icon picker for the customizer
require get_template_directory() . '/inc/o2/controls/icon-picker/icon-picker-control.php';

function opox_customize_colors() {

	$color_scheme_1 = get_option( 'color_scheme_1' );
	$color_scheme_2 = get_option( 'color_scheme_2' );
	$link_color = get_option( 'link_color' );
	$hover_link_color = get_option( 'hover_link_color' );

	?>
	<style type="text/css">
	#footer 
	{ 
		background: <?php echo get_theme_mod('opox_second_bg_color'); ?>; 
	}

	body { 
		background: <?php echo get_theme_mod('opox_main_bg_color'); ?>; 
		color: <?php echo get_theme_mod('opox_main_text_color'); ?>; 
	}

	#header hr 
	{ 
		border-top: 1px solid <?php echo get_theme_mod('opox_main_bg_color_alternate'); ?>; 
	};

	.widget-header
	{
		color: <?php echo get_theme_mod('opox_second_text_color'); ?>;
	}

	.widget-header #title
	{
		color: <?php echo get_theme_mod('opox_main_text_color'); ?>;
	}

	.widget-header #description
	{
		color: <?php echo get_theme_mod('opox_second_text_color'); ?>;
	}

	.widget-header a
	{
		color: <?php echo get_theme_mod('opox_second_text_color'); ?>;
	}

	.widget-header i
	{
		color: <?php echo get_theme_mod('opox_main_color'); ?>;
	}

	#header hr
	{
		border-top: 1px solid <?php echo get_theme_mod('opox_second_text_color'); ?>;
	}

</style>
<?php
}
add_action( 'wp_head', 'opox_customize_colors' );

function opox_customize_register( $wp_customize ) {

	/**
	*	Sections
	*/
	$wp_customize->add_section( 'opox_header' , array(
		'title'    => __( 'En tête', 'opox_header' ),
		'priority' => 30
	));   
	$wp_customize->add_section( 'opox_footer' , array(
		'title'    => __( 'Pied de page', 'opox_footer' ),
		'priority' => 40
	)); 
	
	/*
	* Settings
	*/
	// Header
	$wp_customize->add_setting( 'o2_fa_icon_picker_mails', array(
		'default' => 'fa-envelope-o',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_contact_header_title' , array(
		'default' => 'Accueil et atelier',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_header_mails' , array(
		'default' => 'adress@mail.com',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_header_tel' , array(
		'default' => '+33 3 33 33 33 33',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_header_fax' , array(
		'default' => '+33 3 22 22 22 22',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'o2_fa_icon_picker_working_time', array(
		'default' => 'fa-calendar',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_header_working_time_title' , array(
		'default' => 'Horaires',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_header_working_time' , array(
		'default' => 'Ouverture du Lundi au Vendredi<br>de 8h à 17h<br>Sur RDV',
		'transport' => 'refresh',
	));

	// Footer
	$wp_customize->add_setting( 'opox_footer_mails_tel' , array(
		'default' => 'Tél.: 02.31.29.51.04 - E-mail : accueil@gtp-guerin.fr',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_footer_adress' , array(
		'default' => 'GUERIN TRAITEMENT & PROTECTION, 11 Rue des hauts de Beaulieu, 14000 CAEN',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_footer_text' , array(
		'default' => 'Certificat n°062/06/04-285 - 081/06F5',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_footer_others' , array(
		'default' => 'Numéro d\'activité : 28140297114',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_footer_img1' , array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_footer_img2' , array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Colors
	$wp_customize->add_setting( 'opox_main_color' , array(
		'default' => '#e52b38',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_main_color_alternative' , array(
		'default' => '#BF242E',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_second_color' , array(
		'default' => '#0070b8',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_second_color_alternative' , array(
		'default' => '#003E66',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_main_text_color' , array(
		'default' => '#FFFFFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_second_text_color' , array(
		'default' => '#CCCCCC',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_third_text_color' , array(
		'default' => '#545454',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_main_bg_color' , array(
		'default' => '#FFFFFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_main_bg_color_alternate' , array(
		'default' => '#EFEFEF',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_second_bg_color' , array(
		'default' => '#000000',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'opox_second_bg_color_alternate' , array(
		'default' => '#191919',
		'transport' => 'refresh',
	));

	/*
	* Controls
	*/

	// Colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_main_color', array(
		'label'      => __( 'Main Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_main_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_main_color_alternative', array(
		'label'      => __( 'Main Color Alternative', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_main_color_alternative',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_second_color', array(
		'label'      => __( 'Second Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_second_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_second_color_alternative', array(
		'label'      => __( 'Second Color Alternative', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_second_color_alternative',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_main_text_color', array(
		'label'      => __( 'Main Text Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_main_text_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_second_text_color', array(
		'label'      => __( 'Second Text Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_second_text_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_third_text_color', array(
		'label'      => __( 'Third Text Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_third_text_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_main_bg_color', array(
		'label'      => __( 'Main Background Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_main_bg_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_main_bg_color_alternate', array(
		'label'      => __( 'Main Background Color Alternate', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_main_bg_color_alternate',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_second_bg_color', array(
		'label'      => __( 'Second Background Color', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_second_bg_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'opox_second_bg_color_alternate', array(
		'label'      => __( 'Second Background Color Alternate', 'opox' ),
		'section'    => 'colors',
		'settings'   => 'opox_second_bg_color_alternate',
	) ) );

	// Header
	$wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker_mails', array(
		'label' => __('Icone Mails', 'textdomain'),
		'description' => __('Choisissez une icone', 'textdomain'),
		'iconset' => 'fa',
		'section' => 'opox_header',
		'settings' => 'o2_fa_icon_picker_mails'
	)));

	$wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker_working_time', array(
		'label' => __('Icone Horaires', 'textdomain'),
		'description' => __('Choisissez une icone', 'textdomain'),
		'iconset' => 'fa',
		'section' => 'opox_header',
		'settings' => 'o2_fa_icon_picker_working_time'
	)));

	$wp_customize->add_control( 'opox_contact_header_title', array(
		'type' => 'textarea',
		'section' => 'opox_header',
		'label' => __( 'Titre' ),
		'description' => __( 'Entrez le titre'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_header_mails', array(
		'type' => 'textarea',
		'section' => 'opox_header',
		'label' => __( 'Mails' ),
		'description' => __( 'Entrez l\'adresse e-mail de l\'en-tête'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_header_tel', array(
		'type' => 'textarea',
		'section' => 'opox_header',
		'label' => __( 'Téléphone' ),
		'description' => __( 'Entrez le numéro de téléphone de l\'en-tête'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_header_fax', array(
		'type' => 'textarea',
		'section' => 'opox_header',
		'label' => __( 'Fax' ),
		'description' => __( 'Entrez le numéro de fax de l\'en-tête'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_header_working_time_title', array(
		'type' => 'textarea',
		'section' => 'opox_header',
		'label' => __( 'Titre' ),
		'description' => __( 'Entrez le titre'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_header_working_time', array(
		'type' => 'textarea',
		'section' => 'opox_header',
		'label' => __( 'Horaires' ),
		'description' => __( 'Entrez les horaires de l\'en-tête'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	// Footer
	$wp_customize->add_control( 'opox_footer_mails_tel', array(
		'type' => 'textarea',
		'section' => 'opox_footer',
		'label' => __( 'Mail et tel' ),
		'description' => __( 'Entrez les mails et numéros de téléphones'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_footer_adress', array(
		'type' => 'textarea',
		'section' => 'opox_footer',
		'label' => __( 'Adresse' ),
		'description' => __( 'Entrez l\'adresse'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_footer_text', array(
		'type' => 'textarea',
		'section' => 'opox_footer',
		'label' => __( 'Texte en dessous des logos' ),
		'description' => __( 'Entrez le texte'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control( 'opox_footer_others', array(
		'type' => 'textarea',
		'section' => 'opox_footer',
		'label' => __( 'Autres' ),
		'description' => __( 'Entrez l\'information'),
		'input_attrs' => array(
			'class' => 'my-custom-class',
			'style' => 'border: 1px solid',
			'placeholder' => __( 'Entrez la nouvelle valeur ...' ),
		),
	));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo1',
			array(
				'label'      => __( 'Upload a logo', 'opox' ),
				'section'    => 'opox_footer',
				'settings'   => 'opox_footer_img1'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo2',
			array(
				'label'      => __( 'Upload a logo', 'opox' ),
				'section'    => 'opox_footer',
				'settings'   => 'opox_footer_img2'
			)
		)
	);

}

add_action( 'customize_register', 'opox_customize_register' );

?>