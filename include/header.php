<?php
session_start();

define ('ROOT',$_SERVER['DOCUMENT_ROOT']);
require_once ROOT.'/mysql/mysql.php';

if(isset($_POST["login"]))
{
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$query = mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");

		$numrows = mysql_num_rows($query);
		
		if($numrows != 0)
		{
			while($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}

			if($username == $dbusername && $password == $dbpassword)
			{
				$_SESSION['session_username'] = $username;

				header("Location: /");
			}
		}
		else
		{
			echo '<script>alert("Неправильный логин или пароль"); location.href="/";</script>';
		}
	}
	else
	{
		echo '<script>alert("Все поля обязательны к заполнению"); location.href="/";</script>';
	}
}

if(isset($_POST["register"]))
{
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
			
		$query = mysql_query("SELECT * FROM users WHERE username='".$username."'");
		$numrows = mysql_num_rows($query);
		
		if($numrows == 0)
		{
			$sql = "INSERT INTO users (username, password) VALUES('".$username."', '".$password."')";

			$result = mysql_query($sql);

			if($result)
			{
				echo '<script>alert("Аккаунт создан пройдите авторизацию"); location.href="/";</script>';
			}
			else
			{
				echo '<script>alert("Ошибка при добавлении в базу"); location.href="/";</script>';
			}
		}
		else
		{
			echo '<script>alert("Такое имя уже существует"); location.href="/";</script>';
		}
	}
	else
	{
		echo '<script>alert("Все поля обязательны к заполнению"); location.href="/";</script>';
	}
}
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>Смолова Светлана | Педагог-психолог</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Смолова Светлана</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="sfere.php">Сфера деятельности</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Обо мне</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cont.php">Контакты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="me.php">Познай себя</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <?php
	if(isset($_SESSION["session_username"]))
	{
		echo $_SESSION["session_username"];
		echo '<a href="/logout.php"><button class="btn btn-success">Выйти</button></a>';
	}
	else
	{
		echo
		'
		<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Авторизация
  </button>
			<form name="authform" action="" method="POST">
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<input type="text" name="username" placeholder="Логин">
				<input type="password" name="password" placeholder="Пароль">
				<button type="login" name="login" class="btn btn-success">Войти</button>
				<button type="register" name="register" class="btn btn-primary">Регистрация</button>
			  </div>
			</form>
			</div>&nbsp;&nbsp;&nbsp;&nbsp;
		';
	}
  ?>
      <li class="social">
        <a href="https://vk.com/mgok.online" target="_blank"><i class="fab fa-vk"></i></a>
        <a href="mailto:asv111106@yandex.ru" target="_blank"><i class="fas fa-at"></i></a>
      </li>
    </ul>
  </div>
</nav>