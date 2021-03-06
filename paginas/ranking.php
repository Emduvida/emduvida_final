<!--
<section id="topo-home">

<article class="form-cadastro-home">

<?php if (!isset($_SESSION['usuarioLogado'])) { ?>

                        <div id="box-form-cadastro">
                            <h3 class="titulo-cadastro-home">Cadastre-se em nosso site:</h3>
                            <hr class="linha-cadastro-home"/>
                            <form method="post" class="frmCadastro"  name="cad1">
                                <label for="email" class="lblPadrao fonte">E-mail</label>
                                <p class="erroEmail erros"></p>
                                <input type="email" name="EMAIL_USUARIO" id="email" class="frm-padrao input-cadastro"/>  

                                <label for="ConfEmail" class="lblPadrao fonte">Confirmar e-mail</label>
                                <p class="erroConfEmail erros"></p>
                                <input type="email" name="" id="ConfEmail" class="frm-padrao input-cadastro"/>  

                                <label for="senha" class="lblPadrao fonte">Senha</label>
                                <p class="erroSenha erros"></p>
                                <input type="password" name="SENHA_USUARIO" id="senha" class="frm-padrao input-cadastro"/>  

                                <label for="ConfSenha" class="lblPadrao fonte">Confirmar senha</label>
                                <p class="erroConfSenha erros"></p>
                                <input type="password" name="" id="ConfSenha" class="frm-padrao input-conf-senha"/>

                                <input type="submit" value="Prosseguir" class="btnEnviar" id="enviarCad"/>

                            </form>


                            <a href="" class="btnFaceBook">Entrar com o Facebook</a>
                        </div>
    <?php
} else {

    $rs = selecionar('usuario', 'COD_USUARIO', $_SESSION['COD_USUARIO']);
    ?>

                        <article id="preview-perfil">
                            <div class="cabecalho-preview-perfil">
                                <p class="img-preview-perfil" style="background-image: url(imagens_usuarios/<?php echo $rs['IMAGEM_PERFIL'] ?>)"></p>
                                <p class="nome-usuario-preview pad-preview"><?php echo $rs['NOME_USUARIO']; ?></p>
                                <p class="emailUsuarioPreview pad-preview"><?php echo $rs['EMAIL_USUARIO']; ?></p>
                                <p class="cidade-preview pad-preview"><?php echo $rs['CIDADE_USUARIO'] . ' - ' . $rs['UF_USUARIO'] ?></p>
                                
                                
                                <button id="btnlogout" >
                                    <p id="icone-logout"><i class="fa fa-sign-out"></i></p>
                                </button>
                                
                                <button class="btnEditPerfil">MEU PERFIL</button>
                                
                                
                            </div>
                            
                            <div id="corpo-preview-perfil">
                                <p class="titulo-preview">Últimas Publicações</p>
    <?php
    $exec = listarLimite('resenha', 3, " WHERE COD_USUARIO  = '{$rs['COD_USUARIO']}' ORDER BY COD_RESENHA DESC");
    while ($res = mysql_fetch_assoc($exec)) {

        $resImg = selecionar('imagens', 'COD_RESENHA', $res['COD_RESENHA']);
        ?>
                                            
                                            
                                            
                                            <div class="box-resenha-preview">
                                                <p class="imagem-resenha-box" style="background-image: url(img_resenhas/<?php echo (empty($resImg['CAMINHO_IMAGEM'])) ? 'no-image.jpg' : $resImg['CAMINHO_IMAGEM'] ?>);"></p>
                                                <p class="titulo-resenha-box"><?php echo resumo($res['titulo_resenha'], 6) ?></p>
                                                <p class="avaliacao-resenha"><img src="imagens/estrelas.png" alt="a" /></p>
                                            </div> 
    <?php } ?>
                            </div>
                        </article>

<?php } ?>
    </article>

    <article class="slide">
        <div id="imagem">

        </div>
    </article>

</section>-->

