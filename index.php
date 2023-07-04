<?php 


    $letters = ['A',  'B',  'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X','Y', 'Z'];
    $numbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26'];
    $symbols = ['!', '"', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '[', '}', ']', ':', ';', '@', '~', '#', '|', '<', ','];

    $result = [];

    for($i =0; $i < count($letters); $i++) {
        array_push($result, $letters[$i], $numbers[$i], $symbols[$i]);
    }

    var_dump($result);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Generator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>


<body>

    <h1>
        Strong Password Generator
    </h1>

    <form action="./index.php" method="get">
        <label for="user-password">
            Lunghezza password:
        </label>
        <input type="text" name="user-password">
        <br>

        <label for="user-password">
            Consenti ripetizioni di uno o più caratteri:
        </label>
        <input type="radio" name="user-password" value="answer">
        <label for="Sì">Sì</label><br>

        <input type="radio" name="user-password" value="answer">
        <label for="No">No</label><br>

        <input type="checkbox" name="lettere" value="lettere">
        <label for="vehicle1">Lettere</label><br>

        <input type="checkbox" name="numeri" value="numeri">
        <label for="vehicle1">Numeri</label><br> 

        <input type="checkbox" name="simboli" value="simboli">
        <label for="vehicle1">Simboli</label><br>
    </form>



    <script src="" async defer></script>
</body>

</html>