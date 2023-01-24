<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/gomel.php") {
    echo "<link rel='stylesheet' href='/game/view/Gomel.css'>";
}
class StatGomel
{
    static $vrp = 21124.6;
    static $vrp_for_population = 15457.9;
    static $working_population = 786488;
}
$VRP = new vrp();
$color = $VRP::Color();
?>