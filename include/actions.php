<?php
add_filter('the_content', 'hilAddPositionsAdvertiseBannerAfterPostContent');
add_action('woocommerce_after_single_product', 'hilAddPositionsAdvertiseBannerAfterSingleProduct');