<?php

/**
 * @author Pavel E. Petrov
 * 
 * https://github.com/far-rainbow
 * 
 * This demo shows php view generator and js random float chart animation
 * Эта демка демонистрирует PHP генератор экрана, анимированные индикаторы и графики случайных значений при помомощи js кода
 * uses jquery flot and e.t.c
 */

/** @const BARS_COUNT How many bars shall render in view | Количество индикаторов на экране */
define ("BARS_COUNT",10);
?>
<!-- This is just an example (c) Pavel E. Petrov -->
<html>
<head>
<title>Fast Site</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Poiret+One&subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#shapka">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
</button>
<p class="navbar-brand poiret">Генератор v 0.85b</p>
</div>
<div class="collapse navbar-collapse" id="shapka">
<ul class="nav navbar-nav">
  <li class="dropdown" id="btn1">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Генератор
  <span class="caret"></span>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#lowSize">Слабо</a></li>
    <li><a href="#midSize">Нормально так</a></li>
    <li><a href="#fullSize">На полную</a></li>
    <li class="divider"></li>
    <li><a href="#startStop">Стоп</a></li>
	<li class="divider"></li>
    <li class="disabled"><a href="#quit">QUIT</a></li>
  </ul>
  </li>
  <li class="dropdown" id="btn2">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Переход
  <span class="caret"></span>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#yandex">Yandex</a></li>
    <li><a href="#google">Google</a></li>
    <li><a href="#kamenka">Kamenka</a></li>
  </ul>  
  </li>
</ul>

<?php
/**
* this is yandex counter include file -- you don`t need it
* include "js/ya.metrika.counter";
*/
?>

</div>
</nav>

<div class="container ">
<table class="table" id="tableLines">
<?php
/**
 * render progress bars with unique ids (pbar_N)
 * the BARS_COUNT constant is the total count of progress bars in the view
 * константа BARS_COUNT используется для указания количества генерируемых индикаторов на экране (см.
 * в начале файла)
 */
if (BARS_COUNT < 100) {
	for($i = 1;; $i ++) {
		echo <<< xxx
<div class="pull-left" style="width: 15px; font-size: 6pt;">Г.$i</div><div class="progress">
<div id="pbar_$i" class="progress-bar" role="progressbar" aria-valuenow="$i" aria-valuemin="0" aria-valuemax="100" style="width: $i%;">$i%</div></div>
xxx;
		if ($i == BARS_COUNT)
			break;
	}
} else {
	echo "U dant fool me";
}
?>
</table>
</div>
<div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <div class="panel panel-default drop-shadow" style="margin-top: -16px;">
                        <div class="panel-heading poiret">
                            Сгенерированные случайные величины (max <= шир.ген. в пикс.)
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="panel panel-default drop-shadow" style="margin-top: -16px;">
                        <div class="panel-heading poiret">
                            Круговая диаграмма сумм случайных чисел каждого генератора
                        </div>
                        <div class="panel-body">
                            <div class="flot-pie">
                                <div class="flot-pie-content" id="flot-pie"></div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
</div>
<div class="container">
<p id="iteration" class="navbar-text poiret" style="margin-top: -16px">-----</p>
</div>
<div class="container">
<p id="testOutput" class="navbar-text poiret" style="margin-top: -16px">-----</p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.categories.min.js"></script> 
<script src="js/js.js"></script>
<?php
include "js/ya.metrika.js"
?>
</body>
</html>
