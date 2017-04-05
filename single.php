<?php get_header() ?>
  <?php
  if (have_posts()) {
    while(have_posts()){ the_post();
      $tituloPagina = get_the_title();
      $idPost = get_the_id();
      $imgDestaque = wp_get_attachment_image_src( get_post_thumbnail_id($idPost), 'high' );
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
              <article class="col-md-8">
                  <?php the_content() ?>
              </article>
              <aside class="col-md-4">
                <?php get_sidebar() ?>
              </aside>
            </div>

          </div>
        </section>
      <?php
    }
  }
  ?>
<?php get_footer() ?>
