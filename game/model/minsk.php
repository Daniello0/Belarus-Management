<style>

</style>
<?php
set_include_path("C:/Belarus-Management/");
require "game/view/MainCSS.php";
require_once "game/view/View.php";
if ($_SERVER['REQUEST_URI'] == "/game/model/minsk.php") {
    echo "<link rel='stylesheet' href='/game/view/Minsk.css'>";
}
class StatMinsk
{
    static $vrp = 32128.7;
    static $vrp_for_population = 21863;
    static $working_population = 474245;
}
$VRP = new vrp();
$color = $VRP::Color();
?>