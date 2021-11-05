<?php
    $star;
    function shapeOne($star){
        for($i=1;$i<=$star;$i++){
            for($j=1;$j<$i;$j++){
                echo'&nbsp&nbsp&nbsp';
            }
            for($j=1;$j<=($star*2-(2*$i-1));$j++)
            {
                echo'*&nbsp';
            }
            echo '<br>';
        }
    }
    echo shapeOne(5);