<?php
if (is_front_page()) {
  $numPosts = 4;
} else {
  $numPosts = -1;
}

$argsProdutos = array(
  'post_type' => 'portfolio',
  'posts_per_page' => $numPosts
);

  $produtosSite = new wp_query($argsProdutos);
  if ($produtosSite->have_posts()):
    while($produtosSite->have_posts()): $produtosSite->the_post();
      $link = get_the_permalink();
      ?>
        <div class="col-md-3" onclick="location.href='<?php echo $link ?>'">
          <div class="container-image">
            <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
            <div class="overlay">
              <div class="text-overlay">
                <?php the_title() ?>
              </div>
            </div>
          </div>
        </div>
      <?php
    endwhile;
  else:
    echo "Nenhum produto encontrado";
  endif;
