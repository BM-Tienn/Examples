<?php
    $star;
    function shapeOne($star){
        for($i=$star;$i>=1;$i--){
            for($j=$i;$j>=1;$j--){
                echo'*&nbsp';
            }
            echo '<br>';
        }
    }
    echo shapeOne(5);