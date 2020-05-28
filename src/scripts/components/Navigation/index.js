import { navigation, toggleBtn } from "./elements";
import { handleToggleClick } from "./handlers";

export default class Navigation {
  constructor(startState = false) {
    this.stateUpdate = new Event("stateUpdate");
    this.activeState = startState;
    this.getElements();
    this.observeEvents();
  }

  getElements() {
    this.navigation = navigation();
    this.toggleBtn = toggleBtn();
    this.navElements = [this.navigation, this.toggleBtn];
  }

  observeEvents() {
    this.toggleBtn.addEventListener("click", handleToggleClick.bind(this));
    this.toggleBtn.addEventListener("stateUpdate", this.updateState.bind(this));
  }

  updateState() {
    this.navElements.forEach((element) => {
      element.setAttribute("data-active-toggle", this.activeState);
    });
  }
}
