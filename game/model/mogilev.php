<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/mogilev.php") {
    echo "<link rel='stylesheet' href='/game/view/Mogilev.css'>";
}
class StatMogilev
{
    static $vrp = 13418.8;
    static $vrp_for_population = 13314.4;
    static $working_population = 577654;
}
$VRP = new vrp();
$color = $VRP::Color();
?>