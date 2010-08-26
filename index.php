<?php get_header (); ?>

  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <div id="left-column" class="grid_5 alpha">
      <div id="left-column-top">
      
      <div class="hlTabs">
              <ul class="hlNav">
            	<li><a href="#hl-1" title="">&#8226;</a></li>
                <li><a href="" title="">&#8226;</a></li>
                <li><a href="" title="">&#8226;</a></li>
                <li><a href="" title="">&#8226;</a></li>
                <li><a href="" title="">&#8226;</a></li>
            </ul>
            <!-- loop -->
                <div id="hl-1">
				<a class="thumb" href=""><img src="<?php bloginfo('template_url');?>/imgs/_eraseme2.jpg" alt="alt" /></a>
                <h2><a href="#">Título da Matéria</a></h2>
                <p>Nulla pellentesque pellentesque commodo. Pellentesque sed mauris vel nisi interdum bibendum et a arcu...</p>
                </div>
            <!-- /loop -->
        	
		</div>
 
      
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column-top") ) : ?>
	  <?php endif ?>
      </div>
      <div id="left-column-bottom">  
      
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column-bottom") ) : ?>
	  <?php endif ?>
      </div>
    </div>

    <div id="center-column" class="grid_4 omega">
      <div id="center-column-top">
      
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column-top") ) : ?>
	  <?php endif ?>
      </div>
      <div id="center-column-bottom">
    
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column-bottom") ) : ?>
	  <?php endif ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
    <div id="right-column" class="grid_2">
    <ul class="menu">
    <li id="right_pontos"><a href="#">Pontos Atendidos</a></li>
    <li id="right_equipe"><a href="#">Conheça a Equipe</a></li>
    <li id="right_biblioteca"><a href="#">Biblioteca Digital</a></li>
    <li id="right_saladeaula"><a href="#">Sala de Aula</a></li>
    <li id="right_redesocial"><a href="#">Rede Social</a></li>
    <li id="right_fotosevideos"><a href="#">Fotos e Vídeos</a></li>
    <li id="right_servicospublicos"><a href="#">Serviços Públicos</a></li>
    <li id="right_kitsos"><a href="#">Kit SOS</a></li>
    <li id="right_redmine"><a href="#">Redmine</a></li>
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

