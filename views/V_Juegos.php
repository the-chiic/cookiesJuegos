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
            <?php

                foreach($juegos as $juego){
                    echo "  <div>
                                <h1><a href='./index.php?c=C_Minijuegos&m=mostrarJuego&id=".$juego['id']."'>".$juego['nombre']."</a></h1>
                            </div>";
                }

            ?>
        </main>
    </body>
</html>