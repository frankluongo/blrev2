import "../styles/application.scss";

import Navigation from "./components/Navigation";
import LazyImages from "./components/LazyImages";
import PatternBackground from "./components/PatternBackground";
import SmoothScroll from "./components/SmoothScroll";
import { importFonts } from "./components/FontImports";

const init = () => {
  new LazyImages();
  new Navigation();
  new PatternBackground();
  new SmoothScroll();
  importFonts();
};

document.addEventListener("DOMContentLoaded", init);
