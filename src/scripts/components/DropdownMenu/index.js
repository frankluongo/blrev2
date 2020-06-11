import { dropdownMenuItems } from "./elements";
import { observeDropdownItem } from "./actions";

export default function dropdownMenu() {
  const dropdownItems = dropdownMenuItems();
  if (!dropdownItems) return;
  dropdownItems.forEach(observeDropdownItem);
}
