import "./styles/application.scss";

import Navigation from "./components/Navigation";
import LazyImages from "./components/LazyImages";
import PatternBackground from "./components/PatternBackground";

const init = () => {
  new LazyImages();
  new Navigation();
  new PatternBackground();
};

document.addEventListener("DOMContentLoaded", init);
