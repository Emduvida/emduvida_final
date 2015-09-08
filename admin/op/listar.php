<?php
include_once '../funcoes.php';
include_once '../conexao/conect_db.php';
if (isset($_GET['acao'])) {

    $acao = $_GET['acao'];
} else if (isset($_POST['acao'])) {

    $acao = $_POST['acao'];
}

switch ($acao) {
    case 'listarUsuario':
        $tipo = $_GET['tipo'];
        $status = $_GET['status'];
        ?>
<script src="js/ajax.js"></script>
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
        
        <Script>
            $('.txtVerPerfil').click(function () {

                id = $(this).attr('id');

                $('.dados').slideUp();

                $('.' + id).slideToggle()();


            });
        </script>
        <?php
        $exec = listarLimite('usuario', 10, " AND COD_TIPO = '$tipo' ORDER BY COD_USUARIO DESC", "STATUS_USUARIO", $status);
        while ($rs = mysql_fetch_assoc($exec)) {
            ?>
            <tr class="trUsuario">
                <td class="tdComum"><p class="foto-listagem" style="background-image: url(../imagens_usuarios/<?php echo $rs['IMAGEM_PERFIL'] ?>)"></p></td>
                <td class="tdComum"><p class="nomeUsuario"><?php echo resumo($rs['NOME_USUARIO'], 5); ?></p></td>
                <td class="tdComum"><p class="txtAtivo">Ativo</p></td>
                <td class="tdVerPerfil">
                    <p class="icones">
                        <a href="">
                            <?php echo ($rs['STATUS_USUARIO'] == 1) ? '<i class="fa fa-times"></i>' : '<i class="fa fa-check"></i>'; ?>
                        </a>
                    </p>
                </td>
                <td class="tdAzulClaro">
                    <p class="icones">
                        <a href="">
                            <?php echo ($rs['COD_TIPO'] == 1) ? '<i class="fa fa-arrow-up"></i>' : '<i class="fa fa-arrow-down"></i>'; ?> 
                        </a>
                    </p>
                </td>
                <td class="tdVerPerfil"><p class="txtVerPerfil" id="<?php echo $rs['COD_USUARIO']; ?>" style="cursor: pointer">ver perfil</p></td>
            </tr>
            <tr class="dadosUsuario">
                <td colspan="6">
                    <div class="dados <?php echo $rs['COD_USUARIO']; ?>" style="height: auto; display: none;">
                        <p class="foto-listagem" style="background-image: url(../imagens_usuarios/<?php echo $rs['IMAGEM_PERFIL'] ?>)"></p>

                        <div class="box-direito-perfil">
                            <p class="nome-usuario-perfil">Nome: <span><?php echo $rs['NOME_USUARIO'] ?></span></p>
                            <p class="nome-usuario-perfil">Data de nascimento: <span><?php echo date("d/m/Y", strtotime($rs['DATA_NASCIMENTO'])) ?></span></p>
                            <p class="nome-usuario-perfil">CPF: <span><?php echo $rs['CPF_USUARIO']; ?></span></p>
                            <p class="nome-usuario-perfil">E-mail: <span><?php echo $rs['EMAIL_USUARIO'] ?></span></p>
                            <p class="nome-usuario-perfil">UF: <span><?php echo $rs['UF_USUARIO'] ?></span></p>
                            <p class="nome-usuario-perfil">Cidade: <span><?php echo $rs['CIDADE_USUARIO'] ?></span></p>


                            <form method="post" name="alteraUsuario">

                                <p class="nome-usuario-perfil">
                                    <label for="status">Status:</label> 
                                    <select id="status" name="STATUS_USUARIO">
                                        <option <?php echo ($rs['STATUS_USUARIO'] == 1) ? 'selected' : '' ?> value="1">Ativo</option>
                                        <option <?php echo ($rs['STATUS_USUARIO'] == 0) ? 'selected' : '' ?> value="2">Inativo</option>
                                    </select>
                                </p>
                                <input type="hidden" name="cod" value="<?php echo $rs['COD_USUARIO'] ?>"
                                       <p class="nome-usuario-perfil">
                                    Tipo: 
                                    <input type="radio" id="comum" value="1" name="COD_TIPO" <?php echo ($rs['COD_TIPO'] == 1) ? 'checked' : '' ?>> <label for="comum">Comum</label> 
                                    <input type="radio" id="adm" value="2" name="COD_TIPO" <?php echo ($rs['COD_TIPO'] == 2) ? 'checked' : '' ?>><label for="adm"> Administrador</label>
                                </p>

                                <input type="submit" value="Alterar"/>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="espaco"></tr>
        <?php } ?>
        </tbody>
        
        <?php
        break;
}



