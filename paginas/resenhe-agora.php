<section id="container-resenha">
    <article class="box-resenha">
        <div class="titulo-bolinha">

            <hr class="linha-titulo linhaResenha"/>
            <h1 class="titulo-bolinha-txt txt-titulo-resenha">RESENHE AGORA</h1>
            <div class="bolinha bolinha-resenha"></div>
        </div>
        <form method="post">
            <div class="resenha-esquerdo">


                <div id="carregamento-resenha">

                </div>

                <p class="titulo-formulario">Informações Gerais</p>
                <div class="info-gerais">
                    <label for="titulo" class="lblPadrao fonte">Titulo*</label>
                    <p class="erros"></p>
                    <input type="text" name="TITULO_RESENHA" id="titulo" class="frm-padrao input-resenha" required="required"/>  

                    <label for="Produto" class="lblPadrao fonte">Produto*</label>
                    <p class="erros"></p>
                    <input type="text" name="TITULO_RESENHA" id="Produto" class="frm-padrao input-resenha" required="required"/>  

                    <label for="Fabricante" class="lblPadrao fonte">Fabricante*</label>
                    <p class="erros"></p>
                    <input type="text" name="TITULO_RESENHA" id="Fabricante" class="frm-padrao input-resenha" required="required"/>  

                </div>

                <p class="titulo-formulario">Nota</p>
                <div class="notas">
                    <input type="number" name="" max="5" min="-5" class="frm-padrao input-resenha" required="required"/>  

                </div>


                <p class="titulo-formulario desce-titulo">Descreva sua experiencia com o produto</p>
                <div class="info-gerais">
                    <textarea class="frm-padrao input-resenha input-grande" required="required"></textarea>  

                </div>

            </div>
            <div class="resenha-direito">

                <div class="defeitos semMargem">
                    <h2 class="titulo-positivo-negativo">Pontos positivos</h2>

                    <div class="qualidades">
                        <div class="box-input-defQual">
                            <p class="icone"><i class="fa fa-thumbs-up"></i></p>
                            <input type="text" name="qualidades[]" class="frm-padrao input-defQual"/>
                            
                        </div>
                    </div>
                    
                    <p class="msgQualidades erros">

                    </p>
                    <button class="j_qualidades btAdicionar"><i class="fa fa-plus"></i> Adicionar ponto positivo</button>

             
                </div>

                <div class="defeitos">
                    <h2 class="titulo-positivo-negativo titulo-negativo">Pontos negativos</h2>
                    <div class="def">
                        <div class="box-input-defQual">
                            <p class="icone redicone"><i class="fa fa-thumbs-down"></i></p>
                            <input type="text" name="qualidades[]" class="frm-padrao input-defQual"/>
                        </div>
                    </div>
                    
                    <p class="msgDefeitos erros">

                    </p>
                    <button class="j_defeitos btAdicionar"><i class="fa fa-plus"></i> Adicionar ponto negativo</button>
                    
                     
                </div>
                
                <input type="submit" name="" value="Cadastrar" class="btnCadastrar btResenha"/>

            </div>
        </form>
    </article>
</section>