<?php

function SPDSGVOContentBlockShortcode($atts, $content){

    $params = shortcode_atts( array (
        'type' => '',
        'shortcode' => ''
    ), $atts );

    if (empty($params['type'])) return $content;
    $slug = $params['type'];

    $shortcode = $params['shortcode'];
    if (empty($shortcode) == false) $content = do_shortcode("[" . $shortcode ."]");

    $embeddingApi = SPDSGVOEmbeddingsManager::getInstance()->getEmbeddingApiBySlug($slug);
    if ($embeddingApi == null) return $content;

    $originalContentBase64Encoded = base64_encode($content);
    $processedContent =  $embeddingApi->processContent($content);

    $customCssClasses = SPDSGVOSettings::get('embed_placeholder_custom_css_classes');

    $content = '<div class="sp-dsgvo sp-dsgvo-embedding-container sp-dsgvo-embedding-' . $embeddingApi->slug . ' '. $customCssClasses .'">' . $processedContent . '<div class="sp-dsgvo-hidden-embedding-content sp-dsgvo-hidden-embedding-content-' . $embeddingApi->slug . '" data-sp-dsgvo-embedding-slug="' . $embeddingApi->slug . '">' . $originalContentBase64Encoded . '</div></div>';


    return $content;
}

add_shortcode('lw_content_block', 'SPDSGVOContentBlockShortcode');
