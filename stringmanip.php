<?php 
        $title = "String Manipulation";
        include 'includes/header.php' 
        
    ?>

    <h1>PHP String Manipulation<h1>
    <?php
        //concatenation of strings
        $phrase1= "student who came late";
        $phrase2= "in class,stand with Rock!";
        $name = "chirontan bhuyan";
        //in one line we want to add then . is enough we say it concatenation
        echo $phrase1 . ", named chirontan, ". $phrase2;

        echo '<br/>';

        echo '<hr/>';

        //String Transformation
        echo 'Uppercase first letter : ' .ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' .ucwords($name).'<br/>';
        echo 'Upper case: '. strtoupper($name). '<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';

        echo 'Repeat String :' . str_repeat('a',10).'<br/>';
        echo 'Repeat String :' . strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a Substring: ' . substr($name, 5, 10). '<br/>';

        echo 'Get position of string: ' . strpos($name, 'r').'<br/>';

        // returns NULL
        // echo 'Get position of string: ' . strpos($combine, 'z').'<br/>';

        echo 'Find character "R": ' . strchr($name, 'R'). '<br/>';
        echo 'Find character "c": ' . strchr($name, 'c'). '<br/>';


        echo 'Find length of the string :' . strlen($name). '<br/>';

        echo 'without trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';


        echo 'Replace string with another: '. str_replace("stand", "sit",$phrase2) . '<br/>';

?>
<?php require 'includes/footer.php' ?>