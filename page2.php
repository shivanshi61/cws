<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        
        margin:0;
        padding:0;
        box-sizing:border-box;
        //margin-left: 20px;
    }
    .container{
        max-width: 80;
        background-color: grey;
        margin: auto;
        padding: 23px;

    }
    </style>
<body>
    <div class="container">
        <h1>Learn about PHP</h1>
        This is a container
        
        <?php
        echo "<br>";
        $age = 7;
        if($age>18){
            echo "you can go to party";
        }
        else if($age==7){
            echo "you are 7 year old";
        }
        else{
            echo "you cannot go to party";
        }

        $lang= array("python","c++","php","nodejs");
        echo "<br>";
        echo $lang[0];
        echo "<br>";
        echo $lang[1];
        echo "<br>";
        echo $lang[2];
        
       foreach ($lang as $key => $value) {
        echo "<br>the value is:";
        echo $value;
       } 

       //functions
       function print1(){
        echo "<br>";
        echo"5";
       }
       print1();
       //userdefined function
       function print_number($number){
        echo"<br>your no. is";
        echo $number;
       }
       print_number (45);
       print_number(445);
       print_number(454);
       
       //string
    //    $str1="this is php";
    //    echo $str1;
    //    $lenn= strrev($str1)
    //    //echo"the length of string is";
    //    echo $lenn;
        ?>
    </div>
</body>
</html>