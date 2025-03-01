<html>
	<head>	
		<title>	AULA3 </title>
	</head>
<body>
	<?php	
//verificaçao de desconto
//ate 6 apenas 25% do valor
//ate 18 so 50%
//acima de 18 100%

	$idade = 0;
	$ingre = 0;
	$ingreto = 0;
	$desconto = 0;
	$idade = 18;
	$ingre = 40;
	
	if($idade<6){
		$desconto = 0.25;
		$ingreto = ingre *
		$desconto;
		echo"A pessoa de $idade anos pagará 
			pagará 25% do valor cheio que é  $ingre. Sendo assim pagará
			$ingreto";
    }else($idade >= 6 && $idade <18){
            %desconto = 0.5;
            $ingreto = $ingre * $desconto;
            echo "voce tem $idade anos, entao pagara $ingreto no ingresso que vale $ingre"
    }elseif($idade >= 18){
        echo "voce tem $idade e nao teea desconto entao pagara $ingre";
    }else{
        encho "idade invalida"
    } 
        
    ?>
</body>
		
</html>