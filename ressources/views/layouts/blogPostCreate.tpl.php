<?php
$metaTitle = "Create Post";
include('header.tpl.php');
?>

//Formulaire
<form action="/?action=blogPostCreate" method="post">
    <fieldset>
        <legend>
            Vos Infos Personnelles :
        </legend>
        <div class="champ">
            <label for="name">Nom :</label>
            <input type="text" maxlength="45" placeholder="45 char max " id="name" name="name">
        </div>
        <div class="champ">
            <label for="first_name">Prénom :</label>
            <input type="text" maxlength="45" placeholder="45 char max " id="first_name" name="first_name">
        </div>
        <div class="champ">
            <label for="pseudo">Pseudo :</label>
            <input type="text" maxlength="45" placeholder="45 char max " id="pseudo" name="pseudo">
        </div>
    </fieldset>
    <fieldset>
        <legend>
            Votre Post :
        </legend>
        <div class="champ">
            <label for="title">Titre :</label>
            <input type="text" maxlength="70" placeholder="Votre Titre 70 char max " id="title" name="title">
        </div>
        <label for="nbCategorie">Catégories :</label>
        <select name="nbCategorie" id="nbCategorie">
        <?php foreach ($selectCat as $cat) :?>
            <option value="<?php echo $cat['id']?>">
                <?php echo $cat['name'] ?>
            </option>
        <?php endforeach; ?>
        </select>
        <label for="class">Classification :</label>
        <select id="clas" name="class">
            <?php for($i=0; $i<=5; $i++) :?>
                <option value="1"><?php echo $i ; ?> étoile<?php if ($i>1) {echo 's';}?></option>
            <?php endfor; ?>
        </select>
        <label for="date_start">Date de publication :</label>
        <input type="date" id="start" name="date_start" value="<?php echo date('Y-m-d'); ?>"
               min="<?php echo date('Y-m-d'); ?>" max="2666-05-19"/>
        date0 = date1 + 30 jours
        <div class="champ">
            <textarea name="body" rows="10" cols="60" maxlength="200"
                      placeholder="Votre Post ici, de 200 char max"></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>

<?php
var_dump($_POST);
include('footer.tpl.php');
?>