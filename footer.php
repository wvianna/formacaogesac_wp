   <div id="footer">
   <div class="container_11">
   		<div class="grid_4">
            <a href="#">Início</a> •
            <a href="<?php echo site_url() ?>/faqs/" title="FAQs">FAQs</a> •
            <a href="<?php echo site_url() ?>/termos-de-uso/" title="Termos de uso">Termos de uso</a> •
            <a href="<?php echo site_url() ?>/quem-faz/" title="Quem Faz">Quem Faz</a>
		</div>
		<div class="grid_4" style="text-align:center">
        <p class="text"><a href="http://www.mc.gov.br/">Ministério das Comunicações</a> - Alguns direitos reservados.</p>
		</div>
		<div class="grid_3" style="text-align:right">
          <a href="http://www.w3.org/"><img src="<?php bloginfo('template_url');?>/imgs/graph_w3c.png" alt="W3C" /></a>
          <a href="http://creativecommons.org/licenses/by-nc-sa/2.5/br/" title="Creative Commons BY-NC-SA"><img src="<?php bloginfo('template_url');?>/imgs/graph_cc.png" alt="CC" /></a>
         <a href="http://www.wordpress.org/"><img src="<?php bloginfo('template_url');?>/imgs/graph_wp.png" alt="Wordpress" /></a>
        </div>
        <div class="clear"></div>
	</div>
	</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

 </body>
</html>

