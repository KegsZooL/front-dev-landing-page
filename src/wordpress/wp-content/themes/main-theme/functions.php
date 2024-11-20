<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
    wp_enqueue_script( 'my-theme-script', get_template_directory_uri() . '/script.js', array(), null, true );
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>

<?php
    function mytheme_customize_register( $wp_customize ) {

        $wp_customize->add_section(
            'data_site_section',
            array(
                'title' => 'Данные сайта',
                'capability' => 'edit_theme_options',
                'description' => "Тут можно указать данные сайта"
            )
        );

        $wp_customize->add_setting(
            'course_end_date',
            array(
                'default' => '',
                'type' => 'option'
            )
        );

        $wp_customize->add_control(
            'course_end_date_control',
            array(
                'type' => 'date',
                'label' => "Дата окончания курса",
                'section' => 'data_site_section',
                'settings' => 'course_end_date'
            )
        );
    }
    add_action( 'customize_register', 'mytheme_customize_register' );
