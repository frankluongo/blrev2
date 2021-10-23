<?php
$podio_fields = get_field('podio_form_details', 'option');
$appId = $podio_fields['app_id'];
$formId = $podio_fields['form_id'];
$formTitle = $podio_fields['form_title'];
$formFields = $podio_fields['form_fields'];
?>

<div class="cash-offer">
  <div class="text-primary-4">
    <h3><?php echo $formTitle; ?></h3>
  </div>
  <form action="https://podio.com/webforms/<?php echo $appId; ?>/<?php echo $formId; ?>" class="form" method="post" enctype="multipart/form-data" data-podio-form>
    <?php if ($formFields) {
      foreach ($formFields as $formField) { ?>
        <div class="form__section">
          <label class="form__label form__label--input" for="<?php echo $formField['slug']; ?>-field">
            <?php echo $formField['label']; ?>
          </label>
          <input class="form__input form__input--text" type="<?php echo $formField['input_type']; ?>" name="fields[<?php echo $formField['slug']; ?>]" id="<?php echo $formField['slug']; ?>-field" <?php if ($formField['required']) echo 'required'; ?>>
        </div>
    <?php }
    } ?>
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
