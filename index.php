<html>
<head>
<title>Fast Site</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0.75">
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
<p class="navbar-brand">Генератор v 0.75</p>
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
include "js/ya.metrika.counter";
?>

<!--
<div class="btn-group">
<div id="clock" class="light">
			<div class="display">
				<div class="weekdays"></div>
				<div class="ampm"></div>
				<div class="digits"></div>
			</div>
</div>
</div>
-->
</div>
</nav>

<div class="container ">
<table class="table" id="tableLines">
<?php
for ($i = 1; ; $i++) {
echo <<< xxx
<div class="pull-left" style="width: 15px; font-size: 6pt;">Г.$i</div><div class="progress">
<div id="pbar_$i" class="progress-bar" role="progressbar" aria-valuenow="$i" aria-valuemin="0" aria-valuemax="100" style="width: $i%;">$i%</div></div>
xxx;
		if ($i == 8) break;
}
?>
</table>
</div> <!-- container -->
<div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <div class="panel panel-default drop-shadow" style="margin-top: -16px;">
                        <div class="panel-heading">
                            Сгенерированные случайные величины (max <= шир.ген. в пикс.)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="panel panel-default drop-shadow" style="margin-top: -16px;">
                        <div class="panel-heading">
                            Круговая диаграмма сумм случайных чисел каждого генератора
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-pie">
                                <div class="flot-pie-content" id="flot-pie"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
				</div>
            </div>
            <!-- /.row -->
</div>
<div class="container">
<p id="iteration" class="navbar-text" style="margin-top: -16px">-----</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
<!-- <script src="js/script.js"></script> -->
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
