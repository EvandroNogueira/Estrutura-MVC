<!DOCTYPE html>
<html>
	<head>
		<title>T�tulo do Site</title>
		<!--Atribuindo o Link para o Arquivo de Estilo (style.css) -->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css"/>
	</head>
	<body>
		<!--Carrega as informa��es do topo do site-->
		<h1>Topo do Meu Site</h1>
		<!--Carrega as informa��es do loadViewInTemplate -->
		<?php $this->loadViewInTemplate($viewName, $viewData);?>

		<!--Carrega as Informa��es do Rodap� do Site-->
		<h1>Rodap� do Meu Site</h1>
	</body>
</html>