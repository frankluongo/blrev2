<header class="header">
  <div class="header__content container">
    <section class="header__logo">
      <a href="<?php echo get_home_url(); ?>">
        <?php get_template_part('svgs/logo'); ?>
      </a>
    </section>
    <section class="header__navigation">
      <?php get_template_part('components/hamburger'); ?>
      <?php get_template_part('components/navigation'); ?>
    </section>
  </div>
</header>
