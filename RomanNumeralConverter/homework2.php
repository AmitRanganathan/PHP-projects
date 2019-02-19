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

  function validate_input($input){
    if(!(is_string($input))){
      throw new Exception("Input must be a string representing a Roman Numeral.");

    }else{
      echo($input);
      echo('<br>');

    }
  }

  function convert_to_numeral($romanString){
    validate_input($romanString);
  }
 ?>


 <?php
 /**
  Tester function to test the functionality of the methods above.
 */
   function tester(){
     try{
       convert_to_numeral('V');
       convert_to_numeral(3);
       convert_to_numeral(4.56);
     }catch(Exception $e){
       echo 'Caught exception: ', $e->getMessage(), "\n";
     }
   }

   // Call to tester function
   tester();



  ?>
