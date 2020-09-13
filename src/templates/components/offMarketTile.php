<article class="post">
  <a
    class="post__inner post__inner--offmarket"
    href="/<?php echo get_post()->post_name; ?>"
    data-post-link
    data-post-link-title="<?php echo get_post()->post_name; ?>"
  >
    <div class="post__thumbnail-wrapper">
      <?php the_post_thumbnail('medium'); ?>
    </div>
    <div class="post__content">
      <p class="post__title post__title--offmarket">
        <?php echo get_post()->post_title; ?>
      </p>
      <p class="post__price">
        Price: <?php the_field('offmarket_price'); ?>
      </p>
      <button class="button default full-width primary">View More Details</button>
    </div>
  </a>
</article>
