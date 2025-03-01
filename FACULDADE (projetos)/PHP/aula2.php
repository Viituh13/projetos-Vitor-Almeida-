<html>
	<head>	
		<title>	AULA2
		<?php
		$nome = "";
		$nome = "vitor";
			echo "ola mundo!";
		?>
		</title>
	</head>
	<body>
		<?php	
		
			echo "<h1>$nome</h1>";
			echo '<h1>$nome</h1>';
			
			echo "<a href='https://unicid.edu.br'
			target='_blanck'>Site da unicid</a>";
			
		?>
	</body>
		
</html>

<html>
	<head>
		<title>banco</title>
	</head>
	<body>
		<?php
		//$nome = 'vitor';
		//$idade = 15;
		//echo 'nome: '. $nome . '</br>tenho'.
		//$idade. 'anos';
		$nome = ' ';
		$idae = 0;
		$nome= $_POST["nome"];
		$idade= $_POST["idade"];
		//$_GET ["nome_variavel"]-> Busca o valor na barra de endereço
		//$_GET["nome_variavel"]->bUSCA O VALOR DE UM FORMULARIO METHOD="POST"
		
		echo 'nome:'. $nome .'</br>Tenho'.$idade . 'anos'; 
		?>
	</body>
</html>

<html>
	<head>
		<title>exercicio1 aula 1
			
		</title>
	</head>
	<body>
		<?php
			$resultado = 0;
			$valor1 = 0;
			$valor1 = $_get['vl01'];
			$valor2 = 2;
			
				//exercicio1
				
			echo "</br> o resultado é: $valor1 + $valor2 = $resultado";
			
				//exercicio2
				$nome = "vitor"
				$sobre = "almeida"	
			echo "</br><h1>$sobre,$nome</h1>";
		
		?>

		
		
		



	
	</body>




</html>

<html>
	<head>
		<title>Formulario de Apresentação</title>
	</head>
	<body>
		<h1>
			formulario Apresentação
		</h1>
		<form action="banco.php" method="POST">
			<fieldset>
				<label for="nome"
					nome:
				</label>
				<input type="text" maxlenght="50"
				placeholder="digite seu nome" 
				name="nome">
				<br/>
				<label for="nome">
					idade:
				</label>
				<input type="number" min="0" max="120" placeholder="" name="idade">
				<input type="submit" value=
				"Enviar">
				
				
				
			</fieldset>
			</form>
	</body>
</html>

<html>
	<head>
		<title>Aula 1,part 2</title>
	</head>
	<body>
		<?php
			$resultado = 0;
			$valor1 = 0;
			$valor1 = $_get['vl01'];
			$valor2 = 2;
		
			$resultado = $valor1 + $valor2;
			
			echo "O reultado da soma é:$resultado";
			
			
			$resultado = $valor1 - $valor2;
			
			echo "<br/> O reultado da subtração é:$resultado";
			
			
			$resultado = $valor1 / $valor2;
			
			echo "</br> O reultado da divisao é:$resultado";
			
			
			$resultado = $valor1 % $valor2;
			
			echo "<br/> O reultado do resto da divisao é:$resultado";
			
				$resultado = $valor1 ** $valor2;
			
			echo "</br> O reultado da exponciação é:$resultado";
			
			
			echo "</br> O reultado da exponciação é" . $valor1 ** $valor2 = $resultado;
			
		
		
		?>

		
		
		



	
	</body>



