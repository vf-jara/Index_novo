
<?php
// Template Name: Consultoria em Vendas
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

      $bg = 'alvo.jpg';
      echo bg_change($bg);
    
      ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
            <h1 class="pagetitle__heading">Consultoria em Vendas</h1>
            <p class="pagetitle__desc">Estratégias eficientes para definir seu publico e potencializar suas vendas
            </p>
            <div class="d-flex align-items-center flex-wrap">
              <a href="https://conteudo.indexdc.com.br/especialistas/" class="btn btn__white btn__icon mr-30">
                <span>Solicite um Orçamento</span><i class="icon-arrow-right"></i>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="it-solutions.html">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page">Consultoria em Vendas</li>
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
              <a href="#" data-scroll="banner3" class="nav__link">Principais Benefícios</a>
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
              <h3 class="heading__title mb-40">Consultoria em Vendas
              </h3>
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
        <div class="row about__Text">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class=" position-relative">
              <i class="icon-quote"></i>
              <p>A sua empresa está com dificuldades para encontrar novos métodos para abordar clientes em potencial? O faturamento está abaixo do esperado e você precisa vender mais? Se situações como essas estão acontecendo, uma boa saída é contratar uma consultoria de vendas.</p>
              <p>Após a chegada do marketing digital, é normal que algumas empresas mais tradicionais e que ainda não dominam esse tema precisem de ajuda para vender mais. É esse o papel da consultoria de vendas!</p>
              
              <h5>Entenda o que é consultoria de vendas</h5>
              <p>A consultoria de vendas pode ser definida como um processo em que um ou mais consultores, com bastante experiência na área, analisam todas as atividades do setor.</p>
              <p>O objetivo desse processo é desenvolver um diagnóstico com a atual situação do negócio. A partir disso, devem ser listados os eventuais erros e gargalos, para que sejam solucionados.</p>
              <p>O consultor de vendas, com base no diagnóstico elaborado, desenvolve um planejamento estratégico bastante detalhado. Nesse documento, são listadas todas as atividades e estratégias a serem executadas pelos vendedores.</p>
              <p>A ideia é que os vendedores explorem todos os canais de vendas usados pelo público-alvo da empresa. Para isso, ter uma forte parceria com o setor de marketing é de fundamental importância.</p>
              <h5>Sinais de que a sua empresa precisa de uma consultoria de vendas</h5>
              <p>Existem alguns sinais que mostram se a sua empresa está precisando contratar uma consultoria de vendas. O primeiro deles é a dificuldade em alcançar os objetivos do negócio, como alcançar as metas financeiras do mês.</p>
              <p>Outro sinal é a necessidade de atualização! Caso a sua equipe não domine bem as novas técnicas e abordagens de vendas, precisa se atualizar para não ser ultrapassado. O consultor também pode ajudar nesse sentido!</p>
              <p>Contar com vendedores pouco capacitados também é um sinal de que a sua empresa precisa de uma consultoria. Isso porque os consultores podem identificar as principais fraquezas do time e propor treinamentos para que elas sejam corrigidas.</p>
              <p>E então, será que a sua empresa precisa de uma consultoria de vendas? Pense nisso e veja se esse serviço não é necessário para impulsionar o seu negócio!</p>
            </div>

          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-lg-1">
            <div class="sticky-top"  style="top:125px;">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/70.jpg" alt="about">
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
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 fancybox-light">
            <div class="heading heading-light mb-60">
              <h3 align="center" class="heading__title mb-30">Veja os principais benefícios de nossa consultoria de vendas</h3>
            </div><!-- /.heading -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 fancybox-light"> 
            <!-- fancybox item #1 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
              <i class="icone-estrategia"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Criação de um método de vendas eficiente</h4>
                <p class="fancybox__desc">O consultor de vendas irá propor um método de vendas organizado e eficiente para a sua empresa. Assim, se evitam falhas e gargalos que resultam na fuga de clientes.

                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
            </div><!-- /.col-xl-4 -->
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 fancybox-light"> 
            <!-- fancybox item #2 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
               <i class="icone-carteira"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
              <h4 class="fancybox__title">Redução de custos</h4>
                <p class="fancybox__desc">Com a consultoria de vendas, o seu negócio terá um plano de abordagem alinhado com o perfil do seu público. Isso torna as atividades mais certeiras e o custo é reduzido.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->           
          </div><!-- /.col-xl-4 -->
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 fancybox-light">
            <!-- fancybox item #3 -->
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icone-tempo"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Otimização do tempo</h4>
                <p class="fancybox__desc">Como haverá um processo de vendas muito bem estruturado, o tempo dos vendedores será otimizado. Não será mais necessário perder muitas horas do dia para solucionar problemas.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  fancybox-light">
            <div class="heading heading-light mb-60">
            <h3 align="center" class="heading__title mb-30">Para saber mais sobre o assunto e aumentar as suas vendas,<br> <a href="https://conteudo.indexdc.com.br/especialistas/" target="_blank">agende um café com os nossos especialistas.</a><br> Teremos satisfação em atendê-lo!</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-xl-6 -->  
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 fancybox-light">

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