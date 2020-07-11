import { btnElem, customBtn, editor, editorButtons } from "./elements";
import { cleanEditor } from "./actions";

export default function cleanContent() {
  editorButtons().append(customBtn());
  btnElem().addEventListener("click", (e) => {
    e.preventDefault();
    try {
      cleanEditor();
    } catch (e) {
      alert("Make sure the `Visual` Tab is selected");
    }
  });
}
