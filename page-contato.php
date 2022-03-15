
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
    <section class="page-title background-size-auto-mobile page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="<?php 
      $bg = '90.jpg';
      echo bg_change($bg);
      ?>" alt="background"></div>
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
              <form class="contact-panel__form" method="POST" action="<?php echo get_template_directory_uri(); ?>/contact.php" id="contactForm">
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
                      <input type="text" class="form-control" placeholder="Telefone" id="contact-phone"
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
          <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-1 mb-3 pt-5" style="background-color: rgb(40,40,40,6%);">
          <div class="contact-info-box">
              <h4 class="contact__info-box-title">Nosso Escritório em Dourados</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="mailto:atendimento@indexdc.com">atendimento@indexdc.com</a></li>
                <li>Endereço: My Job Coworking - Sala 7 <br> R. Maj. Capilé, 1422 - Jardim Central, Dourados - MS, 79805-010</li>
                <li>Telefone: <a href="tel:556791200537">55 67 9120-0537</a></li>
                <li>Horário: Segunda a Sexta: 7am – 5pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
            <div id="map" class="">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7386.623119283774!2d-54.81839680255253!3d-22.22825469913203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9489a9472f000b95%3A0x580c703ead71fffd!2sMy%20Job%20Coworking!5e0!3m2!1spt-BR!2sbr!4v1645729393315!5m2!1spt-BR!2sbr" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    
    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
      
    </section><!-- /.GoogleMap -->

  

    <?php get_footer(); ?>