<?php /* template name: Home */ ?>
<?php get_header() ?>
  <section class="banner">
    <?php echo do_shortcode('[rev_slider alias="home"]') ?>
  </section>

  <section class="sobre-empresa inner" style="background-image:url('http://www.leelaestudio.com.br/blog/wp-content/uploads/2009/03/car_2.jpg')">
    <div class="container">
      <h1 class="text-center"> AMC Montagens </h1>
      <p class="text-center">
        Somos uma empresa especializada na fabricação de painéis elétricos
        de baixa e média tensão para os mais diversos seguimentos do mercado,
        oferecendo produtos com alta qualidade e engenharia de ponta. Garantimos
        o melhor custo benefício do mercado, através de uma equipe técnica altamente
        qualificada, com Know-how para atender as expectativas dos nossos clientes,
        buscando inovações tecnológicas e desenvolvimento contínuo.
      </p>
      <p class="text-center">
        <strong>AMC, soluções em projetos e inovação em conceitos de energia.</strpng>
      </p>
    </div>
  </section>

  <section class="produtos inner">
    <div class="container">
      <h2 class="text-center"> Produtos </h2>
      <p class="text-center">
        A AMC traz na sua linha de painéis elétricos inovação, flexibilidade e a melhor tecnologia do mercado.
      </p>

      <div class="row linha-produtos">
        <?php get_template_part('parts/content', 'produtos') ?>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <a href="<?php echo esc_url( home_url( 'produtos' ) ); ?>" class="btn btn-warning btn-block btn-lg">
            Conheça nossos produtos
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="clientes inner">
    <div class="container">
      <h2 class="text-center"> Clientes </h2>
      <p class="text-center">
        Confira alguns clientes satisfeitos com nossos produtos e serviços.
      </p>
      <!-- clientes-slider -->
      <div class="clientes-slider">
        <?php get_template_part('parts/content','sliderClientes') ?>
      </div>

    </div>
  </section>

<?php get_footer() ?>
