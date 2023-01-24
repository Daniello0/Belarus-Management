<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/vitebsk.php") {
    echo "<link rel='stylesheet' href='/game/view/Vitebsk.css'>";
}
class StatVitebsk
{
    static $vrp = 15036.8;
    static $vrp_for_population = 13521.1;
    static $working_population = 635424;
}
$VRP = new vrp();
$color = $VRP::Color();
?>