<?php
	require "configDB.php";
  require "configDB1.php";

$firm =  $_POST['firm'];
$model =  $_POST['model'];
$comm =  $_POST['comm'];
$pur =  $_POST['pur'];
$color =  $_POST['color'];
$body =  $_POST['body'];
$box_ =  $_POST['box_'];
$find =  $_POST['find'];
$Id = $_POST['listGroupRadios'];
$Id_ = $_POST['Id_'];

	$data = $_POST;

if( isset($data['redactive']) )
  {
    if (is_numeric($box_)) {

      if ($box_ > 0) {

      if ($pur == 0) {
        $pur = "-";
      }
      if ($comm == "") {
        $comm = "-";
      }
$query = $pdo->prepare('UPDATE `donors` SET `firm` = :firm, `model` = :model, `comm` = :comm, `pur` = :pur, `color` = :color, `body` = :body, `box_` = :box_ WHERE `Id` = :Id_');
  $query->execute(array('firm' => $firm, 'model' => $model, 'comm' => $comm, 'pur' => $pur, 'color' => $color, 'body' => $body, 'box_' => $box_, 'Id_' => $Id_));
$_SESSION['yspex'] = 0; } else {$_SESSION['yspex'] = 1;} } else { $_SESSION['yspex'] = 1; } }

	if( isset($data['do_login']) )
	{
		$errors = array();
		if( $_POST['login']=="Novocomp" )
		{
			if( ( $_POST['password']=="Novocomp") )
			{
				$_SESSION['logged_user'] = 1;
			} else
			{
				$errors[] = 'Неверно введен пароль!';
			}
		} else
		{
			$errors[] = 'Неверно введен логин!';
		}
		if( ! empty($errors) ){}}

if( isset($data['add']) )
  {
    if (is_numeric($box_)) {

      if ($box_ > 0) {

      if ($pur == 0) {
        $pur = "-";
      }
      if ($comm == "") {
        $comm = "-";
      }
$sql = 'INSERT INTO donors(firm, model, comm, pur, color, body, box_) VALUES(:firm, :model, :comm, :pur, :color, :body, :box_)';
            $query = $pdo->prepare($sql);
            $query->execute(['firm' => $firm, 'model' => $model, 'comm' => $comm, 'pur' => $pur, 'color' => $color, 'body' => $body, 'box_' => $box_]);
            $_SESSION['yspex'] = 0;
            header('Location: /'); } else {$_SESSION['yspex'] = 1;} } else { $_SESSION['yspex'] = 1; } }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <title>Доноры</title>
<style>
	Body {background: url(img/index.jpg); -webkit-background-size: 100%;
-o-background-size: 100%;
-moz-background-size: 100%;
-ms-background-size: 100%;
-khtml-background-size: 100%;
background-size: 100%;}
   .leftstr, .rightstr {
    float: left; /* Обтекание справа */
    width: 50%; /* Ширина текстового блока */
   }
   .rightstr {
    text-align: right; /* Выравнивание по правому краю */
   }
   .center {
    text-align: center; /* Выравнивание по правому краю */
    text-shadow: 1px 0 1px #000,
		0 1px 1px #000,
		-1px 0 1px #000,
		0 -1px 1px #000;
   }
   .container {
	margin-top: 25px;
}
.form1 {
	background: #FFFFFF;
	border: 5px solid #191970;
	border-radius: 20px;
	padding: 10px 10px;
}
	.obvod {
		text-shadow: 0.5px 0 0.5px #000,
		0 0.5px 0.5px #000,
		-0.5px 0 0.5px #000,
		0 -0.5px 0.5px #000;
}
input:checked + table{
    background: #fc0;
   }
   table {
   border: 1px solid grey;
   text-align: center;
   width: 100%;
   font-size: 15px;
}
th {
   border: 1px solid grey;
   width: 14.2%;
}
td {
   border: 1px solid grey;
   width: 14.2%;
}
#zatemnenie {
        background: rgba(102, 102, 102, 0.5);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
      }
#okno {
        width: 70%;
        height: 80%;
        text-align: center;
        padding: 15px;
        border: 3px solid #0000cc;
        border-radius: 10px;
        color: #0000cc;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: #fff;
      }
#zatemnenie:target {display: block;}

#zatemnenie1 {
        background: rgba(102, 102, 102, 0.5);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
      }
#okno1 {
        width: 70%;
        height: 85%;
        text-align: center;
        padding: 15px;
        border: 3px solid #0000cc;
        border-radius: 10px;
        color: #0000cc;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: #fff;
      }
#zatemnenie1:target {display: block;}

.close {
        display: inline-block;
        border: 1px solid #0000cc;
        color: #0000cc;
        padding: 0 12px;
        margin: 10px;
        text-decoration: none;
        background: #f2f2f2;
        font-size: 14pt;
        cursor:pointer;
      }
