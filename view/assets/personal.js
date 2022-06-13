    function cerrar() {
        document.getElementsByClassName("ventana-modal")[0].style.display = "none";
    }

    function muestraValor() {
        var id = document.activeElement.id;
        var valor = document.getElementById(id).value;
        valor = parseFloat(valor);
        valor = valor/100;
        document.getElementById("valor").innerHTML = valor;
    }

    function muestraValorColor() {
        var id = document.activeElement.id;
        var valor = document.getElementById(id).value;
        document.getElementById("valorPiel").innerHTML = valor;
    }

    function showPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
    }

    function showIframe() {
        var iframe = document.getElementById("formsFrame");
        iframe.style.display = "block";
    }

    function form() {
        showIframe();
        var form = document.activeElement.id;
        var iframe = document.getElementById("formsFrame");
        iframe.src = "./forms/"+form+".php";
    }

    function prueba() {
        showIframe();
        var iframe = document.getElementById("formsFrame");
        iframe.src = ".././dao/pruebaDao.php";
    }