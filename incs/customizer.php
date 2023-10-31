<?php

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {

    $wp_customize->add_section('expo_theme_options', array(
        'title' => 'Шапка на главной странице',
        'priority' => 10
    ));


    $wp_customize->add_setting( 'expo_banner' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'expo_banner', [
        'label'   => 'Баннер',
        'section' => 'expo_theme_options',
    ] ) );


    $wp_customize->add_setting( 'expo_title' );
    $wp_customize->add_control( 'expo_title', array(
        'label' => 'Заголовок',
        'section' => 'expo_theme_options',
    ) );

    $wp_customize->add_setting( 'expo_text' );
    $wp_customize->add_control( 'expo_text', array(
        'label' => 'Text',
        'section' => 'expo_theme_options',
    ));

});

function expo_theme_options() {
    return array(
        'banner' => get_theme_mod( 'expo_banner' ),
        'title' => get_theme_mod( 'expo_title' ),
        'text' => get_theme_mod( 'expo_text' ),
    );
}

