import { loadBgImages, loadiFrames, loadImages } from "./actions";

export function handleWindowLoad() {
  loadImages();
  loadBgImages();
  loadiFrames();
}
