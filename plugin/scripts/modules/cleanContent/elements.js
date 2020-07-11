const wrapper = () => document.querySelector("#content_ifr");
export const editor = () =>
  wrapper().contentWindow.document.querySelector("body");
export const editorButtons = () =>
  document.querySelector("#wp-content-media-buttons");
export const customBtn = () => {
  const btn = document.createElement("button");
  btn.setAttribute("data-custom-button", "");
  btn.innerText = "Clean Post";
  return btn;
};
export const btnElem = () => document.querySelector("[data-custom-button]");
