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
                    <p class="img-preview-perfil" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                    <p class="nome-usuario-preview pad-preview"><?php echo $rs['NOME_USUARIO']; ?></p>
                    <p class="emailUsuarioPreview pad-preview"><?php echo $rs['EMAIL_USUARIO']; ?></p>
                    <p class="cidade-preview pad-preview"><?php echo $rs['CIDADE_USUARIO'] . ' - ' . $rs['UF_USUARIO'] ?></p>
                    <button class="btnEditPerfil">Editar Perfil</button>
                    <hr/>
                </div>
                <div id="corpo-preview-perfil">
                    <p class="titulo-preview">Minhas Publicações</p>
                    <div class="box-resenha-preview">
                        <p class="imagem-resenha-box" style="background-image: url(imagens/moto-g-handson-6-853.png);"></p>
                        <p class="titulo-resenha-box">Moto G 2</p>
                        <p class="avaliacao-resenha"><img src="imagens/estrelas.png" alt="a" /></p>
                    </div>

                    <div class="box-resenha-preview">
                        <p class="imagem-resenha-box" style="background-image: url(imagens/playstation-4.png);"></p>
                        <p class="titulo-resenha-box">Playstations 4</p>
                        <p class="avaliacao-resenha"><img src="imagens/estrelas.png" alt="a" /></p>
                    </div>

                    <div class="box-resenha-preview">
                        <p class="imagem-resenha-box" style="background-image: url(imagens/geladeira_samsung_4.jpg);"></p>
                        <p class="titulo-resenha-box">Ta cheia!!!</p>
                        <p class="avaliacao-resenha"><img src="imagens/estrelas.png" alt="a" /></p>
                    </div>

                    <div class="box-resenha-preview">
                        <p class="imagem-resenha-box" style="background-image: url(imagens/impressora-hp-officejet-pro-8100-cabeca-queimada-office-jet-746501-MLB20345294863_072015-F.jpg);"></p>
                        <p class="titulo-resenha-box">HP queimada!</p>
                        <p class="avaliacao-resenha"><img src="imagens/estrelas.png" alt="a" /></p>
                    </div>

                </div>
            </article>

        <?php } ?>
    </article>

    <article class="slide">
        <div id="imagem">

        </div>
    </article>

</section>

<section id="conteudo-ranking">
    
    
    <article class="ranking">
        
        <hgroup class="area-titulo">
            <h1 id="titulo-ranking-produtos">RANKING DE PRODUTOS</h1>
        </hgroup>
        
        <section class="colocacoes">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            
            
        </section>
        
    </article>
    
    
    <article class="ranking-right">
        
        <hgroup class="area-titulo">
            <h1 id="titulo-ranking-marcas">RANKING DE MARCAS</h1>
        </hgroup>
        
        <section class="colocacoes">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            
            
        </section>
        
    </article>
    
    <article class="ranking-right">
        
        <hgroup class="area-titulo">
            <h1 id="titulo-ranking-usuarios">RANKING DE USUARIOS</h1>
        </hgroup>
        
        <section class="colocacoes">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            <hr class="divisao-ranking">
            
            <div class="elemento-ranking">
                <p class="img-ranking" style="background-image: url(imagens/Pirates4JackSparrowPosterCropped.jpg)"></p>
                <p class="titulo-elemento-ranking">Moto G 2</p>
                <p class="avaliacao-ranking"><img src="imagens/avaliacao-ranking.png"</p>
            </div>
            
            
            
        </section>
        
    </article>
</section>