<h1 class="titulo-paginas">Usuários</h1>

<article class="content-usuario">
    <div class="col-esquerda">
        <h2 class="titulo-tabela">Restritos</h2>
        <a href="usuarios/">Ativos</a>
        <a href="usuarios/inativos">Inativos</a>
        <table cellspacing="0" class="tbl_usuario tbl_comuns">
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
                <?php
                $status = (empty($url[1]) ? '1' : '0');
                
                
                $exec = listarLimite('usuario', 10, " AND COD_TIPO = '1' ORDER BY COD_USUARIO DESC", "STATUS_USUARIO", $status);
                while ($rs = mysql_fetch_assoc($exec)) {
                    ?>
                    <tr class="trUsuario">
                        <td class="tdComum"><p class="foto-listagem" style="background-image: url(../imagens_usuarios/<?php echo $rs['IMAGEM_PERFIL'] ?>)"></p></td>
                        <td class="tdComum"><p class="nomeUsuario"><?php echo resumo($rs['NOME_USUARIO'], 5); ?></p></td>
                        <td class="tdComum"><p class="txtAtivo">Ativo</p></td>
                        <td class="tdVerPerfil">
                            <p class="icones">
                                
                                    <?php echo ($rs['STATUS_USUARIO'] == 1) ? '<a href="" class="inativarUser" id="'.$rs['COD_USUARIO'].'"><i class="fa fa-times"></i></a>' : '<a href="" class="ativarUser" id="'.$rs['COD_USUARIO'].'"><i class="fa fa-check"></i></a>'; ?>
                                
                            </p>
                        </td>
                        <td class="tdAzulClaro">
                            <p class="icones">
                                
                                   <?php echo ($rs['COD_TIPO'] == 1) ? '<a href="" class="transformaAdm" id="'.$rs['COD_USUARIO'].'"><i class="fa fa-arrow-up"></i></a>' : '<a href="" class="transofrmacomum" id="'.$rs['COD_USUARIO'].'"><i class="fa fa-arrow-down"></i></a>'; ?> 
                                
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
                                        <input type="radio" id="comums" value="1" name="COD_TIPO" <?php echo ($rs['COD_TIPO'] == 1) ? 'checked' : '' ?>> <label for="comums">Comum</label> 
                                        <input type="radio" id="adms" value="2" name="COD_TIPO" <?php echo ($rs['COD_TIPO'] == 2) ? 'checked' : '' ?>><label for="adms"> Administrador</label>
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
        </table>
    </div>

    <div class="col-direita">
        <h2 class="titulo-tabela">Administradores</h2>
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
                <?php
                
                $exec = listarLimite('usuario', 10, " WHERE COD_TIPO = '2' ORDER BY COD_USUARIO DESC");
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
                                
                                   <?php echo ($rs['COD_TIPO'] == 1) ? '<a href="" class="transformaAdm" id="'.$rs['COD_USUARIO'].'"><i class="fa fa-arrow-up"></i></a>' : '<a href="" class="transformaComum" id="'.$rs['COD_USUARIO'].'"><i class="fa fa-arrow-down"></i></a>'; ?> 
                                
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
                                        <input type="radio" id="comum1" value="1" name="COD_TIPO" <?php echo ($rs['COD_TIPO'] == 1) ? 'checked' : '' ?>> <label for="comum1">Comum</label> 
                                        <input type="radio" id="adm1" value="2" name="COD_TIPO" <?php echo ($rs['COD_TIPO'] == 2) ? 'checked' : '' ?>><label for="adm1"> Administrador</label>
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
        </table>
    </div>

</article>