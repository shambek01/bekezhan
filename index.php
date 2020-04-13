<?php
    //task1
    for($i=0;$i<10;$i++){
        if($i<4){
            echo 'a';
            echo "<br>";
        }
        if($i>=4&&$i<=7){
            echo 'b';
            echo "<br>";
        }
        if($i>7){
            echo 'c';
            echo "<br>";
        }
    }
    //task2
    $name = "Bekezhan";
    $surname = "Shamshikenov";
    echo $name." ".$surname." ";
    echo strlen($name." ".$surname);
    echo "<br>";
    //task3
    for($i=0;$i<=100;$i++){
        if($i%10==0){
            echo $i;
            echo "<br>";
        }
    }
    //task4
    $uni = array("AITU"=>array("Nur-Sultan","Kazakhstan"),
                "KBTU"=>array("Almaty","Kazakhstan"),
                "SDU"=>array("Almaty","Kazakhstan"),
                "KIMEP"=>array("Almaty","Kazakhstan"),
                "MSU"=>array("Moscow","Russia"),
                "Harvard"=>array("Boston","USA"),
                "Stanford"=>array("California","USA"),
                "Oxford"=>array("Oxford","UK"));
    foreach($uni as $name => $location):
        echo $name." ".$location[0]." ".$location[1];
        echo "<br>";
    endforeach;
    //task5;
    for($i=65;$i<=122;$i++){
        foreach($uni as $name => $location):
            if($i==ord($location[0][0])){
                echo $location[0]." ".$name." ".$location[1];
                echo "<br>";
            }
        endforeach;
    }
    
?>

   