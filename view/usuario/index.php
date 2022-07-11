<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
    <script src="../js/personal.js"></script>
</head>

<body>
    <?php
        switch($_REQUEST){
            case isset($_REQUEST['sesion']):
                header("Location: login.php");
                break;
            case isset($_REQUEST['registrar']):
                header("Location: agregar.php");
                break;
            default:
                echo "NO HIZO NADA";
                break;
        }
    ?>
</body>

</html>
