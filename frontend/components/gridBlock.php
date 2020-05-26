<section class="block block--bg-<?php echo $block['bgColor'] ?> block--text-<?php echo $block['textColor']; ?>">
  <div class="container">
    <div class="grid-block">
      <?php
        $items = $block['gridItems'];
        foreach($items as &$item) {
          include(locate_template('components/gridItem.php'));
        }
      ?>
    </div>
  </div>
</section>
