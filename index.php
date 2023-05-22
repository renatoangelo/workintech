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

            <nav class="d-flex justify-content-center">
              <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false">
                  <h5>Inscrever-se</h5>
                </button>
              </div>
            </nav>

            <!--<div class="tab-content shadow-lg mt-5" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">
                  <div class="contact-form-body">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-12">
                        <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Full name" required>
                      </div>

                      <div class="col-lg-6 col-md-6 col-12">
                        <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                      </div>
                    </div>

                    <input type="text" name="contact-company" id="contact-company" class="form-control" placeholder="Company" required>

                    <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>

                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                      <button type="submit" class="form-control">Send message</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17399.602722835334!2d-51.938714581525524!3d-23.4461517991622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a413a9c9463%3A0x4e3ee356ad1bd6c3!2sUniCesumar%20-%20Maring%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1684459563530!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
              </div>
            </div>-->
          </div>

        </div>
      </div>
    </section>
  </main>

  <?php include("footer.php"); ?>