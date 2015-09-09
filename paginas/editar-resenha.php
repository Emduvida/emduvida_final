<?php
$codigo = $url[1];

$rs = selecionar('resenha', 'COD_RESENHA', $codigo);
?>
<section id="container-resenha">
    <article class="box-resenha">
        <div class="titulo-bolinha">

            <hr class="linha-titulo linhaResenha"/>
            <h1 class="titulo-bolinha-txt txt-titulo-resenha">RESENHE AGORA</h1>
            <div class="bolinha bolinha-resenha"></div>
        </div>



        <form method="post" name="alterarResenha" enctype="multipart/form-data">
            <input type="hidden" name="cod" value="<?php echo $rs['COD_RESENHA'] ?>"/>
            <div class="resenha-esquerdo">


                <div class="input-file">
                </div>


                <div id="carregamento-resenha">
                    <div class='box-carregamento'></div>
                    <button class="btnAddImage" id="1"><i class="fa fa-plus fa-3x"></i></button>
                </div>
                <br/>

                <p class="titulo-formulario">Informações Gerais</p>
                <div class="info-gerais">
                    <label for="titulo" class="lblPadrao fonte">Titulo*</label>
                    <p class="erros"></p>
                    <input type="text" name="titulo_resenha" value="<?php echo $rs['titulo_resenha'] ?>" id="titulo" class="frm-padrao input-resenha" required="required"/>  

                    <label for="Produto" class="lblPadrao fonte">Produto*</label>
                    <p class="erros"></p>
                    <input type="text" name="produto" id="Produto" value="<?php $rsProd = selecionar('produtos', 'COD_PRODUTO', $rs['COD_PRODUTO']);
echo $rsProd['NOME_PRODUTO'];
?>" disabled="disabled" class="frm-padrao input-resenha inputProd" required="required"/>  

                    <div id="resultadoBusca">
                        <ul id="carregaBusca">

                        </ul>
                    </div>

                    <div class="adicionaisProduto">
                        <label for="Fabricante" class="lblPadrao fonte">Fabricante*</label>
                        <p class="erros"></p>
                        <input type="text" name="fabricante" id="Fabricante" class="frm-padrao input-resenha"/>  
                    </div>
                </div>

                <p class="titulo-formulario">Nota</p>
                <div class="notas">
                    <input type="number" name="NOTA_PRODUTO" value="<?php echo $rs['NOTA_PRODUTO'] ?>" max="5" min="-5" class="frm-padrao input-resenha" required="required"/>  
                </div>


                <p class="titulo-formulario desce-titulo">Descreva sua experiencia com o produto</p>
                <div class="info-gerais">
                    <textarea class="frm-padrao input-resenha input-grande" name="DESCRICAO_RESENHA" required="required"><?php echo $rs['CORPO_RESENHA'] ?></textarea>  

                </div>

            </div>
            <div class="resenha-direito">

                <div class="defeitos semMargem">
                    <h2 class="titulo-positivo-negativo">Pontos positivos</h2>

                    <div class="qualidades">
                        <?php
                        $execQual = listarLimite('qualidades', 5, "", 'COD_RESENHA', $url[1]);
                        while ($resQual = mysql_fetch_assoc($execQual)) {
                            ?>
                            <div class="box-input-defQual">

                                <p class="icone"><i class="fa fa-thumbs-up"></i></p>
                                <input type="hiden" name="cod_qualidade[]" value="<?php echo $resQual['COD_DEFEITO'] ?>"/>

                                <input type="text" name="qualidades[]" value="<?php echo $resQual['QUALIDADES'] ?>" class="frm-padrao input-defQual"/>

                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <p class="msgQualidades erros">

                    </p>
                    <!--<button class="j_qualidades btAdicionar"><i class="fa fa-plus"></i> Adicionar ponto positivo</button>-->


                </div>

                <div class="defeitos">
                    <h2 class="titulo-positivo-negativo titulo-negativo">Pontos negativos</h2>
                    <div class="def">
<?php
$execDef = listarLimite('defeitos', 5, "", 'COD_RESENHA', $url[1]);
$i = 0;
while ($resDef = mysql_fetch_assoc($execDef)) {
    $i++;
    ?>
                            <div class="box-input-defQual">

                                <p class="icone redicone"><i class="fa fa-thumbs-down"></i></p>

                                <input type="text" value="<?php echo $resDef['DEFEITOS'] ?>" id="<?php echo $i ?>" name="defeitos[]" class="frm-padrao input-defQual"/>

                            </div>
<?php } ?>
                    </div>

                    <p class="msgDefeitos erros">

                    </p>
                    <!--<button class="j_defeitos btAdicionar"><i class="fa fa-plus"></i> Adicionar ponto negativo</button>-->


                </div>
                <div id="carregamento-imagem"></div>
                <input type="submit" name="" value="Alterar" class="btnCadastrar btResenha"/>

            </div>
        </form>
    </article>
</section>