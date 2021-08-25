<?php

function hilAddPositionsAdvertiseBannerAfterPostContent($content)
{
    if (!is_single()) {
        return $content;
    }

    if (is_product()) {
        return $content;
    }
    $custom_content = get_option(HIL_AFTER_POST_CONTENT_OPTION);
    $content .= html_entity_decode(stripslashes($custom_content));
    return $content;
}

function hilAddPositionsAdvertiseBannerAfterSingleProduct()
{
    // echo wp_kses_post(html_entity_decode(stripslashes(get_option(HIL_AFTER_SINGLE_PRODUCT_OPTION))));
    echo html_entity_decode(stripslashes(wp_kses_post(get_option(HIL_AFTER_SINGLE_PRODUCT_OPTION))));
}