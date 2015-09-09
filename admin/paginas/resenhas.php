<h1 class="titulo-paginas">Resenhas</h1>
<button class="btnPesquisarResenha">Pesquisar</button>
<form method="post" class="formularioPesquisa">
    <input type="search" name="buscarResenha" class="inputAdmin inputSearchResenha"/>

</form>


<a href="resenhas/1">Ativos</a>
<a href="resenhas/1/inativos">Inativos</a>
<article class="resenhas-lista-admin">
    <?php
    $maximo = 16;

    if (empty($url[1])) {

        $pc = '1';
    } else {
        $pc = $url[1];
    }

    $inicio = ($pc - 1) * $maximo;
    //$exec = listarLimite('produtos', 5, "", 'STATUS_PRODUTO', '1');
    if (isset($url[2]) && $url[2] == "inativos") {
        $exec = listarPaginador('resenha', 'ORDER BY COD_RESENHA DESC', $inicio, $maximo, " WHERE STATUS_RESENHA = '0'");

        $n = contarLinhas("SELECT * FROM resenha WHERE STATUS_RESENHA = '0'");
    } else {
        $exec = listarPaginador('resenha', 'ORDER BY COD_RESENHA DESC', $inicio, $maximo, " WHERE STATUS_RESENHA = '1'");

        $n = contarLinhas("SELECT * FROM resenha WHERE STATUS_RESENHA = '1'");
    }


    while ($rs = mysql_fetch_assoc($exec)) {
        $resImg = selecionar('imagens', 'COD_RESENHA', $rs['COD_RESENHA']);
        ?>

    <a href="../ver-resenha/<?php echo $rs['COD_RESENHA'] ?>/<?php echo $rs['slugfy'] ?>">
        <div class="box-resenha-vistas" style="background-image: url(../img_resenhas/<?php echo (empty($resImg['CAMINHO_IMAGEM'])) ? 'no-image.jpg' : $resImg['CAMINHO_IMAGEM'] ?>);" id="<?php echo $rs['COD_RESENHA'] ?>">

            <div class="rdp-box-masivista r<?php echo $rs['COD_RESENHA'] ?>">



                <div class="topo-box-vistas">
                    <p class="codResenha"><?php echo $rs['COD_RESENHA'] ?> - </p>  
                    <?php
                    $res = selecionar('usuario', "COD_USUARIO", $rs['COD_USUARIO']);
                    ?>
                    <span class="codResenha"><?php echo resumo($res['NOME_USUARIO'], 10) ?></span>

                </div>

                <div class="corpo-box-maisvistas">
                    <p class="titulo-resenha-txt">
                        <?php echo resumo($rs['titulo_resenha'], 10) ?>
                    <div class="dados-gerais">
                        <span class="comentView"><i class="fa fa-comments-o"></i> 10</span>
                        <span class="comentView"><i class="fa fa-eye"></i> <?php  echo (empty($rs['VISUALIZACOES_RESENHA'])) ? '0' : $rs['VISUALIZACOES_RESENHA'] ?></span> 
                    </div>
                    </p>
                </div>



            </div>
        </div>
</a>

    <?php } ?>
    
    <article class="paginacao paginacao_resenha">
        <?php
        $qtdPaginas = $n / $maximo;
        if (gettype($qtdPaginas) == "double") {
            $qtdPaginas = intval($n / $maximo) + 1;
        } else {
            $qtdPaginas = $n / $maximo;
        }

        $pagAtual = $url[1];

        if (isset($url[2]) && $url[2] == "inativos") {

            $pag2 = $url[2];
        } else {
            $pag2 = null;
        }
        $pagina = "resenhas";
        for ($i = 1; $i <= $qtdPaginas; $i++) {

            if ($i == 1) {
                if ($i != $pagAtual) {
                    echo "<a href='$pagina/$i/$pag2'><i class='fa fa-angle-double-left'></i></a>";
                } else {
                    
                }
            } else {
                if ($i == $qtdPaginas) {
                    if ($i == $pagAtual) {
                        
                    } else {
                        echo "<a href='$pagina/$i/$pag2'><i class='fa fa-angle-double-right'></i></a>";
                    }
                } else {

                    if ($i == $pagAtual) {
                        echo "<span>" . $i . "</span>";
                    } else {
                        echo "<a href='$pagina/$i/$pag2'>" . $i . "</a>";
                    }
                }
            }
        }
        ?>
    </article>
</article>