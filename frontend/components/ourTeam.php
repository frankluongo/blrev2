<section class="our-team">
  <div class="container">
  <div class="text-align-center">
      <h2 class="mission-statement__heading text-gray-8">Our Team</h2>
      <hr class="mission-statement__divider default bg-gray-4" />
    </div>
  </div>
  <div class="our-team__container container grid cols-xsmall-1 cols-small-2">
  <?php
    $args = array('post_type' => 'team_members');
    $reviews = new WP_Query( $args );
    if($reviews->have_posts() ) :
      while ( $reviews->have_posts() ) :
         $reviews->the_post();
         include(locate_template('components/teamMember.php'));
      endwhile;
      wp_reset_postdata();
    else:
    endif;
  ?>
  </div>
</section>
