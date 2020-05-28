<section class="block block--bg-<?php echo $block['bgColor']; ?> block--text-<?php echo $block['textColor']; ?>">
  <div class="container">
  <div class="text-image text-image--<?php echo $block['imagePosition']; ?>">
    <div class="text-image__image" data-lazy-bg data-img-src="<?php echo $block['image']['sizes']['xlarge']; ?>"></div>
    <article class="text-image__text">
      <?php echo $block['textContent']; ?>
    </article>
    </div>
  </div>
</section>
