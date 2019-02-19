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

  $answer = null;
  validate_input($romanString);
  if (array_key_exists($romanString, $decoder)) {
    $answer = $decoder[$romanString];
  }

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




   // Test invalid inputs
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
