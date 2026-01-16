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
            <section>
                <div>
                    <?php

                        echo "<h1>".$juego['nombre']."</h1>";

                    ?>
                    <button><a href="./index.php?c=C_Minijuegos&m=mostrarJuegos">VOLVER</a></button>
                    <button><a href="./index.php?c=C_Minijuegos&m=guardarCookie&id=<?php echo $juego['id']; ?>">JUGAR</a></button>
                </div>
            </section>

            <section>
                <?php
                    foreach($cookies as $cookie){
                        echo "  <div>
                                    <h1>".$cookie."</h1>
                                </div>";
                    }
                ?>
            </section>
        </main>
    </body>
</html>