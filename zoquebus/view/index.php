<?php require("layout/header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Inicio</title>
</head>
<body>

<section class="busqueda">
    <form class="formulario-viaje">
        <div class="campo">
            <label>FECHA DE SALIDA</label>
            <select>
                <option>Seleccionar horario</option>
            </select>
        </div>
        <div class="campo">
            <label>ORIGEN</label>
            <select>
                <option>Seleccionar origen</option>
            </select>
        </div>
        <div class="campo">
            <label>DESTINO</label>
            <select>
                <option>Seleccionar destino</option>
            </select>
        </div>
    </form>
</section>

<!-- ¿Por qué viajar con nosotros? -->
<section class="ventajas">
    <h2>¿Por qué viajar con nosotros?</h2>
    <p>En ZOQUEBUS, nos apasiona ofrecerte la mejor experiencia de viaje...</p>
    <div class="beneficios">
        <div class="beneficio">
            <h3>Comodidad y Confort</h3>
            <p>Nuestros autobuses están equipados con asientos amplios...</p>
        </div>
        <div class="beneficio">
            <h3>Seguridad</h3>
            <p>La seguridad de nuestros pasajeros es nuestra prioridad...</p>
        </div>
        <div class="beneficio">
            <h3>Precio Accesible</h3>
            <p>Ofrecemos tarifas competitivas adaptadas a tu presupuesto...</p>
        </div>
        <div class="beneficio">
            <h3>Rutas Seguras</h3>
            <p>Con una amplia red de destinos llegamos a los lugares que más te interesan...</p>
        </div>
        <div class="beneficio">
            <h3>Puntualidad</h3>
            <p>Sabemos que tu tiempo es valioso...</p>
        </div>
    </div>
</section>

</body>
</html>
<?php require("layout/footer.php");?>