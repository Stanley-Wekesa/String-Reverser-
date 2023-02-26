<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="StringReverser.php" method="get">

      Enter words to be reversed: <br><br>
      <input type="text" name="user_input">
      <br><br>
      <input type="submit" name="submit" value="Reverse">

    </form>

    <?php
     function reverseString($s) {
       // find out the number of words in the input string
       $wordCount = str_word_count($s);
       $wordCountError = "Number of words should be greater than or equals to 1 and less than or equals to 104";
       // word limit constrain implimentation
       if ($wordCount >= 1 && $wordCount <= 104) {
         // split input string into words using ' ' to mark start and end of split action
         $words = explode(' ', $s);
         // reverse order of words
         $reversedWords = array_reverse($words);
         // join the words back
         $new_str = implode(' ', $reversedWords);
         return $new_str;

       } else {
         return $wordCountError;
       }

      }

     $string = $_GET["user_input"];
     $new_str = reverseString($string);
     echo "<br>";
     echo $new_str;
     ?>

  </body>
</html>
