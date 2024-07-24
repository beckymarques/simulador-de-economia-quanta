  //Form Steps
  var $ = jQuery.noConflict();
  let step = document.getElementsByClassName("step");
  let stepTitle = document.getElementsByClassName("step-title");
  let prevBtn = document.getElementById("prev-btn");
  let nextBtn = document.getElementById("next-btn");
  let submitBtn = document.getElementById("submit-btn");
  let form = document.getElementById("form-wrapper");
  let preloader = document.getElementById("preloader-wrapper");
  let bodyElement = document.querySelector("body");
  let succcessDiv = document.getElementById("success");
  let succcessTitleDiv = document.getElementById("success-title");
  let boxButtons = document.getElementById("q-box__buttons");
  let firstname = $('#firstname');
  let company = $('#company');
  let email = $('#email');
  let mobilephone = $('#mobilephone');
  let distribuidora = $("#distribuidora");
  let gastosMensaisValor = $('#gastos_mensais_valor');
  let gastosMensaisUnidadesValor = $('#gastos_mensais_unidades_valor');
  let politicaPrivacidade = $('#politca_privacidade');

  let initValidatePage1 = 0;
  let initValidatePage2 = 0;
  let initValidatePage3 = 0;

  form.onsubmit = () => {
    return false;
  };
  let current_step = 0;
  let stepCount = 2;
  step[current_step].classList.add("d-block");
  stepTitle[current_step].classList.add("d-block");
  if (current_step == 0) {
    prevBtn.classList.add("d-none");
    submitBtn.classList.add("d-none");
    nextBtn.classList.add("d-inline-block");
    boxButtons.classList.remove("justify-content-between");
    boxButtons.classList.add("justify-content-end");
  }

  const progress = (value) => {
    document.getElementsByClassName("progress-bar")[0].style.width = `${value}%`;
  };

  nextBtn.addEventListener("click", () => {
    if (validateForm()) {
      current_step++;
      let previous_step = current_step - 1;
      if (current_step > 0 && current_step <= stepCount) {
        prevBtn.classList.remove("d-none");
        prevBtn.classList.add("d-inline-block");
        step[current_step].classList.remove("d-none");
        stepTitle[current_step].classList.remove("d-none");
        step[current_step].classList.add("d-block");
        stepTitle[current_step].classList.add("d-block");
        step[previous_step].classList.remove("d-block");
        stepTitle[previous_step].classList.remove("d-block");
        step[previous_step].classList.add("d-none");
        stepTitle[previous_step].classList.add("d-none");
        boxButtons.classList.remove("justify-content-end");
        boxButtons.classList.add("justify-content-between");
        if (current_step == stepCount) {
          submitBtn.classList.remove("d-none");
          submitBtn.classList.add("d-inline-block");
          nextBtn.classList.remove("d-inline-block");
          nextBtn.classList.add("d-none");
        }
      } else {
        if (current_step > stepCount) {
          form.onsubmit = () => {
            return true;
          };
        }
      }
      progress((100 / stepCount) * current_step);
    }
  });

  prevBtn.addEventListener("click", () => {
    if (current_step > 0) {
      current_step--;
      let previous_step = current_step + 1;
      prevBtn.classList.add("d-none");
      prevBtn.classList.add("d-inline-block");
      step[current_step].classList.remove("d-none");
      stepTitle[current_step].classList.remove("d-none");
      step[current_step].classList.add("d-block");
      stepTitle[current_step].classList.add("d-block");
      step[previous_step].classList.remove("d-block");
      stepTitle[previous_step].classList.remove("d-block");
      step[previous_step].classList.add("d-none");
      stepTitle[previous_step].classList.add("d-none");
      if (current_step < stepCount) {
        submitBtn.classList.remove("d-inline-block");
        submitBtn.classList.add("d-none");
        nextBtn.classList.remove("d-none");
        nextBtn.classList.add("d-inline-block");
        prevBtn.classList.remove("d-none");
        prevBtn.classList.add("d-inline-block");
      }
    }

    if (current_step == 0) {
      prevBtn.classList.remove("d-inline-block");
      prevBtn.classList.add("d-none");
      boxButtons.classList.remove("justify-content-between");
      boxButtons.classList.add("justify-content-end");
    }
    progress((100 / stepCount) * current_step);
  });

  submitBtn.addEventListener("click", async () => {
    if (validateForm()) {
      current_step++;
      preloader.classList.add("d-block");

      const timer = (ms) => new Promise((res) => setTimeout(res, ms));

      timer(3000)
          .then(() => {
            bodyElement.classList.add("loaded");
          })
          .then(() => {
            step[stepCount].classList.remove("d-block");
            stepTitle[stepCount].classList.remove("d-block");
            step[stepCount].classList.add("d-none");
            stepTitle[stepCount].classList.add("d-none");
            prevBtn.classList.remove("d-inline-block");
            prevBtn.classList.add("d-none");
            submitBtn.classList.remove("d-inline-block");
            submitBtn.classList.add("d-none");
            succcessDiv.classList.remove("d-none");
            succcessTitleDiv.classList.remove("d-none");
            succcessDiv.classList.add("d-block");
            succcessTitleDiv.classList.add("d-block");
          });
    }
  });

  //Format label inputs
  gastos_mensais_valor = jQuery('input[name="gastos_mensais_valor"]');
  gastos_mensais_unidades_valor = jQuery(
    'input[name="gastos_mensais_unidades_valor"]'
  );
  valor_demanda_kwh = jQuery("#valor_demanda_kwh");
  jQuery(function () {
    gastos_mensais_valor.maskMoney({
      prefix: "R$ ",
      affixesStay: false,
      thousands: ".",
      decimal: ",",
    });

    gastos_mensais_unidades_valor.maskMoney({
      prefix: "R$ ",
      affixesStay: false,
      thousands: ".",
      decimal: ",",
    });

    valor_demanda_kwh.maskMoney({
      suffix: " kW",
      affixesStay: false,
      thousands: ".",
      precision: 0,
    });

    let possui_demanda = jQuery('input[name="possui_demanda"]');
    valor_demanda_kwh = jQuery("#valor_demanda_kwh");
    distribuidora = jQuery("#distribuidora");
    possui_demanda.change(function (e) {
      let valor = jQuery(this).val();
      if (valor === "Sim") {
        jQuery(".valor_demanda_kwh").removeClass("d-none").fadeIn();
        jQuery("#valor_demanda_kwh").attr("required", true);
        distribuidora.attr("required", true);
      } else {
        jQuery(".valor_demanda_kwh").fadeOut();
        jQuery("#valor_demanda_kwh").attr("required", false);
        distribuidora.attr("required", true);
      }
    });

    //Select
    jQuery(document).ready(function() {
      jQuery('.js-select2-dist').select2({
        tags: true,
        language: "pt-BR",
        width: 'resolve'
      });
    });

  });

  //Range

  let gastos_mensais = document.getElementById("gastos_mensais");
  let valor_range = document.getElementById("gastos_mensais_valor");
  let gastos_mensais_unidades = document.getElementById(
    "gastos_mensais_unidades"
  );
  let valor_range_2 = document.getElementById("gastos_mensais_unidades_valor");

  gastos_mensais.oninput = function () {
    valor_range.value = this.value;
    jQuery("#gastos_mensais_valor").maskMoney("mask");
  };

  gastos_mensais_unidades.oninput = function () {
    valor_range_2.value = this.value;
    jQuery("#gastos_mensais_unidades_valor").maskMoney("mask");
  };

  // Validações
  function updateFeedback(field, isValid= true) {
    field.removeClass('is-valid is-invalid');
    if (isValid)
      field.addClass('is-valid');
    else
      field.addClass('is-invalid');
  }

  function validateForm() {
    if (current_step === 0 && initValidatePage1 === 0) {
      initValidatePage1++;
      email.on('input', validateEmail);
    }

    if (current_step === 1 && initValidatePage2 === 0) {
      initValidatePage2++;
      $("#gastos_mensais").on('change', validateExpenses);
      $("#gastos_mensais_unidades").on('change', validateExpenses);
      $("#distribuidora").on('change', validateDistribuidora);
      gastosMensaisValor.on('blur', validateExpenses);
      gastosMensaisUnidadesValor.on('blur', validateExpenses);
    }

    if (current_step === 2 && initValidatePage3 === 0) {
      initValidatePage3++;
      politicaPrivacidade.on('change', validatePoliticaPrivacidade);
    }

    if (!validateName())
      return false;

    if (!validateCompany())
      return false;

    if (!validateEmail())
      return false;

    if (!validatemobilephone())
      return false;


    if (current_step === 1 && !validateExpenses())
      return false;
    
    if (current_step === 1 && !validateDistribuidora())
      return false;
    
    if (current_step === 2 && !validatePoliticaPrivacidade())
      return false;

    return true;
  }
  // END Validações

  // Validar Email
  function validateEmail() {
    if (email.val().trim() === '') {
      updateFeedback(email, false);
      return false;
    }

    let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    let isValid = regex.test(email.val());
    updateFeedback(email, isValid);
    return isValid;
  }
  // END Validar Email

  // Validar Politica de privacidade
  function validatePoliticaPrivacidade() {
    if (!politicaPrivacidade.is(':checked')) {
      updateFeedback(politicaPrivacidade, false);
      return false;
    }

    politicaPrivacidade.removeClass('is-valid is-invalid');
    return true;
  }
  // END Validar Politica de privacidade

  // Validar Gastos

  function validateExpenses() {
    if (gastosMensaisValor.maskMoney('unmasked')[0] <= 0 && gastosMensaisUnidadesValor.maskMoney('unmasked')[0] <= 0) {
      updateFeedback(gastosMensaisValor, false);
      return false;
    }

    gastosMensaisValor.removeClass('is-valid is-invalid');
    return true;
  }

  // END Validar Gastos

  // Validar Nome
  function validateName() {
    if (firstname.val().trim() === '') {
      updateFeedback(firstname, false);
      return false;
    }

    firstname.removeClass('is-valid is-invalid');
    return true;
  }
  //END Validar Nome

  // Validar Company
  function validateCompany() {
    if (company.val().trim() === '') {
      updateFeedback(company, false);
      return false;
    }

    company.removeClass('is-valid is-invalid');
    return true;
  }
  //END Validar Company


