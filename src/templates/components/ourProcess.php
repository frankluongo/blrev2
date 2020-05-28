<section class="our-process">
  <div class="our-process__container container">
    <div class="process-step process-step--dark">
      <div class="process-step__background" data-pattern-bg="dark"></div>
      <div class="process-step__content">
        <h2 class="process-step__heading h2 h2--light">
          Our <span class="process-step-heading__icon"><?php get_template_part('svgs/cogs'); ?></span> <br />
          Process
        </h2>
      </div>
    </div>
      <?php
        $steps = get_field('our_process', 'option');
        foreach($steps as &$step) {
          include(locate_template('components/processStep.php'));
        }
      ?>
    <div class="process-step process-step--dark">
      <div class="process-step__background" data-pattern-bg="dark"></div>
      <div class="process-step__content">
        <h3 class="process-step__heading process-step__heading--small h2 h2--light">
          Ready to get started?
        </h3>
        <a class="button default primary process-step__button full-width" href="mailto:<?php the_field('theme_options_email_address', 'option'); ?>">
          Get In Touch
        </a>
      </div>
    </div>
  </div>
</section>
