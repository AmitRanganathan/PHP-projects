<?php
/**
This program converts an input of roman numerals into the numerical system.  There
will be a validate_input function which first checks if the input is of correct type: String.
Then a convert_to_numeral function that will do the actual converting.  An array
will be used to map roman numerals into arabic numerals.  The map will be used to
do the conversion.

@author  Amit Ranganathan
@version 1.0
@since   2019-02-19
*/

function validate_input($input){
  if(!(is_string($input))){
    throw new Exception("Input must be a string representing a Roman Numeral.");
  }
}

function convert_to_numeral($decoder, $romanString){
  $answer = null; // Will contain the converted numeral
  validate_input($romanString); // make sure input is of valid type
  // if the roman numeral is in the array, just print the value for the key
  if (array_key_exists($romanString, $decoder)) {
    $answer = $decoder[$romanString];
  }else{
    // Check if the current index's value in $decoder is GTE to the next
    // indexes value.  If it is, simply add value to the $answer.  If it is not,
    // subtract the greater value from the smaller and add to $answer, incremnt $i
    // here since we are already taking into consideration the $i + 1 position.
    for ($i = 0; $i < strlen($romanString); $i++){
      $curValue = $decoder[$romanString[$i]];
      if($i + 1 < strlen($romanString)){
        $nextValue = $decoder[$romanString[$i+1]];
        if($curValue >= $nextValue){
          $answer += $curValue;
        }else{
          $answer += ($nextValue - $curValue);
          $i++;
        }
      }else{
        $answer += $curValue;
      }
    }
  }
  // print the answer
  echo($romanString);
  echo(": ");
  echo($answer);
  echo('<br>');
}

 ?>


 <?php
 /*
   Let us use an array to store key-value pairs of roman numerals
   I => 1, V =>5, etc..
 */
 $decoder = array(
    'I'    => 1,
    'V'    => 5,
    'X'  => 10,
    'L'    => 50,
    'C'  => 100,
    'D'    => 500,
    "M"  => 1000,
 );
/**
Tester function to test the functionality of the methods above.
*/
function tester($decoder){
   // Test all the basic roman numerals that are in the array
   echo("BASIC ROMAN NUMERALS!");
   echo("<br>");
   try{
     convert_to_numeral($decoder, 'I');
     convert_to_numeral($decoder,'V');
     convert_to_numeral($decoder,'X');
     convert_to_numeral($decoder,'L');
     convert_to_numeral($decoder,'C');
     convert_to_numeral($decoder,'D');
     convert_to_numeral($decoder,'M');
   }catch(Exception $e){
     echo 'Caught exception: ', $e->getMessage(), "\n";
   }

   // Test combinations of roman numerals
   echo("<br>");
   echo("VARIOUS COMBINATIONS!");
   echo("<br>");
   try{
     convert_to_numeral($decoder, 'II');
     convert_to_numeral($decoder, 'III');
     convert_to_numeral($decoder, 'IV');
     convert_to_numeral($decoder, 'VI');
     convert_to_numeral($decoder, 'VII');
     convert_to_numeral($decoder, 'IX');
     convert_to_numeral($decoder, 'XI');
     convert_to_numeral($decoder, 'XII');
     convert_to_numeral($decoder, 'XIII');
     convert_to_numeral($decoder, 'XIV');
     convert_to_numeral($decoder, 'XV');
     convert_to_numeral($decoder, 'XVI');
     convert_to_numeral($decoder, 'XVII');
     convert_to_numeral($decoder, 'XVIII');
     convert_to_numeral($decoder, 'XIX');
     convert_to_numeral($decoder, 'XX');


   }catch(Exception $e){
     echo 'Caught exception: ', $e->getMessage(), "\n";
   }


   // Test invalid inputs
   echo("<br>");
   echo("INVALID INPUTS!");
   echo("<br>");
   try{
     convert_to_numeral($decoder,3);
     convert_to_numeral($decoder,4.56);
   }catch(Exception $e){
     echo 'Caught exception: ', $e->getMessage(), "\n";
   }
 }

 // Call to tester function
 tester($decoder);
  ?>
