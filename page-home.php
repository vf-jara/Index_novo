
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
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
          <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sliders/1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Transformamos empresas analógicas em digitais</h2>
                  <p class="slide__desc">O cenário mudou e pede estratégias diferentes para a sua empresa continuar
                    crescendo.
                    Conte conosco nessa nova jornada de crescimento digital!
                  </p>
                  <a href="#" class="btn btn__primary btn__icon mr-30">
                    <span>Saiba mais</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <a href="projects-grid.html" class="btn btn__white">Nossos Serviços</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
          <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Transformamos empresas analógicas em digitais</h2>
                  <p class="slide__desc">O cenário mudou e pede estratégias diferentes para a sua empresa continuar
                    crescendo.
                    Conte conosco nessa nova jornada de crescimento digital!
                  </p>
                  <a href="#" class="btn btn__primary btn__icon mr-30">
                    <span>Saiba mais</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <a href="projects-grid.html" class="btn btn__white">Nossos Serviços</a>
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
            <h3 class="heading__title mb-40">Resultados Reais no Mundo Digital
            </h3>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p>O Marketing Digital trouxe uma verdadeira revolução no comportamento do consumidor. Segundo estudos, 82% dos brasileiros já fizeram ao menos uma compra online. Se a sua empresa ainda não faz parte desse ecossistema digital, estamos aqui para mudar isso!</p>
            <p>Somos um Hub de transformação digital de negócios, com estratégias definidas para trazer resultados reais e crescimento contínuo para a sua empresa.
Seja líder do seu mercado. Agende uma conversa conosco!
</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row image-about">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/2.jpg" alt="about">
            </div><!-- /.about-img -->
<!--            <div class="video__btn-wrapper">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title">Watch Our Presentation!</span>
              </a>
            </div> -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
            <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40">

            </ul>
            <div class="clients">
              <p class="text__link text-center mb-10">Certificações e
                <a href="it-solutions.html" class="btn btn__link btn__primary btn__underlined">parcerias</a>
              </p>
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
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
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 4 -->

    <!-- ========================
        Services Carousel
    =========================== -->
    <section class="services-layout2 services-carousel pt-130 bg-gray">
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
    <section class="features-layout1 pb-50">
      <div class="features-bg">
        <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/14.jpg" alt="background"></div>
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
                <i class="icon-software"></i>
              </div>
              <h4 class="feature__title">Consultoria em Marketing</h4>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-dos"></i>
              </div>
              <h4 class="feature__title">Consultoria em Vendas</h4>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-operating-system"></i>
              </div>
              <h4 class="feature__title">Integração Marketing & Vendas</h4>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-machine-learning"></i>
              </div>
              <h4 class="feature__title">Criação de<br> Chatbots</h4>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        
      </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->
