<?php get_header() ?>
  <?php
  if (have_posts()) {
    while(have_posts()){ the_post();
      $tituloPagina = get_the_title();
      $idPost = get_the_id();
      $imgDestaque = wp_get_attachment_image_src( get_post_thumbnail_id($idPost), 'high' );
      ?>
        <section class="titulo-site bg-parallax" style="background-image:url(<?php echo $imgDestaque[0] ?> )">
          <div class="container">
            <h1> <?php the_title() ?> <h/h1>
          </div>
        </section>
        <section class="conteudo-interno inner">
          <div class="container">
            <article class="">
              <?php if ($tituloPagina == "Clientes" or $tituloPagina == "Fornecedores"): ?>
                <div class="ajusta-img">
                  <?php the_content() ?>
                </div>
              <?php else: ?>
                <?php the_content() ?>
              <?php endif; ?>

            </article>
          </div>
        </section>
      <?php
    }
  }
  ?>
<?php get_footer() ?>
