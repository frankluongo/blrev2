<?php
  get_header();
  if (get_field('hero_type')) {
    get_template_part('components/hero');
  }
  if (get_field('page_blocks')) {
    $blocks = get_field('page_blocks');
    foreach ($blocks as &$block) {
      $blockName = $block['acf_fc_layout'];
      include(locate_template("components/$blockName.php"));
    }
  }
  get_footer();
