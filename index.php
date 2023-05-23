<?php include("head.php"); ?>

<body>

  <main>

    <header class="site-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12 d-flex flex-wrap">
            <p class="d-flex me-4 mb-0">
              <i class="bi-person custom-icon me-2"></i>
              <strong class="text-dark">Work in Tech - Feira de Empregabilidade</strong>
            </p>
          </div>

        </div>
      </div>
    </header>

    <?php include("menu.php"); ?>



    <section class="hero-section" id="section_1">
      <div class="section-overlay"></div>

      <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

          <div class="col-12 mt-auto mb-5 text-center">
            <small>Feira de Empregabilidade</small>

            <h1 class="text-white mb-5"><img src="images/logo.png" /></h1>

            <a class="btn custom-btn smoothscroll" href="#section_2">Inscrever-se</a>
          </div>

          <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
            <div class="date-wrap">
              <h5 class="text-white">
                <i class="custom-icon bi-clock me-2"></i>
                30 de Maio 2023
              </h5>
            </div>


            <div class="location-wrap mx-auto py-3 py-lg-0">
              <h5 class="text-white">
                <i class="custom-icon bi-geo-alt me-2"></i>
                UniCesumar
              </h5>
            </div>

            <div class="location-wrap mx-auto py-3 py-lg-0">
              <h5 class="text-white">
                <i class="custom-icon bi-clock me-2"></i>
                19h-22h30
              </h5>
            </div>

          </div>
        </div>
      </div>

      <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
          <source src="video/pexels-2022395.mp4" type="video/mp4">

          Seu navegador não suporta video.
        </video>
      </div>
    </section>


    <section class="about-section section-padding" id="section_2">
      <div class="container">
        <div class="row">
          <h2 class="text-white mb-4">Work in Tech</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
            <div class="services-info">
              <p class="text-white">Um evento único em que várias empresas renomadas apresentam oportunidades de emprego nas áreas de programação e TI. Além de palestras inspiradoras para auxiliar os alunos a explorarem suas paixões e se encontrarem. Não perca essa chance de iniciar sua carreira com sucesso!
              </p>

              <h6 class="text-white mt-4">Vantagens do evento</h6>

              <p class="text-white">Acesso direto a diversas empresas do setor de TI, além de palestras inspiradoras que auxiliam os alunos a explorarem diferentes áreas e se prepararem para o mercado de trabalho</p>

              <h6 class="text-white mt-4">Venha Fazer Parte</h6>

              <p class="text-white">Não perca a chance de impulsionar sua carreira na área de TI! Participe da Feira de Empregabilidade na UniCesumar e conecte-se com oportunidades de emprego e conhecimento para construir um futuro promissor.</p>
            </div>
          </div>

          <div class="col-lg-6 col-12 d-flex align-items-center">
            <div class="about-text-wrap">
              <img src="images/logo-roxo.png" class="about-image img-fluid">
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="artists-section section-padding" id="section_3">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center">
            <h2 class="mb-4">Participantes</h1>
          </div>

          <?php include("participantes.php"); ?>

        </div>
      </div>
    </section>


    <section class="schedule-section section-padding" id="section_4">
      <div class="container">
        <div class="row">

          <div class="col-12 text-center">
            <h2 class="text-white mb-4">Cronograma do Evento 10</h1>

              <?php include("tabela.php"); ?>

          </div>
        </div>
      </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-12 mx-auto">
            <h2 class="text-center mb-4">Ficou Interessado? Faça sua Inscrição</h2>
            
            <div class="d-flex justify-content-center">
              <a href="inscricap.php" class="btn custom-btn mx-auto">Inscreva-se</a>
            </div>

          </div>

        </div>
      </div>
    </section>
  </main>

  <?php include("footer.php"); ?>