<?php
 $util = date('Y');
 setcookie('utilisateur','andre',time('H/i/s')+ 60 +60 +40);
$vue =
$nombre = var_dump($_POST['number']);
$exact= 20;
// echo $age;
?>
<Form>
<select name="date" id="date" method="POST">
    <option value="">
        <?php For($i=2026;$i >= 2000;$i--): ?>
        <?php endfor ?>
        <?= $i ?>
    </option>
</select>
<input type="number" name="number" id="number" placeholder="Enter un nombre">
<div>
<button type="submit">Envoyer</button>
</div>
        <?php if($nombre == $exact):?>
            <?="bravo!c'est le nombre exact";?>
        <?php if ($nombre <> $exact):?>
            <?="echec!vous n'vaez pas trouver le nombre";?> 
        <?php if($nombre < 20):?>
</Form>
        <?php endif?>
        <?php endif?>
        <?php endif?>