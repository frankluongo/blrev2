<?php
  /* Template Name: Off Market Real Estate Archive */
  get_header();
  if (get_field('display_hero')) get_template_part('components/hero');
?>
<div class="off-market-wrapper">
<section class="container off-market">
  <aside class="off-market__aside">
    <?php get_template_part('components/cashOffer'); ?>
  </aside>
  <article class="off-market__main">
  <header class="off-market-main__header"><h2 class="h3">Off Market Real Estate</h2></header>
  <section class="off-market-main__posts">
  <?php
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $args = array('post_type' => 'offmarket', 'post_status' => 'publish', 'paged' => $paged,);
    $posts = new WP_Query($args);
    if($posts->have_posts() ) :
      while ( $posts->have_posts() ) :
         $posts->the_post();
         include(locate_template('components/offMarketTile.php'));
      endwhile;
      wp_reset_postdata();
    else:
    endif;
  ?>
  </section>
  <section class="off-market-main__pagination">
    <?php previous_posts_link( '⬅️ Newer Posts' ); ?>
    <?php next_posts_link( 'Older Posts ➡️' ); ?>
  </section>
  </article>
</section>
</div>
<?php
  getBlocks(get_field('page_blocks'));
  get_footer();
?>
