<?php
    function tablaComun(){
        while (key($_POST) != null) {
            echo "<th><b>" . strtoupper(key($_POST)) . "</b></th>";
            next($_POST);
        }
    
        //Rebobina el puntero al principio del array
        reset($_POST);
    
        echo "<tr>";
    
        while (key($_POST) != null) {
            echo "<td>" . current($_POST) . "</td>";
            next($_POST);
        }
    
        echo "</tr>";
    }
    
    function tablaColores(){
        $estatura = 0.0;
        while (key($_POST) != null) {
            echo "<th><b>" . strtoupper(key($_POST)) . "</b></th>";
            next($_POST);
        }

        //Rebobina el puntero al principio del array
        reset($_POST);

        echo "<tr>";

        while (key($_POST) != null) {
            if(preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', current($_POST))){
                if(current($_POST) == "#000000"){
                    echo "<td id='color' style='background-color: " . strtoupper(current($_POST)) . ";color: #ffffff;'>".current($_POST)."</td>";
                }else if(current($_POST) == "#ffffff"){
                    echo "<td id='color' style='background-color: " . strtoupper(current($_POST)) . ";color: #000000;'>".current($_POST)."</td>";
                } else{
                echo "<td id='color' style='background-color: " . strtoupper(current($_POST)) . ";color: #ffffff;'>".current($_POST)."</td>";
                }
            }
            else{
                if(strtoupper(key($_POST)) == "ESTATURA(M)"){
                    $estatura = (float)current($_POST)/100;
                    echo "<td>" . $estatura . "</td>";
                }else{
                    echo "<td>" . current($_POST) . "</td>";
                }
            }
            next($_POST);
        }

        echo "</tr>";
    }

    function tableMultiSelect(){
        while (key($_POST) != null) {
            
            echo "<th><b>" . strtoupper(key($_POST)) . "</b></th>";
            next($_POST);
        }

        //Rebobina el puntero al principio del array
        reset($_POST);

        echo "<tr>";

        while (key($_POST) != null) {
            echo "<td>" . current($_POST) . "</td>";
            next($_POST);

            if(is_array(current($_POST))){
                echo "<td>";
                
                foreach(current($_POST) as $idiomas){
                    echo $idiomas . "<br>";
                }

                echo "</td>";

                next($_POST);
            }
        }

        echo "</tr>";
    }