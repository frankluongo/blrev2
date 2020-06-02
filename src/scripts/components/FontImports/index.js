import metropolisBlackWoff from "../../../assets/Metropolis/Metropolis-Black.woff";
import metropolisBlackWoff2 from "../../../assets/Metropolis/Metropolis-Black.woff2";
import metropolisBlackItalicWoff from "../../../assets/Metropolis/Metropolis-BlackItalic.woff";
import metropolisBlackItalicWoff2 from "../../../assets/Metropolis/Metropolis-BlackItalic.woff2";
import metropolisBoldWoff from "../../../assets/Metropolis/Metropolis-Bold.woff";
import metropolisBoldWoff2 from "../../../assets/Metropolis/Metropolis-Bold.woff2";
import metropolisBoldItalicWoff from "../../../assets/Metropolis/Metropolis-BoldItalic.woff";
import metropolisBoldItalicWoff2 from "../../../assets/Metropolis/Metropolis-BoldItalic.woff2";
import metropolisRegularWoff from "../../../assets/Metropolis/Metropolis-Regular.woff";
import metropolisRegularWoff2 from "../../../assets/Metropolis/Metropolis-Regular.woff2";
import metropolisRegularItalicWoff from "../../../assets/Metropolis/Metropolis-RegularItalic.woff";
import metropolisRegularItalicWoff2 from "../../../assets/Metropolis/Metropolis-RegularItalic.woff2";

const metropolisFonts = [
  {
    woff: metropolisBlackWoff,
    woff2: metropolisBlackWoff2,
    weight: 900,
    style: "normal",
  },
  {
    woff: metropolisBlackItalicWoff,
    woff2: metropolisBlackItalicWoff2,
    weight: 900,
    style: "italic",
  },
  {
    woff: metropolisBoldWoff,
    woff2: metropolisBoldWoff2,
    weight: 600,
    style: "normal",
  },
  {
    woff: metropolisBoldItalicWoff,
    woff2: metropolisBoldItalicWoff2,
    weight: 600,
    style: "italic",
  },
  {
    woff: metropolisRegularWoff,
    woff2: metropolisRegularWoff2,
    weight: 400,
    style: "normal",
  },
  {
    woff: metropolisRegularItalicWoff,
    woff2: metropolisRegularItalicWoff2,
    weight: 400,
    style: "italic",
  },
];

export function importFonts() {
  window.addEventListener("load", () => {
    const fonts = document.createElement("link");
    fonts.setAttribute("rel", "stylesheet");
    fonts.setAttribute(
      "href",
      "https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,400;0,600;1,600&display=swap"
    );
    const style = document.createElement("style");
    const formattedFonts = metropolisFonts.map((item) => {
      return `
      @font-face {
        font-family: "Metropolis";
        src: url("/wp-content/themes/brotherlyloveproperties/${item.woff2}") format("woff2"),
             url("/wp-content/themes/brotherlyloveproperties/${item.woff}") format("woff");
        font-weight: ${item.weight};
        font-style: ${item.style};
      }
      `;
    });
    formattedFonts.forEach((font) => (style.innerHTML += font));
    const elementsToAdd = [fonts, style];
    elementsToAdd.forEach((item) => document.body.appendChild(item));
  });
}
