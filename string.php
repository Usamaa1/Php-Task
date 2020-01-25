<?php
    $name1 = "Usama";
    $name2 = "Riaz Ali";
    $txt = "Hye i am here to talk to you";
    $txt2 = "Is anyone here?";
    $txt3 = "upps.. sorry!";

    //printing variable data
    echo($name1);
    echo "<br>";
    echo($name2);
    echo "<br>";
    echo($txt);
    echo "<br>";
    echo($txt2);
    echo "<br>";
    echo($txt3);
    echo "<br>";
    echo ("*************************");
    echo "<br>";

    //string word count
    echo ("Word Count is: " . str_word_count($txt));
    echo "<br>";
    //string length
    echo ("String Length is: " . strlen($name1));
    echo "<br>";
    //string in reverse order
    echo ("String Reverse: " . strrev($txt3));
    echo "<br>";
    //string replacing
    echo ("<b>Original String</b>: " . $txt. "<br>" . "<b>Replaced string: </b>" . str_replace("here", "there", $txt));
    echo "<br>";
    echo ("<b>Replaced string</b>: " . str_replace(" ", $txt, $txt2));
    echo "<br>";
    //string position
    echo ("String position: " . strpos($name2, "A"));
    echo "<br>";
    //uppercase conversion
    echo ("Uppercase Function: " . strtoupper($txt3));
    echo "<br>";
    //lowercase conversion
    echo ("Lowercase Function: " . strtolower($name2));
    echo "<br>";
    //comparing two strings
    echo ("String Comparision: " . strcmp($txt3,$txt2));
    echo "<br>";
    //string collapse
    echo ("String Collapse: " . strcoll($txt3,$name2));
    echo "<br>";



?>