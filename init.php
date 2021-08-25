<?php
/* HILADV => hilite Advertising Viewer*/

define('HILADV_DIR', trailingslashit(plugin_dir_path(__FILE__)));
define('HILADV_URL', trailingslashit(plugin_dir_url(__FILE__)));

define('HILADV_JS_SITE', trailingslashit(HILADV_DIR . 'assets/site/js'));
define('HILADV_CSS_SITE', trailingslashit(HILADV_DIR . 'assets/site/css'));
define('HILADV_IMG_SITE', trailingslashit(HILADV_DIR . 'assets/site/img'));

define('HILADV_JS_DASH', trailingslashit(HILADV_DIR . 'assets/dashboard/js'));
define('HILADV_CSS_DASH', trailingslashit(HILADV_DIR . 'assets/dashboard/css'));
define('HILADV_IMG_DASH', trailingslashit(HILADV_DIR . 'assets/dashboard/img'));
define('HILADV_IMG_DASH_URL', trailingslashit(HILADV_URL . '/assets/dashboard/img'));

define('HIL_PREFIX_OPTIONS', 'hil-');
define('HIL_AFTER_POST_CONTENT_OPTION', HIL_PREFIX_OPTIONS . "after-post-content");
define('HIL_AFTER_SINGLE_PRODUCT_OPTION', HIL_PREFIX_OPTIONS . "after-single-product");

require_once HILADV_DIR . 'helper/functions.php';
require_once HILADV_DIR . 'include/menu-admin.php';
require_once HILADV_DIR . 'include/implement-actions.php';
require_once HILADV_DIR . 'include/actions.php';