<!-- Resultado -->
<!-- Positivo -->
<div class="mt-5">
<h4><img class="img-fluid me-3 success-item"
    src="<?php echo SEQ_PLUGIN_URL . 'assets/images/circle.svg'; ?>"
    alt><strong>Economia mensal
    </strong></h4>
<p class="result-item">R$  {{ numberFormat(result.valorDesconto) }} <span class="result-item--caption"></span></p>
<h4><img class="img-fluid me-3 success-item"
    src="<?php echo SEQ_PLUGIN_URL . 'assets/images/circle.svg'; ?>"
    alt><strong>Novo gasto mensal
    </strong></h4>
<p class="result-item">R$ {{ numberFormat(result.totalMesComDesconto) }} <span class="result-item--caption"></span></p>
<h4><img class="img-fluid me-3 success-item"
    src="<?php echo SEQ_PLUGIN_URL . 'assets/images/circle.svg'; ?>"
    alt><strong>Economia anual
    </strong></h4>
<p class="result-item">R$ {{ numberFormat(result.economiaAnual) }} <span class="result-item--caption"></span></p>
</div>
<!-- END Resultado -->
<a class="btn btn-outline-primary text-start d-flex mt-4"
href="<?= $linkWhats; ?>" target="_blank"
rel="noopener noreferrer">
<div class="d-flex align-items-center">
  <svg class="btn-img" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M53.957 9.90597C51.1001 7.0201 47.6971 4.73197 43.9465 3.17505C40.196 1.61812 36.173 0.823563 32.1122 0.83771C15.0975 0.83771 1.23026 14.705 1.23026 31.7196C1.23026 37.1731 2.66373 42.4707 5.34369 47.145L0.980957 63.1625L17.3412 58.8621C21.8598 61.3239 26.9392 62.6327 32.1122 62.6327C49.1269 62.6327 62.9941 48.7655 62.9941 31.7508C62.9941 23.4928 59.7844 15.7333 53.957 9.90597ZM32.1122 57.3975C27.5002 57.3975 22.9816 56.151 19.024 53.8138L18.0891 53.2529L8.36645 55.8082L10.9529 46.3348L10.3297 45.3688C7.76734 41.2771 6.40677 36.5475 6.40321 31.7196C6.40321 17.5719 17.9333 6.04183 32.081 6.04183C38.9368 6.04183 45.3874 8.7218 50.2175 13.5831C52.6092 15.9638 54.5046 18.7955 55.7937 21.9142C57.0829 25.0328 57.7402 28.3763 57.7277 31.7508C57.79 45.8985 46.2599 57.3975 32.1122 57.3975ZM46.1976 38.2014C45.4185 37.8275 41.6167 35.9577 40.9311 35.6773C40.2144 35.428 39.7158 35.3033 39.1861 36.0512C38.6563 36.8303 37.1917 38.5754 36.7554 39.074C36.3191 39.6037 35.8517 39.6661 35.0726 39.2609C34.2936 38.887 31.8006 38.0456 28.8713 35.428C26.5653 33.3713 25.0383 30.8471 24.5709 30.068C24.1346 29.289 24.5086 28.8839 24.9137 28.4788C25.2565 28.136 25.6927 27.575 26.0667 27.1388C26.4406 26.7025 26.5964 26.3597 26.8457 25.8611C27.095 25.3314 26.9704 24.8951 26.7834 24.5211C26.5964 24.1472 25.0383 20.3454 24.4151 18.7873C23.7918 17.2915 23.1374 17.4784 22.67 17.4473H21.1742C20.6444 17.4473 19.8342 17.6342 19.1175 18.4133C18.4319 19.1924 16.4375 21.0621 16.4375 24.8639C16.4375 28.6657 19.211 32.3429 19.5849 32.8415C19.9589 33.3713 25.0383 41.1618 32.7666 44.4962C34.6052 45.3064 36.0387 45.7739 37.1605 46.1167C38.9991 46.7088 40.6819 46.6153 42.0218 46.4283C43.5176 46.2102 46.6027 44.5585 47.2259 42.7511C47.8804 40.9437 47.8804 39.4168 47.6622 39.074C47.4441 38.7312 46.9767 38.5754 46.1976 38.2014Z"
      fill="#1F8ECE" />
  </svg>
</div>
<div class="ms-3 d-flex flex-column justify-content-center">
  <span>Fale agora com um especialista!</span>
</div>
</a>
<div class="mt-4">
  <a class="back-link" href="">Nova simulação ➜</a>
</div>