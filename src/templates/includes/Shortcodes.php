<?php

  function pageTitleFn() {
    return get_the_title();
  };

  function checkmarkItemFn($atts) {
    $text = $atts['text'];
    ob_start();
    include(locate_template('components/checkboxItem.php'));
    return ob_get_clean();
  };

  function videoEmbedFn($atts) {
    $url = $atts['url'];
    $title = $atts['title'];
    return "<div class=\"video-wrapper\"><iframe class=\"video\" src=\"$url\" alt=\"$title\"></iframe></div>";
  };

  add_shortcode( 'checkmarkItem', 'checkmarkItemFn');
  add_shortcode( 'pageTitle', 'pageTitleFn' );
  add_shortcode( 'videoEmbed', 'videoEmbedFn' );
