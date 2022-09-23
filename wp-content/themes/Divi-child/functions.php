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

// Add "Kolicina" before Quantity Woocommerce
add_action('woocommerce_before_add_to_cart_form','dodaj_tekst');
function dodaj_tekst()
{
    $tekst='Izaberite Količinu';
    echo $tekst;
}

// Begin remove Divi Portfolio and Filterable Portfolio featured image crop

function wpc_remove_height_cropping($height) { return '9999';};
function wpc_remove_width_cropping($width) { return '9999';};

add_filter( 'et_pb_blog_image_height', 'wpc_remove_height_cropping' );
add_filter( 'et_pb_blog_image_width', 'wpc_remove_width_cropping' );
add_filter( 'et_pb_portfolio_image_width', 'pa_portfolio_image_width' );
add_filter( 'et_pb_portfolio_image_height', 'pa_portfolio_image_height' );
// End remove Divi Portfolio and Filterable Portfolio featured image crop

// Disable WooCommerce zoom effect on the product image
add_action( 'wp', 'divikingdom_disable_wc_zoom', 99 );
function divikingdom_disable_wc_zoom() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}
// --------
// Change WooCommerce "Category" text

add_filter('gettext', 'category_translate', 10, 3);
add_filter('ngettext', 'category_translate', 10, 3);

function category_translate($translated, $text, $domain)
{
     if ($text === 'Category:') {
         $translated = esc_html__('Kategorija:', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Related products" text

add_filter('gettext', 'change_rp_text', 10, 3);
add_filter('ngettext', 'change_rp_text', 10, 3);

function change_rp_text($translated, $text, $domain)
{
     if ($text === 'Related products' && $domain === 'woocommerce') {
         $translated = esc_html__('Slični Proizvodi', $domain);
     }
     return $translated;
}
//--------
// Change WooCommerce "YMAL" text

add_filter( 'woocommerce_product_upsells_products_heading', 'bbloomer_translate_may_also_like' );
  
function bbloomer_translate_may_also_like() {
   return 'Možda Vas zanima i:';
}
//--------

//Change currency display in WooCommerce

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'RSD': $currency_symbol = 'RSD'; break;
     }
     return $currency_symbol;
}

// To change add to cart text on single product page

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text', 10, 3); 

function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Dodaj U Korpu', 'woocommerce' ); 
}
//--------

// Change WooCommerce "Choose an option" text

add_filter('gettext', 'change_cao_text', 10, 3);
add_filter('ngettext', 'change_cao_text', 10, 3);

function change_cao_text($translated, $text, $domain)
{
     if ($text === 'Choose an option' && $domain === 'woocommerce') {
         $translated = esc_html__('Odaberite Opciju', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Cart" text

add_filter('gettext', 'change_cart_text', 10, 3);
add_filter('ngettext', 'change_cart_text', 10, 3);

function change_cart_text($translated, $text, $domain)
{
     if ($text === 'Cart' && $domain === 'woocommerce') {
         $translated = esc_html__('Korpa', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Cart totals" text

add_filter('gettext', 'change_ct_text', 10, 3);
add_filter('ngettext', 'change_ct_text', 10, 3);

function change_ct_text($translated, $text, $domain)
{
     if ($text === 'Cart totals' && $domain === 'woocommerce') {
         $translated = esc_html__('Ukupno u korpi', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Been Added" text

add_filter('gettext', 'change_been_added_text', 10, 3);
add_filter('ngettext', 'change_been_added_text', 10, 3);

function change_been_added_text($translated, $text, $domain)
{
     if ($text === 'has been added to your cart' && $domain === 'woocommerce') {
         $translated = esc_html__('proizvod je dodat u korpu', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Town / City" text

add_filter('gettext', 'change_town_city_text', 10, 3);
add_filter('ngettext', 'change_town_city_text', 10, 3);

function change_town_city_text($translated, $text, $domain)
{
     if ($text === 'Town / City' && $domain === 'woocommerce') {
         $translated = esc_html__('Mesto / Grad', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Street address" text

add_filter('gettext', 'change_sa_text', 10, 3);
add_filter('ngettext', 'change_sa_text', 10, 3);

function change_sa_text($translated, $text, $domain)
{
     if ($text === 'Street address' && $domain === 'woocommerce') {
         $translated = esc_html__('Adresa', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "Postcode / Zip" text

add_filter('gettext', 'change_pz_text', 10, 3);
add_filter('ngettext', 'change_pz_text', 10, 3);

function change_pz_text($translated, $text, $domain)
{
     if ($text === 'Postcode / ZIP' && $domain === 'woocommerce') {
         $translated = esc_html__('Poštanski broj', $domain);
     }
     return $translated;
}
//--------

// Change WooCommerce "District" text

add_filter('gettext', 'change_district_text', 10, 3);
add_filter('ngettext', 'change_district_text', 10, 3);

function change_district_text($translated, $text, $domain)
{
     if ($text === 'District' && $domain === 'woocommerce') {
         $translated = esc_html__('Region', $domain);
     }
     return $translated;
}
//--------


//Allow shortcodes in widgets
add_filter ('widget_text', 'do_shortcode');

function year_shortcode () {
$year = date_i18n ('Y');
return $year;
}
add_shortcode ('year', 'year_shortcode');

