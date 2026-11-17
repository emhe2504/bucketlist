<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucketlist</title>

    <link rel="stylesheet" href="/bucketlist/css/main.css">
    <link rel="stylesheet" href="/bucketlist/css/header.css">
    <link rel="stylesheet" href="/bucketlist/css/footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php include_once("includes/header.php"); ?>

        <div id="startDiv">
            <h2>Välkommen till startsidan</h2>
            <p>Vad önskar du veta mer om?</p>
        </div>

        <nav id="startNav">
            <ul>
                <li><a href="#assignment">Uppgiften</a></li>
                <li><a href="#reflection">Reflektioner</a></li>
                <li><a href="#opinion">Åsikter</a></li>
            </ul>
        </nav>

        <picture>
            <source srcset="images/start.webp.webp" type="image/webp">
            <img src="images/start.jpg.jpg" alt="Nature with snow and trees" id="startPic">
        </picture>

        <div id="assignment">
            <h3>Uppgiften</h3>
            <p>Detta är Laboration 2 i kursen Dt209g. Uppgiften går ut på
                att lära sig använda programmeringsspråket PHP. Webbplatsen som
                skapas ska ha minst tre olika undersidor där varje undersida
                ska innehålla följande:</p>
            <ul>
                <li>Startsidan - information om uppgiften och mina tankar om uppgiften</li>
                <li>Bucketlist - en bucketlist med koppling till en databas</li>
                <li>AI-användning - hur jag använt AI i uppgiften</li>
            </ul>
            <p>Webbplatsen ska skapas med objektorienterad PHP och en databas-anslutning.
                För att lägga till saker att göra i bucketlisten ska ett formulär användas.
            </p>
            <p>I uppgiften är det även tillåtet att använda valfria AI-verktyg, men då ska
                det anges under sidan AI-användning hur man valt att använda AI.
            </p>
        </div>
        <div id="reflection">
            <h3>Reflektioner</h3>
        </div>
        <div id="opinion">
            <h3>Åsikter</h3>
        </div>

    </div>
</body>

</html>