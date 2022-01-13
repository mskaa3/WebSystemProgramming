<?php
//validation if the session it's the same user
session_start();
if (!isset($_SESSION["login"])){
  header("Location: index.php");
  exit();
}else{
    //login of the user becomes visible
    echo "Ohhh, its you " . $_SESSION["login"]?? "";;
    echo " ";
    //session id taken from the cookie
    echo "I guess your session id was " .   $_COOKIE["ses"] .",wasn't it???";
    
}
?>
<br><br>
<div >Welcome, you are logged in</div>