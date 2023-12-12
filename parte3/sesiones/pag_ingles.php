<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog de Tecnología</title>
</head>
<body>

    <div class="language-selector">
        <span class="en">English</span>
        <input type="checkbox" class="check" >
        <span class="es">Spanish</span>
    </div>

    <p>SELECT A LANGUAGE TO VIEW THE CONTENT</p>    
    <script src="app.js"></script>

    <header>
        <h1>Technology Blog</h1>
    </header>

    <main>
        <article>
            <img src="imagen1.jpg" alt="Iphone">
            <h2>iPhone 15 presentation</h2>
            <p>One of the most complex evolutions in the history of the iPhone.
             This is the first definition I would give to a reader when describing the iPhone 15 Pro Max.
             Reviewing its technical sheet, no major changes are suggested.
             Once it is thoroughly tested and everything that goes beyond the pure specification is analyzed,
             it is discovered that this iPhone begins to chart the new path that Apple wants to take..</p>
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
