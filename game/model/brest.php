<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/brest.php") {
    echo "<link rel='stylesheet' href='/game/view/Brest.css'>";
}
class StatBrest
{
    static $vrp = 18488.3;
    static $vrp_for_population = 13890.1;
    static $working_population = 198144;
}
$VRP = new vrp();
$color = $VRP::Color();
?>