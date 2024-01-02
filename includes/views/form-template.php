<?php
$linkWhats = "https://api.whatsapp.com/send?phone=5521983012793&text=";
$distribuidoras = array(
    array('nome' => 'AME'),
    array('nome' => 'CASTRO-DIS'),
    array('nome' => 'CEA'),
    array('nome' => 'CEB-DIS'),
    array('nome' => 'CEDRAP'),
    array('nome' => 'CEDRI'),
    array('nome' => 'CEEE-D'),
    array('nome' => 'CEGERO'),
    array('nome' => 'CEJAMA'),
    array('nome' => 'CELESC-DIS'),
    array('nome' => 'CELETRO'),
    array('nome' => 'CELPE'),
    array('nome' => 'CEMAR'),
    array('nome' => 'CEMIG-D'),
    array('nome' => 'CEMIRIM'),
    array('nome' => 'CEPRAG'),
    array('nome' => 'CERAÇÁ'),
    array('nome' => 'CERAL'),
    array('nome' => 'CERAL ARARUAMA'),
    array('nome' => 'CERAL-DIS'),
    array('nome' => 'CERBRANORTE'),
    array('nome' => 'CERCI'),
    array('nome' => 'CERCOS'),
    array('nome' => 'CEREJ'),
    array('nome' => 'CERES'),
    array('nome' => 'CERFOX'),
    array('nome' => 'CERGAL'),
    array('nome' => 'CERGAPA'),
    array('nome' => 'CERGRAL'),
    array('nome' => 'CERILUZ'),
    array('nome' => 'CERIM'),
    array('nome' => 'CERIPA'),
    array('nome' => 'CERIS'),
    array('nome' => 'CERMC'),
    array('nome' => 'CERMISSÕES'),
    array('nome' => 'CERMOFUL'),
    array('nome' => 'CERNHE'),
    array('nome' => 'CERPALO'),
    array('nome' => 'CERPRO'),
    array('nome' => 'CERRP'),
    array('nome' => 'CERSAD'),
    array('nome' => 'CERSUL'),
    array('nome' => 'CERTAJA'),
    array('nome' => 'CERTEL'),
    array('nome' => 'CERTHIL'),
    array('nome' => 'CERTREL'),
    array('nome' => 'CERVAM'),
    array('nome' => 'CETRIL'),
    array('nome' => 'CHESP'),
    array('nome' => 'COCEL'),
    array('nome' => 'CODESAM'),
    array('nome' => 'COELBA'),
    array('nome' => 'COOPERA'),
    array('nome' => 'COOPERALIANÇA'),
    array('nome' => 'COOPERCOCAL'),
    array('nome' => 'COOPERLUZ'),
    array('nome' => 'COOPERMILA'),
    array('nome' => 'COOPERNORTE'),
    array('nome' => 'COOPERSUL'),
    array('nome' => 'COOPERZEM'),
    array('nome' => 'COORSEL'),
    array('nome' => 'COPEL-DIS'),
    array('nome' => 'COPREL'),
    array('nome' => 'COSERN'),
    array('nome' => 'CPFL PAULISTA'),
    array('nome' => 'CPFL PIRATININGA'),
    array('nome' => 'CPFL SANTA CRUZ'),
    array('nome' => 'CRELUZ-D'),
    array('nome' => 'CRERAL'),
    array('nome' => 'DCELT'),
    array('nome' => 'DEMEI'),
    array('nome' => 'DMED'),
    array('nome' => 'EAC'),
    array('nome' => 'EBO'),
    array('nome' => 'EDP ES'),
    array('nome' => 'EDP SP'),
    array('nome' => 'EFLJC'),
    array('nome' => 'EFLUL'),
    array('nome' => 'ELEKTRO'),
    array('nome' => 'ELETROCAR'),
    array('nome' => 'ELFSM'),
    array('nome' => 'EMG'),
    array('nome' => 'EMS'),
    array('nome' => 'EMT'),
    array('nome' => 'ENEL CE'),
    array('nome' => 'ENEL GO'),
    array('nome' => 'ENEL RJ'),
    array('nome' => 'ENEL SP'),
    array('nome' => 'ENF'),
    array('nome' => 'EPB'),
    array('nome' => 'EQUATORIAL AL'),
    array('nome' => 'EQUATORIAL PA'),
    array('nome' => 'EQUATORIAL PI'),
    array('nome' => 'ERO'),
    array('nome' => 'ESE'),
    array('nome' => 'ESS'),
    array('nome' => 'ETO'),
    array('nome' => 'FORCEL'),
    array('nome' => 'HIDROPAN'),
    array('nome' => 'LIGHT'),
    array('nome' => 'MUXENERGIA'),
    array('nome' => 'RGE'),
    array('nome' => 'RORAIMA ENERGIA'),
    array('nome' => 'SULGIPE'),
    array('nome' => 'UHENPAL'),
    array('nome' => 'Outra'),
);
?>
<div id="form-simulador">
  <!-- CONTAINER -->
  <div class="d-flex align-items-center min-vh-100">
    <div class="row g-0 justify-content-center">
      <!-- TITLE -->
      <div class="col-lg-4 offset-lg-1 mx-0 px-0">
        <div id="title-container" class="d-flex align-items-center">
          <div class="step-title">
            <div class="arrow-image">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.65 30.91">
                <path class="cls-1"
                  d="m104.84.85l14.1,14.1H.5c-.28,0-.5.22-.5.5s.22.5.5.5h118.45s-14.1,14.1-14.1,14.1c-.1.1-.15.23-.15.35s.05.26.15.35c.2.2.51.2.71,0l14.96-14.96s.08-.1.11-.16c.05-.12.05-.26,0-.38-.03-.06-.06-.12-.11-.16L105.55.15c-.2-.2-.51-.2-.71,0s-.2.51,0,.71Z" />
              </svg>
            </div>
            <h2>Receba <strong>gratuitamente</strong> uma avaliação da conta de energia da sua empresa agora!</h2>
            <h3 class="mt-5 mb-5">Para iniciar, <strong>preencha os dados ao lado</strong>.</h3>
            <a class="btn btn-white text-start d-flex mt-4 btn-duvidas" href="<?= $linkWhats; ?>" target="_blank"
              rel="noopener noreferrer">
              <div class="d-flex align-items-center">
                <svg class="btn-img" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M53.957 9.90597C51.1001 7.0201 47.6971 4.73197 43.9465 3.17505C40.196 1.61812 36.173 0.823563 32.1122 0.83771C15.0975 0.83771 1.23026 14.705 1.23026 31.7196C1.23026 37.1731 2.66373 42.4707 5.34369 47.145L0.980957 63.1625L17.3412 58.8621C21.8598 61.3239 26.9392 62.6327 32.1122 62.6327C49.1269 62.6327 62.9941 48.7655 62.9941 31.7508C62.9941 23.4928 59.7844 15.7333 53.957 9.90597ZM32.1122 57.3975C27.5002 57.3975 22.9816 56.151 19.024 53.8138L18.0891 53.2529L8.36645 55.8082L10.9529 46.3348L10.3297 45.3688C7.76734 41.2771 6.40677 36.5475 6.40321 31.7196C6.40321 17.5719 17.9333 6.04183 32.081 6.04183C38.9368 6.04183 45.3874 8.7218 50.2175 13.5831C52.6092 15.9638 54.5046 18.7955 55.7937 21.9142C57.0829 25.0328 57.7402 28.3763 57.7277 31.7508C57.79 45.8985 46.2599 57.3975 32.1122 57.3975ZM46.1976 38.2014C45.4185 37.8275 41.6167 35.9577 40.9311 35.6773C40.2144 35.428 39.7158 35.3033 39.1861 36.0512C38.6563 36.8303 37.1917 38.5754 36.7554 39.074C36.3191 39.6037 35.8517 39.6661 35.0726 39.2609C34.2936 38.887 31.8006 38.0456 28.8713 35.428C26.5653 33.3713 25.0383 30.8471 24.5709 30.068C24.1346 29.289 24.5086 28.8839 24.9137 28.4788C25.2565 28.136 25.6927 27.575 26.0667 27.1388C26.4406 26.7025 26.5964 26.3597 26.8457 25.8611C27.095 25.3314 26.9704 24.8951 26.7834 24.5211C26.5964 24.1472 25.0383 20.3454 24.4151 18.7873C23.7918 17.2915 23.1374 17.4784 22.67 17.4473H21.1742C20.6444 17.4473 19.8342 17.6342 19.1175 18.4133C18.4319 19.1924 16.4375 21.0621 16.4375 24.8639C16.4375 28.6657 19.211 32.3429 19.5849 32.8415C19.9589 33.3713 25.0383 41.1618 32.7666 44.4962C34.6052 45.3064 36.0387 45.7739 37.1605 46.1167C38.9991 46.7088 40.6819 46.6153 42.0218 46.4283C43.5176 46.2102 46.6027 44.5585 47.2259 42.7511C47.8804 40.9437 47.8804 39.4168 47.6622 39.074C47.4441 38.7312 46.9767 38.5754 46.1976 38.2014Z"
                    fill="#1F8ECE" />
                </svg>
              </div>
              <div class="ms-3 d-flex flex-column justify-content-center">
                <span>Fale com um especialista!</span>
              </div>
            </a>
          </div>
          <div class="step-title">
            <div class="arrow-image">
              <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.65 30.91">
                <path class="cls-1"
                  d="m104.84.85l14.1,14.1H.5c-.28,0-.5.22-.5.5s.22.5.5.5h118.45s-14.1,14.1-14.1,14.1c-.1.1-.15.23-.15.35s.05.26.15.35c.2.2.51.2.71,0l14.96-14.96s.08-.1.11-.16c.05-.12.05-.26,0-.38-.03-.06-.06-.12-.11-.16L105.55.15c-.2-.2-.51-.2-.71,0s-.2.51,0,.71Z" />
              </svg>
            </div>
            <h2>Agora, informe o <strong>perfil de consumo</strong> energético da sua empresa e avance para a última
              etapa.</h2>
            <h3 class="mt-5 mb-5">Em breve, você saberá o quanto pode economizar com nossas soluções!</h3>
            <a class="btn btn-white text-start d-flex mt-4 btn-duvidas" href="<?= $linkWhats; ?>" target="_blank"
              rel="noopener noreferrer">
              <div class="d-flex align-items-center">
                <svg class="btn-img" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M53.957 9.90597C51.1001 7.0201 47.6971 4.73197 43.9465 3.17505C40.196 1.61812 36.173 0.823563 32.1122 0.83771C15.0975 0.83771 1.23026 14.705 1.23026 31.7196C1.23026 37.1731 2.66373 42.4707 5.34369 47.145L0.980957 63.1625L17.3412 58.8621C21.8598 61.3239 26.9392 62.6327 32.1122 62.6327C49.1269 62.6327 62.9941 48.7655 62.9941 31.7508C62.9941 23.4928 59.7844 15.7333 53.957 9.90597ZM32.1122 57.3975C27.5002 57.3975 22.9816 56.151 19.024 53.8138L18.0891 53.2529L8.36645 55.8082L10.9529 46.3348L10.3297 45.3688C7.76734 41.2771 6.40677 36.5475 6.40321 31.7196C6.40321 17.5719 17.9333 6.04183 32.081 6.04183C38.9368 6.04183 45.3874 8.7218 50.2175 13.5831C52.6092 15.9638 54.5046 18.7955 55.7937 21.9142C57.0829 25.0328 57.7402 28.3763 57.7277 31.7508C57.79 45.8985 46.2599 57.3975 32.1122 57.3975ZM46.1976 38.2014C45.4185 37.8275 41.6167 35.9577 40.9311 35.6773C40.2144 35.428 39.7158 35.3033 39.1861 36.0512C38.6563 36.8303 37.1917 38.5754 36.7554 39.074C36.3191 39.6037 35.8517 39.6661 35.0726 39.2609C34.2936 38.887 31.8006 38.0456 28.8713 35.428C26.5653 33.3713 25.0383 30.8471 24.5709 30.068C24.1346 29.289 24.5086 28.8839 24.9137 28.4788C25.2565 28.136 25.6927 27.575 26.0667 27.1388C26.4406 26.7025 26.5964 26.3597 26.8457 25.8611C27.095 25.3314 26.9704 24.8951 26.7834 24.5211C26.5964 24.1472 25.0383 20.3454 24.4151 18.7873C23.7918 17.2915 23.1374 17.4784 22.67 17.4473H21.1742C20.6444 17.4473 19.8342 17.6342 19.1175 18.4133C18.4319 19.1924 16.4375 21.0621 16.4375 24.8639C16.4375 28.6657 19.211 32.3429 19.5849 32.8415C19.9589 33.3713 25.0383 41.1618 32.7666 44.4962C34.6052 45.3064 36.0387 45.7739 37.1605 46.1167C38.9991 46.7088 40.6819 46.6153 42.0218 46.4283C43.5176 46.2102 46.6027 44.5585 47.2259 42.7511C47.8804 40.9437 47.8804 39.4168 47.6622 39.074C47.4441 38.7312 46.9767 38.5754 46.1976 38.2014Z"
                    fill="#1F8ECE" />
                </svg>
              </div>
              <div class="ms-3 d-flex flex-column justify-content-center">
                <span>Fale com um especialista!</span>
              </div>
            </a>
          </div>
          <div class="step-title">
            <div class="arrow-image">
              <svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.65 30.91">
                <path class="cls-1"
                  d="m104.84.85l14.1,14.1H.5c-.28,0-.5.22-.5.5s.22.5.5.5h118.45s-14.1,14.1-14.1,14.1c-.1.1-.15.23-.15.35s.05.26.15.35c.2.2.51.2.71,0l14.96-14.96s.08-.1.11-.16c.05-.12.05-.26,0-.38-.03-.06-.06-.12-.11-.16L105.55.15c-.2-.2-.51-.2-.71,0s-.2.51,0,.71Z" />
              </svg>
            </div>
            <h2><strong>Falta pouco!</strong></h2>
            <h2 class="mt-4 mb-5">A seguir, você receberá sua simulação gratuita e saberá qual é o <strong>potencial de
                redução de custos</strong> que você pode gerar para sua empresa.</h2>
            <a class="btn btn-white text-start d-flex mt-4 btn-duvidas" href="<?= $linkWhats; ?>" target="_blank"
              rel="noopener noreferrer">
              <div class="d-flex align-items-center">
                <svg class="btn-img" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M53.957 9.90597C51.1001 7.0201 47.6971 4.73197 43.9465 3.17505C40.196 1.61812 36.173 0.823563 32.1122 0.83771C15.0975 0.83771 1.23026 14.705 1.23026 31.7196C1.23026 37.1731 2.66373 42.4707 5.34369 47.145L0.980957 63.1625L17.3412 58.8621C21.8598 61.3239 26.9392 62.6327 32.1122 62.6327C49.1269 62.6327 62.9941 48.7655 62.9941 31.7508C62.9941 23.4928 59.7844 15.7333 53.957 9.90597ZM32.1122 57.3975C27.5002 57.3975 22.9816 56.151 19.024 53.8138L18.0891 53.2529L8.36645 55.8082L10.9529 46.3348L10.3297 45.3688C7.76734 41.2771 6.40677 36.5475 6.40321 31.7196C6.40321 17.5719 17.9333 6.04183 32.081 6.04183C38.9368 6.04183 45.3874 8.7218 50.2175 13.5831C52.6092 15.9638 54.5046 18.7955 55.7937 21.9142C57.0829 25.0328 57.7402 28.3763 57.7277 31.7508C57.79 45.8985 46.2599 57.3975 32.1122 57.3975ZM46.1976 38.2014C45.4185 37.8275 41.6167 35.9577 40.9311 35.6773C40.2144 35.428 39.7158 35.3033 39.1861 36.0512C38.6563 36.8303 37.1917 38.5754 36.7554 39.074C36.3191 39.6037 35.8517 39.6661 35.0726 39.2609C34.2936 38.887 31.8006 38.0456 28.8713 35.428C26.5653 33.3713 25.0383 30.8471 24.5709 30.068C24.1346 29.289 24.5086 28.8839 24.9137 28.4788C25.2565 28.136 25.6927 27.575 26.0667 27.1388C26.4406 26.7025 26.5964 26.3597 26.8457 25.8611C27.095 25.3314 26.9704 24.8951 26.7834 24.5211C26.5964 24.1472 25.0383 20.3454 24.4151 18.7873C23.7918 17.2915 23.1374 17.4784 22.67 17.4473H21.1742C20.6444 17.4473 19.8342 17.6342 19.1175 18.4133C18.4319 19.1924 16.4375 21.0621 16.4375 24.8639C16.4375 28.6657 19.211 32.3429 19.5849 32.8415C19.9589 33.3713 25.0383 41.1618 32.7666 44.4962C34.6052 45.3064 36.0387 45.7739 37.1605 46.1167C38.9991 46.7088 40.6819 46.6153 42.0218 46.4283C43.5176 46.2102 46.6027 44.5585 47.2259 42.7511C47.8804 40.9437 47.8804 39.4168 47.6622 39.074C47.4441 38.7312 46.9767 38.5754 46.1976 38.2014Z"
                    fill="#1F8ECE" />
                </svg>
              </div>
              <div class="ms-3 d-flex flex-column justify-content-center">
                <span>Fale com um especialista!</span>
              </div>
            </a>
          </div>
          <div id="success-title">
            <div class="mt-5">
              <h2>Obrigado por escolher a Quanta!</h2>
              <div id="negative-answer" v-if="result.feedback === 'positive'">
                <hr>
                <h2 id="positive-answer" class="mt-3">
                  <?php
                    $resposta_positiva = get_option('seq_options')['seq_resposta_positiva'];
                    if ($resposta_positiva){
                      echo $resposta_positiva;
                    } else {
                      echo 'Conheça agora o <strong>potencial de economia</strong> da sua empresa.';
                    }
                  ?>
                </h2>
              </div>
            </div>
          </div>
        </div> <!-- Title Container -->
      </div> <!-- Col -->
      <!-- FORMS -->
      <div class="col-lg-7 mx-0 px-0">
        <div class="progress">
          <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
            class="progress-bar progress-bar-striped progress-bar-animated bg-highlight" role="progressbar"
            style="width: 0%"></div>
        </div>
        <div id="qbox-container" class="p-3 p-md-5">
          <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" @submit.prevent="submit" novalidate="">
            <div id="steps-container">
              <div class="step">
                <div class="d-flex align-items-center justify-content-between">
                  <nav
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item text-primary active" aria-current="page">
                        <span class="badge rounded-pill text-bg-primary">1</span> Contato
                      </li>
                      <li class="breadcrumb-item">
                        <span class="badge rounded-pill text-bg-secondary">2</span> Perfil de Consumo
                      </li>
                      <li class="breadcrumb-item">
                        <span class="badge rounded-pill text-bg-secondary">3</span> Redução de Custos
                      </li>
                    </ol>
                  </nav>
                  <div class="mostrador-etapas ms-5 ms-md-0 d-flex align-items-center justify-content-end"><img
                      class="img-fluid" src="<?php echo SEQ_PLUGIN_URL . 'assets/images/battery-1.svg'; ?>" alt="">
                  </div>
                </div>
                <hr>
                <div class="mt-5">
                  <label class="form-label"><span class="text-danger">*</span> Nome e Sobrenome:</label>
                  <input v-model="simulatorForm.firstname" class="form-control" name="firstname" id="firstname" type="text" aria-describedby="nameErrorFeedback" required>
                  <div id="nameErrorFeedback" class="invalid-feedback">
                    {{ simulatorForm.firstname.trim() === "" ? "Este campo é obrigatório." : "Verifique os dados e tente novamente."}}
                  </div>
                </div>
                <div class="mt-3">
                  <label class="form-label"><span class="text-danger">*</span> Nome da Empresa:</label>
                  <input v-model="simulatorForm.company" class="form-control" name="company" id="company" type="text" aria-describedby="companyErrorFeedback" required>
                  <div id="companyErrorFeedback" class="invalid-feedback">
                  {{ simulatorForm.company.trim() === "" ? "Este campo é obrigatório." : "Verifique os dados e tente novamente."}}
                  </div>
                </div>
                <div class="mt-3">
                  <label class="form-label">Cargo:</label>
                  <input v-model="simulatorForm.jobtitle" class="form-control" name="jobtitle" id="jobtitle" type="text">
                </div>
                <div class="mt-3">
                  <label class="form-label"><span class="text-danger">*</span> Melhor e-mail:</label>
                  <input v-model="simulatorForm.email" class="form-control" name="email" id="email" type="email" aria-describedby="emailErrorFeedback" required>
                  <div id="emailErrorFeedback" class="invalid-feedback">
                    {{ simulatorForm.email.trim() === "" ? "Este campo é obrigatório." : "Este email é inválido."}}
                  </div>
                </div>
                <div class="mt-3">
                  <label class="form-label"><span class="text-danger">*</span> Celular com DDD:</label>
                  <input v-model="simulatorForm.mobilephone" class="form-control w-100" name="mobilephone" id="mobilephone" type="text"
                    data-mask="(00) 00000-0000">
                    <div id="emailErrorFeedback" class="invalid-feedback">
                    {{ simulatorForm.mobilephone.trim() === "" ? "Este campo é obrigatório." : "Este Celular é inválido."}}
                  </div>                    
                </div>
                <div class="utms">
                  <input type="hidden" class="campo-utm" name="utm_source" id="utm_source" placeholder="">
                  <input type="hidden" class="campo-utm" name="utm_medium" id="utm_medium" placeholder="">
                  <input type="hidden" class="campo-utm" name="utm_campaign" id="utm_campaign" placeholder="">
                </div>
              </div>
              <div class="step">
                <div class="d-flex align-items-center justify-content-between">
                  <nav
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">
                        <span class="badge rounded-pill text-bg-secondary">1</span> Contato
                      </li>
                      <li class="breadcrumb-item text-primary active" aria-current="page">
                        <span class="badge rounded-pill text-bg-primary">2</span> Perfil de Consumo
                      </li>
                      <li class="breadcrumb-item">
                        <span class="badge rounded-pill text-bg-secondary">3</span> Redução de Custos
                      </li>
                    </ol>
                  </nav>
                  <div class="mostrador-etapas ms-5 ms-md-0 d-flex align-items-center justify-content-end"><img
                      class="img-fluid" src="<?php echo SEQ_PLUGIN_URL . 'assets/images/battery-2.svg'; ?>" alt="">
                  </div>
                </div>
                <hr>
                <div class="mt-5">
                  <label class="form-label" for="gastos_mensais"><span class="text-danger">*</span> Valor médio da conta de luz de sua
                    empresa:</label>
                  <div class="d-flex align-items-center">
                    <div class="me-5">
                      <input type="range" class="range-slider campo-range" name="gastos_mensais" id="gastos_mensais"
                        min="0" max="100000" step="500" value="0">
                    </div>
                    <div>
                      <input ref="gastos_mensais" type="text" class="form-control" name="gastos_mensais_valor" id="gastos_mensais_valor"
                        data-affixes-stay="false" data-prefix="R$ " data-thousands="." data-decimal=","
                        placeholder="R$ 0,00" aria-describedby="expensesErrorFeedback" required>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <label class="form-label" for="gastos_mensais_unidades">
                    <div class="mb-2">Possui mais unidades?</div>
                    Qual é a faixa dos seus gastos mensais totais com as contas de luz de todas as unidades (incluindo a sede)?
                  </label>
                  <div class="d-flex align-items-center">
                    <div class="me-5">
                      <input type="range" class="range-slider campo-range" name="gastos_mensais_unidades"
                        id="gastos_mensais_unidades" min="0" max="100000" step="500" value="0">
                    </div>
                    <div>
                      <input ref="gastos_mensais_unidades" type="text" class="form-control" name="gastos_mensais_unidades_valor"
                        id="gastos_mensais_unidades_valor" data-affixes-stay="false" data-prefix="R$ " data-thousands="."
                        data-decimal="," placeholder="R$ 0,00">
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <label class="form-label" for="possui_demanda">Sua empresa já possui demanda contratada com alguma
                    distribuidora?</label>
                  <div class="possui_demanda">
                    <div class="form-check form-check-inline">
                      <input v-model="simulatorForm.empresa_ja_possui_demanda_contratada" class="form-check-input" type="radio" name="possui_demanda" id="possui_demanda_sim"
                        value="Sim" required>
                      <label class="form-check-label" for="possui_demanda_sim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input v-model="simulatorForm.empresa_ja_possui_demanda_contratada" class="form-check-input" type="radio" name="possui_demanda" id="possui_demanda_nao"
                        value="Nao" required>
                      <label class="form-check-label" for="possui_demanda_nao">Não</label>
                    </div>
                  </div>
                </div>
                <div class="mt-3 valor_demanda_kwh d-none">
                  <div class="rotulo"><label for="valor_demanda_kwh">Qual é o valor da demanda em kW?</label></div>
                  <div class="campo"><input ref="valor_demanda" type="text" data-mask="# kW" data-mask-reverse="true"
                      class="form-control" name="valor_demanda_kwh" id="valor_demanda_kwh" placeholder="0 kW"></div>
                </div>
                <div class="mt-3">
                  <div class="distribuidora">
                    <div class="rotulo"><label for="distribuidora">Selecione a distribuidora</label></div>
                    <div class="campo">
                      <select ref="distribuidora" name="distribuidora" id="distribuidora" class="form-select js-choice"
                        required>
                        <option class="choices__item--disabled" value="" selected disabled>Selecione uma opção</option>
                        <?php if (!empty($distribuidoras)) : ?>
                        <?php foreach ($distribuidoras as $item) : ?>
                        <option value="<?php echo $item['nome'] ?>">
                          <?php echo $item['nome']; ?>
                        </option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="step">
                <div class="d-flex align-items-center justify-content-between">
                  <nav
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">
                        <span class="badge rounded-pill text-bg-secondary">1</span> Contato
                      </li>
                      <li class="breadcrumb-item">
                        <span class="badge rounded-pill text-bg-secondary">2</span> Perfil de Consumo
                      </li>
                      <li class="breadcrumb-item text-primary active" aria-current="page">
                        <span class="badge rounded-pill text-bg-primary">3</span> Redução de Custos
                      </li>
                    </ol>
                  </nav>
                  <div class="mostrador-etapas ms-5 ms-md-0 d-flex align-items-center justify-content-end"><img
                      class="img-fluid" src="<?php echo SEQ_PLUGIN_URL . 'assets/images/battery-3.svg'; ?>" alt="">
                  </div>
                </div>
                <hr>
                <div class="mt-1">
                  <div class="closing-text">
                    <div class="mt-5">
                      <label class="form-label" for="anexo_fatura">Para um resultado mais preciso, anexe aqui a sua
                        fatura:</label>
                      <div class="anexo_fatura">
                        <div class="campo campos-file">
                          <input @change="uploadImage" type="file" class="form-control"
                            accept=".doc,.docx,.pdf,.png,.jpeg,.jpg" name="conta_de_energia" id="conta_de_energia"
                            multiple="multiple">
                        </div>
                      </div>
                    </div>
                    <div class="mt-5">
                      <label class="form-label" for="">Por onde nos conheceu?</label>
                      <div class="como_conheceu">
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_1" value="Indicação" required> <label
                            class="form-check-label conheceu-label rounded" for="como_conheceu_1">Indicação</label>
                        </div>
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_2" value="Redes Sociais"><label
                            class="form-check-label conheceu-label rounded" for="como_conheceu_2">Redes
                            Sociais</label>
                        </div>
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_3" value="Site"> <label class="form-check-label conheceu-label rounded"
                            for="como_conheceu_3">Site</label>
                        </div>
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_4" value="Google"> <label class="form-check-label conheceu-label rounded"
                            for="como_conheceu_4">Google</label>
                        </div>
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_5" value="Lives/Eventos"><label
                            class="form-check-label conheceu-label rounded" for="como_conheceu_5">Lives/Eventos</label>
                        </div>
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_6" value="WhatsApp"> <label
                            class="form-check-label conheceu-label rounded" for="como_conheceu_6">WhatsApp</label>
                        </div>
                        <div class="form-check form-check-inline conheceu-radio-group">
                          <input v-model="simulatorForm.como_conheceu_a_quanta_geracao"
                            class="form-check-input conheceu-input" type="radio" name="como_conheceu"
                            id="como_conheceu_7" value="Outros"> <label class="form-check-label conheceu-label rounded"
                            for="como_conheceu_7">Outros</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5">
                    <div class="politca_privacidade">
                      <div class="form-check">
                        <input v-model="simulatorForm.politica_privacidade" class="form-check-input" type="checkbox"
                          name="politca_privacidade" id="politca_privacidade" aria-describedby="politicaPrivacidadeErrorFeedback" required>
                        <label class="form-check-label" for="politca_privacidade">Li e estou de acordo com a política de
                          privacidade da Quanta.</label>
                        <div id="politicaPrivacidadeErrorFeedback" class="invalid-feedback">
                          Por favor, concorde com a política de privacidade para continuar.
                        </div>
                      </div>
                    </div>
                  </div> <!-- Pol privacidade -->
                </div>
              </div> <!-- step -->
              <div id="success" class="w-100">
                <div id="positive" v-if="result.feedback === 'positive'">
                  <?php include(SEQ_PLUGIN_VIEWS . 'result-positive.php'); ?>
                </div>
                <div id="negative" v-else-if="result.feedback === 'negative'">
                    <?php include (SEQ_PLUGIN_VIEWS . 'result-negative.php'); ?>
                </div>
              </div>
            </div>
            <div id="q-box__buttons">
              <button id="prev-btn" type="button"><span class="badge rounded-pill"><svg width="33" height="33"
                    viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.9302 16.4999L7.06906 16.4999" stroke="white" stroke-width="2.69444"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16.5 25.9305L7.06945 16.4999L16.5 7.06937" stroke="white" stroke-width="2.69444"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span></button>
              <button id="next-btn" @click="submitForm" type="button"><span class="badge rounded-pill"><svg width="33"
                    height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.06934 16.5001H25.9304" stroke="white" stroke-width="2.69444" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M16.5 7.06952L25.9306 16.5001L16.5 25.9306" stroke="white" stroke-width="2.69444"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span></button>
              <button name="submit-btn" id="submit-btn" class="px-3" type="submit">Quero descobrir quanto vou
                economizar</button>
            </div>
          </form>
        </div>
      </div> <!-- Col -->
    </div> <!-- Row -->
  </div><!-- Container -->
  <div id="preloader-wrapper">
    <div id="preloader"></div>
    <div class="preloader-section section-left"></div>
    <div class="preloader-section section-right"></div>
  </div>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
