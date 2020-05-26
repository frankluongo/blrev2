import { anchorLinks } from "./elements";
import { handleAnchorClick } from "./handlers";

export default function SmoothScroll() {
  const anchors = anchorLinks();
  if (!anchors) return;
  anchors.forEach((anchor) =>
    anchor.addEventListener("click", handleAnchorClick)
  );
}
