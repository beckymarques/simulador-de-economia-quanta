<div class="wrap">
  <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
  <?php settings_errors();
  ?>
  <?php
  $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'tools';
  ?>
  <h2 class="nav-tab-wrapper">
    <a href="?page=seq_admin&tab=tools" class="nav-tab <?php echo $active_tab == 'tools' ? 'nav-tab-active' : ''; ?>">Configuração</a>
    <a href="?page=seq_admin&tab=messages" class="nav-tab <?php echo $active_tab == 'messages' ? 'nav-tab-active' : ''; ?>">Mensagens</a>
  </h2>
  <form action="options.php" method="post">
    <?php
    if ($active_tab == 'tools') { ?>
      <div class="manage-menus">
        <span class="first-menu-message">
          Copie o shortcode para inserir na página do site que você deseja que o Simulador apareça. Configure a
          porcentagem padrão de desconto para o cálculo
          do Simulador.
          <span class="screen-reader-text">
            Abaixo seguem instruções de como utilizar o shortcode e há a configuração da porcentagem que será utilizada
            no
            Simulador para os cálculos do desconto na conta. </span>
        </span>
      </div>
      <?php
      settings_fields('seq_group');
      do_settings_sections('seq_page1');
      ?>
    <?php
    } else { ?>
      <div class="manage-menus">
        <span class="second-menu-message">
          Preencha a "Resposta positiva" e a "Resposta negativa", caso queira alterar a mensagem padrão de resposta do
          Simulador e clique no botão "Salvar" para confirmar suas alterações. <span class="screen-reader-text">
            Preencha a "Resposta positiva" e a "Resposta negativa", caso queira alterar a mensagem padrão de resposta do
            Simulador e clique no botão "Salvar" para confirmar suas alterações. </span>
        </span>
      </div>
    <?php
      settings_fields('seq_group');
      do_settings_sections('seq_page2');
    }
    settings_fields('seq_group');
    submit_button('Salvar');
    ?>
  </form>
</div>