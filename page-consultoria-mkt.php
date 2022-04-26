
<?php
// Template Name: Consultoria em Marketing
?>
<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-servicos");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title background-size-auto-mobile page-title-layout9 bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="<?php 
      $bg = 'xadrez.jpg';
      echo bg_change($bg);
      ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Consultoria em Marketing</h1>
            <p class="pagetitle__desc">Concentre-se no seu negócio e nós te ajudamos com o marketing!
            </p>
            <div class="d-flex align-items-center flex-wrap">
              <a href="request-quote.html" class="btn btn__white btn__icon mr-30">
                <span>Solicite um Orçamento</span><i class="icon-arrow-right"></i>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="it-solutions.html">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page">Consultoria em Marketing</li>
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
              <a href="#" data-scroll="about" class="nav__link">Descrição</a>
              <a href="#" data-scroll="banner3" class="nav__link">Principais Serviços</a>
              <a href="#" data-scroll="case-studies" class="nav__link">Estudos de Caso</a>
              <a href="#" data-scroll="contato" class="nav__link">Entre em Contato</a>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================
      About Layout 3
    =========================== -->
    <section id="about" class="about-layout2 animated-Progressbars">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="heading mb-40">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
              </div>
              <h3 class="heading__title mb-40">Afinal, o que é uma consultoria em Marketing?
              </h3>
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
        <div class="row about__Text">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class=" position-relative">
              <i class="icon-quote"></i>
              <p>Independentemente do tamanho do negócio, toda empresa tem o desejo de aumentar as vendas e os lucros. Para isso, uma das melhores coisas a se fazer é contratar uma consultoria em marketing.</p>
              <p>Com esse serviço, o seu negócio terá o suporte de profissionais qualificados, que realmente entendem de marketing e que otimizarão os seus investimentos em publicidade e comunicação.</p>
              <p>Nossa consultoria em marketing define as melhores ações a serem realizadas nessa área. Dessa forma, os investimentos são direcionados da melhor forma possível e gerando melhores resultados em vendas, reputação e imagem</p>
              <h5>Como é feito o trabalho de uma consultoria em marketing?</h5>
              <p>O trabalho começa realizando um diagnóstico para identificar métricas, indicadores e outros pontos que podem ser melhorados.
              Nossos consultores também analisam relatórios de vendas, mapeiam a presença da sua marca nas redes sociais e outros canais, entre outras atividades.</p>
              <p>Também é feito um completo estudo de públicos do seu negócio, para que as estratégias de marketing sejam pensadas para atingir a quem realmente pode se tornar um lead ou consumidor da empresa.</p>
              <p>A partir de todo esse trabalho é montado um diagnóstico, que apresenta como está o marketing da empresa atualmente e o que deve ser melhorado para que os resultados desejados sejam alcançados.</p>
              <p>Assim, propomos um planejamento estratégico de marketing, que conta com todos os serviços e ações que devem ser realizadas em sua empresa.</p>
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-lg-1">
            <div class="sticky-top"  style="top:125px;">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/plan.jpg" alt="about">
            </div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 3 -->

    <!-- =========================
           Banner layout 3
    =========================== -->
    <section id="banner3" class="banner-layout3 pb-70 bg-overlay bg-overlay-gradient">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/desfoque-04.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 fancybox-light text-center">
            <div class="heading heading-light mb-60">
              <h3 class="heading__title mb-30">Quais são os principais serviços que<br>nossa consultoria em marketing oferece?</h3>
              <h4 class="heading__desc">Veja algumas das estratégias de marketing que <br> traremos para você!
              </h4>
            </div><!-- /.heading -->
          </div>
        </div>  <!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 fancybox-light"> 
            <!-- fancybox item #1 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
              <i class="icone-alvo"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Inbound marketing</h4>
                <p class="fancybox__desc">Criação e compartilhamento de conteúdo de interesse específico para seu público, utilizando técnicas de SEO para ranqueamento nos melhores buscadores da internet.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-xl-3 -->  
          <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 fancybox-light"> 
            <!-- fancybox item #2 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icone-design"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Design</h4>
                <p class="fancybox__desc">Nossos designers realizam melhorias na identidade visual da empresa, como a renovação de peças gráficas, logotipos, sites e blogs.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->           
          </div><!-- /.col-xl-3 -->  
          <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 fancybox-light">
            <!-- fancybox item #3 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
              <i class="icone-campanha"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Campanhas pagas</h4>
                <p class="fancybox__desc">Gerenciamento de Google Ads e o Facebook Ads. A ideia é agir estrategicamente para que os anúncios sejam mostrados apenas para os públicos de interesse.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-xl-3 -->  
          <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 fancybox-light">
            <div class="fancybox-item">
                <div class="fancybox__icon">
                <i class="icone-social"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title">Social media</h4>
                  <p class="fancybox__desc">Nossos estrategistas de marketing realizam melhorias na produção de conteúdo e no relacionamento em redes como o Instagram, o Facebook, o Twitter, entre outras.
                  </p>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
          </div><!-- /.col-xl-3 -->  

        </div>  <!-- /.row -->
            

          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 fancybox-light">
            <div class="heading heading-light mb-60">
              <h3 align="center" class="heading__title mb-30">Para saber mais sobre o assunto e aumentar as suas vendas,<br> <a href="https://conteudo.indexdc.com.br/especialistas/" target="_blank">agende um café com os nossos especialistas.</a><br> Teremos satisfação em atendê-lo!</h3>
            </div><!-- /.heading -->
          </div> 
         </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 3 -->

    
    <!-- =====================
           Clients
    ======================== -->
    <section class="clients pt-50 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text__link text-center mb-30">Certificações e 
              <a href="it-solutions.html" class="btn btn__link btn__primary btn__underlined">Parcerias</a>
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


    <!-- =========================== 
      portfolio Grid
    ============================= -->
    <section id="case-studies" class="portfolio-grid portfolio-grid-carousel pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading mb-50">
              <div class="d-flex align-items-center">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Histórias de Sucesso</h2>
              </div>
              <h3 class="heading__title mb-0">Últimos Estudos de Caso</h3>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">         
        
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": true, "autoplay": true,"autoplaySpeed": 4000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <?php $the_query = new WP_Query( ['posts_per_page=3', 'category_name'=>'Estudos De Caso']); ?>
        <?php while ($the_query -> have_posts('Estudos de Caso')) : $the_query -> the_post(); ?>
              <!-- portfolio item #1 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                <?php the_post_thumbnail('medium')?>
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <h4 class="portfolio__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p class="portfolio__desc"><?php echo get_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn__secondary btn__link">
                    <span>Leia Mais</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <?php endwhile;
               wp_reset_postdata();
              ?>
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid  -->


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