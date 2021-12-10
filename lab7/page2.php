<?php require('components/head.inc.php'); ?>
<?php include('components/navBar.inc.php'); ?>

<h1>This is a second webpage, glad to see you</h1>


<?php 
        $numbers = range(1,10);
        for ($i = 0; $i <= 9; $i++) {
            echo $i ."th Element of indexed array is " .$numbers[$i] ."<br>";
        }

        echo "Lets move through the array:<br> ";
        
        echo current($numbers) . "<br>";
        echo next($numbers) . "<br>";
        echo next($numbers) . "<br>";
        echo "And now we reset and we are here again: <br>" .reset($numbers);


        echo "<br><br><br><br>";
        $job = array("Mark"=>"Manger", "Klaus"=>"Junior Developer", "John"=>"Senior Backend developer",
                      "Bernie"=>"Junior Developer");
        foreach($job as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
          }
        echo "<br>";
        echo "How many do workers we have? <br>";
        echo "We have ".count($job) ."<br>";
        echo "Who is a Junior Developer out of them? <br>";
       
        while ($currentJob = current($job)) {
            if ($currentJob == 'Junior Developer') {
                echo key($job), "\n";
            }
            next($job);
        }

        echo "<br><br><br>";
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $serv=$_SERVER['HTTP_HOST'];
       
        echo "ip num: ".$ip ;
        echo "<br>";
        echo "host name: ".$serv ;
?>

<?php include('components/footer.inc.php'); ?>