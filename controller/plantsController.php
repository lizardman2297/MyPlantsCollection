<?php
function loadPlantsDashboard(): void
{
    require_once("model/plantsModel.php");
    $plants = getAllPlants();

    require_once("view/displayAllPlantsView.php");
}

function loadAddPlants(): void {
    require_once("view/addPlantView.php");
}