<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog de Tecnología</title>
</head>
<body>

    <div class="language-selector">
        <span class="en">Inglés</span>
        <input type="checkbox" class="check" checked>
        <span class="es">Español</span>
    </div>

    <p>SELECCIONE UN IDIOMA PARA VISUALIZACION DEL CONTENIDO </p>    
    <script src="app.js"></script>

    <header>
        <h1>Blog de Tecnología</h1>
    </header>

    <main>
        <article>
            <img src="imagen1.jpg" alt="Iphone">
            <h2>Presentación iPhone 15</h2>
            <p>Una de las evoluciones más complejas en la historia del iPhone.
             Esta la primera definición que le daría a un lector a la hora de describir al iPhone 15 Pro Max.
             Revisando su hoja técnica no se sugieren grandes cambios. Una vez se prueba a fondo y se analiza
             todo lo que va más allá de la pura spec, se descubre que este iPhone empieza a trazar el nuevo
             camino que quiere recorrer Apple.</p>
        </article>        
       
    </main>

    <footer>
        <p>&copy; 2023 Blog de Tecnología</p>
    </footer>

    <script>
        var check = document.querySelector(".check");
        check.addEventListener('click', idioma);

        function idioma() {
            let id = check.checked;
            if (id == true) {
                document.cookie = "idioma=español";
                location.href = "pag_espanol.php";
            } else {
                document.cookie = "idioma=ingles";
                location.href = "pag_ingles.php";
            }
        }

        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }
        
        const idiomaCookie = getCookie('idioma');
        if (idiomaCookie === 'español') {
            
            document.getElementById('language-message').textContent = 'Idioma seleccionado: Español';
        } else if (idiomaCookie === 'ingles') {
            
            document.getElementById('language-message').textContent = 'Idioma seleccionado: Inglés';
        }

    </script>
    
</body>
</html>
