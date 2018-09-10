<?php    
if(isset($_POST['submit'])){ //check if form was submitted
  $input = $_POST['letter']; //get input text
  $message = "Success! You entered: ".$input;
}    
?>