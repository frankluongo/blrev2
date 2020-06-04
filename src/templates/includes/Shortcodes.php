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

  add_shortcode( 'checkmarkItem', 'checkmarkItemFn');
  add_shortcode( 'pageTitle', 'pageTitleFn' );
