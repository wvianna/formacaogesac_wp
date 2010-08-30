<?php
/*
Template Name: Mundo Digital
*/
?>

<?php get_header (); ?>

  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <p>
    	<h1><?php the_title(); ?></h1>
    </p>
    <div id="pageContent">
        <?php $categoria = $_GET['categoria']; ?>
	<?php query_posts("cat=$categoria");?>
	<?php if( have_posts() ) : ?>
      	<?php while( have_posts() ) : the_post() ?>
        <h2><?php the_title(); ?></h2>  
        <div class="postContent">
           <p>
     	   <?php the_content(); ?> 
           </p>
           <br>
        </div>
        <?php endwhile; ?>
     	<?php endif; ?>
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


