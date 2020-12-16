<?php get_header(); ?>

<section class="container">
  <div class="blog-page__header">
    <h1><?php single_cat_title(); ?></h1>
    <hr class="default bg-gray-6" />
  </div>
  <section class="posts">
  <?php
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $args = array('post_type' => 'post', 'post_status' => 'publish', 'paged' => $paged,);
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
  <section class="posts__pagination">
    <?php previous_posts_link( '⬅️ Newer Posts' ); ?>
    <?php next_posts_link( 'Older Posts ➡️' ); ?>
  </section>
</section>

<?php get_footer(); ?>
