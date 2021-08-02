<?php 
        $title = "If Statement";
        include 'includes/header.php' 
        
    ?>
    <h1>if - Else Statement</h1>
    <?php

        //Any if statement that will carrry out an action based on the value of the variable

        echo '<h2>if Statement</h2>';

        $grade = 90;
            // ==,>,<,<=,>=, ===
        if($grade >= 50){

            echo '<h3 style="color: green">You have Passed</h3>';
        }
        else{
            echo '<h3 style="color: red">You have Failed</h3>';
        }

        $grade = 'A';

        //if - else if else
        if($grade == 'A'){

            echo '<h2 style="color: yellow"> YOU ARE A SUPERSTAR</h2>';
        }

        else if($grade == 'B'){
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: purple">YOU HAVE FAILED</h2>';
        }


?>
<?php require 'includes/footer.php' ?>