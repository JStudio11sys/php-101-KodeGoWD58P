<?php
include('phpFunctions.php');
?>
<!DOCTYPE html>

<head>
    <title>PHP Functions</title>
</head>

<body>
    <a href="index.php?exer=1&enterChar=">PHP Exercise 1</a> |
    <a href="index.php?exer=2&enterNum=">PHP Exercise 2</a> |
    <a href="index.php?exer=3&enterDivNum=0">PHP Exercise 3</a> |
    <a href="index.php?exer=4&string1=&string2=&string3=&string4=&string5=">PHP Exercise 4</a> |
    <a href="index.php?exer=5&enterNum=">PHP Exercise 5</a> |
    <br />
    <hr />
    <br />

    <?php
    if ($_REQUEST['exer'] == 1) {
        ?>
        <h3>PHP Functions Exercise 1</h3>
        <form method="post" action="#">
            Enter a Character:
            <input type="text" size="2" name="enterChar" maxlength="1"
                onkeydown="return /[a-zA-Z]/i.test(event.key)" /><br />
            <input type="submit" value="Identify" /> <br /><br />
        </form>
        <?php

        $getChar = strtoupper($_REQUEST['enterChar']);

        echo checkCharacter($getChar);
    }
    ?>


    <?php
    if ($_REQUEST['exer'] == 2) {
        ?>
        <h3>PHP Functions Exercise 2</h3>
        <form method="post" action="#">
            Enter a number : <input type="number" name="enterNum" onkeydown="return /[0-9]/i.test(event.key)" />
            <input type="submit" value="Enter Number" />
        </form>

        <?php
        $getDigit = $_REQUEST['enterNum'];

        echo numberAsWord($getDigit);
    } ?>


    <?php
    if ($_REQUEST['exer'] == 3) {
        ?>
        <h3>PHP Functions Exercise 3</h3>
        <form method="post" action="#">
            Enter a number : <input type="number" name="enterDivNum" onkeydown="return /[0-9]/i.test(event.key)" />
            <input type="submit" value="Enter Number" /> <br /><br />
        </form>
        <?php
        $checkDivBy3 = $_REQUEST['enterDivNum'];

        echo divisibleByThree($checkDivBy3);
    }
    ?>


    <?php
    if ($_REQUEST['exer'] == 4) {
        ?>
        <h3>PHP Functions Exercise 4</h3>
        <form method="post" action="#">
            Enter String 1 : <input type="text" name="string1" /><br />
            Enter String 2 : <input type="text" name="string2" /><br />
            Enter String 3 : <input type="text" name="string3" /><br />
            Enter String 4 : <input type="text" name="string4" /><br />
            Enter String 5 : <input type="text" name="string5" /><br />
            <input type="submit" value="Enter Strings" /> <br /><br />
        </form>
        <?php
        $string1 = $_REQUEST['string1'];
        $string2 = $_REQUEST['string2'];
        $string3 = $_REQUEST['string3'];
        $string4 = $_REQUEST['string4'];
        $string5 = $_REQUEST['string5'];

        $stringArray = [$string1, $string2, $string3, $string4, $string5];

        echo deleteRecurring($stringArray);
    }
    ?>

    <?php
    if ($_REQUEST['exer'] == 5) {
        ?>
        <h3>PHP Functions Exercise 5</h3>
        <form method="post" action="#">
            Enter a number : <input type="number" name="enterNum" onkeydown="return /[0-9]/i.test(event.key)"/>
            <input type="submit" value="Enter Number" /><br /><br />

        </form>

        <?php
        $getDigit = $_REQUEST['enterNum'];


        echo armstrongNumber($getDigit);

    } ?>


</body>

</html>