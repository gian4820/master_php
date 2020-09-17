<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>

    <table border="1">
        
        <?php
            for($i=1; $i<=10; $i++){
                for($j=1; $j<=10; $j++){
                    echo '<td>'. ($i * $j) .'</td>';
                    if($j==10){
                        echo '<tr>'.($i * $j).'</tr>';
                    }      
                }
            }
        ?>
    </table>

</body>
</html>











