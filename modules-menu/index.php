<?php

function hilShowFormOptions()
{
    if ($_POST) {
        hilSaveFormOptions();
    }

    $isWooCommerceActive = class_exists('WooCommerce');
    $afterPostContent = html_entity_decode(stripslashes(get_option(HIL_AFTER_POST_CONTENT_OPTION)));
    $afterSingleProduct = html_entity_decode(stripslashes(get_option(HIL_AFTER_SINGLE_PRODUCT_OPTION)));
    include HILADV_DIR . "template/menu-admin/index.php";
}

function hilSaveFormOptions()
{
    $afterPostContent = sanitize_textarea_field(htmlentities($_POST['after-each-post']));
    $afterSingleProduct = sanitize_textarea_field(htmlentities($_POST['after-each-product-wooCommerce']));
    // $afterPostContent = htmlentities(wpautop(sanitize_textarea_field($_POST['after-each-post'])));
    // $afterSingleProduct = htmlentities(wpautop(sanitize_textarea_field($_POST['after-each-product-wooCommerce'])));

    update_option(HIL_AFTER_POST_CONTENT_OPTION, $afterPostContent);
    update_option(HIL_AFTER_SINGLE_PRODUCT_OPTION, $afterSingleProduct);
}