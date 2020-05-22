import lightPattern from "../../assets/lightPattern.svg";
import darkPattern from "../../assets/darkPattern.svg";

const DEFAULT_BASE_PATH = "/wp-content/themes/brotherlyloveproperties/assets/";

export function addLightPattern(element) {
  const basePath = element.getAttribute("data-base-path") || DEFAULT_BASE_PATH;
  element.style.backgroundImage = `url(${basePath}/${lightPattern})`;
}

export function addDarkPattern(element) {
  const basePath = element.getAttribute("data-base-path") || DEFAULT_BASE_PATH;
  element.style.backgroundImage = `url(${basePath}/${darkPattern})`;
}
