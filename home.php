
<?php
// Template Name: Blog
?>
<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-blog");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout16 text-center bg-parallax">
      <div class="bg-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/Fundo-BLACK.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-10">Blog Index</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">
          <!-- post Item #1 -->
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       
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

          <?php endwhile;?>


        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center mb-0">
                <li><?php previous_posts_link('<i class="icon-arrow-left"></i>'); ?></li>
                <li><?php next_posts_link('<i class="icon-arrow-right"></i>'); ?></li>
              </ul>
            </nav><!-- .pagination-area -->
            
  <?php  else : endif; ?>

          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <?php get_footer(); ?>
