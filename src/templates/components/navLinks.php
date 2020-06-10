<?php
  $menu = new CleanCustomMenu('headerNav');
  if ($menu) {
    echo $menu->menuMarkup;
  } else {
    $links = get_field('navigation_links', 'option');
    foreach ($links as &$navLink) {
      $link = $navLink['navigation_link_url'];
    ?>
      <li class="navigation-list__item">
        <a
          class="navigation-link"
          href="<?php echo $link['url'] ?>"
          target="<?php echo $link['target']; ?>"
          <?php if ($link['target'] === 'blank') { echo 'rel="noopener noreferrer"'; } ?>
        >
          <?php echo $link['title']; ?>
        </a>
      </li>
    <?php }
  }
?>
