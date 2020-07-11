import "../styles/application.scss";

import Navigation from "./components/Navigation";
import LazyImages from "./components/LazyImages";
import PatternBackground from "./components/PatternBackground";
import SmoothScroll from "./components/SmoothScroll";
import { importFonts } from "./components/FontImports";
import dropdownMenu from "./components/DropdownMenu";
import podioForms from "./components/PodioForm";
window.ajaxUrl = ajaxData.ajaxUrl;

const init = () => {
  dropdownMenu();
  new LazyImages();
  new Navigation();
  new PatternBackground();
  new SmoothScroll();
  podioForms();
  importFonts();
};

document.addEventListener("DOMContentLoaded", init);
