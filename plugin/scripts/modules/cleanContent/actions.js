import { editor } from "./elements";

export function cleanEditor() {
  const iframes = editor().querySelectorAll("iframe");
  const images = editor().querySelectorAll("img");
  if (iframes) iframes.forEach(cleaniFrame);
  if (images) images.forEach(cleanImage);
}

function cleaniFrame(iframe) {
  const src = iframe.src;
  const editor = iframe.parentElement.parentElement;
  editor.innerHTML = `
    <div class="video-wrapper">
      <iframe data-lazy-iframe class="video" data-src="${src}" alt="Brotherly Love Real Estate"></iframe>
    </div>
  `;
}

function cleanImage(image) {
  const src = image.src;
  image.setAttribute("data-lazy-img", "");
  image.setAttribute("data-src", src);
  image.removeAttribute("src");
  image.removeAttribute("class");
  image.removeAttribute("width");
  image.removeAttribute("height");
}
