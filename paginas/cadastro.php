<?php
$email = $_SESSION['emailCadastro'];
$senha = $_SESSION['senhaCadastro'];
?>

<section id="containerCadastro">

    <article class="boxForm cancelaLeft">
        <div class="conteudoBox">
            <div class="contFormBox">
                <h3 class="titulo-cadastro-home">Dados Pessoais</h3>
                <hr class="linha-cadastro-home"/>

                <form method="post" class="frmCadastroPrincipal">

                    <label for="nome" class="lblPadrao fonte">Nome:</label>
                    <p class="erros errNome"></p>
                    <input type="text" name="NOME_USUARIO" id="nome" class="frm-padrao input-cadastro-completo"/>  

                    <label for="sobreNome" class="lblPadrao fonte">Sobrenome:</label>
                    <p class="erros erroSobreNome"></p>
                    <input type="text" name="SOBRENOME" id="sobreNome" class="frm-padrao input-cadastro-completo"/>  

                    <label for="data" class="lblPadrao fonte">Data de nascimento:</label>
                    <p class="erros erroNasc"></p>
                    <input type="text" name="DATA_NASCIMENTO" id="data" class="frm-padrao input-cadastro-completo"/>  

                    <label for="cpf" class="lblPadrao fonte">CPF:</label>
                    <p class="erros erroCPF"></p>
                    <input type="text" name="CPF_USUARIO" id="cpf" class="frm-padrao input-cadastro-completo"/>  



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


                <label for="cidade" class="lblPadrao fonte">Cidade:</label>
                <p class="erros erroCidade"></p>
                <input type="text" name="CIDADE_USUARIO" id="cidade" class="frm-padrao input-cadastro-completo"/>  

                <label for="estado" class="lblPadrao fonte">Estado:</label>
                <p class="erros erroEstado"></p>
                <select name="ESTADO_USUARIO" id="estado" class="frm-padrao input-cadastro-completo">
                    <option>SP</option>
                    <option>RO</option>
                    <option>DF</option>
                    <option>RJ</option>
                    <option>CE</option>
                    <option>RS</option>
                    <option>RN</option>
                    <option>MG</option>
                    <option>BA</option>

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


                <label for="email" class="lblPadrao fonte">Email:</label>
                <p class="erros"></p>
                <input type="text" name="EMAIL_USUARIO" value="<?php echo $email; ?>" id="email" class="frm-padrao input-cadastro-completo"/>  

                <label for="senha" class="lblPadrao fonte">Senha:</label>
                <p class="erros"></p>
                <input type="password" name="SENHA_USUARIO" id="senha" value="<?php echo $senha ?>" class="frm-padrao input-cadastro-completo"/>  

                <h3 class="titulo-cadastro-home">Mais</h3>
                <hr class="linha-cadastro-home"/>


                <div id="carregaImagem"></div>


                <div id="msgTermos">
                    <input type="checkbox">
                    Declaro que li e aceito os termos de 
                    uso do site “EM DUVIDA”.</div>
                <input type="submit" name="" value="Cadastrar" class="btnCadastrar"/>

                </form>

            </div>
        </div>
        <div id="bottomBox3" class="bottom"></div>
    </article>
</section>
