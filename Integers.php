<?php
    $int_1 = 2324;
    $int_2 = 78.97;
    $int_3 = 1889687897867767767676775554434445435467878667669789788787968878778;
    $int_4 = 6325e18998;
    $int_5 = "866";
    $int_6 = "usama";
    $int_7 = acos(8);


    //printing variables;
    echo("int1: " . $int_1);
    echo("<br>");
    echo("int2: " . $int_2);
    echo("<br>");
    echo("int3: " . $int_3);
    echo("<br>");
    echo("int4: " . $int_4);
    echo("<br>");
    echo("int5: " . $int_5);
    echo("<br>");
    echo("int6: " . $int_6);
    echo("<br>");
    echo("int7" . $int_7);
    echo("<br>");
    echo("<br>");

    //is_int
    echo("Is Integer? : " . is_int($int_1));
    echo("<br> Is Int? : ");
    var_dump(is_int($int_1));
    echo("<br> Is long? : ");
    var_dump(is_long($int_1));
    echo("<br> Is Integer? : ");
    var_dump(is_integer($int_1));
    echo("<br> Is Integer? : ");
    var_dump(is_long($int_5));
    echo("<br> Is Integer? : ");
    var_dump(is_integer($int_6));
 //break
    echo("<br>");
    echo("<br>");

    //is_float
    echo("Is Float? : " . is_float($int_2));
    echo("<br> Is double? : ");
    var_dump(is_double($int_2));
    echo("<br> Is Float? : ");
    var_dump(is_float($int_2));
    echo("<br> Is Float? : ");
    var_dump(is_float($int_5));
    echo("<br> Is Float? : ");
    var_dump(is_float($int_6));
//break
    echo("<br>");
    echo("<br>");

    //is_finite, is_infinte
    echo("Is Finite? : " . is_finite($int_3));
    echo("<br> Is Finite? : ");
    var_dump(is_finite($int_3));
    echo("<br> Is Infinite? : ");
    var_dump(is_infinite($int_3));
    echo("<br> Is Finite? : ");
    var_dump(is_finite($int_4));
    echo("<br> Is Infinite? : ");
    var_dump(is_infinite($int_4));
    echo("<br> Is Finite? : ");
    var_dump(is_finite($int_5));
    // echo("<br> Is Finite? : ");
    // var_dump(is_finite($int_6));
    echo("<br> Is Infinite? : ");
    var_dump(is_infinite($int_5));
    // echo("<br> Is Infinite? : ");
    // var_dump(is_infinite($int_6));

//break
    echo("<br>");
    echo("<br>");
    //is_nan
    echo("<br> Is NAN? : ");
    var_dump(is_nan($int_2));
    echo("<br> Is NAN? : ");
    var_dump(is_nan($int_5));
    echo("<br> Is NAN? : ");
    var_dump($int_5);
    echo("<br> Is NAN? : ");
    var_dump($int_6);
    echo("<br> Is NAN? : ");
    var_dump($int_2);
    echo("<br> Is NAN? : ");
    var_dump(is_nan($int_7));
    echo("<br> Is NAN? : ");
    var_dump($int_7);

    //break
    echo("<br>");
    echo("<br>");
    //is_nan
    //check if any Number is present in string form or other format.
    echo("<br> Is Numeric? : ");
    var_dump(is_numeric($int_5));
    echo("<br> Is Numeric? : ");
    var_dump(is_numeric($int_6));
    echo("<br> Is Numeric? : ");
    var_dump(is_numeric($int_7));
    echo("<br> Is Numeric? : ");
    var_dump(is_numeric($int_4));
    echo("<br> Is Numeric? : ");
    var_dump(is_numeric($int_2));
    echo("<br> Is Numeric? : ");
    var_dump(is_numeric($int_7));

    //break
    echo("<br>");
    echo("<br>");
    //converts float and string into integer
    //(int)
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_5;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_6;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_7;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_2;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_3;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_4;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (int)$int_1;
    echo($int_cast);
    var_dump($int_cast);
//break
echo("<br>");
echo("<br>");
    //(int)
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_5);
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_6);
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_7);
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_2);
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_3);
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_4);
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = intval($int_1);
    echo($int_cast);
    var_dump($int_cast);
    //break
    echo("<br>");
    echo("<br>");

    //(int)
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_5;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_6;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_7;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_2;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_3;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_4;
    echo($int_cast);
    var_dump($int_cast);
    echo("<br> Is converted to Integer? : ");
    $int_cast = (integer)$int_1;
    echo($int_cast);
    var_dump($int_cast);

    

?>