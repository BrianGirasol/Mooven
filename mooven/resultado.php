<?php
include_once './content/sql/conexao.php';

$nome = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

//SQL para selecionar os registros
$result_usuario = "SELECT nome FROM usuarios WHERE nome LIKE '%".$nome."%' ORDER BY nome ASC LIMIT 7";

//Seleciona os registros
$resultado_nome_user = $conn->prepare($result_usuario);
$resultado_nome_user->execute();

while($row_user_cont = $resultado_nome_user->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row_user_cont['nome'];
}

echo json_encode($data);
?>