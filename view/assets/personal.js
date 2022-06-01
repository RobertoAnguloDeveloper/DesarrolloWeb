    function cerrar() {
        document.getElementsByClassName("ventana-modal")[0].style.display = "none";
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
        iframe.src = "../U1/forms/"+form+".php";
    }