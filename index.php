<?php
$get_figure = isset($_GET['figure']) ? $_GET['figure'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CCCR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        #chartdiv {
            height: 400px;
            background: #aaa;
        }

        #chartdiv1 {
            height: 300px;
            background: #aaa;
        }

        #chartdiv2 {
            height: 300px;
            background: #aaa;
        }

        #chartdiv3 {
            height: 300px;
            background: #aaa;
        }

        #chartdiv4 {
            height: 300px;
            background: #aaa;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">CCCR Visualizations</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 2.7) { echo " active"; } ?>" href="?figure=2.7">2.7</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 2.8) { echo " active"; } ?>" href="?figure=2.8">2.8</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 4.3) { echo " active"; } ?>" href="?figure=4.3">4.3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 4.5) { echo " active"; } ?>" href="?figure=4.5">4.5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 4.12) { echo " active"; } ?>" href="?figure=4.12">4.12</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 4.15) { echo " active"; } ?>" href="?figure=4.15">4.15</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 4.17) { echo " active"; } ?>" href="?figure=4.17">4.17</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 4.20) { echo " active"; } ?>" href="?figure=4.20">4.20</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 5.1) { echo " active"; } ?>" href="?figure=5.1">5.1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 5.17) { echo " active"; } ?>" href="?figure=5.17">5.17</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 5.18) { echo " active"; } ?>" href="?figure=5.18">5.18</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 6.7) { echo " active"; } ?>" href="?figure=6.7">6.7</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 6.9) { echo " active"; } ?>" href="?figure=6.9">6.9</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 6.10) { echo " active"; } ?>" href="?figure=6.10">6.10</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 7.6) { echo " active"; } ?>" href="?figure=7.6">7.6</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<? if ($get_figure == 7.19) { echo " active"; } ?>" href="?figure=7.19">7.19</a>
            </li>
        </ul>
    </div>
</nav>




<? if ($get_figure > 0) {
    include $get_figure . ".php";
} ?>

</body>
</html>
