<?php
/*
Template Name: Mundo Digital
*/
?>

<?php get_header (); ?>

  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <p>
    	<h2><?php the_title(); ?></h2>
    </p>
    <div id="pageContent">
      <ul class="mundo-digital hl">
        
        <?php $categoria = $_GET['categoria']; ?>
	<?php query_posts("cat=$categoria&posts_per_page=5&paged=".get_query_var('paged'))?>
	<?php if( have_posts() ) : ?>
      	  <?php while( have_posts() ) : the_post() ?>           
               <li>
   		   <h3><a href="<?php the_permalink(); ?>" ><?php the_title() ?></a></h3>
  		   <p>
   			<span class="date"><?php the_date('d/m/Y') ?></span>
			<?php limit_chars(get_the_content(), 380); ?>
		   </p>
                </li>  	   
          <?php endwhile; ?>
     	<?php endif; ?>
        
      </ul>
      <div><?php posts_nav_link(); ?></div>
    </div>    
    
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