<section id="conteudo-ranking">


    <article class="ranking">

        <hgroup class="area-titulo">
            <h1 id="titulo-ranking-produtos">RANKING DE PRODUTOS</h1>
        </hgroup>

        <section class="colocacoes">

            <?php
            $exec = mysql_query("SELECT *,count(*) as NrVezes FROM resenha group by COD_PRODUTO ORDER BY NrVezes DESC LIMIT 20");
            while ($rs = mysql_fetch_assoc($exec)) {
                $resImg = selecionar('imagens', 'COD_RESENHA', $rs['COD_RESENHA']);
                $resProd = selecionar('produtos', "COD_PRODUTO", $rs['COD_PRODUTO']);
                ?>
                <div class="elemento-ranking">
                    <p class="img-ranking" style="background-image: url(img_resenhas/<?php echo $resImg['CAMINHO_IMAGEM']; ?>)"></p>

                    <a href="ver-resenha/<?php echo $rs['COD_RESENHA'] ?>/<?php echo $rs['slugfy'] ?>"><p class="titulo-elemento-ranking"><?php echo $resProd['NOME_PRODUTO']; ?></p></a>
                    <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"/></p>
                </div>

                <hr class="divisao-ranking">
            <?php } ?>

        </section>

    </article>


    <article class="ranking-right">

        <hgroup class="area-titulo">

            <h1 id="titulo-ranking-marcas">RANKING DE MARCAS</h1>

        </hgroup>

        <section class="colocacoes">
            <?php
            $exec2 = mysql_query("SELECT *,count(*) as NrVezes FROM resenha group by COD_PRODUTO ORDER BY NrVezes DESC LIMIT 20");
            $codProd = array();
            $i = 0;
            while ($rs = mysql_fetch_assoc($exec2)) {
                $resImg = selecionar('imagens', 'COD_RESENHA', $rs['COD_RESENHA']);
                $resProd = selecionar('produtos', 'COD_PRODUTO', $rs['COD_PRODUTO']);
                $codProd[$i] = $rs['COD_PRODUTO'];
                $i++;
                ?>
                <?php
            }

            $produtos = implode(',', $codProd);
            ?>

            <?php
            $execFab = mysql_query("SELECT distinct(FABRICANTE),COD_PRODUTO FROM emduvida.produtos WHERE COD_PRODUTO in($produtos)");

            while ($rs = mysql_fetch_assoc($execFab)) {
                $resenha = selecionar('resenha', 'COD_PRODUTO', $rs['COD_PRODUTO']);
                $imagem = selecionar('imagens', 'COD_RESENHA', $resenha['COD_RESENHA']);
                ?>
                <div class="elemento-ranking">
                    <p class="img-ranking" style="background-image: url(img_resenhas/<?php echo $imagem['CAMINHO_IMAGEM']; ?>)"></p>

                    <p class="titulo-elemento-ranking"><?php echo $rs['FABRICANTE'] ?></p>

                    <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"></p>

                </div>

                <hr class="divisao-ranking">
            <?php } ?>

        </section>

    </article>

    <article class="ranking-right">

        <hgroup class="area-titulo">
            <h1 id="titulo-ranking-usuarios">RANKING DE USUARIOS</h1>
        </hgroup>

        <section class="colocacoes">
            <?php
            $exec = mysql_query("SELECT COD_USUARIO,count(*) as NrVezes FROM resenha group by COD_USUARIO ORDER BY NrVezes DESC LIMIT 20");
            while ($rs = mysql_fetch_assoc($exec)) {
                $resUser = selecionar('usuario', 'COD_USUARIO', $rs['COD_USUARIO']);
                ?>
            
                <div class="elemento-ranking">
                    <p class="img-ranking" style="background-image: url(imagens_usuarios/<?php echo $resUser['IMAGEM_PERFIL'] ?>)"></p>
                    <p class="titulo-elemento-ranking"><?php echo $resUser['NOME_USUARIO'] ?></p>
                    <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"></p>
                </div>

                <hr class="divisao-ranking">
                
            <?php } ?>

        </section>

    </article>
</section>