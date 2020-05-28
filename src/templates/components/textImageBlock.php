<section class="block block--bg-<?php echo $block['bgColor']; ?> block--text-<?php echo $block['textColor']; ?>">
  <div class="container">
  <div class="text-image text-image--<?php echo $block['imagePosition']; ?>">
    <div class="text-image__image text-image-image--<?php echo $block['columnWidthImage'] ?>">
      <img class="text-image__image-element" data-lazy-img data-src="<?php echo $block['image']['sizes']['medium']; ?>" alt="Brotherly Love Real Estate">
    </div>
    <article class="text-image__text text-image-text--<?php echo $block['columnWidthText'] ?>">
      <?php echo $block['textContent']; ?>
    </article>
    </div>
  </div>
</section>
