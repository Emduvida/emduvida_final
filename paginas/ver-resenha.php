<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=1414871152062562";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php
$codigo = $url[1];

$rs = selecionar('resenha', 'COD_RESENHA', $codigo);
?>
<section id="container-resenha-completa" >

    <p class="titulo-resenha-view">
        <?php echo $rs['titulo_resenha'] ?>
    </p>


    <article class="esquerdo box-coluna">

        <ul class="slide-resenha">

            <li class="img" style="background-image: url(img_resenhas/9e5920b2ca01b5b162f8369b5e3492f4.jpg)"></li>
            <li class="img" style="background-image: url(img_resenhas/no-image.jpg)"></li>
            <li class="img" style="background-image: url(img_resenhas/Samsung-Galaxy-S5.jpg)"></li>
            <li class="img" style="background-image: url(img_resenhas/9e5920b2ca01b5b162f8369b5e3492f4.jpg)"></li>
        </ul>
        <div class="controle-slide-resenha">
            <button class="btnAnterior btnPrevNext"> <i class="fa fa-chevron-left"></i> Anterior</button>
            <button class="btnProximo btnPrevNext">Proximo<i class="fa fa-chevron-right"></i></button>
        </div>
    </article>

    <article class="direito box-coluna">
        <div class="box-resenha-completa">
            <div class="info-usuario">
                <?php
                $resUser = selecionar('usuario', 'COD_USUARIO', $rs['COD_USUARIO']);
                ?>
                <p class="img-perfil" style="background-image: url(imagens_usuarios/<?php echo $resUser['IMAGEM_PERFIL'] ?>)"></p>

                <p class="lblPadrao fonte txt-postado">Postado por:</p>
                <p class="txtNomeUsuario"><?php echo $resUser['NOME_USUARIO'] ?></p>
            </div>

            <div class="conteudo-resenha">
                <?php
                echo $rs['CORPO_RESENHA'];
                ?>
            </div>

            <div class="btnCompartilhar">
                <button class="btnCompartilhe face">Compartilhar <i class="fa fa-facebook"></i></button>
                <button class="btnCompartilhe tt">Compartilhar <i class="fa fa-twitter"></i></button>
                <button class="btnCompartilhe gplus">Compartilhar <i class="fa fa-google-plus"></i></button>
            </div>
        </div>
    </article>

    <article class="esquerdo box-coluna">
        <div class="defeitos-resenha">

            <h2 class="titulo-positivo-negativo positivo-resenha">Pontos positivos</h2>

            <div class="qualidades-resenha">
                <?php
                $exec = listarLimite('qualidades', 5, " WHERE COD_RESENHA = '{$rs['COD_RESENHA']}'");
                while ($resQual = mysql_fetch_assoc($exec)) {
                    ?>
                    <p class="qualidade-resenha-txt"><?php echo (empty($resQual['QUALIDADES'])) ? 'NENHUM' : '<i class="fa fa-thumbs-o-up"></i> <span>' . $resQual['QUALIDADES'] . '</span>' ?></p>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="defeitos-resenha" id="defQual">

            <h2 class="titulo-positivo-negativo titulo-negativo positivo-resenha">Pontos negativos</h2>

            <div class="qualidades-resenha">
                <?php
                $exec = listarLimite('defeitos', 5, " WHERE COD_RESENHA = '{$rs['COD_RESENHA']}'");
                while ($resQual = mysql_fetch_assoc($exec)) {
                    ?>
                    <p class="defeitos-resenha-txt"> <?php echo (empty($resQual['DEFEITOS'])) ? 'NENHUM' : '<span><i class="fa fa-thumbs-o-down"></i>' . $resQual['DEFEITOS'] . '</span>' ?></p>
                    <?php
                }
                ?>

            </div>
        </div>
    </article>

    <article class="direito box-coluna">
        <form method="post" class="frmComentario">
            <textarea placeholder="Digite aqui seu comentario..." class="caixaComentario frm-padrao"></textarea>
            <label class="lblPadrao lblComentario">Dê uma nota para esta resenha: </label><input type="number" class="frm-padrao frmNotaComent" placeholder="De 0 a 5" max="5"/>
            <input type="hidden" name="cod_resenha" value="<?php echo $rs['COD_RESENHA']; ?>"/>
            <input type="submit" name="comentar" value="Comentar" class="btnComentar"/><i class="fa fa-spinner fa-pulse"></i>
        </form>
        
    </article>

</section>