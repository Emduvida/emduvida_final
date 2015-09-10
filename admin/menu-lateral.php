<nav class="menu-lateral">

    <div class="navegacao">
        <a href="">inicio</a>
        <a href="usuarios/1">Usuários</a>
        <a href="resenhas/1">resenhas</a>
        <a href="produtos/1">produtos</a>
        <a href="">banners</a>
        <a href="">comentarios</a>
    </div>
    <div class="estatisticas">
        <ul>
            <li>
                <p class="content-li">

                    <i class="fa fa-user fa-2x"></i>
                    <?php $n = contarLinhas("SELECT * FROM usuario WHERE STATUS_USUARIO = '1'") ?>
                    <span class="txtGrande">3.5000</span>
                    <span class="txtPequeno">usuários</span>

                </p>
            </li>
            <li>
                <p class="content-li">

                    <i class="fa fa-newspaper-o"></i>

                    <span class="txtGrande">15.000</span>
                    <span class="txtPequeno">resenhas</span>

                </p>
            </li>
        </ul>
    </div>

    <div class="box-usuario">
        <p class="foto-perfil" style="background-image: url(../imagens_usuarios/<?php echo $_SESSION['fotoAdm']; ?>)">
            
        </p>
        <p class="nome-usuario">
            <?php echo $_SESSION['nomeAdm']; ?>
        </p>
        
        
        
    </div>
    <a href="logoff.php"><button class="btnSair">sair</button></a>
</nav>