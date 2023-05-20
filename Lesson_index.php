<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <?php
        $var1 = 'PHP';

        if(($var1 == 'PHP') && ($var1 <> '')){
            echo "Welcome to PHP! <br />";
        }
        else {
            echo "Sorry this is not PHP <br />";
        }



        switch($var1) {
            case "PHP":
                echo "Welcome to PHP! <br />";
            break;
            default:
                echo "This is not PHP! <br />";
        }




        $students = ["Joshua","Rommel","Jerold","Xander","Meloy","Carlo","Nicole","Ralph","Lyka"];
        //$students = array(Joshua","Rommel","Jerold","Xander","Meloy","Carlo","Nicole","Ralph","Lyka");

        foreach($students as $item){
            echo "$item,  ";
        }

        echo "<br />";

        foreach($students as $index=>$item){
            echo "$index - $item, ";
        }

        echo "<br />";


        $counter = 0;

        while($counter < count($students)){
            echo "$counter  ";
            $counter++;
        }



        do{
            echo $counter;
            $counter++;
        } 
        while($counter < count($students));
       

        echo "<br />";

        //functions 
        function displayStudentNames($list){
            foreach($list as $item){
                echo $item;
            }
        }



        function addTwoNumbers($num1, $num2){
            return $num1 + $num2;
        }




        function doMultiply($num1, $num2){
            //return $num1 * $num2;
            $product = 0;
            for($counter = 0; $counter < $num2; $counter++){
               $product = addTwoNumbers($num1, $product);
            }
            return $product;
        }

        echo doMultiply(2, 40);


        echo "<br />".addTwoNumbers(5, 5)."<br />";

        displayStudentNames($students);




        function displayNumber($number){
            if($number <= 20){
                echo "<br /> $number <br />";
                displayNumber($number + 1);
            }
        }

        displayNumber(1);




    ?>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Student Name</td>
                </tr>
            </thead>
                
                <?php 
                foreach($students as $index=>$item){
                ?>
                <tr>
                    <td><?php echo $index ?></td>
                    <td><?php echo $item ?></td>
                </tr>
                <?php } ?>

            <tbody>
              
            </tbody>
        </table>    
    </div>
</body>
</html>



