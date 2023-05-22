<?php

function checkCharacter($Character)
{
    $vowel = array("A", "E", "I", "O", "U");

    if (in_array($Character, $vowel)) {
        echo "The letter <b>'" . $Character . "'</b> is a VOWEL !";
    }else if($Character == ''){
        echo "Please enter a Character!";
    } 
    else {
        echo "The letter <b>'" . $Character . "'</b> is a CONSONANT !";
    }
}

function numberAsWord($digit)
{
    echo "Entered Number : <b>" . $digit . "</b><br />";
    $splitDigit = str_split($digit);

    foreach ($splitDigit as $digitArray) {

        switch ($digitArray) {
            case 1:
                echo "ONE - ";
                break;
            case 2:
                echo "TWO - ";
                break;
            case 3:
                echo "THREE - ";
                break;
            case 4:
                echo "FOUR - ";
                break;
            case 5:
                echo "FIVE - ";
                break;
            case 6:
                echo "SIX - ";
                break;
            case 7:
                echo "SEVEN - ";
                break;
            case 8:
                echo "EIGHT - ";
                break;
            case 9:
                echo "NINE - ";
                break;
            case 0:
                echo "ZERO - ";
                break;
        }
    }

}

function divisibleByThree($digit)
{
    $checkDiv = $digit % 3;
    if (($digit == 0) || ($digit == '')) {
        echo "Please enter a number";
    } else if ($checkDiv == 0) {
        echo "The number <b>" . $digit . "</b> is DIVISIBLE by 3";
    } else {
        echo "The number <b>" . $digit . "</b> is NOT DIVISIBLE by 3";
    }
}


function deleteRecurring($array)
{
    foreach (array_unique($array) as $item) {
        echo "$item <br />";
    }
}



function armstrongNumber($armNumber)
{

    $array = array_map('intval', str_split($armNumber));

    $countArray = count($array);
    $total = 0;
    foreach ($array as $index => $item) {

        $total += ($item ** $countArray);
    }
    if ($total == $armNumber) {
        echo "The entered number : " . $armNumber . " - is an ARMSTRONG NUMBER!";
    } 
    else if($armNumber == ''){
        echo "Please enter a Number!";
    } 
    else {
        echo "The entered number : " . $armNumber . " - is an NOT an ARMSTRONG NUMBER!";
    }

}