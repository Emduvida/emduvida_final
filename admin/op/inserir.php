<?php



include_once '../funcoes.php';
include_once '../conexao/conect_db.php';


$ac = $_POST['acao'];


if (isset($ac)) {
    if ($ac == 'cadCat') {


        $c['NOME_CATEGORIA'] = mysql_real_escape_string($_POST['NOME_CATEGORIA']);
        $c['COR_CATEGORIA'] = mysql_real_escape_string('#' . $_POST['COR_CATEGORIA']);
        $c['STATUS_CATEGORIA'] = mysql_real_escape_string('1');

        $n = contarLinhas('categoria', 'COR_CATEGORIA', $c['COR_CATEGORIA']);

        if ($n > 0) {
            
            alert("Esta cor já esta cadastrada!");
            retorna();
            
        } else {
            $campos = gerarCampos($c);
            $valores = gerarValores($c);

            inserir('categoria', $campos, $valores, "../index.php?link=1&l", "Categoria");
        }
    }
    
    if($ac == 'cadProduto'){
        
        $c['NOME_PRODUTO'] = mysql_real_escape_string($_POST['nomeProduto']);
        $c['FABRICANTE'] = mysql_real_escape_string($_POST['nomeFabricante']);
        $c['STATUS_PRODUTO'] = mysql_real_escape_string('1');
        
        $n = contarLinhas("SELECT * FROM produtos WHERE NOME_PRODUTO = '{$c['NOME_PRODUTO']}'");

        if ($n > 0) {
            
            echo '1';
            
        }else{
            
            $campos = gerarCampos($c);
            $valores = gerarValores($c);
            
            
            if(inserir('produtos', $campos, $valores)){
                echo '2';
            }else{
                echo '3';
            }

        }
        
        
        //1 - Produto ja cadastrado no banco
        //2 - sucesso
        //3 - erro inesperado
    }
    
    
}
