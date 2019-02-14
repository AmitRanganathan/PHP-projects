
<?php
  function prime_function($input){
    $primeNums = array();
    for($i = 1; $i <= $input; $i++){
      if(check_if_prime($i) == TRUE){
        array_push($primeNums, $i);
      }
    }

    echo implode(", ", $primeNums);
    echo("\n");
  }

  function check_if_prime($num){
    if($num == 1){
      return FALSE;
    }
    elseif($num == 2){
      return TRUE;
    }
    elseif($num == 3){
      return TRUE;
    }
    elseif($num % 2 == 0){
      return FALSE;
    }

    $counter = 0;
    for($i = 2; $i < $num; $i++){
      if ($num % $i == 0){
        return FALSE;
      }
    }
    return TRUE;

  }
?>



<?php
  function tester_function(){
    echo("Output for parameter = 10: ");
    echo("\n");
    prime_function(10);

    echo("Output for parameter = 0");
    echo("\n");
    prime_function(0);

    echo("Output for parameter = 100");
    echo("\n");
    prime_function(100);

    /*
      Checking the outputs for nums 1 - 99
    */
    /*for($i = 0; $i < 100; $i++){
      echo($i);
      echo(": ");
      prime_function($i);

    }*/
    //prime_function("12"); // Checking to see if it works when number is written as a string
  }
  tester_function();
?>
