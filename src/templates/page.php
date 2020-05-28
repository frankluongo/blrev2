<?php
  get_header();
  if (get_field('hero_type')) {
    get_template_part('components/hero');
  }
  getBlocks(get_field('page_blocks'));
  get_footer();
