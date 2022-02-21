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
    <header class="header header-transparent" id="header-principal">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

          <a class="navbar-brand" href="/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="/" id="nav-home" class="nav__item-link">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" id="nav-sobre" class="dropdown-toggle nav__item-link">Sobre</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="/sobre/" class="nav__item-link">Quem somos</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="/trabalhe-conosco/" class="nav__item-link">Trabalhe conosco</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" id="nav-servicos" class="dropdown-toggle nav__item-link">Serviços</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-12 dropdown-menu-col">
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="/consultoria-em-marketing/">Consultoria em
                              Marketing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="/consultoria-em-vendas/">Consultoria em
                              Vendas</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="integracao-mkt-e-vendas/">Integração
                              Marketing & Vendas</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="/criacao-de-chatbots/">Criação de
                              Chatbots</a>
                          </li> <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link" id="nav-blog">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="/blog/"  class="nav__item-link">Nosso Blog</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="/estudos-de-caso/" class="nav__item-link">Estudos de Caso</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="/" class="nav__item-link">Materiais</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="/contato/" id="nav-contato" class="nav__item-link">Contatos</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="/" class="btn action__btn-contact">Solicite um Orçamento</a>
            </li>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
    </header><!-- /.Header -->
    
    <?php wp_head(); ?>