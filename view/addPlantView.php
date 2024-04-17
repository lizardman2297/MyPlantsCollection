<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/css/main.css">
    <link rel="stylesheet" href="asset/lib/fontawesome/css/all.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <?php require_once("view/include/topBar.php"); ?>
    </nav>

    <aside>
        <?php require_once("view/include/leftMenu.php"); ?>
    </aside>

    <section>

        <form action="model/addPlantModel.php" method="post" enctype="multipart/form-data" id="addPlantForm">
            <label for="latin">Nom latin :</label>
            <input type=" text" name="latin" id="latin">

            <label for="vernicalar">Nom verniculaire :</label>
            <input type="text" name="vernacular" id="vernacular">

            <label for="date">date d'obtention :</label>
            <input type="date" name="obtainedDate" id="obtainedDate">

            <label for="nickname">Surnom :</label>
            <input type="text" name="nickname" id="nickname">

            <label for="statePlant">Type de plante :</label>
            <select name="statePlant" id="statePlant">
                <option value="1">mother plant</option>
                <option value="2">cutting</option>
            </select>

            <label for="picture">Photo :</label>
            <input type="file" name="picture" id="picture" accept=".jpg, .jpeg, .png">

            <fieldset>
                <legend>Ajouter cette plantes au favoris</legend>
                <label for="yes">oui</label>
                <input type="radio" name="fav" id="yes" value=1 checked>
    
                <label for="no">non</label>
                <input type="radio" name="fav" id="no" value=0>
            </fieldset>


            <input type="submit" value="Ajouter">
        </form>

    </section>
</body>

</html>