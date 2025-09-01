<?php
/* CABEÇALHOS DO HTTP */
header("Content-type: application/json; charset=UTF-8");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Origin: GET, POST, PUT, DELETE, OPTIONS");


/*
Essa variavel recebe o metodo utilizado pode ser POST, GET, PUT, ou DELETE
*/

$metodoSolicitado = $_SERVER['REQUEST_METHOD'];

/*Esse Id é quando colocamos informações na URL */
$id = $_GET['id'] ?? null;

/*
 ?? significa que se $_GET['id'] existir e não for nula o conteudo entra na variavel id
*/

switch($metodoSolicitado)
{
    case "POST": 
        $dados_recebidos = json_decode(file_get_contest("php://input"), true);
        break;
    case "GET":

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "aula_pw3";

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);
        $sql = "Select * from materias";
        $resultado = $conexao->query($sql);

        $materias = [];
        while ($linha = $resultado->fetch_assoc())
        {
            $materias[] = $linha;
        }
        echo json_encode($materias);
        break;
}
?>