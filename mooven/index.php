<?php
include_once './content/sql/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Teste Mooven</title>

    <!--CHARSET-->
    <meta charset="utf-8">

    <!--VIEWPORT-->
    <meta name="viewport" content="width=device-width">

    <!--CSS / FAVICON-->
    <link href="content/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="content/images/favicon.png" rel="icon" type="image/png">
</head>

<body>
	<header>
		<div class="h-cont">
			<a href="./index.php"><img src="content/images/logo.svg"></a>
			<div class="menu">
				<a href="./index.php">Home</a>
				<a href="./github.php">GitHub</a>
				<a href="./endereco.php">Endereço</a>
			</div>
		</div>	
	</header>	
	
    <main>
		<div class="pesquisar">
			<h1>Recuperar Acesso</h1>
			<form method="POST" action="">
				<div>
					<input type="text" name="nome" id="nome" placeholder="Pesquisar Nome de Usuário">
					<input type="submit" name="SendPesqUser" value="Pesquisar">
				</div>
			</form>
		</div>
		<div class="resultado">
		<?php
        $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
        if ($SendPesqUser) {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

            //SQL para selecionar os registros
            $result_usuario = "SELECT * FROM usuarios WHERE nome LIKE '%" . $nome . "%' ORDER BY nome ASC LIMIT 7";
            $resultado_nome_user = $conn->prepare($result_usuario);
            $resultado_nome_user->execute();

            while ($row_user_cont = $resultado_nome_user->fetch(PDO::FETCH_ASSOC)) {
                echo "<div><span>ID:</span> " . $row_user_cont['id'] . "<br>";
                echo "<span>Nome:</span> " . $row_user_cont['nome'] . "<br>";
                echo "<span>E-mail:</span> " . $row_user_cont['email'] . "<br>";
				echo "<span>Login:</span> " . $row_user_cont['login'] . "<br>";
                echo "<span>Senha:</span> " . $row_user_cont['senha'] . "</div>";
            }
        }
        ?>
		</div>		
	</main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
		$(function () {
			$("#nome").autocomplete({
				source: 'resultado.php'
			});
		});
	</script>
	</body>
</html>