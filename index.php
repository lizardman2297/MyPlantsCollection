<!-- Rooter -->

<?php

    session_start();
    $_SESSION["prenom"] = "Loris";
    $_SESSION["nom"] = "Loris";

    
    

    if (!isset($_GET["zone"]) || $_GET["zone"] == "dashboard") {
        // go to dashboard
        require_once("controller/dashboardController.php");
        loadDashboard();
    } elseif ($_GET["zone"] == "plant") {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                require_once("controller/plantsController.php");
                loadAddPlants();
            } elseif ($_GET["action"] == "displayAll") {
                require_once("controller/plantsController.php");
                loadPlantsDashboard();
            }
        }
    }