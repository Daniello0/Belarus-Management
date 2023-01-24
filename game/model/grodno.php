<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/grodno.php") {
    echo "<link rel='stylesheet' href='/game/view/Grodno.css'>";
}
class StatGrodno
{
    static $vrp = 17853.0;
    static $vrp_for_population = 17636.1;
    static $working_population = 570503;
}
$VRP = new vrp();
$color = $VRP::Color();
?>