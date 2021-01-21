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
			<h1>Buscar Perfil GitHub</h1>
			<input type="text" id="searchUser" placeholder="Usuário Github">			
		</div>
		<div class="resultado"></div>		
	</main>
	<main>
		<div class="repos"></div>
	</main>
	
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="./content/js/main.js"></script>
	
</body>
</html>