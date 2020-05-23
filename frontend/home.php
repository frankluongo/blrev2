<?php get_header(); ?>

<section class="container">
  <div class="blog-page__header">
    <h1>Check Out Our Blog</h1>
    <hr class="default bg-gray-6" />
  </div>
  <section class="posts">
  <?php
    $args = array('post_type' => 'post', 'post_status' => 'publish');
    $posts = new WP_Query($args);
    if($posts->have_posts() ) :
      while ( $posts->have_posts() ) :
         $posts->the_post();
         include(locate_template('components/post.php'));
      endwhile;
      wp_reset_postdata();
    else:
    endif;
  ?>
  </section>
</section>

<?php get_footer(); ?>
