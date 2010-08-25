    <div id="parceiros">
      <ul>
        <li>
          <a href="http://www.cnpq.br/"><img src="<?php bloginfo('template_url');?>/imgs/cnpq.png" alt="CNPQ"></a>
        </li>
        <li>
          <a href="http://www.gesac.gov.br/"><img src="<?php bloginfo('template_url');?>/imgs/programa_gesac.png" alt="Programa Gesac"></a>
        </li>
        <li>
          <a href=""><img src="<?php bloginfo('template_url');?>/imgs/rede_federal.png" alt="Rede Federal"></a>
        </li>
        <li>
          <a href="http://www.mec.gov.br/"><img src="<?php bloginfo('template_url');?>/imgs/ministerio_educacao.png" alt="Ministério da Educação"></a>
        </li>
        <li>
          <a href="http://www.mc.gov.br/"><img src="<?php bloginfo('template_url');?>/imgs/ministerio_comunicacoes.png" alt="Ministério das Comunicações"></a>
        </li>
      </ul>
    </div>

   <div id="footer">
    <div class="middle">
        <ul class="menu">
            <li><a href="#">Início</a></li>
            <li class=""><a href="<?php echo site_url() ?>/faqs/" title="FAQs">FAQs</a></li>
            <li class=""><a href="<?php echo site_url() ?>/termos-de-uso/" title="Termos de uso">Termos de uso</a></li>
            <li class=""><a href="<?php echo site_url() ?>/quem-faz/" title="Quem Faz">Quem Faz</a></li>
        </ul>

        <p class="text"><a href="http://www.mc.gov.br/">Ministério das Comunicações</a> - Alguns direitos reservados.</p>

        <p class="links">
          <a href="http://www.w3.org/" title="www.w3.org">
            <img src="<?php bloginfo('template_url');?>/imgs/graph_w3c.png" alt="www.w3.org" />
          </a>
          <a href="http://creativecommons.org/licenses/by-nc-sa/2.5/br/" title="www.creativecommons.org">
            <img src="<?php bloginfo('template_url');?>/imgs/graph_cc.png" alt="www.creativecommons.org" />
         </a>
         <a href="http://www.wordpress.org/" title="www.wordpress.org">
           <img src="<?php bloginfo('template_url');?>/imgs/graph_wp.png" alt="www.wordpress.org" />
         </a>
        </p>
        <div class="clear"></div>
    </div>
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

