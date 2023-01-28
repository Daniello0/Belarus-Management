<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
require "game/view/JavaScript.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/brest.php") {
    echo "<link rel='stylesheet' href='/game/view/Brest.css'>";
}
class StatBrest
{
    static $default_vrp = 18390735030;
    static $default_vrp_for_population = 13890;
    static $default_population = 1324027;
    static $vrp = 18390735030;
    static $vrp_for_population = 13890;
    static $working_population = 1324027;
}
$VRP = new vrp();
$color = $VRP::Color();
?>