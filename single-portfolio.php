<?php get_header() ?>
  <?php
  if (have_posts()) {
    while(have_posts()){ the_post();
      $idPost = get_the_id();
      ?>
        <!-- style="background-image:url(<?php echo $imgDestaque[0] ?> )" -->
        <section class="titulo-site bg-parallax" >
          <div class="container">
            <h1> <?php the_title() ?> <h/h1>
          </div>
        </section>
        <section class="conteudo-interno inner">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <article class="descTecnica">
                  <?php the_content() ?>
                </article>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <?php
                  $galeriaImg = get_field('galeria');
                  foreach ($galeriaImg as $img) {
                    ?>
                      <div class="col-md-3">
                        <div class="img-produtos">
                          <a href="<?php echo $img['url'] ?>" rel="lightbox[<?php echo $idPost ?>]">
                            <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>" class="img-responsive">
                          </a>
                        </div>
                      </div>
                    <?php
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>
        </section>
      <?php
    }
  }
  ?>
<?php get_footer() ?>
