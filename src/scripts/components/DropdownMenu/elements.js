export const dropdownMenuItems = () =>
  document.querySelectorAll("[data-submenu-item]");
export const dropdownMenu = (context) =>
  context.querySelector("[data-submenu-list]");
export const dropdownMenuLink = (context) => context.querySelector("a");
