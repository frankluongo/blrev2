import wait from "waait";
import { urlEncode } from "../../helpers";

export default function podioForms() {
  const forms = document.querySelectorAll("[data-podio-form]");
  if (!forms) return;
  forms.forEach((form) => new PodioForm(form));
}

class PodioForm {
  constructor(form) {
    this.form = form;
    this.message = this.form.querySelector("[data-form-message]");
    this.messageContent = this.form.querySelector(
      "[data-form-message-content]"
    );
    this.onSubmit = this.onSubmit.bind(this);
    this.form.addEventListener("submit", this.onSubmit);
  }
  onSubmit(e) {
    e.preventDefault();
    this.getFormData();
    this.submitFormData();
  }
  getFormData() {
    this.url = this.form.action;
    this.method = this.form.method;
    this.data = this.getFormEntries();
  }
  async submitFormData() {
    try {
      const res = await fetch(window.ajaxUrl, {
        method: this.method,
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: urlEncode({
          url: this.url,
          action: "podioFormRequest",
          ...this.data,
        }),
      });
      const { status } = await res.json();
      this.isSuccess = status === "success";
      this.displayMessage();
    } catch (e) {
      console.log(e);
    }
  }

  async displayMessage() {
    this.populateMessage();
    this.measureHeight();
    this.message.style.height = "0px";
    this.message.style.position = "static";
    this.message.style.opacity = 1;
    await wait(100);
    this.message.style.height = `${this.messageHeight}px`;
    await wait(3500);
    this.message.style.height = "0px";
  }

  populateMessage() {
    const heading = this.isSuccess ? "Thank you!" : "Oh No!";
    const content = this.isSuccess
      ? "We've received your message and will be reaching out shortly"
      : "Looks like something went wrong. Please reach out to us via phone or email!";
    this.messageContent.innerHTML = `
    <div class="form-submit-message__heading">${heading}</div>
    <div class="form-submit-message__text">${content}</div>
  `;
  }
  measureHeight() {
    this.messageHeight = this.message.getBoundingClientRect().height;
  }
  getFormEntries() {
    const inputs = {};
    Array.from(this.form.elements).forEach((input) => {
      if (!input.name) return;
      inputs[input.name] = input.value;
    });
    return inputs;
  }
}
