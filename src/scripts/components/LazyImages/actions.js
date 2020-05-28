import { lazyBgImages, lazyFrames } from "./elements";

export function loadBgImages() {
  lazyBgImages().forEach(loadBgImage);
}

function loadBgImage(imgElement) {
  const bgImgSrc = imgElement.getAttribute("data-img-src");
  imgElement.style.backgroundImage = `url(${bgImgSrc})`;
}

export function loadiFrames() {
  lazyFrames().forEach(loadiFrame);
}

function loadiFrame(iframe) {
  const iframeSrc = iframe.getAttribute("data-src");
  iframe.src = iframeSrc;
}
