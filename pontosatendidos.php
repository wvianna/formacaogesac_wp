<?php
/*
Template Name: Pontos Atendidos
*/
?>
<?php get_header (); ?>
  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <div id="pageContent">
<p>O Ministério das Comunicações escolheu 739 Pontos Gesac para participação na primeira fase do Projeto. Essa seleção poderá ser alterada durante a execução do Projeto, de acordo com os seguintes critérios:<br><br>

 - desativação do Ponto;<br>
 - outras situações, conforme disponibilidade de recursos, que ficam sujeitas à avaliação do Ministério.<br><br>

Por tratar-se de um projeto piloto, nesta fase inicial que vai até maio de 2011, não haverá inscrições de novos Pontos para a participação no Projeto.<br><br>

<b>Veja abaixo a lista dos Pontos atendidos:</b></p>

<?php
echo'  
  <label>
    Unidade da Federação
  </label>
  <form action="';echo get_bloginfo('url').'/resultado-pontos-atendidos/"'; echo ' method="post">
   <select name="estado" id="estado">  
    <option value="">Todos</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
   </select>
   <INPUT type="submit" value="Enviar"> 
  </form>';
?>
                    
   
    </div>    
    
  </div>
  <div id="right-column" class="grid_2">
     <?php get_sidebar(); ?>
  </div>
  <div class="clear"></div>
  </div>
  
<?php get_footer (); ?>
