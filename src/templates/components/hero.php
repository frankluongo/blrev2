<section
  class="hero <?php the_field('hero_type'); ?>"
  data-lazy-bg
  data-img-src="<?php echo get_field('hero_image')['sizes']['xlarge']; ?>"
>
  <div class="hero__background-gradient"></div>
  <div class="hero__background-darken"></div>
  <div class="hero__container container text-align-center text-gray-1">
    <?php if (get_field('hero_type') === 'large'): get_template_part('components/cashOffer'); endif; ?>
    <div class="hero-container__text">
      <h1 class="hero-heading h1"><?php the_field('hero_heading'); ?></h1>
      <p class="hero-subheading"><?php the_field('hero_description'); ?></p>
    </div>
  </div>
</section>
