<html>
	<head>
		<title>EXERCICIO</title>
	</head>
	<body>
		
	</body>
</html>



// RESPOSTA EXERCICIO 02
<html>
	<head>
		<title> Minha página com formulário</title>
	</head>
	<body>
		<?php
			// a tag form necessita dos parãmetros ACTION e METHOD
			// action -> para onde a informação irá. Neste parametro
			// devemos colocar o nome do arquivo destino.
			//
			// method -> Define como a informação será enviada
			// pode ser GET ou POST
		?>
		<form	action="ex02.php" method="GET">
			Temperatura:
			<input type="number" name="celsius"/>
			<input type="submit" value="Enviar"/>
		</form>
		
	</body>

</html>

//PHP EXERCICIO 02


<html>
	<?php
		//declaração de variáveis
		$c = 0;
		$f = 0;
		
		//atribuição de valores
		$c = $_GET['celsius'];
		
		//processamento
		$f = ($c * 9/5) + 32;
		
		//Saída de dados
		echo "Temperatura em Celsius: " . $c;
		echo "<br/>";
		echo "Temperatura em Fahrenheit: ". $f;
		
	?>
  
  
  
 //RESPOSTA EXERCICIO 03
 
 <html>
	<?php
		//declaração de variáveis
		$preco = 0;
		$desconto = 0;
		$valordesconto = 0;
		$precofinal = 0;
		
		//atribuição de valores
		$preco = 100;
		$desconto = 20;
		
		//processamento
		$valordesconto = ($preco * $desconto)/100; 
		$precofinal = $preco - $desconto;
		
		//saída
		echo "<b>Preço do produto:</b> R$ $preco <br/>";
		echo "Percentual de desconto: R$ $desconto <br/>";
		echo "Valor do desconto: R$ $valordesconto <br/>";
		echo "Preço final: R$ $precofinal";
		
		
		
	?>

</html>