<?php require('components/head.inc.php'); ?>
<?php include('components/navBar.inc.php'); ?>

<h1>This is a first PHP page</h1>
<?php include('components/form.inc.php'); ?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST["Name"] ?? "";
    $surname=$_POST["Surname"] ?? "";
    $stringToChange=$_POST["Change"] ?? "";
    $message="we are exiting now";
    $number=$_POST["Number"] ??"";
    $newNumber=(float)$number*5-3;

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['someAction']))
    {
        die($message); 
    }else if(preg_match('~^\p{Lu}~u', $name)==0){
        echo "Name should start with capital letter";
    }else if($surname==""){
        echo "Surname cannot be left blank";
    }else {
        echo "Hello, " .$name ." ".$surname. "<br>";
        echo "Your favourite number " .$number ." multiplied by 5 and minus 3 is " .$newNumber ."<br>";
        echo preg_replace('/change me/i', 'HOLA AMIGOS', $stringToChange);
        }
    }

   
   

  

  
    
    
    ?>





<?php include('components/footer.inc.php'); ?>



