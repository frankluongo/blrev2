import { loadBgImages, loadiFrames } from "./actions";

export function handleWindowLoad() {
  loadBgImages();
  loadiFrames();
}
