<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucketlist</title>

    <link rel="stylesheet" href="/bucketlist/css/ai.css">
    <link rel="stylesheet" href="/bucketlist/css/main.css">
    <link rel="stylesheet" href="/bucketlist/css/header.css">
    <link rel="stylesheet" href="/bucketlist/css/footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <main>

            <?php include_once("includes/header.php"); ?>

            <div id="aiDiv">
                <h2>Välkommen till sidan om Ai</h2>
                <p>Här kan du läsa om hur jag använt Ai i uppgiften.</p>
            </div>

            <div id="usage">
                <h3>Användandet av AI</h3>
                <p>I denna uppgift har jag valt att använda Ai som ett hjälpmedel.
                    Den Ai-tjänst jag använt är:
                </p>
                <ul id="ai-ul">
                    <li>ChatGPT</li>
                </ul>
                <p>Det jag har valt att använda Ai till är följande:</p>
                <ul id="usage-ul">
                    <li>Ställa frågor, till exempel "Vad betyder det här?"
                        eller "Skulle du kunna förklara [...] för mig?"
                    </li>
                    <li>Att göra en "Att-göra lista" med uppgifter utifrån
                        uppgiftsbeskrivningen för att lättare komma ihåg
                        vad jag ska göra.
                    </li>
                    <li>Viss felsökning, om jag själv har felsökt, men
                        inte kommit på felet.
                    </li>
                    <li>Frågat om förslag kring bra sätt att kontrollera
                        fält i formulär.
                    </li>
                    <li>Hjälp att förstå GET och POST, hur datan skickas,
                        hur allt kopplas till databasen, och lite så.
                    </li>
                    <li>Generellt bett om hjälp att förstå saker som
                        varit lite kluriga eller där jag fastnat.
                    </li>
                </ul>
            </div>

            <picture>
                <source srcset="images/chat-webp.webp" type="image/webp">
                <img src="images/chat.jpeg.jpg" alt="Spel med bokstäver som bildar ordet chatGPT" id="aiPic">
            </picture>

            <div id="conclusions">
                <h3>Slutsatser</h3>
                <p>Mina slutsatser efter Ai-användning:</p>
                <ul id="concl-ul">
                    <li>Att använda Ai kan verkligen snabba på
                        utveckling.
                    </li>
                    <li>För att lära sig är det väldigt viktigt
                        att själva skapa koden och endast använda
                        Ai som stöd/hjälpmedel.
                    </li>
                    <li>Om Ai används på rätt sätt och till rätt
                        saker kan det hjälpa till att öka kvaliteten
                        på innehållet och ge utvecklaren bra
                        förutsättningar att bli bättre.
                    </li>
                    <li>Genom att få snabb hjälp kan man komma vidare
                        snabbare i uppgiften och inte lägga onödig
                        tid på att försöka förstå något man inte
                        förstår.
                    </li>
                    <li>Jag tycker sammantaget att Ai-användning
                        i rätt mängd och på rätt sätt är väldigt bra.
                        Jag tror på en kombination där man själv
                        utvecklar och använder Ai som ett hjälpmedel.
                    </li>
                </ul>
            </div>
        </main>

        <?php include_once("includes/footer.php"); ?>
    </div>
</body>

</html>