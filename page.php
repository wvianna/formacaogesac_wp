<?php get_header (); ?>

  <div id="mainContent" class="container_11">
    <div id="content" class="grid_9">
    <div id="pageContent">
      <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post() ?>
        <h1><?php the_title(); ?></h1>  
        <div class="postContent">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    </div>

   <div id="right-column" class="grid_2">
    <ul class="menu">
    <li id="right_pontos"><a href="<?php echo get_bloginfo('url').'/pontos-atendidos/'; ?>">Pontos Atendidos</a></li>
    <li id="right_equipe"><a href="<?php echo get_bloginfo('url').'/conheca-a-equipe'; ?>">Conheça a Equipe</a></li>
    <li id="right_biblioteca"><a href="http://gesacbd.iff.edu.br/">Biblioteca Digital</a></li>
    <li id="right_saladeaula"><a href="http://www.formacao.gesac.gov.br/ead/">Sala de Aula</a></li>
    <li id="right_redesocial"><a href="http://gesac.ifce.edu.br/wp">Rede Social</a></li>
    <li id="right_fotosevideos"><a href="<?php echo get_bloginfo('url').'/fotos-e-videos/'; ?>">Fotos e Vídeos</a></li>
    <li id="right_servicospublicos"><a href="http://www.brasil.gov.br/navegue_por/servicos">Serviços Públicos</a></li>
    <li id="right_kitsos"><a href="<?php echo get_bloginfo('url').'/kit-sos/'; ?>">Kit SOS</a></li>
    <li id="right_redmine"><a href="http://gauss.iff.edu.br:3690/">Redmine</a></li>
    </ul>
    <h2>Redes Sociais</h2>
    <ul class="menu">
    <li id="right_twitter"><a href="#">@programagesac</a></li>
    <li id="right_orkut"><a href="#">Orkut</a></li>
    <li id="right_youtube"><a href="#">Youtube</a></li>
    </ul>
              <?php get_sidebar(); ?>
    </div>
    <div class="clear"></div>
  </div>

<?php get_footer (); ?>
