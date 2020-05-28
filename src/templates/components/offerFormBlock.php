<section class="block block--bg-<?php echo $block['bgColor'] ?> block--text-<?php echo $block['textColor']; ?>">
  <div class="container">
    <div class="offer-form-block">
      <div class="offer-form-block__text">
        <h2 class="offer-form-block__heading h2 h2--<?php echo $block['textColor']; ?>">
          <?php echo $block['blockHeading']; ?>
          <span class="offer-form-block__icon">
            <?php get_template_part('svgs/file'); ?>
          </span>
        </h2>
        <div class="offer-form-block__text">
          <?php echo $block['textContent']; ?>
        </div>
      </div>
      <div class="offer-form-block__form">
        <?php get_template_part('components/cashOffer'); ?>
      </div>
    </div>
  </div>
</section>
