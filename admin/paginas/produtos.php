<h1 class="titulo-paginas">Produtos</h1>
<article class="content-usuario">
    <div class="col-esquerda">

        <h2 class="titulo-tabela">Cadastro de produtos</h2>
        <form method="post" class="frmProdutoAdmin">
            <label class="lblLogin">Nome do produto:</label>
            <input type="text" class="inputAdmin inputProd" name="nomeProduto"/>
            <label class="lblLogin">Nome do fabricante:</label>
            <input type="text" class="inputAdmin inputFab" name="nomeFabricante"/>
            <input type="submit" class="inputCadastrar cadProd" value="Cadastrar"/>
        </form>

    </div>

    <div class="col-direita">
        <h2 class="titulo-tabela tituloProdTable">Lista de produtos</h2>
        <div class="linkAtivos">
            <a href="produtos" class="">Ativos</a>
            <a href="produtos/1/inativos" class="">Inativos</a>
        </div>
        <table cellspacing="0"  class="tbl_usuario tbl_direita">

            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="2"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $maximo = 5;

                if (empty($url[1])) {

                    $pc = '1';
                } else {
                    $pc = $url[1];
                }

                $inicio = ($pc - 1) * $maximo;
                //$exec = listarLimite('produtos', 5, "", 'STATUS_PRODUTO', '1');
                if (isset($url[2]) && $url[2] == "inativos") {
                    $exec = listarPaginador('produtos', 'ORDER BY COD_PRODUTO DESC', $inicio, $maximo, " WHERE STATUS_PRODUTO = '0'");

                    $n = contarLinhas("SELECT * FROM produtos WHERE STATUS_PRODUTO = '0'");
                } else {
                    $exec = listarPaginador('produtos', 'ORDER BY COD_PRODUTO DESC', $inicio, $maximo, " WHERE STATUS_PRODUTO = '1'");
                    $n = contarLinhas("SELECT * FROM produtos WHERE STATUS_PRODUTO = '1'");
                }


                while ($rs = mysql_fetch_assoc($exec)) {
                    ?>
                    <tr class="trUsuario">
                        <td class="tdComum"><p class="txtAtivo desce"><?php echo cortar($rs['NOME_PRODUTO'], 15) ?></p></td>
                        <td class="tdComum"><p class="nomeUsuario claro"><?php echo cortar($rs['FABRICANTE'], 15) ?></p></td>
                        <td class="tdComum"><p class="txtAtivo"><?php echo ($rs['STATUS_PRODUTO'] == 1) ? 'Ativo' : 'Inativo' ?></p></td>

                        <td class="tdVerPerfil"><p class="txtVerPerfil" id="<?php echo $rs['COD_PRODUTO'] ?>" style="cursor: pointer">Opções</p></td>
                    </tr>
                    <tr class="dadosUsuario">
                        <td colspan="6">
                            <div class="dados <?php echo $rs['COD_PRODUTO'] ?>" style="height: auto; display: none;">
                                <p class="foto-listagem" style="background-image: url(../imagens_usuarios/)"></p>

                                <div class="box-direito-perfil">
                                    <form method="post" class="alterarProduto">

                                        <p class="nome-usuario-perfil">
                                            <label for="status">Status:</label> 
                                            <select id="status" name="status">
                                                <option  value="1" <?php echo ($rs['STATUS_PRODUTO'] == 1) ? 'SELECTED' : '' ?>>Ativo</option>
                                                <option  value="0" <?php echo ($rs['STATUS_PRODUTO'] == 0) ? 'SELECTED' : '' ?>>Inativo</option>
                                            </select>
                                        </p>

                                        <label class="lblAlterar margem">Nome do produto:</label>
                                        <input type="text" class="inputAdmin inputAlterar" name="nomeProduto" value="<?php echo $rs['NOME_PRODUTO'] ?>"/>
                                        <label class="lblAlterar">Nome do fabricante:</label>
                                        <input type="text" class="inputAdmin inputAlterar" name="nomeFabricante" value="<?php echo $rs['FABRICANTE'] ?>"/>

                                        <input type="hidden" name="cod" value="<?php echo $rs['COD_PRODUTO'] ?>"/>
                                        <input type="submit" name="alterar" class="btnAlterar" value="Alterar"/>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="espaco"></tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <article class="paginacao">
            <?php
            
            $qtdPaginas = $n / 5;
            if (gettype($qtdPaginas) == "double") {
                $qtdPaginas = intval($n / 5) + 1;
            } else {
                $qtdPaginas = $n / 5;
            }

            $pagAtual = $url[1];
            
            if(isset($url[2]) && $url[2] == "inativos"){
                
                $pag2 = $url[2];
                
            }else{
                $pag2 = null;
            }
            for ($i = 1; $i <= $qtdPaginas; $i++) {

                if ($i == 1) {
                    if ($i != $pagAtual) {
                        echo "<a href='produtos/$i/$pag2'><i class='fa fa-angle-double-left'></i></a>";
                    } else {
                        
                    }
                } else {
                    if ($i == $qtdPaginas) {
                        if ($i == $pagAtual) {
                            
                        } else {
                            echo "<a href='produtos/$i/$pag2'><i class='fa fa-angle-double-right'></i></a>";
                        }
                    } else {

                        if ($i == $pagAtual) {
                            echo "<span>" . $i . "</span>";
                        } else {
                            echo "<a href='produtos/$i/$pag2'>" . $i . "</a>";
                        }
                    }
                }
            }
            ?>
        </article>
    </div>