<div class="wrap"></div>

<div class="sp-dsgvo" style="padding-right: 15px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2 text-white">
        <a class="navbar-brand" href="#">
            <img src="<?php echo SPDSGVO::pluginURI('public\images\legalwebio-logo-icon-white.svg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            <a class="navbar-brand"><?php _e('WP DSGVO Tools (GDPR) by legalweb.io', 'shapepress-dsgvo'); ?></a>
        </a>
    </nav>

    <!--
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>
    -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php _e('WP DSGVO Tools (GDPR)', 'shapepress-dsgvo'); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= __($tabs[$tab]->getTabTitle(),'shapepress-dsgvo');;?></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-9 container-fluid sp-dsgvo-content-container">
            <?php

            if (isset($tabs[$tab])) {
                $tabs[$tab]->page();
                ?>
                <script>
                    var spDsgvoActiveAdminSubmenu = '<?= $tabs[$tab]->slug ?>';

                </script>
                <?php
            } else {
                $tabs['common-settings']->page();
            }

            ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 sp-dsgvo-side-container">

            <div class="card border-info bg-light" style="">
                <div class="card-header"><h5 class="text-info font-weight-bold text-uppercase m-0"><?= __("Need help?",'shapepress-dsgvo')?></h5></div>
                <div class="card-body">
                    <p class="card-text"><?= __('Do you have problems our questions how to configure this plugin correctly? Just visit <a href="https://legalweb.freshdesk.com/support/solutions" target="_blank" >this link</a> to see a quick start tutorial and access our FAQa.','shapepress-dsgvo'); ?> </p>
                </div>
            </div>

            <!--
            <div class="card border-info bg-light" style="">
                <div class="card-header"><h5 class="text-info font-weight-bold text-uppercase m-0"><?= __("What's new, what has changed:",'shapepress-dsgvo')?></h5></div>
                <div class="card-body">

                    <p class="card-text"><?= sprintf(__( 'Since version 3.1, the premium version is able to embed <strong>external content like YouTube, Facebook, Google Maps or other</strong> external content GDPR compliant. With opt-in decision your visitor can choose what to agree to. No 3rd party cookies of your external content gets created before. Just enable them in the plugin menu item <strong><a href="%s" >Embeddings</a></strong>.', 'shapepress-dsgvo' ), get_admin_url()."admin.php?page=sp-dsgvo&tab=embeddings-integrations"); ?> </p>

                </div>
            </div>
            -->

            <?php if (isValidBlogEdition() == true) :?>
                <div class="card border-info bg-light" style="">
                    <div class="card-header"><h5 class="text-info font-weight-bold text-uppercase m-0"><?= __("Embeddings offer",'shapepress-dsgvo')?></h5></div>
                    <div class="card-body">
                        <p class="card-text"><?= __('Special offer in combination with our feature release supporting embeddings: With the <strong>coupon "BLOG2PREMIUM"</strong> you will get <strong>&euro; 10.- off</strong> if you upgrade your blog to a premium licence subscription. You will have all premium features, including the GDPR compliant integration of external content of <strong>Facebook, Google Maps, YouTube, Vimeo, OpenStreetMap, Instagram, Soundcloud, Twitter</strong>.','shapepress-dsgvo'); ?>
                            <a href="https://legalweb.io/shop/plugins/wp-dsgvo-tools-blog-zu-premium-upgrade?src=backend&lic=<?= SPDSGVOSettings::get('dsgvo_licence');?>" class="btn btn-warning btn-block mt-2"><?= __('Blog to Premium Upgrade','shapepress-dsgvo'); ?></a>
                    </div>
                </div>
            <?php endif; ?>



            <div class="card border-info bg-light" style="">
                <div class="card-header"><h5 class="text-info font-weight-bold text-uppercase m-0"><?= __("Hello LegalWeb Cloud",'shapepress-dsgvo')?></h5></div>
                <div class="card-body">
                    <p class="card-text"><?= __('We announce the release of an CMS independent product for legal compliance on July 10th. Cookie popup, imprint, privacy policy, tracker management and much more is possbible with LegalWeb cloud. Plugins for Typo3, Shopware, Neos and of cource Wordpress. Just visit <a href="https://legalweb.io" target="_blank" >this link</a> to see a lot of more details.','shapepress-dsgvo'); ?> </p>
                </div>
            </div>

            <div class="card border-info bg-light" style="">
                <div class="card-header"><h5 class="text-info font-weight-bold text-uppercase m-0"><?= __("Free Webinars",'shapepress-dsgvo')?></h5></div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-1"><?= __("Next dates",'shapepress-dsgvo')?></h6>

                    <?php

                    $response = wp_remote_get( add_query_arg( array(
                        'status' => 'publish',
                        'category' => 'webinare'
                    ), 'https://legalweb.io/wp-json/legalweb/v1/webAndSeminar?category=webinare&status=publish' ) );

                    $products = json_decode( $response['body'], true );

                    if (isset($products)) {
                        $count = 0;
                        $maxCount = 3;
                        $result = '';
                        $result .= '<div class="list-group list-group-flush col-12">';
                        foreach ($products as $product) {
                            if ($count == $maxCount) break;
                            $webinar = $product['product']['data'];
                            $meta = $product['meta'];

                            $result .= '<div class="list-group-item font-weight-bold py-1 px-1 bg-light">';
                            $result .= '<a href="' . $webinar['link'] . '" class="clear">';
                            $result .= '<span class="seminare-date">' . date_format(date_create_from_format("Y-m-d H:i", $meta['seminar_beginn'][0]), "d.m.") . ' </span>';
                            $result .= '<span class="seminare-text">';
                            $result .= $webinar['title']['rendered'] . ' <br />';
                            /*
                            $result .= '<span class="seminare-ortdatum">';
                            if (array_key_exists('Ausgebucht', $meta) && $meta['Ausgebucht'][0]) {
                                $result .= $meta['Ausgebucht'][0];
                            } else if ($meta['seminar_ort'][0]) {
                                $result .= $meta['seminar_ort'][0];
                            } else {
                                $result .= '<small>Online Webinar</small>';
                            }
                            $result .= '</span>';
                            */
                            $result .= '</span>';
                            $result .= '</a>';
                            $result .= '</div>';

                            $count++;
                        }
                        $result .= '</div>';
                    }

                    if (isset($result) && isset($products) && count($products) > 0) {
                        echo $result;
                    } else
                    {
                        echo __('Currently no dates planed. You can watch the videos of past webinars on our  <a href="https://www.youtube.com/channel/UCxPJiWLFirO_KJpm-TeyQhg" target="_blank">YouTube channel</a>','shapepress-dsgvo');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (isLicenceValid() == false) :?>
    <div class="row">
        <div class="col-12">
            <div class="card border-info bg-light col-6">
                <h5 class="card-header text-info font-weight-bold text-uppercase"><?= __('Upgrade to Premium','shapepress-dsgvo');?></h5>
                <div class="card-body row no-gutters">
                    <div class="list-group col-6">
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('All integrations','shapepress-dsgvo');?></div>
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('Tag Manager support <small>(Google TagManager &amp; Matomo Tag Manager)</small>','shapepress-dsgvo');?></div>
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('Embeddings  <small>(Currently: Facebook, Google Maps, YouTube, Vimeo, OpenStreetMap, Instagram, Soundcloud, Twitter)</small>','shapepress-dsgvo');?></div>
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('WooCommerce Features <small>(Checkbox, data request, delete request)</small>','shapepress-dsgvo');?></div>
                    </div>
                    <div class="list-group  col-6">
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('Automatic updates of law texts','shapepress-dsgvo');?></div>
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('Access to support','shapepress-dsgvo');?></div>
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('No ads','shapepress-dsgvo');?></div>
                        <div class="list-group-item border-0 font-weight-bold py-1 px-1 bg-light">&plus; <?= __('You support the further development','shapepress-dsgvo');?></div>
                    </div>
                    <a href="https://legalweb.io/shop/plugins/wp-dsgvo-tools-premium-lizenz?src=backend" class="btn btn-warning btn-block mt-2"><?= __('Buy Premium License','shapepress-dsgvo'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
