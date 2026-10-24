<!-- //l'utilisatuer ai la possibilite de se connecter a partir de son age 
//boucle pour lui montrer qu'il ne peut pas sortir de la boucle sans avoir un age
//on aFFiche l'age requis 
//si sont age < 18 = no disponible -->
<!-- 
<?php 
$temps = date('l/m/Y');
$calc = $_POST['date'] ;

echo $result;
?>
<Form action ="" method='POST'>
    <div>
        <input type="date" name="date" id="date">
        <button type="submit">envoyer</button>
    </div>
    <select name="age" id="age">
        <?php 
        for ($i=2026; $i >= 1990 ; $i--) { 
        }
             ?>
    </select>
</Form> -->

<!-- <?php
use Uri\Rfc3986\Uri;

$uri = new Uri('https://php.net/releases/8.5/en.php');

var_dump($uri->getHost());
// string(7) "php.net"

?> -->

<?php 

require 'contact.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['nom']) && !empty($_POST['email'])) {
        echo "vos case de nom et l'email sont vides ";
}
        else{
            echo $name;
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mon site</title>
</head>
<body>
    <form action="scrol.php" method ="POST" value="">
        <section>
            <div>
                <label for="nom">NOM:</label>
                <input type="text" name="nom" id="nom" placeholder="Entrer votre nom">
            </div>
            <div>
                <label for="prenom">PRENOM:</label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrer votre prenom" require>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="@Entrer votre email" require>
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="entrer votre password">
            </div>
                 <button type="submit">Envoyer</button>
        </section>
    </form>
</body>
</html>

