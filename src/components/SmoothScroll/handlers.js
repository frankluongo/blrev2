import { setScroll, unsetScroll } from "./actions";

export function handleAnchorClick(e) {
  e.preventDefault();
  const target = document.querySelector(e.target.getAttribute("href"));
  const targetOffset = target.offsetTop - 60;
  setScroll();
  window.scrollTo(0, targetOffset);
  unsetScroll();
}
