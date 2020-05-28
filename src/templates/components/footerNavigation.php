<?php $links = get_field('footer_navigation_links', 'option'); ?>
<ul class="footer__navigation">
  <?php foreach($links as &$link) { $item = $link['footer_navigation_link_url']; ?>
    <li class="footer-navigation__item">
    <a class="footer-navigation-item__link link underline" href="<?php echo $item['url'] ?>">
      <?php echo $item['title'] ?>
    </a>
  </li>
  <?php } ?>
</ul>
