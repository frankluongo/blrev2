import "../styles/application.scss";

import Navigation from "./components/Navigation";
import LazyImages from "./components/LazyImages";
import PatternBackground from "./components/PatternBackground";
import SmoothScroll from "./components/SmoothScroll";
import { importFonts } from "./components/FontImports";
import dropdownMenu from "./components/DropdownMenu";

const init = () => {
  dropdownMenu();
  new LazyImages();
  new Navigation();
  new PatternBackground();
  new SmoothScroll();
  importFonts();
};

document.addEventListener("DOMContentLoaded", init);
