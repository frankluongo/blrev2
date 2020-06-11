<?php
class CleanCustomMenu {
  function __construct($theme_location) {
    if (!$theme_location) return false;
    $locations = get_nav_menu_locations();
    if (!array_key_exists($theme_location, $locations)) return false;
    $menu = get_term( $locations[$theme_location], 'nav_menu' );
    $this->items = wp_get_nav_menu_items($menu->term_id);
    $this->menuMarkup = '';
    $this->count = 0;
    $this->maxLength = count($this->items)-1;
    $this->parent_id = false;
    $this->submenu = false;
    return $this->buildNav();
  }

  function buildNav() {
    foreach($this->items as &$item) {
      $isNotSubmenuItem = !$item->menu_item_parent;
      $isSubmenuItem = ($this->parent_id === intval($item->menu_item_parent));
      if ( $isNotSubmenuItem ) {
        $this->parent_id = $item->ID;
        $this->renderRegularItem($item);
      }
      if ( $isSubmenuItem ) {
        $this->renderSubmenuItem($item);
      }
      $next = $this->boundIncrement($this->count + 1);
      if ($this->items[$next]->menu_item_parent != $this->parent_id ) {
        $this->menuMarkup .= "\n</li>\n";
        $this->submenu = false;
      } else {

      }
      $this->count = $this->count + 1;
    }
    return $this->menuMarkup;
  }

  function renderRegularItem($item) {
$this->menuMarkup .= <<< EOD
<li class="navigation-list__item" {$this->checkForSubmenu($item)}>
  <a class="navigation-link" href="$item->url" target="$item->target" {$this->checkForTarget($item->target)}>
    $item->title
    {$this->displayIcon($item)}
  </a>
EOD;
  }

  function renderSubmenuItem($item) {
    if ( !$this->submenu ) {
      $this->submenu = true;
      $this->menuMarkup .= "\n<ul class=\"navigation-list__submenu\" data-submenu-list>\n";
    }
$this->menuMarkup .= <<< EOD
<li class="navigation-list-submenu__item">
  <a class="navigation-submenu__link" href="$item->url" target="$item->target" {$this->checkForTarget($item->target)}>
    $item->title
  </a>
</li>
EOD;
    $nextItemIsNotSubmenu = $this->items[$this->count+1]->menu_item_parent != $this->parent_id && $this->submenu;
    if ($nextItemIsNotSubmenu) {
      $this->menuMarkup .= "\n</ul>";
      $this->submenu = false;
    }
  }

  function checkForTarget($target) {
    if (!$target) return "";
    return "rel=\"noopener noreferrer\"";
  }

  function checkForSubmenu($item) {
    $itemId = $item->ID;
    $next = $this->count+1;
    if ($this->isTooLong($next)) return "";
    $nextItem = $this->items[$next];
    if(intval($nextItem->menu_item_parent) === $itemId) {
      return "data-submenu-item role=\"button\"";
    }
  }

  function displayIcon($item) {
    $itemId = $item->ID;
    $next = $this->count+1;
    if ($this->isTooLong($next)) return "";
    $nextItem = $this->items[$next];
    if(intval($nextItem->menu_item_parent) === $itemId) {
      ob_start();
      include(locate_template('svgs/caretDown.php'));
      return ob_get_clean();
    }
  }

  function isTooLong ($nextIncrement) {
    return $nextIncrement > $this->maxLength;
  }

  function boundIncrement($increment) {
    if ($increment > $this->maxLength) return $this->maxLength;
    return $increment;
  }
}
