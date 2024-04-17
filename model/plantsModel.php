<?php

    function getAllPlants() {
        require_once("model/database.php");
        require_once("class/plantsClass.php");
        require_once("class/pictureClass.php");
        $db = dbConnect();

        $req = "SELECT * FROM plants";
        $pdo = $db->query($req);

        
        $i = 0;
        while ($element = $pdo->fetchObject()) {
            $reqPicture = "SELECT * FROM picture WHERE idPlants = $element->id";
            $pdoPic = $db->query($reqPicture);
            while ($pictures = $pdoPic->fetchObject()) {
                $pic[$i] = new picture($pictures->pictureLink, $pictures->pictureDate, $element->id);
                $i += 1;
            }

            $plants[$element->id] = new plants($element->id, $element->vernacularName, $element->statePlants, $element->obtainedDate, $element->latinName, $element->nickname, $pic);
        }

        return $plants;
    }