.close:hover {background: #e6e6ff;}
  </style>
</head>
<body>
    <?php if(isset($_SESSION['logged_user'])) :
if ($_SESSION['yspex'] == 1) { echo '<div style="color: red; margin-left: 10px" class="obvod">Некорректное значение коробки.</div>'; } ?>
	<div class="d-flex gap-5 justify-content-center">
	<h1 class="center" style="color:white; font-size: 30px; text-align:  center; margin-top: 10px">Доноры</h1>
</div>
<?php if( isset($data['delete']) )
  {
    $id = $_POST['listGroupRadios'];

  $sql = 'DELETE FROM `donors` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  unset($_SESSION['error']);
} ?>

<form action="/" method="post" id="f">
  <div class="container" style="width: 90%;">
    <div class="d-flex gap-5 justify-content-center">
<input type="search" name="find" id="find" placeholder="Напишите слово, которое вы хотите найти..." class="form-control" maxlength="25" style="margin-bottom: 10px; margin-top: 10px; width: 40%" required>
<button type="submit" name="s" class="w-20 btn btn-lg btn-warning" style="height: 4%; margin-top: 0.5%">Найти</button></div>
  </div>
  </form>
  <?php if ($find != NULL) {
  ?><div class="center" style="color:orange; font-size: 20px; text-align: center; margin-top: 10px">Сортировка по слову: <?php echo '<span style="color: lightgreen; margin-left: 10px">'.$find.'</span>'; ?></div>
  <div class="center"><a href="/" style="font-size: 15px; color: red; text-align: center;">Отмена</a></div> <?php
} ?>
  <div class="d-flex gap-5 justify-content-center">
	<div class="container" style="width: 100%; margin-left: 5%">
		<form action="/" method="post" id="form1" class="form1">
			<div>

<div class="list-group mx-0">
        <b class="list-group-item d-flex gap-2"><table style="color: blue"><tr><td>Фирма</td><td>Модель</td><td>Комментарий</td><td>Скупка</td><td>Цвет</td><td>Состояние корпуса</td><td>Коробка</td></tr></table></b><br>
<?php
if($find == NULL) {
      $sth = $pdo->prepare("SELECT * FROM `donors` ORDER BY `model`");
$sth->execute();
while ($book = $sth->fetch(PDO::FETCH_OBJ)) { ?>
  <label class="list-group-item d-flex gap-2">
  <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" style="display: none;" id="listGroupRadios" required value="<?php echo $book->Id; ?>">
      <table><tr><td><?php echo $book->firm; ?></td>
      <td><?php echo $book->model; ?></td>
      <td><?php echo $book->comm; ?></td>
      <td><?php echo $book->pur; ?></td>
      <td><?php echo $book->color; ?></td>
      <td><?php echo $book->body; ?></td>
      <td><?php echo $book->box_; ?></td></tr>
</table>
    </label>
  <?php }
?> <div class="hidden">
 <input type="radio" name="listGroupRadios" style="display: none;" id="listGroupRadios" required value="<?php echo $book->Id; ?>"></div> <?php

   } if ($find != NULL){
    $query = $pdo->prepare('SELECT * FROM `donors` WHERE `firm` = :find or `model` = :find or `comm` = :find or `pur` = :find or `color` = :find or `body` = :find or `box_` = :find');
$query->execute(array('find' => $find));
while ($book = $query->fetch(PDO::FETCH_OBJ)) { ?>
  <label class="list-group-item d-flex gap-2">
  <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" style="display: none;" id="listGroupRadios" required value="<?php echo $book->Id; ?>">
      <table><tr><td><?php echo $book->firm; ?></td>
      <td><?php echo $book->model; ?></td>
      <td><?php echo $book->comm; ?></td>
      <td><?php echo $book->pur; ?></td>
      <td><?php echo $book->color; ?></td>
      <td><?php echo $book->body; ?></td>
      <td><?php echo $book->box_; ?></td></tr>
</table>
    </label>
  <?php }
?> <div class="hidden">
 <input type="radio" name="listGroupRadios" style="display: none;" id="listGroupRadios" required value="<?php echo $book->Id; ?>"></div> <?php
   } ?>
</form>
<br>
  <div class="d-flex gap-5 justify-content-center">
          <a href="/logout.php" style="font-size: 15px; color: red" class="center">Выйти из аккаунта</a></div></div>
</div>
</div>

<div class="container" style="width: 20%;">
    <div class="container" style="width: 20%; position: fixed; right: 0%;">
    <div class="d-flex gap-5 justify-content-center">
		<button  type="submit" form="form1" name="red" class="btn btn-lg btn-secondary fw-bold border-black bg-green" style="color: purple; width: 90%;">Редактировать</button></div>
    <div class="d-flex gap-5 justify-content-center">
    <button  type="submit" form="form1" name="delete" style="color: black; width: 90%; margin-top: 10px" class="btn btn-lg btn-secondary fw-bold border-black bg-green">Удалить</button></div>
    <div class="d-flex gap-5 justify-content-center">
    <button  type="button" onclick="window.location.href = '#zatemnenie';" name="buttonadd" class="btn btn-lg btn-secondary fw-bold border-black bg-green" style="color: blue; width: 90%; margin-top: 20%">Добавить</button></div>
	</div>


<div id="zatemnenie">
      <div id="okno">
        <form action="/" method="post" id="for">
          <h1 class="center" style="color:blue; font-size: 25px; text-align: center">Добавить устройство</h1>
          <input type="text" name="firm" id="firm" placeholder="Фирма" class="form-control" style="margin-bottom: 10px" required>
          <input type="text" name="model" id="model" placeholder="Модель" class="form-control" style="margin-bottom: 10px" autocomplete="off" required>
          <input type="text" name="comm" id="comm" placeholder="Комменарий" class="form-control" style="margin-bottom: 10px" autocomplete="off">
          <input type="text" name="pur" id="pur" placeholder="Скупка" class="form-control" style="margin-bottom: 10px" autocomplete="off">
          <input type="text" name="color" id="color" placeholder="Цвет" class="form-control" style="margin-bottom: 10px" autocomplete="off" required>
          <input type="text" name="body" id="body" placeholder="Состояние корпуса" class="form-control" style="margin-bottom: 10px" autocomplete="off" required>
          <input type="str" name="box_" id="box_" placeholder="Коробка" class="form-control" style="margin-bottom: 10px" required>
          <button type="submit" form="for" name="add" class="w-20 btn btn-lg btn-success" style="color: blue; margin-top: 10px">Добавить</button>
</form>
        <a href="#" class="close">Отмена</a>
      </div>
    </div>

    <?php if( isset($data['red']) )
  {
$sth = $pdo->prepare("SELECT * FROM `donors` WHERE `Id` = :Id");
$sth->execute(array('Id' => $Id));
$books = $sth->fetch(PDO::FETCH_OBJ);
$firm = $books->firm;
$model = $books->model;
$comm = $books->comm;
$pur = $books->pur;
$color = $books->color;
$body = $books->body;
$box_ = $books->box_;
    ?>
    <div id="zatemnenie1">
      <div id="okno1">
        <form action="/" method="post" id="fors">
          <?php echo "Id = $Id"; ?>
          <h1 class="center" style="color:purple; font-size: 25px; text-align: center">Редактировать устройство</h1>
          <input type="hidden" name="Id_" id="Id_" value="<?php echo $Id; ?>">
          <input type="hidden" name="find" id="find" value="<?php echo $find; ?>">
          <input type="text" name="firm" id="firm" value="<?php echo $firm; ?>" placeholder="Фирма" class="form-control" style="margin-bottom: 10px" required>
          <input type="text" name="model" id="model" value="<?php echo $model; ?>" placeholder="Модель" class="form-control" style="margin-bottom: 10px" autocomplete="off" required>
          <input type="text" name="comm" id="comm" value="<?php echo $comm; ?>" placeholder="Комменарий" class="form-control" style="margin-bottom: 10px" autocomplete="off">
          <input type="text" name="pur" id="pur" value="<?php echo $pur; ?>" placeholder="Скупка" class="form-control" style="margin-bottom: 10px" autocomplete="off">
          <input type="text" name="color" id="color" value="<?php echo $color; ?>" placeholder="Цвет" class="form-control" style="margin-bottom: 10px" autocomplete="off" required>
          <input type="text" name="body" id="body" value="<?php echo $body; ?>" placeholder="Состояние корпуса" class="form-control" style="margin-bottom: 10px" autocomplete="off" required>
          <input type="str" name="box_" id="box_" value="<?php echo $box_; ?>" placeholder="Коробка" class="form-control" style="margin-bottom: 10px" required>
          <button type="submit" form="fors" name="redactive" class="w-20 btn btn-lg btn-success" style="color: blue; margin-top: 10px">Сохранить</button>
</form>
        <a href="/" class="close">Отмена</a>
      </div>
    </div>

  <?php unset($_SESSION['error']);
} ?>

</div>

<?php else : ?>

  <div class="container" style="width: 60%">
	<h1 style="font-size: 15px; text-align:  center; color: white; margin-top:10%; margin-bottom:10px" class="center">Войдите в учетную запись</h1>
<form action="/" method="post" id="form2">
			<input type="search" name="login" id="login" placeholder="Введите логин" class="form-control" autocomplete="off" required>
		<div class="d-flex gap-2 justify-content-center">
			<input type="password" name="password" id="password" placeholder="Пароль" class="form-control" style="margin-top: 5px" required>
		<button  type="submit" form="form2" name="do_login" class="btn btn-lg btn-secondary fw-bold border-black bg-green" style="font-size: 13px;width: 29%; height: 50%; margin-top: 5px">Войти</button>
		</div>
		<?php
		if ($errors == "") {
			?><br><?php
		}
		else
				echo '<div style="color: red; margin-left: 10px" class="obvod">'.array_shift($errors).'</div>'; endif; ?>
</div>
</div>
</body>
</html>




