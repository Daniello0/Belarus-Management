<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
require "game/view/JavaScript.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/minsk.php") {
    echo "<link rel='stylesheet' href='/game/view/Minsk.css'>";
}
class StatMinsk
{
    static $default_vrp = 32045801565;
    static $default_vrp_for_population = 21863;
    static $default_population = 1465755;
    static $vrp = 32045801565;
    static $vrp_for_population = 21863;
    static $working_population = 1465755;
}
$VRP = new vrp();
$color = $VRP::Color();
?>