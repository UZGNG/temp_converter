<?php 
    
    $cel = 'Celsius';
    $fah = 'Fahrenheit';
    $kel = 'Kelvin';
    $ran = 'Rankine';
    $oldUnit = $_POST['unit'];
    $temp = $_POST['temp'];
    $unit = $_POST['newUnit'];
    $newTemp;

    if($oldUnit[0] == $fah[0]){
        if($unit[0][0] == $fah[0]){
            $newTemp = $temp;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Farenheit " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $cel[0]){
            $newTemp = ($temp - 32) * 5/9;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Celcius " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $ran[0]){
            $newTemp = $temp + 459.67;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Rankine " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $kel[0]){
            $newTemp = ($temp - 32) / 1.8 + 273.15;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Kelvin " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }else{ 
            header("Location: /helloworld/index.php?temp=Invalid");
        };
    }elseif($oldUnit[0] == $cel[0]){
        if($unit[0][0]  == $fah){
            $newTemp = ($temp + 32) * 9/5;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Farenheit " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $cel[0]){
            $newTemp = $temp;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Celcius " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $ran[0]){ 
            $newTemp = ($temp + 273.15) * 9/5;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Rankine " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $kel[0]){
            $newTemp = $temp + 273.15;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Kelvin " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }else{ 
            echo 'Unit not supported';
        };
    }elseif($oldUnit[0] == $ran[0][0]){
        if($unit[0][0] == $fah){
            $newTemp = $temp + 459.67;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Farenheit " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $cel[0]){
            $newTemp = ($temp - 491.67) * 5/9; // TEST
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Celcius " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $ran[0]){
            $newTemp = $temp;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Rankine " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $kel[0]){
            $newTemp = $temp / 1.8;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Kelvin " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }else{
            echo 'Unit not supported';
        };
    }elseif($oldUnit[0] == $kel[0]){
        if($unit[0][0] == $fah){
            $newTemp = ($temp * 1.8) - 459.67;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Farenheit " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $cel[0]){
            $newTemp = ($temp - 273.15) * 5/9;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Celcius " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $ran[0]){
            $newTemp = $temp * 1.8;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Rankine " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }elseif($unit[0] == $kel[0]){
            $newTemp = $temp;
            header("Location: /helloworld/index.php?temp=" . $newTemp . " degrees in Kelvin " . " = " . " " . $temp . " degrees in " . $oldUnit);
        }else{ 
            echo 'Unit not supported';
        };
    }else {
        echo 'Unit not supported';
    };
