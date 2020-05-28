import "../styles/application.scss";

import Navigation from "./components/Navigation";
import LazyImages from "./components/LazyImages";
import PatternBackground from "./components/PatternBackground";
import SmoothScroll from "./components/SmoothScroll";

const init = () => {
  new LazyImages();
  new Navigation();
  new PatternBackground();
  new SmoothScroll();
};

document.addEventListener("DOMContentLoaded", init);
