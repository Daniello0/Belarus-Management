<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
require "game/view/JavaScript.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/mogilev.php") {
    echo "<link rel='stylesheet' href='/game/view/Mogilev.css'>";
}
class StatMogilev
{
    static $default_vrp = 13325250330;
    static $default_vrp_for_population = 13314;
    static $default_population = 1000845;
    static $vrp = 13325250330;
    static $vrp_for_population = 13314;
    static $working_population = 1000845;
}
$VRP = new vrp();
$color = $VRP::Color();
?>