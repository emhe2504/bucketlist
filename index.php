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

        <main>

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
                <ul id="assigUl">
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
                <p>Efter att ha använt PHP och sett föreläsningar om hur det fungerar har
                    jag konstaterat att det verkar som ett väldigt smart programmeringsspråk.
                    Det verkar väldigt smidigt att arbeta i PHP om man jämför arbetssätt från
                    använda programmeringsspråk. Det finns även synliga likheter, vilket gör
                    att man känner igen delar ur PHP, efter att bland annat ha använt
                    JavaScript och C#.
                </p>
                <p>Inbyggda funktioner som finns i PHP underlättar utvecklandet. En fördel med
                    PHP är att det är smidigt att kunna återanvända kod och data mellan olika
                    dokument för att slippa upprepningar. Du kan helt enkelt inkludera en hel
                    fil direkt i koden. Det är även smidigt att hantera och komma åt data på
                    olika ställen i koden, exempelvis när man ska hämta data som skrivits in i
                    ett formulär. På så sätt minskar mängden upprepningar. Detta kan skapa en
                    mer lättläst och strukturerad kod som är enklare att felsöka och korrigera
                    vid behov.
                </p>
            </div>
            <div id="opinion">
                <h3>Åsikter</h3>
            </div>
        </main>

        <?php include_once("includes/footer.php"); ?>
    </div>
</body>

</html>