<?php
session_start();
$filename = "words.txt"; //hittar och öppnar ordfilen

$lines = file($filename); //läs från fil som innehåller orden som kan användas i spelet 
$words = [];

foreach($lines as $line){ // pushar varje ord in i arrayen $words
    array_push($words, $line);
}
$max = count($words); //sätter antalet ord i arrayen i en int variable
$min = 0;
$random = rand($min, $max - 1); // sätter ett random 
$word = str_split($words[$random]);
$_SESSION["currentWord"] = $word;
foreach($_SESSION["currentWord"] as $letter){
    echo $letter."\n";
}

/**echo '<ul>' ;

foreach ($lines as $line) {
    echo "<li>$line</li>" ;
}

echo '</ul>' ;
**/

if(isset($_GET['letter'])){ //check if form was submitted
  $input = $_GET['letter']; //get input text
  $message = "Success! You entered: ".$input;
} else {
    $message = "SUBMIT PLEASE!";
}
var_dump($_POST);    
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method=get>
    Write a letter: <input type="text" name="letter"><br>
    <input type="submit">
    <?php
     if(isset($message)){
        echo $message;} ?>
    </form>
</body>
</html>
