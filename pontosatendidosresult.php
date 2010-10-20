<?php
session_start();
?>
<?php
/*
Template Name: Pontos Atendidos Result
*/
?>
<?php
/** Sets up the WordPress Environment. */
require( dirname(__FILE__) . '../../../../wp-load.php' );
?>
<?php get_header (); ?>
  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <div id="pageContent">



      <div id="conteudo">
<h1>Pontos atendidos</h1>
<?php
if ($_POST["estado"]!='')
{
	$_SESSION['uf']=$_POST["estado"];
}
$uf = $_SESSION['uf'];

//######### INICIO Paginação
        $numreg = 10; // Quantos registros por página vai ser mostrado
	$pg=$_GET['pg'];
        if (!isset($pg)) {
                $pg = 0;
        }
	else
	{
		$pg=$pg;
	}
        $inicial = $pg * $numreg;
        
//######### FIM dados Paginação
if ($uf=='TODOS')
{
	$sql2 = "select * from wp_gesac_ponto order by municipio, estabelecimento;";
}
else
{
	$sql2 = "select * from wp_gesac_ponto where uf = '$uf' order by municipio, estabelecimento;";
}
$sql_conta = mysql_query($sql2) or die ("Erro no acesso ao banco");
$quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação


if ($uf=='TODOS')
{
	$sql = "select * from wp_gesac_ponto order by municipio, estabelecimento LIMIT $inicial, $numreg;";
}
else
{
	$sql = "select * from wp_gesac_ponto where uf = '$uf' order by municipio, estabelecimento LIMIT $inicial, $numreg;";
}
$rs = mysql_query($sql) or die ("Erro no acesso ao banco");


echo '<html>
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      </head>
      <body>
      Para a Unidade da Federação: "' . $uf .'" temos os seguintes códigos de pontos Gesac, ordenados por município e estabelecimento. Identifique o seu ponto Gesac, copie e cole o número do campo "Cod Pto Gesac" para o "Código de Ponto Gesac" na página de cadastro do usuário na rede social.<br><br>
			<a href="'. get_bloginfo('url').'/mapa-dos-pontos/">Ver no mapa</a><br><br>';
echo '<a href="#" title="" id="expandir_todos">+ Expandir todos</a>

    <a href="#" title="" id="retrair_todos">- Retrair todos</a>
		<ul id="pontos">';
$i=0;
while ($reg = mysql_fetch_assoc($rs)){
$id = $reg["gesac"];
$municipio = $reg["municipio"];
$estabelecimento = $reg["estabelecimento"];
$logradouro = $reg["logradouro"];
$numero = $reg["numero"];
$bairro = $reg["bairro"];
$complemento = $reg["complemento"];
$cep = $reg["cep"];
$email = $reg["email"];
$latitude = $reg["latitude"];
$longitude = $reg["longitude"];
$nome = $reg["nome"];
$sobrenome = $reg["sobrenome"];
if (($i % 2) == 0)
{
	echo '<li class="parent" id="linha_com_cor">';
}
else
{
	echo '<li class="parent" id="linha_sem_cor">';						
}
echo '<span>Nome do Estabelecimento: '.ucwords($estabelecimento).'</span><br> 
            <span>Nome do Monitor: '.ucwords($nome).' '.ucwords($sobrenome).'</span><br>
            <span>Código do Ponto: '.$id.'</span><br>
            <span>E-mail: '.strtolower($email).'</span><br>           
						<a href="#" id="expandir"><span>+</span></a><br>
            <ul class="sub-menu">';
							if ($logradouro!='')
							{
		          	echo '<li>Logradouro: '.$logradouro.'</li>';
							}
							if ($numero!='')
							{
		          	echo '<li>Número: '.$numero.'</li>';
							}
							if ($bairro!='')
							{
		          	echo '<li>Bairro: '.$bairro.'</li>';
							}
							if ($cep!='')
							{
								echo '<li>CEP: '.$cep.'</li>';
							}
							if ($complemento!='')
							{
								echo '<li>Complemento: '.$complemento.'</li>';
							}
							if ($municipio!='')
							{
								echo '<li>Município: '.$municipio.'</li>';
							}
            echo '</ul>
        </li>';
$i++;
}

echo '</ul>';

include("paginacao.php"); // Chama o arquivo que monta a paginação. ex: << anterior 1 2 3 4 5 próximo >>
      
echo "</body></html>";
?>

                    
   </div>
    </div>    
    
  </div>
  <div id="right-column" class="grid_2">
     <?php get_sidebar(); ?>
  </div>
  <div class="clear"></div>
  </div>
  
<?php get_footer (); ?>
