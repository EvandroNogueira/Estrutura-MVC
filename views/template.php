<!DOCTYPE html>
<html>
	<head>
		<title>Título do Site</title>
		<!--Atribuindo o Link para o Arquivo de Estilo (style.css) -->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css"/>
	</head>
	<body>
		<!--Carrega as informações do topo do site-->
		<h1>Topo do Meu Site</h1>
		<!--Carrega as informações do loadViewInTemplate -->
		<?php $this->loadViewInTemplate($viewName, $viewData);?>

		<!--Carrega as Informações do Rodapé do Site-->
		<h1>Rodapé do Meu Site</h1>
	</body>
</html>