<?php

// Inkludera klassfilerna
include("includes/classes/Database.class.php");
include("includes/classes/Bucketlist.class.php");

// Skapa objekt - instanser av klasser
$db = new Database();
$bucketlist = new Bucketlist($db->getConnection());

// Variabler för meddelanden (fel/success)
$errors = [];
$success = "";


// Kontrollera om användaren skickats tillbaka efter en lyckad åtgärd:

//Finns success i adressen
if (isset($_GET["success"])) {
    $success = "Aktiviteten har lagts till!";   //Spara meddelande
}

//Finns deleted i adressen
if (isset($_GET["deleted"])) {
    $success = "Aktiviteten har raderats!";     //Spara meddelande
}



// Läs in formulär - har användaren skickat formuläret?
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Kontrollera om användaren vill radera en aktivitet
    if (isset($_POST["delete_id"])) {

        //Hämta id som skickats med formulär, omvlandla till heltal
        $id = intval($_POST["delete_id"]);

        //Om raderingen lyckas
        if ($bucketlist->deleteActivity($id)) {
            header("Location: bucketlist.php?deleted=1");   //Skickas tillbaka och visa raderad
            exit;
        } else {
            $errors["database"] = "Det gick inte att radera aktiviteten.";  //Error-meddelande 
        }
    }


    // Kontrollera om användaren vill lägga till aktivitet
    if (isset($_POST["name"])) {

        // Hämta värden från formulär
        // Använd tom sträng om det saknas och ta bort onödiga mellanslag
        $name = trim($_POST["name"] ?? "");
        $description = trim($_POST["description"] ?? "");
        $priority = $_POST["priority"] ?? "";

        // Kontrollera namn
        if (empty($name)) {
            $errors["name"] = "Du måste ange ett namn.";
        }

        // Kontrollera beskrivning
        if (empty($description)) {
            $errors["description"] = "Du måste ange en beskrivning.";
        }

        // Kontrollera prioritet
        if (!in_array($priority, ["1", "2", "3"], true)) {
            $errors["priority"] = "Du måste välja en giltig prioritet.";
        }

        // Spara endast om det inte finns några fel
        if (empty($errors)) {

            //Om aktiviteten sparas i databas
            if ($bucketlist->addActivity($name, $description, (int)$priority)) {

                // Skicka vidare användaren efter lyckad registrering
                header("Location: bucketlist.php?success=1");
                exit;
            } else {
                $errors["database"] = "Det gick inte att spara aktiviteten."; //Error-meddelande 
            }
        }
    }
}

// Hämta aktiviteter från databasen
$activities = $bucketlist->getActivities();

?>



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

                <!-- Skapar lista med errors i error-array -->
                <?php if (!empty($errors)): ?>
                    <ul id="error-list">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <!-- Skriver ut success-meddelande om formuläret skickas -->
                <?php if ($success != ""): ?>
                    <p id="success">
                        <?php echo htmlspecialchars($success); ?>
                    </p>
                <?php endif; ?>


                <form action="bucketlist.php" method="POST">
                    <label for="name">Namn</label>
                    <input type="text" id="name" name="name" required placeholder="Exempelvis: Resa till Japan">

                    <label for="description">Beskrivning</label>
                    <textarea id="description" name="description" required placeholder="Beskriv vad du vill göra..."></textarea>

                    <fieldset>
                        <legend>Prioritet</legend>

                        <label class="priority-option">
                            <input type="radio" name="priority" value="1" required>
                            <span class="priority-number">1</span>
                            <span class="priority-text">Hög</span>
                        </label>

                        <label class="priority-option">
                            <input type="radio" name="priority" value="2">
                            <span class="priority-number">2</span>
                            <span class="priority-text">Medel</span>
                        </label>

                        <label class="priority-option">
                            <input type="radio" name="priority" value="3">
                            <span class="priority-number">3</span>
                            <span class="priority-text">Låg</span>
                        </label>
                    </fieldset>

                    <button type="submit">Lägg till aktivitet</button>
                </form>
            </section>

            <section id="activity-list">
                <h3>Mina aktiviteter</h3>

                <!-- Skriva ut varje aktivitet som article -->
                <?php if (!empty($activities)): ?>

                    <?php foreach ($activities as $activity): ?>

                        <div class="activity">
                            <h4><?php echo htmlspecialchars($activity["name"]); ?></h4>

                            <p><?php echo htmlspecialchars($activity["description"]); ?></p>

                            <p>Prioritet: <?php echo htmlspecialchars((string)$activity["priority"]); ?></p>

                            <p>Tillagd: <?php echo htmlspecialchars(date("d-m-Y", strtotime($activity["created_at"]))); ?></p>

                            <form action="bucketlist.php" method="POST">
                                <button type="submit" name="delete_id"
                                    value="<?php echo (int)$activity["id"]; ?>">Radera aktivitet</button>
                            </form>

                        </div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <p>Du har inte lagt till några aktiviteter ännu.</p>

                <?php endif; ?>

            </section>

        </main>

        <?php include_once("includes/footer.php"); ?>
    </div>
</body>

</html>