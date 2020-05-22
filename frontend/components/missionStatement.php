<section class="mission-statement">
  <div class="mission-statement__background" data-pattern-bg="light"></div>
  <article class="mission-statement__container container">
    <div class="mission-statement__heading-wrapper">
      <h2 class="mission-statement__heading h2 h2--dark">
        Our
        <span class="mission-statement__icon">
          <?php get_template_part('svgs/rocket'); ?>
        </span>
        <br />
        Mission
      </h2>
    </div>
    <p class="mission-statement__copy paragraph--large">
      <?php the_field('theme_options_mission_statement', 'option'); ?>
    </p>
  </article>
</section>
