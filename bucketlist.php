<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucketlist</title>

    <link rel="stylesheet" href="/bucketlist/css/main.css">
    <link rel="stylesheet" href="/bucketlist/css/bucketlist.css">
    <link rel="stylesheet" href="/bucketlist/css/header.css">
    <link rel="stylesheet" href="/bucketlist/css/footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php include_once("includes/header.php"); ?>
        <main>

            <h2>Min bucketlist</h2>
            <p>Lista över saker jag vill uppleva och göra.</p>

            <section id="add-activity">
                <h3>Lägg till aktivitet</h3>
                <form action="bucketlist.php" method="POST">
                    <label for="name">Namn</label>
                    <input type="text" id="name" name="name" required placeholder="Exempelvis: Resa till Japan">

                    <label for="description">Beskrivning</label>
                    <textarea id="description" name="description" required placeholder="Beskriv vad du vill göra..."></textarea>

                    <fieldset>
                        <legend>Prioritet</legend>

                        <label>
                            <input type="radio" name="priority" value="1" required>
                            1 - Hög
                        </label>

                        <label>
                            <input type="radio" name="priority" value="2">
                            2 - Medel
                        </label>

                        <label>
                            <input type="radio" name="priority" value="3">
                            3 - Låg
                        </label>
                    </fieldset>

                    <button type="submit">Lägg till aktivitet</button>
                </form>
            </section>

            <section id="activity-list">
                <h3>Mina aktiviteter</h3>
            </section>

        </main>

        <?php include_once("includes/footer.php"); ?>
    </div>
</body>

</html>