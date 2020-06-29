<section class="block block--bg-<?php echo $block['bgColor'] ?> block--text-<?php echo $block['textColor']; ?>">
  <div class="container">
    <div class="google-map">
      <div class="google-map__wrapper" id="google-map-container">
        <iframe data-src="<?php echo $block['googleMapUrl']; ?>" data-lazy-iframe data-google-map-iframe></iframe>
      </div>
      <article>
        <?php echo $block['textContent']; ?>
      </article>
    </div>
  </div>
</section>
