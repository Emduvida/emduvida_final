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
                    while ($res = mysql_fetch_assoc($exec)){
                        
                        $resImg = selecionar('imagens', 'COD_RESENHA', $res['COD_RESENHA']); 
                    ?>
                    
                    
                    
                    <div class="box-resenha-preview">
                        <p class="imagem-resenha-box" style="background-image: url(img_resenhas/<?php echo (empty($resImg['CAMINHO_IMAGEM'])) ? 'no-image.jpg' : $resImg['CAMINHO_IMAGEM']  ?>);"></p>
                        <p class="titulo-resenha-box"><?php echo resumo($res['titulo_resenha'],6) ?></p>
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

</section>

<section class="conteudo-home">
    <div id="titulo-home">

        <hr class="linha-titulo-home"/>
        <h1 class="titulo-home">Ranking</h1>
        <div class="bolinha"></div>
    </div>


    <article class="box-ranking-resenha">
        <h3 class="titulo-box-ranking">ranking de produtos</h3>
        <p class="titulo-top-ranking">top 5</p>

        <ul class="ulRanking">
            <li class="liRanking">Moto G    <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking">Iphone 6  <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking">Galaxy s5  <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking">Asus 5     <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking">Asus 2     <img src="imagens/estrelas.png" alt="a"/></li>
        </ul>

        <a href="ranking" class="linkVejaMais">Veja Mais</a>
    </article>

    <article class="box-ranking-resenha box-resenha-top">
        <div class="resenha" id="1" style="background-image: url(imagens/moto-g-handson-6-853.png)">
            <div class="topo-box"></div>
            <div class="rdp-box 1" >
                <p class="titulo-resenha-txt">
                    Moto G
                </p>
                <p class="resumo-resenha-txt">
                    O iPhone 5c é inovador, o designer é lindo...
                </p>
            </div>
        </div>
        <div class="resenha right" id="2" style="background-image: url(imagens/534A1583.jpg)">
            <div class="topo-box"></div>
            <div class="rdp-box 2" >
                <p class="titulo-resenha-txt">
                    Moto G
                </p>
                <p class="resumo-resenha-txt">
                    O iPhone 5c é inovador, o designer é lindo...
                </p>
            </div>
        </div>
    </article>

    <article class="box-ranking-resenha box-resenha-top sem-margem">
        <div class="resenha" id="3" style="background-image: url(imagens/Samsung-Galaxy-S5.jpg)">
            <div class="topo-box"></div>
            <div class="rdp-box 3">
                <p class="titulo-resenha-txt">
                    Moto G
                </p>
                <p class="resumo-resenha-txt">
                    O iPhone 5c é inovador, o designer é lindo...
                </p>
            </div>
        </div>
        <div class="resenha right" id="4" style="background-image: url(imagens/thumb-98432-zenfone-resized.jpg)">
            <div class="topo-box"></div>
            <div class="rdp-box 4">
                <p class="titulo-resenha-txt">
                    Moto G
                </p>
                <p class="resumo-resenha-txt">
                    O iPhone 5c é inovador, o designer é lindo...
                </p>
            </div>
        </div>
    </article>

    <article class="box-ranking-resenha margem-resenha">
        <h3 class="titulo-box-ranking">Ranking de marcas</h3>
        <p class="titulo-top-ranking azulClaro">top 5</p>

        <ul class="ulRanking">
            <li class="liRanking liMarcas">Moto G    <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking liMarcas">Iphone 6  <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking liMarcas">Galaxy s5  <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking liMarcas">Asus 5     <img src="imagens/estrelas.png" alt="a"/></li>
            <li class="liRanking liMarcas">Asus 2     <img src="imagens/estrelas.png" alt="a"/></li>
        </ul>

        <a href="ranking" class="linkVejaMais">Veja Mais</a>
    </article>

    <article class="maisVistas">

        <div id="titulo-home">
            <hr class="linha-titulo-home"/>
            <h1 class="titulo-home">Mais Vistas</h1>
            <div class="bolinha"></div>
        </div>


        <article class="resenhasMaisVistas">

            <?php
            $exec = listarLimite('resenha', 20, " ORDER BY VISUALIZACOES_RESENHA DESC");
            while ($rs = mysql_fetch_assoc($exec)) {
                
                $resImg = selecionar('imagens', 'COD_RESENHA', $rs['COD_RESENHA']); 
                ?>
                <a href="ver-resenha/<?php echo $rs['COD_RESENHA'] ?>/<?php echo $rs['slugfy'] ?>">

                    <div class="box-resenha-vistas" style="background-image: url(img_resenhas/<?php echo (empty($resImg['CAMINHO_IMAGEM'])) ? 'no-image.jpg' : $resImg['CAMINHO_IMAGEM'] ?>);" id="<?php echo $rs['COD_RESENHA'] ?>">

                        <div class="rdp-box-masivista r<?php echo $rs['COD_RESENHA'] ?>">
                            <div class="topo-box-vistas">
                                <?php
                                $res = selecionar('usuario', "COD_USUARIO", $rs['COD_USUARIO']);
                                ?>
                                <div class="dados-usuarios"><p class="fotoUsuario" style="background-image: url(imagens_usuarios/<?php echo $res['IMAGEM_PERFIL'] ?>)"></p><span><?php echo resumo($res['NOME_USUARIO'], 10) ?></span></div>
                                <p class="views"><i class="fa fa-eye"></i><?php echo $rs['VISUALIZACOES_RESENHA'] ?></p>
                            </div>
                            <div class="corpo-box-maisvistas">
                                <p class="titulo-resenha-txt">
                                    <?php echo resumo($rs['titulo_resenha'], 10)?>
                                    <?php $prod = selecionar('produtos', 'COD_PRODUTO', $rs['COD_PRODUTO']); ?>
                                <span><?php echo $prod['NOME_PRODUTO']; ?></span>
                                </p>
                                
                                <p class="resumo-resenha-txt">
                                    <?php echo resumo($rs['CORPO_RESENHA'], 100) ?>
                                </p>
                            </div>

                            <!--<div class="fundo-box-maisvistas"></div>-->

                            <!--<div class="topo-box-maisvista"></div>-->



                        </div>
                    </div>

                </a>
                <?php
            }
            ?>
        </article>
    </article>
</section>