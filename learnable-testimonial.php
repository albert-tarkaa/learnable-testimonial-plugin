<?php
/*
Plugin Name: Learnable Testimonial Shortcode
Description: Display testimonial content using a shortcode with dynamic attributes.
Version: 1.0
Author: Albert Tarkaa
*/

// Enqueue stylesheet
function learnable_testimonial_enqueue_styles() {
    wp_enqueue_style( 'learnable-testimonial-style', plugin_dir_url( __FILE__ ) . 'styles.css' );
}
add_action( 'wp_enqueue_scripts', 'learnable_testimonial_enqueue_styles' );

// Testimonial Shortcode
function learnable_testimonial_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts( array(
        'image' => '',
        'title' => '',
        'description' => '',
        'author' => '',
        'designation' => ''
    ), $atts );

    // Generate testimonial HTML
    $testimonial_html = '<div class="testi-container">';
    $testimonial_html .= '<div class="testi-image-container">';
    $testimonial_html .= '<img src="' . esc_url($atts['image']) . '" alt="Testimonial Image">';
    $testimonial_html .= '</div>';
    $testimonial_html .= '<div class="testi-content-container">';
    $testimonial_html .= '<div class="testi-title">' . esc_html($atts['title']) . '</div>';
    $testimonial_html .= '<div class="testi-description">' . esc_html($atts['description']) . '</div>';
    $testimonial_html .= '<div class="testi-author">' . esc_html($atts['author']) . '</div>';
    $testimonial_html .= '<div class="testi-designation">' . esc_html($atts['designation']) . '</div>';
    $testimonial_html .= '</div>';
    $testimonial_html .= '</div>';

    return $testimonial_html;
}
add_shortcode( 'learnable_testimonial', 'learnable_testimonial_shortcode' );
