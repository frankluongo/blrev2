<div class="cash-offer">
  <div class="text-primary-4">
    <h3><?php the_field('theme_options_podio_form_title', 'option'); ?></h3>
  </div>
  <!-- <iframe
    data-lazy-iframe
    data-cash-offer-iframe
    data-src="https://podio.com/webforms/<?php echo get_field('theme_options_podio_app_id', 'option'); ?>/<?php echo get_field('theme_options_podio_form_id', 'option'); ?>?e=true"
    title="Cash Offer Webform"
  ></iframe> -->
    <form
      action="https://podio.com/webforms/23706431/1710114"
      class="form"
      method="post"
      enctype="multipart/form-data"
      data-podio-form
    >
      <div class="form__section">
        <label class="form__label form__label--input" for="name-field">Name</label>
        <input class="form__input form__input--text" type="text" name="fields[name]" id="name-field" required>
      </div>
      <div class="form__section">
        <label class="form__label form__label--input" for="address-field">Address</label>
        <input class="form__input form__input--text" type="text" name="fields[address]" id="address-field" required>
      </div>
      <div class="form__section">
        <label class="form__label form__label--input" for="email-address-field">Email Address</label>
        <input class="form__input form__input--email" type="email" name="fields[email-address]" id="email-address-field" required>
      </div>
      <div class="form__section">
        <label class="form__label form__label--input" for="phone-number-field">Phone Number</label>
        <input class="form__input form__input--tel" type="tel" name="fields[phone-number]" id="phone-number-field" required>
      </div>
      <div class="form__section">
        <button type="submit" class="button default primary full-width form__submit" data-podio-form-button>
          Get Your Offer!
        </button>
      </div>
      <div class="form-submit-message" data-active="false" data-form-message>
        <div class="form-submit-message__content" data-form-message-content>
        </div>
      </div>
    </form>
</div>
