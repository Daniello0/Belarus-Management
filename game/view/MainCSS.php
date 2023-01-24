<?php
set_include_path("C:/Belarus-Management/");
require_once "game/view/View.php";
$vrp = new vrp();
$color = $vrp::Color();
?>
<style>
.ShowMap {
    position: absolute;
    height: 70px;
    width: 200px;
    left: 350px;
    bottom: 600px;
    font-size: 20px;
}
.ApplyButton {
    height: 70px;
    width: 200px;
    font-size: 17px;
}
.RebootButton {
    height: 70px;
    width: 200px;
    font-size: 25px;
}
.Submit {
    position: absolute;
    bottom: 120px;
    left: 90px;
}
.TA_LastChanges {
    width: 451px;
    height: 280px;
}
.LastChanges {
    position: absolute;
    left: 1350px;
    bottom: 100px;
    width: 460px;
    height: 360px;
}
.TA_StatREG {
    width: 300px;
    height: 350px;
}
.StatREG {
    position: absolute;
    left: 1500px;
    bottom: 498px;
    width: 310px;
    height: 410px;
}
.Changes {
    position: absolute;
    left: 1200px;
    bottom: 705px;
    width: 300px;
    height: 206px;
}
.TA_StatRB {
    width: 390px;
    height: 450px;
}
.StatRB {
    position: absolute;
    bottom: 360px;
    left: 25px;
    width: 400px;
    height: 570px;
}
.Vitebsk {
    position: absolute;
    fill: <?=$color[1]?>;
    left: 700px;
    bottom: 592px;
}
.Brest {
    position: absolute;
    fill: <?=$color[0]?>;
    left: 388px;
    bottom: 161px;
}
.Gomel {
    position: absolute;
    fill: <?=$color[2]?>;
    left: 794px;
    bottom: 111px;
}
.Grodno {
    position: absolute;
    fill: <?=$color[3]?>;
    left: 437px;
    bottom: 357px;
}
.Minsk {
    position: absolute;
    fill: <?=$color[4]?>;
    left: 680px;
    bottom: 292px;
}
.Mogilev {
    position: absolute;
    fill: <?=$color[5]?>;
    left: 876px;
    bottom: 338px;
}
.VitebskUpdate:hover {
    filter: contrast(60%);
}
.MogilevUpdate:hover {
    filter: contrast(60%);
}
.GomelUpdate:hover {
    filter: contrast(60%);
}
.BrestUpdate:hover {
    filter: contrast(60%);
}
.MinskUpdate:hover {
    filter: contrast(60%);
}
.GrodnoUpdate:hover {
    filter: contrast(60%);
}
.VitebskUpdate {
    position: relative;
}
.MogilevUpdate {
    position: relative;
}
.MinskUpdate {
    position: relative;
}
.GomelUpdate {
    position: relative;
}
.GrodnoUpdate {
    position: relative;
}
.BrestUpdate {
    position: relative;
}
</style>