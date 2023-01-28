<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
require "game/view/JavaScript.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/gomel.php") {
    echo "<link rel='stylesheet' href='/game/view/Gomel.css'>";
}
class StatGomel
{
    static $default_vrp = 20990371826;
    static $default_vrp_for_population = 15458;
    static $default_population = 1357897;
    static $vrp = 20990371826;
    static $vrp_for_population = 15458;
    static $working_population = 1357897;
}
$VRP = new vrp();
$color = $VRP::Color();
?>