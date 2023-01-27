<?php
    require_once "MainCSS.php";
    require_once "game/view/View.php";
    $vrp = new vrp();
    $color = $vrp::Color();
    $vrp_for_population = new vrpForPopulationCLASS();
    $color_2 = $vrp_for_population::Color();
    $working_population = new workingPopulationCLASS();
    $color_3 = $working_population::Color();
?>
<script>
    function func1()
    {
        Brest = document.querySelector(".BrestUpdate");
        Vitebsk = document.querySelector(".VitebskUpdate");
        Gomel = document.querySelector(".GomelUpdate");
        Grodno = document.querySelector(".GrodnoUpdate");
        Minsk = document.querySelector(".MinskUpdate");
        Mogilev = document.querySelector(".MogilevUpdate");
        var rad=document.getElementsByName('changes');
            if (rad[0].checked) {
                Brest.style.fill = "<?=$color[0]?>";
                Vitebsk.style.fill = "<?=$color[1]?>";
                Gomel.style.fill = "<?=$color[2]?>";
                Grodno.style.fill = "<?=$color[3]?>";
                Minsk.style.fill = "<?=$color[4]?>";
                Mogilev.style.fill = "<?=$color[5]?>";
            }
            if (rad[1].checked) {
                Brest.style.fill = "<?=$color_2[0]?>";
                Vitebsk.style.fill = "<?=$color_2[1]?>";
                Gomel.style.fill = "<?=$color_2[2]?>";
                Grodno.style.fill = "<?=$color_2[3]?>";
                Minsk.style.fill = "<?=$color_2[4]?>";
                Mogilev.style.fill = "<?=$color_2[5]?>";
            }
            if (rad[2].checked) {
                Brest.style.fill = "<?=$color_3[0]?>";
                Vitebsk.style.fill = "<?=$color_3[1]?>";
                Gomel.style.fill = "<?=$color_3[2]?>";
                Grodno.style.fill = "<?=$color_3[3]?>";
                Minsk.style.fill = "<?=$color_3[4]?>";
                Mogilev.style.fill = "<?=$color_3[5]?>";
            }
    }
    func1();
</script>