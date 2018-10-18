<?php 

	$Nome = ( isset($_POST['Nome']) ) ? $_POST['Nome'] : null;
	$Sexo = ( isset($_POST['Sexo']) ) ? $_POST['Sexo'] : null;
	$data_de_Nascimento = ( isset($_POST['Data_de_Nascimento']) ) ?  $_POST['Data_de_Nascimento'] : null;
	$Endereço = ( isset($_POST['Endereço']) ) ? $_POST['Endereço'] : null;
	$Numero = ( isset($_POST['Numero']) ) ? $_POST['Numero'] : null;
	$Complemento = ( isset($_POST['Complemento']) ) ? $_POST['Complemento'] : null;
	$Cidade = ( isset($_POST['Cidade']) ) ? $_POST['Cidade'] : null;
	$Telefone = ( isset($_POST['Telefone']) ) ? $_POST['Telefone'] : null;
	$Email = ( isset($_POST['Email']) ) ? $_POST['Email'] : null;

	$datansc = date('d/m/Y', $data_de_Nascimento);
	//$datansc = date();

	echo "<br><h2 align='center'>Lista de Usuários</h2><br>

	<div style='margin-left:60px; padding:10px; border: 1px solid black; max-width: 1100px;'>

		<h3>Usuário 1:</h3>
		Nome: <span>".$Nome."</span><br>
		Sexo: <span>".$Sexo."</span><br>
		Data de Nascimento: <span>".$datansc."</span><br>
		Endereço: <span>".$Endereço."</span><br>
		Número: <span>".$Numero."</span><br>
		Complemento: <span>".$Complemento."</span><br>
		Cidade: <span>".$Cidade."</span><br>	
		Telefone: <span>".$Telefone."</span><br>
		E-mail: <span>".$Email."</span><br><br>

		<button onclick='loadDoc()'>Editar</button>
		<button onclick='deletar()'>Deletar</button>
		<button onclick='editar()'>Cadastrar Novo Usuário</button>

	</div>
	<div id='novo' style='margin-left:60px; padding:10px; max-width: 1100px;'></div>
	<script type='text/javascript'>
		function deletar(){
			document.getElementsByTagName('span')[0].innerHTML = null;
			document.getElementsByTagName('span')[1].innerHTML = null;
			document.getElementsByTagName('span')[2].innerHTML = null;
			document.getElementsByTagName('span')[3].innerHTML = null;
			document.getElementsByTagName('span')[4].innerHTML = null;
			document.getElementsByTagName('span')[5].innerHTML = null;
			document.getElementsByTagName('span')[6].innerHTML = null;
			document.getElementsByTagName('span')[7].innerHTML = null;
			document.getElementsByTagName('span')[8].innerHTML = null;
		}

		function editar(){
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementsByTagName('body')[0].innerHTML = this.responseText;
		    }
		  };
		  xhttp.open('GET', 'index.html', true);
		  xhttp.send();
		}	

		function loadDoc() {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     document.getElementById('novo').innerHTML = this.responseText;
		    }
		  };
		  xhttp.open('GET', 'index.html', true);
		  xhttp.send();
		}	
	</script>
	"


?>
