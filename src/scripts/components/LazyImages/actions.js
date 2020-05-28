import { lazyBgImages, lazyFrames, lazyImages } from "./elements";

export function loadBgImages() {
  lazyBgImages().forEach(loadBgImage);
}

function loadBgImage(imgElement) {
  const bgImgSrc = imgElement.getAttribute("data-img-src");
  imgElement.style.backgroundImage = `url(${bgImgSrc})`;
}

export function loadImages() {
  lazyImages().forEach(loadImage);
}

function loadImage(imgElement) {
  const imgSrc = imgElement.getAttribute("data-src");
  imgElement.src = imgSrc;
}

export function loadiFrames() {
  lazyFrames().forEach(loadiFrame);
}

function loadiFrame(iframe) {
  const iframeSrc = iframe.getAttribute("data-src");
  iframe.src = iframeSrc;
}
