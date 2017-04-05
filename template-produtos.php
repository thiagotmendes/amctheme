<?php /* template name: Produtos */ ?>
<?php get_header() ?>
  <section class="titulo-site bg-parallax" style="background-image:url(<?php echo $imgDestaque[0] ?> )">
    <div class="container">
      <h1> <?php the_title() ?> <h/h1>
    </div>
  </section>

  <section class="conteudo-interno inner">
    <div class="container">
      <div class="row linha-produtos">
        <?php
          get_template_part('parts/content', 'produtos');
        ?>
      </div>
    </div>
  </section>
<?php get_footer() ?>
