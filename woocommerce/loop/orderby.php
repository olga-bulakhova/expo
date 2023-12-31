<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
    exit;
}
$args = array(
    'taxonomy'   => 'product_cat',
    'orderby'    => 'name',
    'hide_empty' => true,
);
$product_categories = get_terms($args);
$category_name = get_queried_object()->name;
?>

<div class="woocommerce-product-ordering d-flex align-items-center mobile-column">
    <div class="drop-down">
        <div class="selected">
            <span><?php echo $category_name === 'product' ? 'Все товары' : $category_name; ?></span>
        </div>
        <div class="options">
            <ul>
                <li><a href="/shop/">Все товары<span class="value">1</span></a></li>
                <?php foreach ($product_categories as $cat) : ?>
                    <li><a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo $cat->name ?><span class="value">2</span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <form class="woocommerce-ordering" method="get">
        <select name="orderby" class="orderby" aria-label="
        <?php esc_attr_e('Shop order', 'woocommerce'); ?>">
            <?php foreach ($catalog_orderby_options as $id => $name) : ?>
                <option value="<?php echo esc_attr($id); ?>"
                    <?php selected($orderby, $id); ?>><?php echo esc_html($name); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="hidden" name="paged" value="1"/>
        <?php wc_query_string_form_fields(null, array('orderby', 'submit', 'paged', 'product-page')); ?>
    </form>
</div>