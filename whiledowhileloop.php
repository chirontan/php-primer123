<?php 
        $title = "While Do While Loop";
        include 'includes/header.php' 
        
    ?>
    <h1>while loop</h1>
    <?php
        $grade = 0;
       // INFINITE LOOP
       //   while($grade < 10){
       //     echo '<p>I AM LESS THAN 10</P>';

       // }

       while($grade < 10){
            echo '<p>I AM LESS THAN 10</P>';
            $grade++;
       }

       echo 'EXIT LOOP!';

      

    ?>



    <h1>do-while loop</h1>

    <?php
        //post-condition loop
        $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);



    ?>


<?php require 'includes/footer.php' ?>