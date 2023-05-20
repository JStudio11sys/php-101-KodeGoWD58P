<?php
include('conn_db.php');
?>
<!DOCTYPE html>

<head>
    <title>PHP</title>
</head>

<body>
    <h3>Testing DB Connect</h3>
    <?php
    $query = mysqli_query($db_connect, "SELECT * FROM employees WHERE id=1");
    $fetch_data = mysqli_fetch_array($query, MYSQLI_ASSOC);


    echo "User Id : " . $fetch_data['user_id'] . "<br />";
    echo "Code : " . $fetch_data['code'] . "<br />";
    echo "Position : " . $fetch_data['position_title'] . "<br />";
    echo "Employment Status : ";
    if ($fetch_data['position_title'] == 1) {
        echo "ACTIVE";
    } else {
        echo "NOT - ACTIVE";
    }
    echo "<br />";
    echo "Office Branch : " . $fetch_data['office_branch'] . "<br />";
    ?>
    <br />
    <hr />
    <br />

    <h3>PHP statements exercise 1</h3>
    <div>
        <?php
        $word1 = 'class';
        $word2 = 'kodego';
        $word3 = 'top';



        function getStringLength($string)
        {
            $stringLength = strlen($string);
            return $stringLength;
        }

        if (getStringLength($word1) == 5) {
            echo "The word <b>'" . $word1 . "'</b> has 5 characters";
        } else {
            echo "The word " . $word1 . " does not have 5 characters";
        }
        ?>
    </div>

    <br />
    <hr />
    <br />

    <h3>PHP statements exercise 2</h3>
    <div>
        <?php

        $quantity1 = 70;
        $quantity2 = 100;
        $price1 = 35;
        $price2 = 30;

        function multiplyTwoNumbers($num1, $num2)
        {
            $finalProduct = $num1 * $num2;
            return $finalProduct;
        }

        $deal1 = multiplyTwoNumbers($quantity1, $price1);
        $deal2 = multiplyTwoNumbers($quantity2, $price2);

        if ($deal1 < $deal2) {
            echo "The best deal is : <br />";
            echo "Quantity : " . $quantity1 . "<br />";
            echo "Price : " . $price1 . "<br />";
            echo "Total : " . $deal1;
        } else {
            echo "The best deal is : <br />";
            echo "Quantity : " . $quantity2 . "<br />";
            echo "Price : " . $price2 . "<br />";
            echo "Total : " . $deal2;
        }


        ?>
    </div>

    <br />
    <hr />
    <br />

    <h3>PHP statements exercise 3</h3>
    <div>
        <?php
        $month = 'NOVO';

        if (strlen($month) > 3){
            $month = substr($month, 0, 3);
        }

        switch (strtoupper($month)) {
            case 'JAN':
            case 'MAR':
            case 'MAY':
            case 'JUL':
            case 'AUG':
            case 'OCT':
            case 'DEC':
                echo "The month : " . $month . " has 31 days";
                break;
            case 'FEB':
                echo "The month : " . $month . " has 28 or 29 days";
                break;
            case 'APR':
            case 'JUN':
            case 'SEP':
            case 'NOV':
                echo "The month : " . $month . " has 30 days";
                break;
            default:
                echo "INVALID";
        }
        ?>
    </div>

    <br />
    <hr />
    <br />

    <h3>PHP statements exercise 4</h3>
    <div>
        <?php
        $students = array(
            ["name" => "John Garg", "age" => "15", "school" => "Ahlcon Public school"],
            ["name" => "Smith Soy", "age" => "16", "school" => "St. Marie school"],
            ["name" => "Charle Rena", "age" => "16", "school" => "St. Columba school"]
        );
        ?>
        <table border="1">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Age</td>
                    <td>School</td>
                <tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $index => $item) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            <?php echo $item['age']; ?>
                        </td>
                        <td>
                            <?php echo $item['school']; ?>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <br />
    <hr />
    <br />

    <h3>PHP statements exercise 5</h3>
    <table border='1'>
        <tr>
            <?php
            for ($num1 = 0; $num1 <= 10; $num1++) {
                if($num1 > 0){
                    echo "<td>" . $num1 . "</td>";
                }else{
                    echo "<td></td>";
                }

                for ($num2 = 1; $num2 <= 10; $num2++) {
                    if($num1 > 0) {
                        $quo = $num2 / $num1;
                    }else {
                        $quo = $num2;
                    }
                    
                    echo "<td>" . round($quo, 1) . "</td>";
                }
                ?>
            </tr>
            <?php
            }
            ?>
    </table>



</body>

</html>