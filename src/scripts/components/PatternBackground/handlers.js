import { lightPatternElements, darkPatternElements } from "./elements";
import { addLightPattern, addDarkPattern } from "./actions";

export function handleWindowLoad() {
  lightPatternElements().forEach(addLightPattern);
  darkPatternElements().forEach(addDarkPattern);
}
