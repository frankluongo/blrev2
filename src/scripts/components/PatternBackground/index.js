import { handleWindowLoad } from "./handlers";

export default class PatternBackground {
  constructor() {
    this.observeEvents();
  }
  observeEvents() {
    window.addEventListener("load", handleWindowLoad);
  }
}
