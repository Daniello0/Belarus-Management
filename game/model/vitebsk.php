<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
require "game/view/JavaScript.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/vitebsk.php") {
    echo "<link rel='stylesheet' href='/game/view/Vitebsk.css'>";
}
class StatVitebsk
{
    static $default_vrp = 14924925993;
    static $default_vrp_for_population = 13521;
    static $default_population = 1103833;
    static $vrp = 14924925993;
    static $vrp_for_population = 13521;
    static $working_population = 1103833;
}
$VRP = new vrp();
$color = $VRP::Color();
?>