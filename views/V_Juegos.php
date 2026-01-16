<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juegos</title>
        <link rel="stylesheet" href="views/css/style.css">
    </head>
    <body>
        <main>
            <aside>
                <h3><a href='./index.php?c=C_Minijuegos&m=generarPDF'>PDF</a></h3>
            </aside>
            <section>
                <input type="text" id="buscador" placeholder="Buscar juego...">
                <?php

                    foreach($juegos as $juego){
                        echo "  <div class='juego'>
                                    <h1><a href='./index.php?c=C_Minijuegos&m=mostrarJuego&id=".$juego['id']."'>".$juego['nombre']."</a></h1>
                                </div>";
                    }

                ?>
            </section>
        </main>
        <script src="../js/script.js"></script>
    </body>
</html>