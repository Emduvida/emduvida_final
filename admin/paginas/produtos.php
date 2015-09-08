<h1 class="titulo-paginas">Produtos</h1>
<article class="content-usuario">
    <div class="col-esquerda">
        <h2 class="titulo-tabela">Cadastro de produtos</h2>
        <form method="post" action="">
            <label class="lblLogin">Nome do produto:</label>
            <input type="text" class="inputAdmin inputProd" name="nome_produto"/>
            <label class="lblLogin">Nome do fabricante:</label>
            <input type="text" class="inputAdmin inputFab" name="fabricante"/>
            <input type="submit" class="inputCadastrar" value="Cadastrar"/>
        </form>
    </div>

    <div class="col-direita">
        <h2 class="titulo-tabela">Lista de produtos</h2>
        <table cellspacing="0"  class="tbl_usuario tbl_direita">

            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="2"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="trUsuario">
                    <td class="tdComum"><p class="tituloProd txtAtivo">Nome do produto</p></td>
                    <td class="tdComum"><p class="nomeUsuario">Fabricante</p></td>
                    <td class="tdComum"><p class="txtAtivo">Ativo</p></td>
                    <td class="tdAzulClaro">
                        <p class="icones">
                            <i class="fa fa-arrow-down"></i>
                        </p>
                    </td>
                    <td class="tdVerPerfil"><p class="txtVerPerfil" id="1" style="cursor: pointer">Opções</p></td>
                </tr>
                <tr class="dadosUsuario">
                    <td colspan="6">
                        <div class="dados 1" style="height: auto; display: none;">
                            <p class="foto-listagem" style="background-image: url(../imagens_usuarios/)"></p>

                            <div class="box-direito-perfil">
                                  <form method="post" name="alteraUsuario">

                                    <p class="nome-usuario-perfil">
                                        <label for="status">Status:</label> 
                                        <select id="status" name="STATUS_USUARIO">
                                            <option  value="1">Ativo</option>
                                            <option  value="2">Inativo</option>
                                        </select>
                                    </p>
                                    <input type="hidden" name="cod" value=""/>
                                    <p class="nome-usuario-perfil">
                                        Tipo: 
                                        <input type="radio" id="comum1" value="1" name="COD_TIPO" > <label for="comum1">Comum</label> 
                                        <input type="radio" id="adm1" value="2" name="COD_TIPO" ><label for="adm1"> Administrador</label>
                                    </p>

                                    <input type="submit" value="Alterar"/>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="espaco"></tr>

            </tbody>
        </table>
    </div>