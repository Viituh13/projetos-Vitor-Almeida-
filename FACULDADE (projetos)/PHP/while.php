<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <style>    
        .quadro {
            width:400px;
            height:400px;
            margin: auto;
            margin-top: 50px;
            border: 3px dashed black;
            border-radius: 25px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            padding-top: 5px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }
        #primeiro {
            border: 3px solid black;
        }
        #rosa{
            background-color: #f7c1d4 ;
        }
        #cinza{
            background-color: #55ed2b;
        
        }

    </style>
</head>
<body>
    <div class="quadro" id="primeiro">
        <?php
        $c = 0;
        while($c <= 10){
            $c ++;
            echo "<div";
            if($c%2==0){
                echo " id='rosa' ";
            }
            echo ">$c</div>";

        }
        ?>
    
    </div>
    <div class="quadro" id="primeiro">
        do{
            $c ++;
            ?><div <?php
            if($c%2 ==0){
                echo " id='cinza' ";
            }
        ?> >
        <?php
            echo "$c"
        ?>
      </div>
}while($c <=10 );

</body>
</html>