<?php
  get_header();
  if (get_field('display_hero')) {
  get_template_part('components/hero');
  } else {
?>
<section class="formhero">
  <div class="formhero__container container">
    <div class="formhero-container__offer-form">
      <?php get_template_part('components/cashOffer'); ?>
    </div>
    <div class="formhero-container__title">
      <h1>
        We buy houses in
        <span class="formhero-title__neighborhood">
          <?php echo get_the_title(); ?>
        </span>
      </h1>
    </div>
  </div>
</section>
<?php
  }
  getBlocks(get_field('page_blocks', 'option'));
  getBlocks(get_field('page_blocks'));
  get_footer();
?>
