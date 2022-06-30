<?php
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
    