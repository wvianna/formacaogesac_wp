<?php get_header (); ?>

	<div id="cse-search-results"></div>

	        <script type="text/javascript">

	                var googleSearchIframeName = "cse-search-results";

	                var googleSearchFormName = "cse-search-box";

	                var googleSearchFrameWidth = 474;

	                var googleSearchDomain = "www.google.com";

	        	var googleSearchPath = "/cse";

	        </script>

	  	<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

	  </div>

	  <div id="mainContent" class="container_11">

		  <div id="content" class="grid_9" style="">  

			  <p>

			  	<h2 class="pagetitle"> Resultado da busca para 

					<?php 

						$allsearch = &new WP_Query("s=$s&showposts=-1"); 

                        			$key = wp_specialchars($s, 1); 

                        			$count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); 

						echo $key; _e('</span>'); _e(' — '); 

   						echo $count . ' '; _e('referência(s)'); wp_reset_query(); 

					?>                

				</h2>

    			</p>

    			<div id="pageContent">

      				<ul class="mundo-digital hl">         

         				<?php $posts=query_posts("$query_string&posts_per_page=5&paged=".get_query_var('paged')); ?>

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

                                        <?php else : ?>

				        	<br>		

						<h3 class="entry-title"><?php _e( 'Referência não encontrada.' ); ?></h3>

					<?php endif; ?>

      				</ul>

      				<div><?php posts_nav_link(); ?></div>

    			</div>    

    

  		</div>

  		<div id="right-column" class="grid_2">

     			<?php get_sidebar(); ?>

  		</div>

  		<div class="clear"></div>

 	 </div>

  

<?php get_footer (); ?>
