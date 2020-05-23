<article class="post">
  <a class="post__inner" href="/<?php echo get_post()->post_name; ?>">
    <h3 class="post__title h3"><?php echo get_post()->post_title; ?></h3>
    <p class="post__text">
      Posted by <strong><?php echo get_the_author(); ?></strong> on <?php formatDate(get_post()->post_date); ?>
    </p>
    <div class="post__excerpt">
      <p>
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>
  </a>
</article>
