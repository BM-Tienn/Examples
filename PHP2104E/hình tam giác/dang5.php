<?php
    $star;
    function shapeOne($star){
        for($i=1;$i<=$star;$i++){
            for($j=$i;$j<$star;$j++){
                echo'&nbsp&nbsp&nbsp';
            }
            for($j=$i;$j<=(2*$i-1);$j++)
            {
                echo'*&nbsp';
            }
            echo '<br>';
        }
    }
    echo shapeOne(5);