// Validar mobilephone
function validatemobilephone() {
  var mobilephone = $('#mobilephone');
  if (!mobilephone || !mobilephone.cleanVal) {
    console.error("mobilephone não está definido ou não tem método 'cleanVal'");
    updateFeedback(mobilephone, false);
    return false;
  }

  // Obtenha o valor do campo de telefone sem a máscara
  var mobilephoneValue = mobilephone.cleanVal();

  if (!mobilephoneValue || typeof mobilephoneValue !== 'string') {
    updateFeedback(mobilephone, false);
    console.error("Valor de mobilephone é inválido", typeof mobilephoneValue,mobilephoneValue);
    return false;
  }

  // Remova espaços em branco e verifique o padrão
  mobilephoneValue = mobilephoneValue.trim();
  var mobilephonePattern = /^\d{11}$/;
  if (!mobilephonePattern.test(mobilephoneValue)) {
    // Se não corresponder 11 numeros, exiba feedback e retorne falso
    updateFeedback(mobilephone, false);
    return false;
  }

  // Remova classes de validação do campo
  mobilephone.removeClass('is-valid is-invalid');
  // Se corresponder ao padrão, retorne verdadeiro
  return true;
}
// END Validar mobilephone


// Validar Distribuidora

function validateDistribuidora() {
  if (distribuidora.val() == null || distribuidora.val() === '' ) {
    updateFeedback(distribuidora, false);
    return false;
  }

  distribuidora.removeClass('is-valid is-invalid');
  return true;
}
//END Validar Nome
  

  //Get URL Params
  function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split("=");
      if (pair[0] == variable) {
        return pair[1];
      }
    }
  }

  function getUtmParams() {
    let valueSource = getQueryVariable("utm_source");
    let valueMedium = getQueryVariable("utm_medium");
    let valueCampaign = getQueryVariable("utm_campaign");
    let eSource = document.getElementById("utm_source");
    let eMedium = document.getElementById("utm_medium");
    let eCampaign = document.getElementById("utm_campaign");
    eSource.value = valueSource;
    eMedium.value = valueMedium;
    eCampaign.value = valueCampaign;
  }

  jQuery(window).on("load", function () {
    getUtmParams();
  });

  //Phone mask
  var behavior = function (val) {
      return val.replace(/\D/g, "").length === 11
        ? "(00) 00000-0000"
        : "(00) 0000-00009";
    },
    options = {
      onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
      },
    };

  jQuery("#mobilephone").mask(behavior, options);

  //Disable enter key
  jQuery(document).keypress(function (event) {
    if (event.which == "13") {
      event.preventDefault();
    }
  });
