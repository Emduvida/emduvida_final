 <article class="resenhasMaisVistas">

            <?php
            $exec = listarLimite('resenha', 100, " WHERE STATUS_RESENHA = '1' ORDER BY VISUALIZACOES_RESENHA DESC");
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
                                    <?php echo resumo($rs['titulo_resenha'], 10) ?>
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