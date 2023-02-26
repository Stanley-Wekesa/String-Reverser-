<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    function processMatrix($arr)
    {
      // get number of rows and columns
      $rows = count($arr);
      $cols = count($arr[0]);
    }

    // confirm if matrix is square
    if ($rows !== $cols) {
        $error = "The matrix is not square.";
        return $error;
    }

    // sum of main diagonal
    $diagonalSum = 0;
    for ($i = 0; $i < $rows; $i++) {
        $diagonalSum += $arr[$i][$i];
    }

    $repeatedRows = 0;
    for ($i = 0; $i < $rows; $i++) {
        $rowElements = $arr[$i];
        $uniqueElements = array_unique($rowElements);
        if (count($rowElements) !== count($uniqueElements)) {
            $repeatedRows++;
        }
    }

    $repeatedCols = 0;
    for ($j = 0; $j < $cols; $j++) {
        $colElements = array_column($arr, $j);
        $uniqueElements = array_unique($colElements);
        if (count($colElements) !== count($uniqueElements)) {
            $repeatedCols++;
        }
    }

    // give results as jyson
    $results = array(
        "diagonal_sum" => $diagonalSum,
        "repeated_rows" => $repeatedRows,
        "repeated_cols" => $repeatedCols
    );
    return json_encode($results);
    ?>

  </body>
</html>
<?php
