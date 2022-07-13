<?php
    function status(){
        if(isset($_SESSION['logStatus'])){
            if($_SESSION['logStatus'] == '1'){
                echo "<script>
                        hide('sesion');
                        show('login-icon');
                        show('gastos');
                    </script>";
            }else{
                echo "<script>
                        hide('login-icon');
                        show('sesion');
                    </script>";
            }
        }
    }