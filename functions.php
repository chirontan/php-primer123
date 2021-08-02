<?php 
        $title = "Functions";
        include 'includes/header.php' 
        
    ?>
    <h1>Functions<h1>

    <?php

        /*defining a funcion */

        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br/>";

        }

        /* calling a function */

        writeMessage();

        echo '<hr/>';


         writeMessage();

         /* functions with parameters */

         function addfunction($num1,$num2){

            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is : $sum <br/>";


         }

         function changeNum(&$num){

            $num = $num + 10;
            // $num+= 10;


         }

        function returnProduct($num1 , $num2){
                $prod = $num1 * $num2;
                return $prod;


        }



         $num = 500;
         addfunction(10,20);
         addfunction(10,$num);
         addfunction('10',"50");

         changeNum($num);
         echo $num . '<br/>';


         $return_value = returnProduct(10,200);
         echo $return_value  . '<br/>';





    ?>


    
<?php require 'includes/footer.php' ?>