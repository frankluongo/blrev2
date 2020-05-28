<section class="footer__contact">
  <div class="footer-contact__inner">
    <header class="footer-contact__header">
      <?php get_template_part('svgs/logoHouse'); ?>
      <h3 class="footer-contact__title">
        Brotherly Love
        <br /> Real Estate
      </h3>
    </header>
    <section class="footer-contact__content">
      <p>
        <?php echo get_field('theme_options_office_address', 'option'); ?>
      </p>
      <p>
        <a
          class="link underline text-primary-4"
          href="mailto:<?php the_field('theme_options_email_address', 'option'); ?>"
          rel="noopener noreferrer"
          target="blank"
        >
          Send us an email
        </a>
        &nbsp;or&nbsp;
        <a
          class="link underline text-primary-4"
          href="<?php the_field('theme_options_phone_number', 'option'); ?>"
          rel="noopener noreferrer"
          target="blank"
        >
          Give us a call
        </a>
        &nbsp;
        <?php the_field('theme_options_phone_number', 'option'); ?>
      </p>
    </section>
    <section class="footer-contact__social-links">
      <?php get_template_part('components/socialLinks'); ?>
    </section>
    <section class="footer-contact__copyright">
      Copyright &copy; <?php echo date("Y"); ?>| Brotherly Love Real
      Estate
    </section>
  </div>
</section>
