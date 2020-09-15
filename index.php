<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *.
Buon lavoro!  -->

<?php 
    $text = 'Andando a cavallo per galoppare, scendere dal cavallo per non galoppare, andare su una moto per correre scendere da una moto per non correre';
    $lenText = strlen($text);
    $getParam = $_GET['word'];
    $textReplaced = str_replace($getParam, '***', $text); 
    $lenTextReplaced = strlen($textReplaced);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php</title>
</head>
<body>
    <h1>TESTO: <?php  echo $text ?></h1>
    <h2>LUNGHEZZA TESTO: <?php  echo  $lenText?></h2>
    <h1>TESTO RIMPIAZZATO: <?php  echo  $textReplaced?></h1>
    <h2>LUNGHEZZA TESTO RIMPIAZZATO: <?php  echo  $lenTextReplaced?></h2>
</body>
</html>