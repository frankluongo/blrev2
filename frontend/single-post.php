<?php get_header(); ?>

<section class="container content container--content">
  <header class="post-template__header">
    <h1 class="post-template__heading h1 small"><?php echo get_post()->post_title; ?></h1>
    <p class="post-template__byline">
    By <strong><?php echo get_the_author(); ?></strong> on <?php formatDate(get_post()->post_date); ?>
    </p>
    <hr class="default bg-gray-3" />
  </header>
  <div class="post-template__content">
    <?php
      $query = get_post(get_the_ID());
      $content = apply_filters('the_content', $query->post_content);
      echo $content;
    ?>
  </div>
</section>

<?php get_footer(); ?>
