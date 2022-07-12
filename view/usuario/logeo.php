<?php
    if(isset($_SESSION['logStatus'])){
        if($_SESSION['logStatus'] == '1'){
            echo "<script>
                    hide('sesion');
                    show('login-icon');
                </script>";
        }else{
            echo "<script>
                    hide('login-icon');
                    show('sesion');
                </script>";
        }
    }