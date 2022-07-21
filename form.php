<?php 
$name="";
$phone="";
$email="";
$question="";
?>

<form
  id="contact-form"
  name="contact-form"
  role="form"
  action=""
  method="POST"
  class="t-form js-form-proccess t-form_inputs-total_5 t-form_bbonly"
>
  <div
    class="js-successbox t-form__successbox t-text t-text_md"
    style="display: none; color: #ffffff; background-color: #00dbe5"
  >
    Message was sent successfully
  </div>
  <div class="t-form__inputsbox">
 
    <div class="t-input-group t-input-group_nm">
      <div class="t-input-block">
        <!-- Name -->
        <input
          type="text"
          autocomplete="name"
          name="Name"
          class="t-input js-tilda-rule t-input_bbonly"
          value="<?=$name?>"
          placeholder="Your name"
          data-tilda-req="1"
          data-tilda-rule="name"
          style="color: #ffffff; border: 1px solid #d6d6d6"
        />
        <div class="t-input-error"></div>
      </div>
    </div>

    <!-- Phone -->
    <div class="t-input-group t-input-group_ph">
      <div class="t-input-block">
        <input
          type="tel"
          autocomplete="tel"
          name="Phone"
          class="t-input js-tilda-rule t-input_bbonly"
          value="<?=$phone ?>"
          placeholder="Your phone number"
          data-tilda-req="1"
          data-tilda-rule="phone"
          pattern="[0-9]*"
          style="color: #ffffff; border: 1px solid #d6d6d6"
        />
        <div class="t-input-error"></div>
      </div>
    </div>

    <!-- Email -->
    <div class="t-input-group t-input-group_em" data-input-lid="1495629963726">
      <div class="t-input-block">
        <input
          type="text"
          autocomplete="email"
          name="Email"
          class="t-input js-tilda-rule t-input_bbonly"
          value="<?=$email ?>"
          placeholder="Your email"
          data-tilda-req="1"
          data-tilda-rule="email"
          style="color: #ffffff; border: 1px solid #d6d6d6"
        />
        <div class="t-input-error"></div>
      </div>
    </div>


    <!-- Question -->
    <div class="t-input-group t-input-group_ta" data-input-lid="1649882478996">
      <div class="t-input-block">
        <textarea
          name="Textarea"
          class="t-input js-tilda-rule t-input_bbonly"
          placeholder="Your question"
          data-tilda-req="1"
          style="color: #ffffff; border: 1px solid #d6d6d6; height: 102px"
          rows="3"
        ></textarea>
        <div class="t-input-error"></div>
      </div>
    </div>

    <!-- Confirmation -->
    <div class="t-input-group t-input-group_cb" data-input-lid="1649890486567">
      <div class="t-input-block">
        <label
          class="t-checkbox__control t-text t-text_xs"
          style="color: #ffffff"
          ><input
            type="checkbox"
            name="Checkbox"
            value="yes"
            class="t-checkbox js-tilda-rule"
            data-tilda-req="1"
          />
          <div class="t-checkbox__indicator"></div>
          I give my consent to the transfer, processing and storage of my
          personal data under the Privacy Policy</label
        >
        <div class="t-input-error"></div>
      </div>
    </div>
    <!--[if IE 8
      ]><style>
        .t-checkbox__control .t-checkbox,
        .t-radio__control .t-radio {
          left: 0px;
          z-index: 1;
          opacity: 1;
        }
        .t-checkbox__indicator,
        .t-radio__indicator {
          display: none;
        }
        .t-img-select__control .t-img-select {
          position: static;
        }
      </style><!
    [endif]-->
    <div class="t-form__errorbox-middle">
      <div
        class="js-errorbox-all t-form__errorbox-wrapper"
        style="display: none"
      >
        <div class="t-form__errorbox-text t-text t-text_md">
          <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
          <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
          <p
            class="t-form__errorbox-item js-rule-error js-rule-error-email"
          ></p>
          <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
          <p
            class="t-form__errorbox-item js-rule-error js-rule-error-phone"
          ></p>
          <p
            class="t-form__errorbox-item js-rule-error js-rule-error-minlength"
          ></p>
          <p
            class="t-form__errorbox-item js-rule-error js-rule-error-string"
          ></p>
        </div>
      </div>
    </div>
    <div class="t-form__submit">
      <button
        type="submit"
        class="t-submit"
        style="
          color: #ffffff;
          background-color: #00dbe5;
          border-radius: 12px;
          -moz-border-radius: 12px;
          -webkit-border-radius: 12px;
        "
        data-btneffects-first="btneffects-light"
      >
        Submit
      </button>
    </div>
  </div>
  <div class="t-form__errorbox-bottom">
    <div class="js-errorbox-all t-form__errorbox-wrapper" style="display: none">
      <div class="t-form__errorbox-text t-text t-text_md">
        <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
        <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
        <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
        <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
        <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
        <p
          class="t-form__errorbox-item js-rule-error js-rule-error-minlength"
        ></p>
        <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
      </div>
    </div>
  </div>
</form>
