<?php 
  include 'include/header.php';
  
  if(!isset($_SESSION["session_username"]))
	{
		echo '<script>alert("Пройдите авторизацию"); location.href="/";</script>';
	}
?>
<script src="js/me.js"></script>
<div class="container">
  <div class="row">
    <div class="col-12 centered block">
      <h1>Познай себя</h1>
    </div>
    <div class="col-12 centered block">
      <h4><a href="#openme1" onclick="openme()">- Как стать счастливее?</a></h4>
      <div id="meblock" style="visibility: hidden; height: 250px;">
        <h4 style="float: left; padding-left: 10px; padding-top: 10px;">Информация</h4><br><br>
        <span class="infomeblock">Каждый пытается отгадать секрет счастья, понять, от чего оно зависит, как его обрести и удержать. Пройдите тест и узнайте, что необходимо сделать вам, чтобы почувствовать себя счастливым.</span>
        <h4><a class="meblockot" href="#win1">Пройти тест</a></h4>
      <div id="leftmeblock" id="meblockimg">
      <a href="#closeme1"><button class="btn btn-danger myblockb" onclick="closeme();">Закрыть</button></a>
      </div>
      </div>
      <div class="dm-overlay" id="win1">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close"></a>
                <h3>Заголовок модального окна</h3>
                <div class="pl-left">
                    <img src="img/me/one.jpg">
                </div>
                <span>Тест:</span><br>
                1)Вы собираетесь в отпуск и выбираете отель. Важным критерием для вас будет:
                <select id="sele1">
                  <option value="o1">Наличие бесплатной сети Wi-Fi, чтобы всегда оставаться на связи.</option>
                  <option value="o2">Огороженная территория отеля без доступа посторонних.</option>
                  <option value="o3">Возможность отдыхать всей семьей.</option>
                  <option value="o4">Положительные отзывы в интернете.</option>
                </select><br>
                2)Встречаясь с другом, вы:<br>
                <select id="sele2">
                  <option value="o5">Рассказываете о своих успехах.</option>
                  <option value="o6">Жалуетесь на жизнь.</option>
                  <option value="o7">Больше слушаете, чем говорите о себе.</option>
                  <option value="o8"> Делитесь впечатлениями последнего отпуска.</option>
                </select><br>
                3)Вы часто испытываете:<br>
                <select id="sele3">
                  <option value="o9">Гнев.</option>
                  <option value="o01">Тоску.</option>
                  <option value="o02">Стыд.</option>
                  <option value="o03">Страх.</option>
                </select><br>
                <button class="btn btn-success" onclick="change();">Отправить</button>&nbsp;
                <a href="me.php"><button class="btn btn-danger">Закрыть</button></a>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
  </div>
</div>
<?php 
  include 'include/footer.php';
?>