const PATTERN_BG = "data-pattern-bg";

export const lightPatternElements = () =>
  document.querySelectorAll(`[${PATTERN_BG}="light"]`);

export const darkPatternElements = () =>
  document.querySelectorAll(`[${PATTERN_BG}="dark"]`);
