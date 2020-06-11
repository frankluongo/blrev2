export function handleMouseEnter({ item, submenu }) {
  console.log("entering submenu and item");
  document.addEventListener("mousemove", handleMouseMove);
}

export function handleMouseLeave() {
  console.log("leaving submenu and item");
}

function handleMouseMove() {}
