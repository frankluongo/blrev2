<section class="testimonials">
  <div class="container">
    <div class="text-align-center">
      <h2 class="mission-statement__heading text-gray-8">Testimonials</h2>
      <hr class="mission-statement__divider default bg-gray-4" />
    </div>
  </div>
  <div class="testimonials__container grid cols-xsmall-2 cols-medium-4 container">
    <?php
    $args = array('post_type' => 'testimonials');
    $testimonials = new WP_Query( $args );
    if($testimonials->have_posts() ) :
      while ( $testimonials->have_posts() ) :
         $testimonials->the_post();
         include(locate_template('components/testimonial.php'));
      endwhile;
      wp_reset_postdata();
    else: ?>
      <div className="span-6 text-align-center">
        Testimonials coming soon!
      </div>
    <?php endif; ?>
  </div>
</section>
