<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
require "game/view/JavaScript.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/grodno.php") {
    echo "<link rel='stylesheet' href='/game/view/Grodno.css'>";
}
class StatGrodno
{
    static $default_vrp = 17752644504;
    static $default_vrp_for_population = 17636;
    static $default_population = 1006614;
    static $vrp = 17752644504;
    static $vrp_for_population = 17636;
    static $working_population = 1006614;
}
$VRP = new vrp();
$color = $VRP::Color();
?>