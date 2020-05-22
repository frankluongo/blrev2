export function handleToggleClick(e) {
  this.activeState = !this.activeState;
  e.currentTarget.dispatchEvent(this.stateUpdate);
}