<script>
const baseUrl = "<?= home_url() ?>";
const {
  createApp
} = Vue
createApp({
    data() {
      return {
        emailIsInvalid: false,
        // Campos do formulário
        simulatorForm: {
          firstname: "",
          company: "",
          jobtitle: "",
          email: "",
          mobilephone: "",
          valor_aproximado_dos_gastos_mensais_com_energia__r__: "",
          faixa_gastos_mais_unidades: "",
          empresa_ja_possui_demanda_contratada: "Nao",
          valor_da_demanda_em_kw: "",
          distribuidora: "",
          conta_de_energia: "",
          como_conheceu_a_quanta_geracao: "",
          politica_privacidade: false
        },
        // Resposta do cálculo
        result: {
          feedback: "negative",
          valorDesconto: 0,
          totalMesComDesconto: 0,
          economiaAnual: 0
        }
      }
    },
    methods: {
      // Calcula e envia o formulário
      submit() {
        this.calculation();
        this.submitForm();
      },
      // Requisição de cálculo para a API
      calculation() {
        this.getOtherFelds(); // Busca campos que não foram buscados com v-model
        fetch(`${baseUrl}/wp-json/simulador_quanta/v1/calculation`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(this.simulatorForm),
          })
          .then(response => {
            if (!response.ok) {
              throw new Error('Erro na requisição');
            }
            return response.json();
          })
          .then(data => {
            if (data.success)
              this.result = data.data;
          });
      },
      // Busca campos que não foram buscados com v-model
      getOtherFelds() {
        this.simulatorForm.valor_aproximado_dos_gastos_mensais_com_energia__r__ = this.$refs.gastos_mensais.value;
        this.simulatorForm.faixa_gastos_mais_unidades = this.$refs.gastos_mensais_unidades.value;
        this.simulatorForm.distribuidora = this.$refs.distribuidora.value;
        this.simulatorForm.valor_da_demanda_em_kw = this.$refs.valor_demanda.value;
      },
      // Requisição de envio de formulário para a API
      submitForm() {
        this.getOtherFelds(); // Busca campos que não foram buscados com v-model

        if (validateForm()) {
          fetch(`${baseUrl}/wp-json/simulador_quanta/v1/submit_form`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(this.simulatorForm),
          });
        }
      },
      // Busca a imagem e transforma em base64
      uploadImage(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = () => {
            this.simulatorForm.conta_de_energia = reader.result;
          };
          reader.readAsDataURL(file);
        }
      },
      // Formata o float em valor monetário brasileiro com duas casas decimais
      numberFormat(number) {
        number = number.toFixed(2);

        var nstr = number.toString();
        nstr += '';
        x = nstr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? ',' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1))
          x1 = x1.replace(rgx, '$1' + '.' + '$2');

        return x1 + x2;
      }
    }
  })
  .mount('#form-simulador')
</script>