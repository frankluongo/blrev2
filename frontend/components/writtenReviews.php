<section class="written-reviews">
  <div class="container">
    <div class="text-align-center">
      <h2 class="mission-statement__heading text-gray-8">Written Reviews</h2>
      <hr class="mission-statement__divider default bg-gray-4" />
    </div>
  </div>
  <section class="written-reviews__container container cols-xsmall-1 cols-medium-3">
  <?php
    $args = array('post_type' => 'written_reviews');
    $reviews = new WP_Query( $args );
    if($reviews->have_posts() ) :
      while ( $reviews->have_posts() ) :
         $reviews->the_post();
         include(locate_template('components/writtenReview.php'));
      endwhile;
      wp_reset_postdata();
    else:
    endif;
  ?>
  </section>
</section>
