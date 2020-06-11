import wait from "waait";
import { debounce } from "lodash";
import { dropdownMenu, dropdownMenuLink } from "./elements";

export function observeDropdownItem(item) {
  const isDesktop = window.matchMedia("(min-width: 1280px)");
  const submenu = dropdownMenu(item);
  const link = dropdownMenuLink(item);
  checkForDesktop();
  const boundMouseMove = handleDocumentMouseMove.bind(null, { item, submenu });
  const boundFocusHandler = handleDocumentFocus.bind(null, { item, submenu });
  item.addEventListener("mouseenter", handleItemMouseEnter);
  link.addEventListener("focus", handleLinkFocus);
  window.addEventListener("resize", debounce(handleWindowResize, 250));
  //
  // Handlers
  //
  function handleDocumentFocus({ item, submenu }, e) {
    const isItem = item.contains(e.target);
    const isSubmenu = submenu.contains(e.target);
    if (!isItem && !isSubmenu) stopFocusing();
  }
  function handleDocumentMouseMove({ item, submenu }, e) {
    const isItem = item.contains(e.target);
    const isSubmenu = submenu.contains(e.target);
    if (!isItem && !isSubmenu) stopListening();
  }
  function handleItemMouseEnter() {
    displaySubmenu();
    document.addEventListener("mousemove", boundMouseMove);
  }
  function handleLinkFocus() {
    displaySubmenu();
    document.addEventListener("focus", boundFocusHandler, true);
  }
  function handleWindowResize() {
    checkForDesktop();
  }
  //
  // Actions
  //
  function checkForDesktop() {
    if (isDesktop.matches) {
      hideSubmenu();
    } else {
      submenu.removeAttribute("style");
    }
  }
  async function displaySubmenu() {
    submenu.removeAttribute("style");
    await wait(0);
    submenu.classList.add("navigation-list__submenu--active");
  }
  async function hideSubmenu() {
    submenu.classList.remove("navigation-list__submenu--active");
    await wait(150);
    submenu.style.display = "none";
  }
  function stopFocusing() {
    hideSubmenu();
    document.removeEventListener("focus", boundFocusHandler, true);
  }
  function stopListening() {
    hideSubmenu();
    document.removeEventListener("mousemove", boundMouseMove);
  }
}
