<?php
$rs = selecionar('usuario', 'COD_USUARIO', $url[1]);

if ($_SESSION['COD_USUARIO'] == $url[1]) {
    $adicionais = 1;
} else {
    $adicionais = 0;
}
?>
<section id="container_meuperfil-completo">
    <article id="box-imagem-nome">
        <p id="img-meuperfil" style="background-image: url(imagens_usuarios/<?php echo $rs['IMAGEM_PERFIL'] ?>)"></p>
        <p class="frase-meuperfil">Seja bem vindo(a), <?php echo $rs['NOME_USUARIO']; ?></p>

    </article>

    <article id="box-dadosusuario">

        <section id="box-dadosgerais">

            <div class="barra-lateral">
                <p class="modificacoes2-icone"><i class="fa fa-user   modificacoes2-icone"></i></p>          
            </div>

            <div id="campo_titulo">
                <p class="titulo-meuperfil  paddingajust">Nome:</p>
                <p class="titulo-meuperfil ">Sobrenome:</p>
                <p class="titulo-meuperfil">Data de nascimento:</p>
                <p class="titulo-meuperfil">CPF:</p>
            </div>
            <!-- APLICAR A PHP QUE PUXA OS DADOS ASSEGUIR: -->
            <div id="dados_user">
                <p class="dadosuser-meuperfil"><?php echo $rs['NOME_USUARIO'] ?></p>
                <p class="dadosuser-meuperfil "><?php echo (empty($rs['SOBRENOME_USUARIO'])) ? 'Sem sobrenome' : $rs['SOBRENOME_USUARIO'] ?></p>
                <p class="dadosuser-meuperfil"><?php echo date("d/m/Y", strtotime($rs['DATA_NASCIMENTO'])) ?></p>
                <p class="dadosuser-meuperfil"><?php echo $rs['CPF_USUARIO'] ?></p>

            </div>



        </section>


        <section class="box-lateral">

            <div class="barra-lateral">
                <p class="modificacoes-icone"><i  class="fa fa-map-marker   modificacoes-icone"></i></p>
            </div> 

            <div class="campo_titulo-box-lateral">
                <p class="titulo-meuperfil paddingajust  boxlateral">Cidade:</p>
                <p class="titulo-meuperfil boxlateral">Estado:</p>
            </div>

            <!-- APLICAR A PHP QUE PUXA OS DADOS ASSEGUIR: -->
            <div id="boxlateral">
                <p class="dadosuser-meuperfil  boxlateral"><?php echo $rs['CIDADE_USUARIO'] ?></p>
                <p class="dadosuser-meuperfil boxlateral "><?php echo $rs['UF_USUARIO'] ?></p>

            </div>
        </section>

        <section class="box-lateral    modificacao-boxlateral">
            <div class="barra-lateral">
                <p class="modificacoes-icone"> <i class="fa fa-lock   modificacoes-icone"></i></p>
            </div> 
            <div class="campo_titulo-box-lateral">
                <p class="titulo-meuperfil paddingajust  boxlateral">Email:</p>
                <p class="titulo-meuperfil boxlateral">Senha:</p>
            </div>

            <!-- APLICAR A PHP QUE PUXA OS DADOS ASSEGUIR: -->
            <div id="boxlateral">
                <p class="dadosuser-meuperfil  boxlateral"><?php echo $rs['EMAIL_USUARIO'] ?></p>
                <p class="dadosuser-meuperfil boxlateral "><a href="" class="dadosuser-meuperfil">Alterar Senha</a></p>

            </div>
        </section>
        <button id="botao-Editar-perfil">
            <p id="peditarperfil">editar perfil</p>
        </button>





    </article>






    <div class="titulo-bolinha">

        <hr class="linha-titulo linhaResenha"/>
        <h1 class="titulo-bolinha-txt txt-titulo-resenha">Suas resenhas</h1>
        <div class="bolinha bolinha-resenha"></div>
    </div>

    <section id="box-listagemresenhas">
        <div class="cancelaMargem">
            <?php
            $maximo = 14;

            if (empty($url[3])) {

                $pc = '1';
            } else {
                $pc = $url[3];
            }

            $inicio = ($pc - 1) * $maximo;

            $exec = listarPaginador('resenha', 'ORDER BY COD_RESENHA DESC', $inicio, $maximo, " WHERE STATUS_RESENHA = '1' AND COD_USUARIO = '$url[1]'");

            $n = contarLinhas("SELECT * FROM resenha WHERE STATUS_RESENHA = '1' AND COD_USUARIO = '$url[1]'");


            while ($rs = mysql_fetch_assoc($exec)) {
                $resImg = selecionar('imagens', 'COD_RESENHA', $rs['COD_RESENHA']);
                ?>

                <div class="box-resenha-usuario">
                    <div class="opcoes">
                        <a href="editar-resenha/<?php echo $rs['COD_RESENHA'] ?>/<?php echo $rs['slugfy'] ?>"><i class="fa fa-pencil edit"></i></a>
                        <a href=""><i class="fa fa-times delete"></i></a>
                    </div>
                </div>

            
            <?php } ?>
        </div>
        <article class="paginacao paginacao_resenha">
            <?php
            $qtdPaginas = $n / $maximo;
            if (gettype($qtdPaginas) == "double") {
                $qtdPaginas = intval($n / $maximo) + 1;
            } else {
                $qtdPaginas = $n / $maximo;
            }

            $pagAtual = $url[1];

            if (isset($url[2]) && $url[2] == "inativos") {

                $pag2 = $url[2];
            } else {
                $pag2 = null;
            }
            $pagina = "meuperfil/$url[1]/$url[2]";

            for ($i = 1; $i <= $qtdPaginas; $i++) {

                if ($i == 1) {
                    if ($i != $pagAtual) {
                        echo "<a href='$pagina/$i'><i class='fa fa-angle-double-left'></i></a>";
                    } else {
                        
                    }
                } else {
                    if ($i == $qtdPaginas) {
                        if ($i == $pagAtual) {
                            
                        } else {
                            echo "<a href='$pagina/$i'><i class='fa fa-angle-double-right'></i></a>";
                        }
                    } else {

                        if ($i == $pagAtual) {
                            echo "<span>" . $i . "</span>";
                        } else {
                            echo "<a href='$pagina/$i'>" . $i . "</a>";
                        }
                    }
                }
            }
            ?>


    </section>
</section>                  
