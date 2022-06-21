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

    function dragElement(elmnt) {
        var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
        if (document.getElementById(elmnt.id + "header")) {
            /* if present, the header is where you move the DIV from:*/
            document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
        } else {
            /* otherwise, move the DIV from anywhere inside the DIV:*/
            elmnt.onmousedown = dragMouseDown;
        }
        
        function dragMouseDown(e) {
            e = e || window.event;
            e.preventDefault();
            // get the mouse cursor position at startup:
            pos3 = e.clientX;
            pos4 = e.clientY;
            document.onmouseup = closeDragElement;
            // call a function whenever the cursor moves:
            document.onmousemove = elementDrag;
        }

        function elementDrag(e) {
            e = e || window.event;
            e.preventDefault();
            // calculate the new cursor position:
            pos1 = pos3 - e.clientX;
            pos2 = pos4 - e.clientY;
            pos3 = e.clientX;
            pos4 = e.clientY;
            // set the element's new position:
            elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
            elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
        }

        function closeDragElement() {
            /* stop moving when mouse button is released:*/
            document.onmouseup = null;
            document.onmousemove = null;
        }
    }

    function fadeOutEffect(objeto, duracion) {
        var fadeTarget = document.getElementById(objeto);

        var fadeEffect = setInterval(function() {
            if (!fadeTarget.style.opacity) {
                fadeTarget.style.opacity = 1;
            }
            if (fadeTarget.style.opacity > 0) {
                fadeTarget.style.opacity -= duracion;
            } else {
                clearInterval(fadeEffect);
            }
        }, 30);
    }

    function fadeInEffect(objeto, duracion) {
        var fadeTarget = document.getElementById(objeto);
        fadeTarget.style.opacity = 0.1;
        fadeTarget.style.display = "block";
        var fadeEffect = setInterval(function() {
            if (!fadeTarget.style.opacity) {
                fadeTarget.style.opacity = 0;
            }
            if (fadeTarget.style.opacity < 1) {
                fadeTarget.style.opacity = parseFloat(fadeTarget.style.opacity) + duracion;
            } else {
                clearInterval(fadeEffect);
            }
        }, 100);
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