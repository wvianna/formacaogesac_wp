<?php
        $quant_pg = ceil($quantreg/$numreg);
        $quant_pg++;
        
        // Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
        if ( $pg > 0) { 
                echo "<a href=http://localhost/wp/portal/resultado-pontos-atendidos/?pg=".($pg-1) ."class=pg><b>&laquo; anterior</b></a>";
        } else { 
                echo "<font color=#CCCCCC>&laquo; anterior</font>";
        }
        
        // Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO
        for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                // Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
                if ($pg == ($i_pg-1)) { 
                        echo " <span class=pgoff>[$i_pg]</span> ";
                } else {
                        $i_pg2 = $i_pg-1;
                        echo " <a href=http://localhost/wp/portal/resultado-pontos-atendidos/?pg=$i_pg2 class=pg><b>$i_pg</b></a> ";
                }
        }
        
        // Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
        if (($pg+2) < $quant_pg) { 
                echo "<a href=http://localhost/wp/portal/resultado-pontos-atendidos/?pg=".($pg+1)." class=pg><b>próximo &raquo;</b></a>";
        } else { 
                echo "<font color=#CCCCCC>próximo &raquo;</font>";
        }
?>
