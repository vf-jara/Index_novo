
<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-contato");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page-titles/12.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-10">Entre em Contato</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pb-60">
      <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="contact-panel">
              <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-12">
                    <h4 class="contact-panel__title mb-20">Entre em contato</h4>
                    <p class="contact-panel__desc mb-30">Nossos especialistas estão prontos para te ajudar a aumentar suas vendas!</p>
                  </div> <!-- /.col-12 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nome" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="E-mail" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Selecione um Serviço</option>
                        <option value="1">Consultoria em Marketing</option>
                        <option value="2">Consultoria em Vendas</option>
                        <option value="2">Integração Marketing e Vendas</option>
                        <option value="2">Criação de Chatbots</option>
                        <option value="2">Outro</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Telefone" id="contact-Phone"
                        name="contact-phone">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Escreva sua Mensagem!" id="contact-message"
                        name="contact-message"></textarea>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                      <input type="checkbox" class="custom-control-input" id="acceptTerms">
                      <label class="custom-control-label" for="acceptTerms">Eu aceito os termos da <a href="/politica-de-privacidade/">Política de Privacidade</a></label>
                    </div>
                    <button type="submit" class="btn btn__primary btn__xl btn__block">Enviar Mensagem</button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-12 -->
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-1 mb-3">
            <div class="contact-info d-flex flex-column justify-content-between">
              <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/1.jpg" alt="banner"></div>
              <div>
                <h4 class="contact-info__title">450,000 client’s interactions!</h4>
                <p class="contact-info__desc">Provide users with appropriate view access to requests, problems, changes,
                  contracts & solutions with experienced professionals.</p>
                <p class="contact-info__desc">As one of the world's largest ITService Providers, we are ready to help.
                </p>
              </div>
              <a href="contact-us.html" class="btn btn__white btn__bordered btn__icon">
                <span>Download Brochure</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.contact-info -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    <!-- ==========================
       Contact layout 2
    ============================ -->
    <section class="contact-layout2 pt-0 pb-80">
      <div class="container">
        <div class="row">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Nosso Escritório em Dourados</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="mailto:atendimento@indexdc.com">atendimento@indexdc.com</a></li>
                <li>Endereço: My Job Coworking - Sala 7 <br> R. Maj. Capilé, 1422 - Jardim Central, Dourados - MS, 79805-010</li>
                <li>Telefone: <a href="tel:556791200537">55 67 9120-0537</a></li>
                <li>Horário: Segunda a Sexta: 7am – 5pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact layout 2 -->


    <?php get_footer(); ?>