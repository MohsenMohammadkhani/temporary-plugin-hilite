<div>
    <div dir="rtl" style="display: flex;align-items: center">

        <span style="padding-left:5px;">
            <img src="<?php echo esc_url(HILADV_URL); ?>/assets/dashboard/img/logo-icon-box-hilite-advertise.svg" />
        </span>

        <span>
            <h1>
                پلاگین تبلیغات هایلات
            </h1>
        </span>

    </div>


    <?php if (!$isWooCommerceActive) {?>

    <div class="notice notice-warning  ">
        <p>
            افزونه ووکامررس فعال نیست . آنرا نصب و فعال کنید.
        </p>
    </div>
    <?php }?>
    <form action="/wp-admin/admin.php?page=hil-advertise" method="post">

        <div>
            <h3>
                محتوا html بعد از هر نوشته
            </h3>
            <div style="width:50%">
                <?php wp_editor($afterPostContent, 'after-each-post', array(
    "textarea_rows" => 12,
));?>
            </div>
        </div>


        <?php if ($isWooCommerceActive) {?>
        <hr />
        <div>
            <h3>
                محتوا html انتهای صفحه محصول مخصوص افزونه ووکامررس
            </h3>
            <div style="width:50%">
                <?php wp_editor($afterSingleProduct, 'after-each-product-wooCommerce', array(
    "textarea_rows" => 12,
));?>
            </div>
        </div>


        <br /><br />
        <button class="button button-primary button-large">ذخیره</button>
    </form>
</div>
<?php }?>