<?php 
/*	print_r($_POST); */

	$Nome = ( isset($_POST['Nome']) ) ? $_POST['Nome'] : null;
	$Sexo = ( isset($_POST['Sexo']) ) ? $_POST['Sexo'] : null;
	$Data_de_Nascimento = ( isset($_POST['Data_de_Nascimento']) ) ? $_POST['Data_de_Nascimento'] : null;
	$Endereço = ( isset($_POST['Endereço']) ) ? $_POST['Endereço'] : null;
	$Numero = ( isset($_POST['Numero']) ) ? $_POST['Numero'] : null;
	$Complemento = ( isset($_POST['Complemento']) ) ? $_POST['Complemento'] : null;
	$Cidade = ( isset($_POST['Cidade']) ) ? $_POST['Cidade'] : null;
	$Telefone = ( isset($_POST['Telefone']) ) ? $_POST['Telefone'] : null;
	$Email = ( isset($_POST['Email']) ) ? $_POST['Email'] : null;



	echo "<h2>Lista de Usuários:</h2><br>";
	echo "Nome: ".$Nome."<br>";
	echo "Sexo: ".$Sexo."<br>";
	echo "Data de Nascimento: ".$Data_de_Nascimento."<br>";
	echo "Endereço: ".$Endereço."<br>";
	echo "Número: ".$Numero."<br>";
	echo "Complemento: ".$Complemento."<br>";
	echo "Cidade: ".$Cidade."<br>";
	echo "Telefone: ".$Telefone."<br>";
	echo "E-mail: ".$Email."<br>";



?>
