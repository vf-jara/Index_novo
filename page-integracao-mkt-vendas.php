
<?php
// Template Name: Integração Marketing e Vendas
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
    <section class="page-title page-title-layout9 bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page-titles/9.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Integração Marketing e Vendas</h1>
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
                <li class="breadcrumb-item active" aria-current="page">Integração Marketing e Vendas</li>
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
          <?php /*    <a href="#" data-scroll="banner3" class="nav__link">Principais Benefícios</a> */?>
              <a href="#" data-scroll="case-studies" class="nav__link">Estudos de Caso</a>
              <a href="#" data-scroll="banner1" class="nav__link">Entre em Contato</a>
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
              <h3 class="heading__title mb-40">
              </h3>
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
        <div class="row about__Text">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-11">
            <div class=" position-relative">
              <i class="icon-quote"></i>
              <p>No livro “Imagens da organização”, o autor Gareth Morgan compara as empresas com as máquinas, que dependem de várias peças para funcionar. Portanto, se uma peça para, todo o mecanismo para!</p>
              <p>Ou seja, para que uma empresa funcione bem, todas as “peças” devem trabalhar em conjunto, uma ajudando a outra a fazer o seu trabalho da melhor maneira possível. É por isso que a integração entre marketing e vendas é tão importante!</p>
              
              <h5>Smarketing: conheça a metodologia que promove a integração entre marketing e vendas</h5>
              <p>A integração entre marketing e vendas tem um nome: smarketing. Trata-se da junção dos termos em inglês “sales”, que significa vendas, e marketing. </p>
              <p>A intenção do smarketing é alinhar os dois setores em questão, para que eles possam trabalhar juntos na geração de oportunidades de negócio da empresa. </p>
              <p>De nada adianta o setor de marketing fazer um trabalho incrível e atrair leads para a empresa, caso o departamento de vendas não esteja preparado para bem atender essas pessoas, por exemplo.</p>
              <p>Como explica Morgan, para que uma empresa atinja os seus objetivos, não basta que cada setor faça o seu trabalho. É preciso que todos trabalhem juntos para que o “mecanismo” funcione. </p>
              
            </div>

          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 3 -->

   
<?php /*
    <!-- =========================
           Banner layout 3
    =========================== -->
    <section id="banner3" class="banner-layout3 pb-70">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 fancybox-light">
            <div class="heading heading-light mb-60">
              <h3 class="heading__title mb-30">Veja os principais benefícios de contratar uma consultoria de vendas</h3>
              <h4 class="heading__desc">Contratar uma consultoria de vendas é bastante benéfico para empresas de todos os segmentos. Veja, a seguir, as principais vantagens que são obtidas!
              </h4>
            </div><!-- /.heading -->
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 fancybox-light"> 
            <!-- fancybox item #1 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-coding"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Criação de um método de vendas eficiente</h4>
                <p class="fancybox__desc">O consultor de vendas irá propor um método de vendas organizado e eficiente para a sua empresa. Assim, se evitam falhas e gargalos que resultam na fuga de clientes.<br>O funil de vendas, por exemplo, é um método muito eficiente e altamente explorado atualmente, principalmente nas estratégias de marketing digital.

                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
            <!-- fancybox item #2 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-programming2"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
              <h4 class="fancybox__title">Redução de custos</h4>
                <p class="fancybox__desc">De nada adianta você investir muito dinheiro em telemarketing, caso o seu público não goste desse tipo de abordagem, por exemplo.<br>Com a consultoria de vendas, o seu negócio terá um plano de abordagem alinhado com o perfil do seu público. Isso torna as atividades mais certeiras e o custo é reduzido.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->           
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 fancybox-light">
            <!-- fancybox item #3 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-script"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Otimização do tempo</h4>
                <p class="fancybox__desc">Como haverá um processo de vendas muito bem estruturado, o tempo dos vendedores será otimizado.<br>Não será mais necessário perder muitas horas do dia para solucionar problemas, por exemplo. Afinal, tudo será muito bem organizado.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
            <div class="heading heading-light mb-60">
              <h3 align="left" class="heading__title mb-30">A Index é uma agência focada em gerar resultados reais e que pode ajudá-lo nesse momento.<br> <a href="https://conteudo.indexdc.com.br/especialistas/" target="_blank">Entre em contato conosco</a><br> e converse com nossos especialistas!</h3>


            </div><!-- /.heading -->
          </div><!-- /.col-xl-6 -->  
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 fancybox-light">

          </div> 
         </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 3 -->
*/?>
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
       Banner layout 1
      =========================== -->
    <section id="banner1" class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banners/5.jpg" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
            <div>
              <div class="heading heading-light">
                <h3 class="heading__title mb-30">All Kinds Of IT Services That
                  Vow Future Business Success!</h3>
                <p class="heading__desc mb-30">We are experienced professionals who understand that It services is
                  changing,
                  and are partners who care about your success. As one of the world's largest IT Service Providers,
                  our
                  deep pool of certified engineers and IT staff are ready to help.
                </p>
              </div><!-- /.heading -->
              <div class="d-flex align-items-center mb-40">
                <a href="#" class="btn btn__white btn__icon mr-30">
                  <span>Get Started</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="request-quote.html" class="btn btn__white btn__bordered">Request Demo</a>
              </div>
            </div>
            <div class="testimonials testimonials-wrapper">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                    chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                    <p class="testimonial__meta-desc">Digital Media Manager</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                    make an impact, you’ve come to the right place. We will transform your business through our
                    techniques! </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">John Peter</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                    chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Ayman</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                    make an impact, you’ve come to the right place. We will transform your business through our
                    techniques! </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">John Peter</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">My project was a simple & small task, but the
                    persistence and
                    determination turned it into an awesome and great project which make me happy .
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">John Peter</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
              </div>
              <div class="slider-nav">
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/1.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/2.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/3.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/2.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/thumbs/3.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
              </div><!-- /.slcik-nav -->
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
    </section><!-- /.Banner layout 1 -->


    <?php get_footer(); ?>