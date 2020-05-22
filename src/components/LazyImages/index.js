import { handleWindowLoad } from "./handlers";

export default class LazyImages {
  constructor() {
    this.observeEvents();
  }
  observeEvents() {
    window.addEventListener("load", handleWindowLoad);
  }
}
