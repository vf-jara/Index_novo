<?php
//Template Name: Sobre
?>
<?php get_header(); ?>


      <!-- ========================
       page title 
    =========================== -->
    <section class="page-title background-size-auto-mobile page-title-layout9 bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="<?php 
      $bg = '8.jpg';
      echo bg_change($bg);
      ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="pagetitle__heading">A Index</h1>
            <p class="pagetitle__desc">Consultoria eficiente para a evolução do seu negócio
            </p>
            <div class="d-flex align-items-center flex-wrap">
              <a href="https://conteudo.indexdc.com.br/especialistas/" target="_blank" class="btn btn__white btn__icon mr-30">
                <span>Solicite um Orçamento</span><i class="icon-arrow-right"></i>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sobre a Index</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ========================
      Secondary Nav
    =========================== -->
    <section class="secondary-nav secondary-nav-internal-navigation sticky-top py-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="nav nav-tabs justify-content-center">
              <a href="#" data-scroll="about" class="nav__link">A Index</a>
              <a href="#" data-scroll="linha-do-tempo" class="nav__link">Nossa Linha do Tempo</a>
              <a href="#" data-scroll="blog-recentes" class="nav__link">Postagens Recentes</a>
              <a href="#" data-scroll="contato" class="nav__link">Entre em Contato</a>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">

            <div class="divider divider-primary mr-30"></div>
            <div class="position-relative offset-xl-1">
              <i class="icon-quote"></i>
              <p>A Index nasceu em 2003 como uma agência de marketing e publicidade tradicional. Em 2015 passamos por uma <strong>transformação digital</strong>, deixando de ser uma agência tradicional para nos tornar uma <strong>consultoria especializada em Marketing Digital e Vendas</strong>, com foco na expansão de negócios através da internet, gerando <strong>Resultados Reais.</strong></p>
              <p>Ao longo dos nossos 19 anos de atuação atendemos empresas de diversos segmentos no mercado: Educacional, Saúde, Indústria, Varejo, Concessionária, Telefonia, Agronegócio, Turismo e SaaS (Software as a Service).</p>
              <p class="mb-40">Toda nossa expertise é comprovada pelas certificações emitidas por empresas parceiras que atuamos.</p>
            </div>
            <div class="clients offset-xl-1 mb-40">
            <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/google-agencia-index-dc.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/google-agencia-index-dc.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/growthhackers_logo_color-1.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/growthhackers_logo_color-1.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/logo-galax-pay-2-1.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/logo-galax-pay-2-1.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/LOGOTIPO_ZENVIA_PARTNERS-Preto-1024x261.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/LOGOTIPO_ZENVIA_PARTNERS-Preto-1024x261.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/moskit-crm-agencia-index-dc.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/moskit-crm-agencia-index-dc.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/onclick_partner_2021-2.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/onclick_partner_2021-2.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/rd_gold-e1612383208233.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/rd_gold-e1612383208233.png" alt="client">
                </div><!-- /.client -->
              </div><!-- /.carousel -->
            </div>
            <div class="position-relative offset-xl-1">              
              <p class="mb-40">Quer fazer sua empresa vender mais?
              Nós vamos te ajudar a implementar estratégias digitais para fazer a sua empresa vender mais através da internet. <a href="https://conteudo.indexdc.com.br/especialistas/" target="_blank">Agende um café conosco!</a>  </p>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-lg-1">
            <div class="sticky-top"  style="top:125px;">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/chess.jpg" alt="about">
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->
<?php /*
    <!-- ======================
    History Timeline
    ========================= -->
    <section class="history-timeline pb-0" id="linha-do-tempo">
      <div class="history-timeline-bg">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/Fundo-BLACK.png" alt="background"></div> 
      </div>
      <div class="container">
        <div class="row heading mb-50">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="d-flex align-items-center mb-20">
              <div class="divider divider-primary mr-30"></div>
              <h2 class="heading__subtitle mb-0">Explore Nossa História!!</h2>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <h3 class="heading__title color-white">Há quase 20 anos transformando negócios</h3>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="position-relative">
        <div class="timeline-bar">
          <div class="container d-flex">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
          </div><!-- /.container -->
        </div><!-- /.timeline-bar -->
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="timeline-carousel-wrapper mb-70">
                <div class="slick-carousel carousel-arrows-light"
                  data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 1}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                  <div class="carousel-block">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #1 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/1.jpg" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Our support works around the clock to ensure your work is
                              secure and monitored safely access to over 99 IT professionals working to help you
                            </p>
                            <h4 class="timeline__year mb-0">2005</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #2 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/2.jpg" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Providing consulting expertise on a specific technology,
                              strategizing on IT, providing a security assessment, or managing IT infrastructure.
                            </p>
                            <h4 class="timeline__year mb-0">2010</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #3 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2015</h4>
                            <p class="timeline__desc">We partner with you to enable your technology so you mfocus
                              on
                              your organization’s mission leverage our talent, and creativity.
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/3.jpg" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #4 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2020</h4>
                            <p class="timeline__desc">Our people are held to the highest level accountability to
                              ensure you are always satisfied with your results and commitment
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/4.jpg" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                  </div><!-- /.carousel-block -->
                  <div class="carousel-block">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #1 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2015</h4>
                            <p class="timeline__desc">We partner with you to enable your technology so you mfocus
                              on
                              your organization’s mission leverage our talent, and creativity.
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/3.jpg" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #2 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2020</h4>
                            <p class="timeline__desc">Our people are held to the highest level accountability to
                              ensure you are always satisfied with your results and commitment
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/4.jpg" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #3 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/1.jpg" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Our support works around the clock to ensure your work is
                              secure and monitored safely access to over 99 IT professionals working to help you
                            </p>
                            <h4 class="timeline__year mb-0">2005</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #4 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/timeline/2.jpg" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Providing consulting expertise on a specific technology,
                              strategizing on IT, providing a security assessment, or managing IT infrastructure.
                            </p>
                            <h4 class="timeline__year mb-0">2010</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                  </div><!-- /.carousel-block -->
                </div><!-- /.carousel -->
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>
      
    </section><!-- /.History Timeline -->
*/?>

   <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50" id="blog-recentes">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Blog</h2>
              <h3 class="heading__title">Artigos Recentes</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">

        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
       
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div align="center" class="post__img">
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium')?>
              </div><!-- /.blog-img -->
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                <!--  <div class="post__meta-cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div> /.blog-meta-cat -->
                  <span class="post__meta-date"><?php echo get_the_date(); ?></span>
                </div>
                <h4 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
                <p class="post__desc"><?php echo get_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" target="_blank" class="btn btn__secondary btn__link">
                  <span>Leia Mais</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
     <?php endwhile;
     wp_reset_postdata();
    ?>
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- =========================
       Banner layout 2
      =========================== -->
    <section class="banner-layout2 pb-0 bg-overlay bg-overlay-gradient" id="contato">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/Fundo-BLACK.png" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner">
            <div class="heading heading-light">
              <h3 class="heading__title mb-30">Veja o que nossos clientes têm a dizer</h3>
            </div>
            <div class="testimonials testimonials-wrapper">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">Consigo me sentir seguro e abraçado pela equipe da Index. Profissionais dedicados e com uma percepção de mercado personalizada para o meu negócio. Minha melhor decisão de investimento em 2021.
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Alex Silveira</h4>
                    <p class="testimonial__meta-desc">Fisioterapeuta</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">A parceria entre Index DC e o Instituto Fisio Deller acontece há mais de 8 anos! O desenvolvimento digital vem crescendo muito rápido e nós precisamos aprender a usar as ferramentas que estão disponíveis. Esse aprendizado foi possível através da Index DC.
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Rodrigo Deller</h4>
                    <p class="testimonial__meta-desc">Instituto Fisio Deller</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">Sou Cliente da  Index DC há mais de 10 anos e com apoio e expertise desse time podemos acompanhar as evoluções tecnológicas relacionadas ao marketing, às mídias sociais, ao engajamento de nossos clientes e de nosso público alvo.
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Cleriston Recalcatti</h4>
                    <p class="testimonial__meta-desc">Confiança Contabilidade e Consultoria</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
              </div>
              <div class="slider-nav">
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/alex-foto.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/rodrigo2.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/cleriston.jpeg" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
              </div><!-- /.slcik-nav -->
            </div><!-- /.testimonials -->
            <div class="divider divider-light w-100 mt-60 mb-60"></div>
            <div class="heading heading-light">
              <h3 class="heading__title mb-30">Nossos Clientes</h3>
            </div>
            <div class="clients mb-20">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 5, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Açotelha.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Açotelha.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Alex-Silveira.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Alex-Silveira.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Probel.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Probel.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Fisio-Deller.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Fisio-Deller.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Confiança.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Confiança.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Move-Mais.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Move-Mais.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Medicall.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Medicall.png" alt="client">
                </div><!-- /.client -->
              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
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
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->
    <?php get_footer(); ?>