<?php
    $codigo = $url[1];
    
    $rs = selecionar('usuario', 'COD_USUARIO', $codigo);
    
?>

<section id="containerCadastro">

    <article class="boxForm cancelaLeft">
        <div class="conteudoBox">
            <div class="contFormBox">
                <h3 class="titulo-cadastro-home">Dados Pessoais</h3>
                <hr class="linha-cadastro-home"/>

                <form method="post" class="frmAlterarDados">

                    <label for="nome" class="lblPadrao fonte">Nome:*</label>
                    <p class="erros errNome"></p>
                    <input type="text" name="NOME_USUARIO" value="<?php echo $rs['NOME_USUARIO']; ?>" id="nome" class="frm-padrao input-cadastro-completo"/>  

                    <label for="sobreNome" class="lblPadrao fonte">Sobrenome:*</label>
                    <p class="erros erroSobreNome"></p>
                    <input type="text" name="SOBRENOME" id="sobreNome" value="<?php echo $rs['SOBRENOME_USUARIO']; ?>" class="frm-padrao input-cadastro-completo"/>  

                    <label for="data" class="lblPadrao fonte">Data de nascimento:*</label>
                    <p class="erros erroNasc"></p>
                    <input type="text" name="DATA_NASCIMENTO" value="<?php echo date("d/m/Y",strtotime($rs['DATA_NASCIMENTO'])) ?>" id="data" class="frm-padrao input-cadastro-completo"/>  

                    <label for="cpf" class="lblPadrao fonte">CPF:*</label>
                    <p class="erros erroCPF"></p>
                    <input type="text" name="CPF_USUARIO" value="<?php echo $rs['CPF_USUARIO']; ?>" id="cpf" class="frm-padrao input-cadastro-completo"/>  



            </div>
        </div>
        <div id="bottomBox1" class="bottom">
            <div class="bottomBox1">

            </div>
        </div>
    </article>

    <article class="boxForm">
        <div class="conteudoBox">
            <div class="contFormBox">
                <h3 class="titulo-cadastro-home">Localização</h3>
                <hr class="linha-cadastro-home"/>


                <label for="cidade" class="lblPadrao fonte">Cidade:*</label>
                <p class="erros erroCidade"></p>
                <input type="text" name="CIDADE_USUARIO" value="<?php echo $rs['CIDADE_USUARIO']; ?>" id="cidade" class="frm-padrao input-cadastro-completo"/>  

                <label for="estado" class="lblPadrao fonte">Estado:*</label>
                <p class="erros erroEstado"></p>
                <select name="ESTADO_USUARIO" id="estado" class="frm-padrao input-cadastro-completo">
                    <option <?php echo ($rs['UF_USUARIO'] == 'AC') ? 'selected' : '' ?>>AC</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'AL') ? 'selected' : '' ?>>AL</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'PA') ? 'selected' : '' ?>>PA</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'AM') ? 'selected' : '' ?>>AM</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'BA') ? 'selected' : '' ?>>BA</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'CE') ? 'selected' : '' ?>>CE</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'DF') ? 'selected' : '' ?>>DF</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'ES') ? 'selected' : '' ?>>ES</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'GO') ? 'selected' : '' ?>>GO</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'MA') ? 'selected' : '' ?>>MA</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'MT') ? 'selected' : '' ?>>MT</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'MS') ? 'selected' : '' ?>>MS</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'MG') ? 'selected' : '' ?>>MG</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'PA') ? 'selected' : '' ?>>PA</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'PB') ? 'selected' : '' ?>>PB</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'PR') ? 'selected' : '' ?>>PR</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'PE') ? 'selected' : '' ?>>PE</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'PI') ? 'selected' : '' ?>>PI</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'RJ') ? 'selected' : '' ?>>RJ</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'RN') ? 'selected' : '' ?>>RN</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'RS') ? 'selected' : '' ?>>RS</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'RO') ? 'selected' : '' ?>>RO</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'RR') ? 'selected' : '' ?>>RR</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'SC') ? 'selected' : '' ?>>SC</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'SP') ? 'selected' : '' ?>>SP</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'SE') ? 'selected' : '' ?>>SE</option>
                    <option <?php echo ($rs['UF_USUARIO'] == 'TO') ? 'selected' : '' ?>>TO</option>
                </select>

            </div>
        </div>
        <div id="bottomBox2" class="bottom">
            <div class="bottomBox2">

            </div>
        </div>
    </article>

    <article class="boxForm right">
        <div class="conteudoBox">
            <div class="contFormBox">
                <h3 class="titulo-cadastro-home">Confirmar</h3>
                <hr class="linha-cadastro-home"/>


                <label for="email" class="lblPadrao fonte">Email:*</label>
                <p class="erros"></p>
                <input type="text" name="EMAIL_USUARIO" value="<?php echo $rs['EMAIL_USUARIO']; ?>" id="email" class="frm-padrao input-cadastro-completo"/>  

<!--                <label for="senha" class="lblPadrao fonte">Senha:*</label>
                <p class="erros"></p>
                <input type="password" name="SENHA_USUARIO" disabled="disabled" id="senha" value="<?php echo $rs['SENHA_USUARIO']; ?>" class="frm-padrao input-cadastro-completo"/>  -->

                <h3 class="titulo-cadastro-home">Mais</h3>
                <hr class="linha-cadastro-home"/>

                <input type="text" name="txtImagemUsuario" value="<?php echo $rs['IMAGEM_PERFIL']; ?>" style="display: none;" class="textImagemUsuario"/>
                <div id="carregaImagem" style="background-image: url(imagens_usuarios/<?php echo $rs['IMAGEM_PERFIL']; ?>)"></div>

                <input type="hidden" name="cod" value="<?php echo $rs['COD_USUARIO'] ?>"/>
                <div id="msgTermos">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                   </div>
                <input type="submit" name="" value="Alterar" id="enviarResenha" class="btnCadastrar cadastrar-resenha"/>

                </form>

            </div>
        </div>
        <div id="bottomBox3" class="bottom"></div>
    </article>
</section>

<form method="post" class="frmImagem">

    <input type="file" name="imagemUsuario" style="display: none;" class="imgUsuarioUp"/>

</form>
