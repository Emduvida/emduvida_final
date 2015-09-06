<?php

$codigo = $url[1];


    $res1 = selecionar('resenha', 'COD_RESENHA', $codigo);
    $visitas = $res1['VISUALIZACOES_RESENHA'] + 1;
    
    
    $u['VISUALIZACOES_RESENHA'] = mysql_real_escape_string($visitas);
    $camposVal = gerarCamposAlteracao($u);
    alterar('resenha', $camposVal, "COD_RESENHA", $codigo);
 

$rs = selecionar('resenha', 'COD_RESENHA', $codigo);



?>
<section id="container-resenha-completa" >

    <p class="titulo-resenha-view">
        <?php echo $rs['titulo_resenha'] ?>
    </p>


    <article class="esquerdo box-coluna">

        <ul class="slide-resenha">
            <?php
            $exec = listarLimite('imagens', 5, " ORDER BY COD_IMAGEM DESC ", 'COD_RESENHA', $codigo);
            while ($resImagens = mysql_fetch_assoc($exec)) {
                ?>
                <li class="img" style="background-image: url(img_resenhas/<?php echo $resImagens['CAMINHO_IMAGEM'] ?>)"></li>
            <?php } ?>
        </ul>
        <div class="controle-slide-resenha">
            <button class="btnAnterior btnPrevNext"> <i class="fa fa-chevron-left"></i> Anterior</button>
            <button class="btnProximo btnPrevNext">Proximo<i class="fa fa-chevron-right"></i></button>
        </div>
    </article>

    <article class="direito box-coluna box-resenha">
        <article class="box-resenha-completa">
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
        </article>
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

    <article class="direito box-coluna box-comentarios">
        <?php $qtd = contarLinhas("SELECT * FROM comentarios WHERE COD_RESENHA = '$codigo'"); ?>
        <h1 class="titulo-comentarios"><i class="fa fa-comments-o"></i> <?php echo $qtd ?> Comentarios</h1><button class="btnFazerComentario">Fazer Comentario</button>

        <form method="post" class="frmComentario" name="frmComentario">
            <?php
            if (isset($_SESSION['usuarioLogado'])) {
                ?>
                <textarea name="texto_comentario" placeholder="Digite aqui seu comentario..." class="caixaComentario frm-padrao"></textarea>
                <label class="lblPadrao lblComentario">Dê uma nota para esta resenha: </label>
                <input type="number" class="frm-padrao frmNotaComent" name="notaResenha" placeholder="De 0 a 5" max="5"/>
                <input type="hidden" name="cod_resenha" value="<?php echo $rs['COD_RESENHA']; ?>"/>
                <input type="submit" name="comentar" value="Comentar" class="btnComentar"/><i style="display: none;" class="fa fa-spinner fa-pulse loadCOment"></i>
            <?php } else {
                ?>
                Você precisa estar logado para comentar.
            <?php }
            ?>
        </form>
        <article class="box-comentarios-lista">

            <?php
            $exec = listarLimite('comentarios', 100000, " ORDER BY COD_COMENTARIO DESC", 'COD_RESENHA', $codigo);

            while ($rsComentario = mysql_fetch_assoc($exec)) {
                ?>
                <div class="box-comentario">
                    <?php $rsUsuario = selecionar('usuario', "COD_USUARIO", $rsComentario['COD_USUARIO']); ?>
                    <p class="imagem_perfil_comentario" style="background-image: url(imagens_usuarios/<?php echo $rsUsuario['IMAGEM_PERFIL']; ?>)"></p>

                    <p class="txt_postado_comentario"><?php echo $rsUsuario['NOME_USUARIO']; ?> <span><?php echo date("m/d/y", strtotime($rsComentario['DATAHORA_COMENTARIO'])) ?> ás <?php echo date("H:i", strtotime($rsComentario['DATAHORA_COMENTARIO'])); ?></span></p> 
                    <p class="txt_comentario"><?php echo $rsComentario['TEXTO_COMENTARIO'] ?></p>

                </div>
            <?php } ?>

        </article>
    </article>

</section>