<?php /*
    <!-- =========================
       Banner layout 5
      =========================== -->
   <section class="banner-layout5 banner-layout5-sticky bg-parallax pt-130 pb-0">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banners/9.jpg" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between pb-80">
            <div class="heading heading-light mb-50 sticky-top">
              <div class="divider divider-white"></div>
              <h3 class="heading__title mb-30">Easy solutions for all difficult IT problems, keep business safe &
                ensure high availability.
              </h3>
            </div><!-- /.heading -->
            <div class="row">
              <div class="col-sm-6">
                <div class="contact-info">
                  <div class="contact__icon"><i class="icon-map-marker"></i></div>
                  <ul class="contact__list list-unstyled">
                    <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                  </ul>
                </div><!-- /.contact-item-->
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-6">
                <div class="contact-item">
                  <div class="contact__icon"><i class="icon-mail"></i></div>
                  <ul class="contact__list list-unstyled">
                    <li><a href="mailto:SmartData@7oroof.com">Email: SmartData@7oroof.com</a></li>
                    <li><a href="tel:5565454117">Phone: +55 654 541 17</a></li>
                  </ul>
                </div><!-- /.contact-item-->
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-6"></div><!-- /.col-sm-6 -->
            </div><!-- /.row-->
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
            <div class="banner__content">
              <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/3.png" alt="background"></div>
              <div class="scroll__icon"><i class="icon-mouse"></i></div>
              <div class="row heading heading-light">
                <div class="col-sm-6">
                  <h3 class="heading__title mb-30">450,000 client’s interactions!</h3>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                  <p class="heading__desc mb-20">Provide users with appropriate view access to requests, problems,
                    changes, contracts & solutions with experienced professionals.</p>
                  <p class="heading__desc mb-20">As one of the world's largest ITService Providers, we are ready to
                    help.
                  </p>
                  <a href="#" class="btn btn__white btn__bordered btn__xl btn__icon">
                    <span>Download Brochure</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
              <div class="row counters-wrapper counters-light mt-70">
                <!-- counter item #1 -->
                <div class="col-sm-4">
                  <div class="counter-item">
                    <h4 class="counter">6,154</h4>
                    <p class="counter__desc">Projects And Software Developed in 2021</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
                <!-- counter item #2 -->
                <div class="col-sm-4">
                  <div class="counter-item">
                    <h4 class="counter">2,512</h4>
                    <p class="counter__desc">Qualified Employees And Developers With Us</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
                <!-- counter item #3 -->
                <div class="col-sm-4">
                  <div class="counter-item">
                    <h4 class="counter">1,784</h4>
                    <p class="counter__desc">Satisfied Clients We Have Served Globally</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
              </div><!-- /.row -->
            </div><!-- /.banner__content -->
            <div class="semi-banner bg-gray">
              <div class="row row-no-gutter">
                <div class="col-sm-6">
                  <div class="semi-banner__content">
                    <div class="heading">
                      <h3 class="heading__title mb-30">Timely Service, and incident resolutions!!</h3>
                      <p class="heading_desc mb-30">Improve efficiency, leverage tech, and provide better customer
                        experiences with the modern technology services available allover the world. </p>
                      <p class="heading_desc mb-30">Our skilled personnel, utilising the latest processing software,
                        combined with decades of experience.</p>
                    </div><!-- /.heading -->
                  </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6 d-none d-md-block">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banners/7.jpg" alt="banner" class="w-100">
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
            </div><!-- /.semi-banner -->
            <div class="semi-banner bg-gray">
              <div class="row row-no-gutter">
                <div class="col-sm-6">
                  <div class="cta-banner bg-primary">
                    <div class="cta__icon color-white"><i class="icon-developer"></i></div>
                    <h4 class="cta__title color-white">Since 1999</h4>
                    <p class="cta__desc color-white mb-25">Provide users with appropriate view and access to
                      requests,
                      problems, changes,
                      contracts, solutions, and reports.</p>
                    <a href="#" class="btn btn__link btn__white btn__icon px-0">
                      <span>Find Your Solution</span> <i class="icon-arrow-right"></i>
                    </a>
                  </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                  <div class="semi-banner__content pb-0">
                    <div class="heading">
                      <h3 class="heading__title mb-30">We have decades of work experience!</h3>
                    </div><!-- /.heading -->
                    <h4 class="banner__subheading">Consulting & Insights</h4>
                    <p class="heading_desc">Our objective insights steer you toward the right decisions on issues that
                      matter.</p>
                    <h4 class="banner__subheading">Research & Advisory</h4>
                    <p class="heading_desc">Our combination of research, problem solving and hands-on experience.</p>
                    <h4 class="banner__subheading">Strategic Advice</h4>
                    <p class="heading_desc">Tools to help turn strategy into decisions, and execute for measurable
                      results.</p>
                  </div>
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
            </div><!-- /.semi-banner -->
            <section class="awards bg-secondary">
              <div class="row heading heading-light mb-60">
                <div class="col-sm-6">
                  <h3 class="heading__title">Our awards and recognitions</h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-6">
                  <p class="heading__desc">Trusted by the world's best organizations, for 21 years and running, it has
                    been delivering smiles to hundreds of IT advisors, developers, users, and business owners.
                  </p>
                </div><!-- /.col-lg-5 -->
              </div><!-- /.row -->
              <div class="row awards-wrapper">
                <div class="col-sm-12">
                  <div class="awards-carousel-wrapper">
                    <div class="slick-carousel"
                      data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": true,"autoplay": true, "autoplaySpeed": 4000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                      <!-- fancybox item #1 -->
                      <div class="fancybox-item">
                        <div class="fancybox__icon-img">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/awards/icons/1.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                          <h4 class="fancybox__title">CSS Design Award</h4>
                          <p class="fancybox__desc">A web design & development award platform for digital folk,
                            UI/UX
                            peeps
                            and inspiring leaders of the web.
                          </p>
                        </div><!-- /.fancybox-content -->
                      </div><!-- /.fancybox-item -->
                      <!-- fancybox item #2 -->
                      <div class="fancybox-item">
                        <span class="pinned-ribbon"></span>
                        <div class="fancybox__icon-img">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/awards/icons/2.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                          <h4 class="fancybox__title">W3 Design Award</h4>
                          <p class="fancybox__desc">Awards celebrates digital by honoring outstanding Websites, Web
                            Marketing, Video, Sites, Apps & Social content.
                          </p>
                        </div><!-- /.fancybox-content -->
                      </div><!-- /.fancybox-item -->
                      <!-- fancybox item #3 -->
                      <div class="fancybox-item">
                        <div class="fancybox__icon-img">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/awards/icons/3.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                          <h4 class="fancybox__title">The FWA Award</h4>
                          <p class="fancybox__desc">Showcasing innovation every day since 2000, our mission is to
                            showcase
                            cutting edge creativity, regardless
                          </p>
                        </div><!-- /.fancybox-content -->
                      </div><!-- /.fancybox-item -->
                      <!-- fancybox item #4 -->
                      <div class="fancybox-item">
                        <div class="fancybox__icon-img">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/awards/icons/3.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                          <h4 class="fancybox__title">WWW Awards</h4>
                          <p class="fancybox__desc">The awards that recognize the talent and effort of the best web
                            designers, developers and agencies in the world.
                          </p>
                        </div><!-- /.fancybox-content -->
                      </div><!-- /.fancybox-item -->
                    </div><!-- /.carousel  -->
                  </div><!-- /.awards-carousel-wrapper -->
                </div><!-- /.col-12 -->
              </div><!-- /.row -->
            </section>
          </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 5 -->
*/?>
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
                <a href="blog-single-post.html">
                <?php the_post_thumbnail('medium')?>
              </div><!-- /.blog-img -->
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                <!--  <div class="post__meta-cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div> /.blog-meta-cat -->
                  <span class="post__meta-date"><?php echo get_the_date(); ?></span>
                </div>
                <h4 class="post__title"><a href="#"><?php the_title(); ?></a>
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
    <section class="banner-layout2 pb-0 ">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/14-2.jpg" alt="background"></div>
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
                  <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the chance
                    to
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
            </div><!-- /.testimonials -->
            <div class="divider divider-light w-100 mt-60 mb-60"></div>
            <div class="heading heading-light">
              <h3 class="heading__title mb-30">Nossos Clientes</h3>
            </div>
            <div class="clients">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/1.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/1.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/2.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/2.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/3.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/3.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/4.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/4.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/5.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/5.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/6.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/6.png" alt="client">
                </div><!-- /.client -->
                <div class="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/7.png" alt="client">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/7.png" alt="client">
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
