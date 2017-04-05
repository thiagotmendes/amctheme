<?php get_header() ?>
<section class="titulo-site bg-parallax" style="background-image:url(<?php echo $imgDestaque[0] ?> )">
  <div class="container">
    <h1> Notícias <h/h1>
  </div>
</section>

<section class="conteudo-interno inner">
  <div class="container">
    <div class="row">
      <?php
      if (have_posts()):
        while(have_posts()): the_post();
          ?>
            <div class="col-md-4 noticias">
                <div class="img-noticia">
                  <?php the_post_thumbnail( 'high', array( 'class' => 'img-destaNoticia' ) ); ?>
                </div>
                <h3> <?php the_title() ?> </h3>
                <p> <?php the_excerpt_limit(30) ?> </p>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <a href="<?php the_permalink() ?>" class="btn btn-warning btn-block"> Leia Mais <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                  </div>
                </div>
            </div>
          <?php
        endwhile;
      else:
        echo "Nenhuma notícia encontrada";
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer() ?>
