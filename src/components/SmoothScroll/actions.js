import { page } from "./elements";

export function setScroll() {
  page().style.scrollBehavior = "smooth";
}
export function unsetScroll() {
  page().removeAttribute("style");
}
