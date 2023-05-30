<?php

function checkCharacter($Character)
{
    $vowel = array("A", "E", "I", "O", "U");

    if (in_array($Character, $vowel)) {
        return "The letter <b>" . $Character . "</b> is a VOWEL !";
    }else if($Character == ''){
        return "Please enter a Character!";
    } 
    else {
        return "The letter <b>" . $Character . "</b> is a CONSONANT !";
      
    }
}










function numberAsWord($digit)
{
    //echo "Entered Number : <b>" . $digit . "</b><br />";
    $splitDigit = str_split($digit);

    foreach ($splitDigit as $digitArray) {

        switch ($digitArray) {
            case 1:
                return "ONE";
                break;
            case 2:
                return "TWO - ";
                break;
            case 3:
                return "THREE - ";
                break;
            case 4:
                return "FOUR - ";
                break;
            case 5:
                return "FIVE - ";
                break;
            case 6:
                return "SIX - ";
                break;
            case 7:
                return "SEVEN - ";
                break;
            case 8:
                return "EIGHT - ";
                break;
            case 9:
                return "NINE - ";
                break;
            case 0:
                return "ZERO - ";
                break;
        }
    }

}

function divisibleByThree($digit)
{
    $checkDiv = $digit % 3;
    if (($digit == 0) || ($digit == '')) {
        return "Please enter a number";
    } else if ($checkDiv == 0) {
        return "The number <b>" . $digit . "</b> is DIVISIBLE by 3";
    } else {
        return "The number <b>" . $digit . "</b> is NOT DIVISIBLE by 3";
    }
}


function deleteRecurring($array)
{
    foreach (array_unique($array) as $item) {
        return "$item <br />";
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
        return "The entered number : " . $armNumber . " - is an ARMSTRONG NUMBER!";
    } 
    else if($armNumber == ''){
        return "Please enter a Number!";
    } 
    else {
        return "The entered number : " . $armNumber . " - is an NOT an ARMSTRONG NUMBER!";
    }

}