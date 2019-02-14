
<?php
  /*
    Main function which takes in the parameter passed in from the tesster_function
    Does a loop from 1 to input, and checcks if each number is prime.  If it is,
    number gets added to the array which will be printed at the end
  */
  function prime_function($input){
    $primeNums = array();
    for($i = 1; $i <= $input; $i++){
      if(check_if_prime($i) == TRUE){
        array_push($primeNums, $i); //if number is prime, push to array
      }
    }

    echo implode(", ", $primeNums); // Removes the last "," from the array, better for printing
    echo("\n"); // line break
  }

  /*
    Helper method which checks if an input number is prime or not.
    1 = not prime, 2 = prime, 3 = prime
    If a number is even, it is not prime.
    If input % any number uptil it == 0, then it is not prime.

  */
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
  /*
    Simple function which tests the functionality of the prime_function
  */
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
 ?>

<?php
  //Call for tester function
  tester_function();
 ?>
