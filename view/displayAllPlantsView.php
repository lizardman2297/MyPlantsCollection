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
        <?php
        foreach ($plants as $keyPlant) {
            // keyPlant is plants object && keyPicture is picture object (relative to plant object)
        ?>

            <div class="plantsBox">
                <div class="name">
                    <span class="vernacular"><?= $keyPlant->getVernacularName() ?></span> 
                    <span class="latin"><?= $keyPlant->getLatinName() ?></span>
                </div>
                <?php
                foreach ($keyPlant->getPicture() as $keyPicture) {
                ?>
                    picture
                <?php
                }
                ?>
            </div>


        <?php

        }

        ?>
    </section>
</body>

</html>