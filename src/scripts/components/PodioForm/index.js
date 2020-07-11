import wait from "waait";

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
    this.data = new FormData(this.form);
  }
  async submitFormData() {
    try {
      await fetch(this.url, {
        method: this.method,
        body: this.data,
      });
      this.displaySuccessMessage();
    } catch (e) {
      console.log(e);
    }
  }

  async displaySuccessMessage() {
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
    this.messageContent.innerHTML = `
    <div class="form-submit-message__heading">Thank you!</div>
    <div class="form-submit-message__text">We've received your message and will be reaching out shortly</div>
  `;
  }
  measureHeight() {
    this.messageHeight = this.message.getBoundingClientRect().height;
  }
}
