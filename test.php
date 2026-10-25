<?php
// Définir l'année actuelle
$currentYear = date("Y");

// Initialiser les variables
$selectedYear = null;
$age = null;
$error = null;

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["birth_year"]) && is_numeric($_POST["birth_year"])) {
        $selectedYear = (int) $_POST["birth_year"];

        // Validation : année réaliste
        if ($selectedYear > $currentYear || $selectedYear < 1900) {
            $error = "Veuillez sélectionner une année valide.";
        } else {
            $age = $currentYear - $selectedYear;
        }
    } else {
        $error = "Veuillez sélectionner une année.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sélection de l'année de naissance</title>
</head>
<body>
    <h2>Choisissez votre année de naissance</h2>

    <!-- Formulaire -->
    <form method="post" action="">
        <label for="birth_year">Année de naissance :</label>
        <select name="birth_year" id="birth_year">
            <option value="">-- Sélectionnez --</option>
            <?php
            // Générer la liste des années de 1900 à l'année actuelle
            for ($year = $currentYear; $year >= 1900; $year--) {
                $selected = ($year == $selectedYear) ? "selected" : "";
                echo "<option value=\"$year\" $selected>$year</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Valider</button>
    </form>

    <!-- Affichage du résultat -->
    <?php
    if ($error) {
        echo "<p style='color:red;'>$error</p>";
    } elseif ($age !== null) {
        echo "<p>Vous avez sélectionné : <strong>$selectedYear</strong></p>";
        echo "<p>Votre âge est : <strong>$age ans</strong></p>";
    }
    ?>
</body>
</html>


Fonctionnement :

Liste déroulante : Affiche toutes les années de 1900 à l'année actuelle.
Validation : Empêche la sélection d'une année future ou trop ancienne.
Calcul de l'âge : Soustrait l'année de naissance de l'année actuelle.
Affichage : Montre l'année choisie et l'âge calculé.


💡 Si tu veux, je peux te faire une version qui affiche directement ton âge sans recharger la page grâce à JavaScript.
Veux-tu que je te prépare cette version interactive ?
