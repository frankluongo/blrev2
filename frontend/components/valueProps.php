<section class="value-props">
  <div class="value-props__background" data-pattern-bg="dark"></div>
  <div class="value-props__container container">
    <?php
      get_template_part('components/valuePropHeading');
      $props = get_field('valueProps', 'option');
      foreach($props as &$prop) {
        include(locate_template('components/valueProp.php'));
      }
    ?>
  </div>
</section>
