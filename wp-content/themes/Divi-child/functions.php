<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

// How to Change the WooCommerce "Related products" text

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Mozda Vam se dopadne:', $source);
     }
     return $new_text;
}

// How to Change the WooCommerce OTHER text ---------------------------

add_filter('gettext', 'change_product_text', 10, 3);

function change_product_text($new_text, $related_text, $source)
{
     if ($related_text === 'Product' && is_cart()) {
         $new_text = esc_html__('Proizvod', $source);
     }
     return $new_text;
}


add_filter('gettext', 'change_cena_text', 10, 3);

function change_cena_text($new_text, $related_text, $source)
{
     if ($related_text === 'Price' && is_cart()) {
         $new_text = esc_html__('Cena', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_kolicina_text', 10, 3);

function change_kolicina_text($new_text, $related_text, $source)
{
     if ($related_text === 'Quantity' && is_cart()) {
         $new_text = esc_html__('Kolicina', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_suma_text', 10, 3);

function change_suma_text($new_text, $related_text, $source)
{
     if ($related_text === 'Subtotal' && is_cart()) {
         $new_text = esc_html__('Suma', $source);
     }
     return $new_text;
}

// How to Change the WooCommerce OTHER text ---------------------------

// Woocommerce Add to cart Text

add_action('woocommerce_before_add_to_cart_form','dodaj_tekst');

function dodaj_tekst() {
    $tekst = "Izaberite Kolicinu:";
    echo $tekst;
}

// Woocommerce Autor Below Cart

add_action('woocommerce_after_add_to_cart_form','dodaj_autora');

function dodaj_autora() {
    $autor = do_shortcode('[acf field="ime_autora"]');
    echo $autor;
}

// To change add to cart text on single product page

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );

function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Dodaj u Korpu', 'woocommerce' ); 
}