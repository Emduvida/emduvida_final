<header id="topo">
    <article id="topo-cima">
        <div id="topo-cima-conteudo">

            <img src="imagens/icon-search.png" class="icon-search" alt=""/>


            <nav id="menu">
                <ul>
                    <li class="liMenu"><a href="">inicio</a></li>
                    <li class="liMenu"><a href="ranking">ranking</a></li>
                    <li class="liMenu"><a href="">resenhas</a></li>
                    <li class="liMenu"><a href="">sobre nós</a></li>
                </ul>
            </nav>
            <div id="box-logo">
                <img src="imagens/logo.png" alt="" class="img-logo"/>
            </div>
        </div>

    </article>

    <article id="topo-baixo">
        <div id="topo-baixo-conteudo">

            <div id="botoes-topo-baixo">
                <?php if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] == true){?>
                    <a href="resenhe-agora" id="btnResenha">Resenhe agora!</a>
                <?php }else{ ?>
                <a href="" id="btnEntrar">Entrar</a>
                <a href="login" id="btnResenha">Resenhe agora!</a>
                <?php } ?>
                 
            </div>
            <div id="redes-sociais">
                <img src="" alt="" class="sociais"/>
                <img src="" alt="" class="sociais"/>
                <img src="" alt="" class="sociais"/>
            </div>

        </div>

    </article>
    <div id="frmPesquisa">
        <div id="frmPesquisa-conteudo">
            <form method="post" class="frmPesquisa">
                <input type="text" placeholder="Pesquise..." class="pesquisar"/>
                <input type="image" alt="asd" src="imagens/icon-search.png" class="imgPesquisar"/>
            </form> 
        </div>
    </div>

    <div  class="login">
        <div id="login">
            <div id="boxLogin">
                <form method="post" action="" class="frmLogin" name="frmLogin">
                    <label class="lblPadrao fonte">E-mail:</label>
                    <input type="email" name="emailLogin" class="frm-padrao inputLogin"/>
                    
                    <label class="lblPadrao fonte">Senha:</label>
                    <input type="password" name="senhaLogin" class="frm-padrao inputLogin"/>
                    
                    <input type="submit" id="btnEntrar2" name="logar" value="Entrar"/>
                    <a href="" class="texto-esqueceusenha">Esqueceu sua senha?</a>
                </form>
                
            </div>
        </div>

    </div>
    

</header>