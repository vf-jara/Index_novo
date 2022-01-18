<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Index | Hub de transformação de negócios">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Index | Hub de transformação de negócios</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="sk-cube-grid">
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
      </div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header 
    =========================== -->
    <header class="header header-transparent">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

          <a class="navbar-brand" href="index.html">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="/" class="nav__item-link active">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Sobre</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="sobre.html" class="nav__item-link">Quem somos</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="careers.html" class="nav__item-link">Trabalhe conosco</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Serviços</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="servicos.html" class="nav__item-link dropdown-menu-title">O que fazemos</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="/consultoria-em-marketing/">Consultoria em
                              Marketing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Consultoria em
                              Vendas</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Integração
                              Marketing & Vendas</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Criação de
                              Chatbots</a>
                          </li> <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Cases de Sucesso</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Educação</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Saúde</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Indústrias</a></li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single-industry.html">E-commerce</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single-industry.html">Negócios locais</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Varejo</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Our Blog</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-grid.html" class="nav__item-link">Case Studies Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-carousel.html" class="nav__item-link">Case Studies Carousel</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-classic.html" class="nav__item-link">Case Studies Classic</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-single.html" class="nav__item-link">Single Case Study</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contatos</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="request-quote.html" class="btn action__btn-contact">Solicite um Orçamento</a>
            </li>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
    </header><!-- /.Header -->
    
    <?php wp_head(); ?>