<?php
// Template Name: Home
?>
<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-home");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1,"arrows": true, "dots": true, "speed": 4500,"fade": true,"cssEase": "ease"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-gradient" >
          <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sliders/Homem-negocios-2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Transformamos empresas analógicas em digitais</h2>
                  <p class="slide__desc">O cenário mudou e pede estratégias diferentes para a sua empresa continuar
                    crescendo.
                    Conte conosco nessa nova jornada de crescimento digital!
                  </p>
                  <a href="https://conteudo.indexdc.com.br/agende-uma-reuniao" class="btn btn__primary btn__icon mr-30">
                    <span>Saiba mais</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <a href="#servicos-grid" data-scroll="servicos-grid" class="btn btn__white">Nossos Serviços</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
          <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sliders/Mulher-de-negocios-2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Transformamos empresas analógicas em digitais</h2>
                  <p class="slide__desc">O cenário mudou e pede estratégias diferentes para a sua empresa continuar
                    crescendo.
                    Conte conosco nessa nova jornada de crescimento digital!
                  </p>
                  <a href="https://conteudo.indexdc.com.br/agende-uma-reuniao" class="btn btn__primary btn__icon mr-30">
                    <span>Saiba mais</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <a href="#servicos-grid" data-scroll="servicos-grid" class="btn btn__white">Nossos Serviços</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
      About Layout 4
    =========================== -->
    <section class="about-layout4 pt-130 pb-0">
      <div class="container">
        <div class="row heading">
          <div class="col-12">
            <div class="d-flex align-items-center mb-20">
              <div class="divider divider-primary mr-30"></div>
              <h2 class="heading__subtitle mb-0">Marketing só é Marketing quando Vende!</h2>
            </div>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h3 class="heading__title mb-40">Seja Líder do seu mercado, invista em Marketing!</h3>
            <p><strong>82%</strong> dos <strong>brasileiros</strong> já fizeram <strong>compras online</strong>. Se a sua empresa não se posiciona no digital, você está <strong>perdendo vendas!</strong></p>
            <p>Somos um Hub de <strong>transformação digital de negócios</strong>, com estratégias definidas para trazer <strong>resultados reais</strong> e <strong>crescimento contínuo</strong> para a sua empresa.
            Seja líder do seu mercado. Agende uma conversa conosco!</p>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__img">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/about/about1.jpg" alt="about">
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 4 -->
    <section class="clients pt-50 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text__link text-center mb-30">Certificações e 
              <a href="#" class="btn btn__link btn__primary btn__underlined">Parcerias</a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row align-items-center">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
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
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/zenvia-agencia-index-dc.png" alt="client">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partners/zenvia-agencia-index-dc.png" alt="client">
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
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- ========================
        Services Carousel
    =========================== -->
    <section class="services-layout2 services-carousel pt-130">
      <div class="container">
        <div class="row heading mb-40">
          <div class="col-12">
            <div class="d-flex align-items-center">
              <div class="divider divider-primary mr-30"></div>
              <h2 class="heading__subtitle mb-0">O que fazemos?</h2>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-7">
            <h3 class="heading__title">Somos especialistas em aumentar vendas!</h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <p class="heading__desc">Usamos estratégias de Growth Hacking para fazer a sua empresa subir de nível! Através das nossas consultorias implementamos processos que integram o marketing e vendas da sua empresa, com implantação e integração de CRM, jornada de compras, qualificação de leads, Inbound e Outbound Marketing.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        

      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ======================
    Features Layout 1
    ========================= -->
    <section class="features-layout1 pb-50" id="servicos-grid">
      <div class="features-bg bg-overlay bg-overlay-gradient">
        <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/desfoque-04.jpg" alt="background"></div>
      </div>
      <div class="container">
        <div class="row heading heading-light mb-30">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="divider divider-primary mb-20"></div>
            <h3 class="heading__title">Conheça nossos serviços</h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">

          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
              <i class="icone-megaphone"></i>
              </div>
              <h4 class="feature__title">Consultoria em Marketing</h4>
              <a href="/consultoria-em-marketing/" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icone-vendas"></i>
              </div>
              <h4 class="feature__title">Consultoria em Vendas</h4>
              <a href="/consultoria-em-vendas/" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <span class="icone-integra"></span>
              </div>
              <h4 class="feature__title">Integração Marketing & Vendas</h4>
              <a href="/integracao-mkt-e-vendas/" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icone-chat"></i>
              </div>
              <h4 class="feature__title">Criação de<br> Chatbots</h4>
              <a href="/criacao-de-chatbots/" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->

        <?php /*
        <div class="row counters-wrapper counters-light mt-70">
                <!-- counter item #1 -->
                <div class="col-lg-4 col-md-4">
                  <div class="counter-item text-center text-md-left">
                    <h4 class="counter">6,154</h4>
                    <p class="counter__desc">Reais Investidos em Marketing</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
                <!-- counter item #2 -->
                <div class="col-lg-4 col-md-4">
                  <div class="counter-item text-center text-md-left">
                    <h4 class="counter">2,512</h4>
                    <p class="counter__desc">Leads obtidos para nossos clientes</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
                <!-- counter item #3 -->
                <div class="col-lg-4 col-md-4">
                  <div class="counter-item text-center text-md-left">
                    <h4 class="counter">1,784</h4>
                    <p class="counter__desc">algum outro dado aleatório</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
              </div><!-- /.row -->       */ ?>
      </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->
    
    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
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
      <section class="banner-layout2 pb-0 bg-overlay bg-overlay-gradient">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/bg-preto.png" alt="background"></div>
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
                data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Açotelha.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/Açotelha.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/alexsilveira.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/alexsilveira.png" alt="client">
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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/movemais1.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/movemais1.png" alt="client">
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
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

    <?php get_footer(); ?>