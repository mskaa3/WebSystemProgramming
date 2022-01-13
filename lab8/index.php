<!DOCTYPE html>
<html>
<head>
<style>
  /* web style changing depending on the saved cookies  */
  body { background-color: <?=$_COOKIE["webcolor"]?>; } 
  div {font-size: <?=$_COOKIE["fontSize"]?>;
    font-style: <?=$_COOKIE["fstyle"]?>;}
</style>
</head>
<body>

<!-- Options form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   Color:
  <input type="radio" name="color" <?php if (isset($color) && $color=="blue") echo "checked";?> value="blue">blue
  <input type="radio" name="color" <?php if (isset($color) && $color=="green") echo "checked";?> value="green">green
  <input type="radio" name="color" <?php if (isset($color) && $color=="yellow") echo "checked";?> value="yellow">yellow  
<br><br>
  Text size:
  <input type="radio" name="changeFontSize" <?php if (isset($changeFontSize) && $changeFontSize=="xx-small") echo "checked";?> value="xx-small">xx-small
  <input type="radio" name="changeFontSize"  <?php if (isset($changeFontSize) && $changeFontSize=="small") echo "checked";?> value="small">small
  <input type="radio" name="changeFontSize" <?php if (isset($changeFontSize) && $changeFontSize=="medium") echo "checked";?> value="medium">medium
  <input type="radio" name="changeFontSize" <?php if (isset($changeFontSize) && $changeFontSize=="large") echo "checked";?> value="large">large  
  <input type="radio" name="changeFontSize" <?php if (isset($changeFontSize) && $changeFontSize=="x-large") echo "checked";?> value="x-large">x-large 
  <input type="radio" name="changeFontSize" <?php if (isset($changeFontSize) && $changeFontSize=="xx-large") echo "checked";?> value="xx-large">xx-large 
  
  <br><br>
  Normal or italic?:
  <input type="radio" name="fontStyle" <?php if (isset($fontStyle) && $fontStyle=="normal") echo "checked";?> value="normal">normal
  <input type="radio" name="fontStyle"  <?php if (isset($fontStyle) && $fontStyle=="italic") echo "checked";?> value="italic">italic
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<br><br>
<!-- exemplary text to show how cookies are working -->
<div >This is some text.</div>
<br><br>
<?php
// initializing default values of variables
$webcolor="";
$color="";
$size="";
$style="";
//if the request was sent to the server(submit button pressed) than we assign to the variables values of chosen fields
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"]?? "";
    $size =$_POST["changeFontSize"]?? "";
    $style=$_POST["fontStyle"]?? "";
  
    //and we set cookies names, values, and the time after which they expire
    setcookie("webcolor", $color, time() + 2 * 24 * 60 * 60);
    setcookie("fontSize",$size,time() +60);
    setcookie("fstyle",$style,time() +60*2);

}

?>


<!-- second form needed to log in -->
<br><br>
<form name="first" action="index.php" method="post">
    <label for="login">Login:</label>
    <input name="login" type="text"><br>
    
    <label for="password">Password:</label>
    <input name="password" type="password"><br>
    <input name="sub" type="submit">
</form>
<!-- if there was something sent to the server in fields login and password we go further -->
<?php
if(isset($_POST['login'])&&isset($_POST['password'])){
    //  array of logins and passwords
      $logins = array(
          "julia" => "moska",
          "kaan" => "oncu",
      );


      $user = isset($_POST['login']) ? strtolower($_POST['login']) : '';
      $pass = isset($_POST['password']) ? $_POST['password'] : '';
      // validation if the particular login matches to its password
      if ( ! isset($logins[$user]) or $logins[$user] != $pass)
        {
            echo "Wrong Username/Password" ;
            exit();
      }else{
        // if yes, than we start a new session with that user
          session_start();
          // and we assign session the user and we store session id in a cookie
          $_SESSION['login']= $_POST['login']?? "";;
          $_currentSessionId = session_id();
          setcookie('ses', $_currentSessionId,time() + (60 * 5));
        //and we go to the next page as we are logged in
          header('Location: secondpage.php');
      }
}
?>


</body>
</html>