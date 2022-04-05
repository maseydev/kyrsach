<?php session_start(); ?>
<! DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Koshelev ISP382</title>
    <link type="text/css" href="assets/style/style.css" rel="stylesheet">

    <style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 30%;
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
.container h4 {
    text-align: center;


}

.bg-img {
  /* The image used */
  background-image: url("assets/img/slider_img.jpg");

  /* Control the height of the image */
  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Add styles to the form container */
.containerform {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

img {
    min-height: 200px;
    margin-top: 5px;

}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}




.flip-card {
  background-color: transparent;
  width: 300px;
  height: 420px;
  margin-right: 10px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 420px;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 420px;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: #B19695;
  color: white;
  transform: rotateY(180deg);
}
</style>

</head>
<body>



    <div class="header">
        <div class="header-left">
            <a class="active" href="/koshelev/index.php">Главная</a>
            <a href="patches.php">Обновления</a>
			      <a href="about.php">О нас</a>
        </div>
        <div class="header-right">
    <?php
        session_start();
        if(!isset($_SESSION['Login'])) {?>
            <a href="login.php">Авторизация/Регистрация</a>
            <?php } else {?>
                <a href="profile.php">Личный кабинет</a>   
                <a href="exit.php">Выход</a>
            <?php }
        session_write_close();
    ?>
        </div>
    </div><br>


    <div class="bg-img">
        <h1 style="text-align:center;padding-top:12%">Детская мобильная игра “Обучающие карточки“</h1>
    </div><br>

    <H1 style="text-align: center">Доступные игры</H1>


<div style="display: flex; justify-content: center; margin-bottom: 35px">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/img/game1.png" alt="Avatar" style="width:300px;height:420px;">
    </div>
    <div class="flip-card-back">
      <h1>Выбери цифру больше</h1>
      <p>1)</p>
      <p>2)</p>
      <p>3)</p>
    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/img/game2.png" alt="Avatar" style="width:300px;height:420px;">
    </div>
    <div class="flip-card-back">
      <h1>Живое не живое</h1>
    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/img/game3.png" alt="Avatar" style="width:300px;height:420px;">
    </div>
    <div class="flip-card-back">
      <h1>Съедобное не съедобное</h1>
      <p>1)</p>
      <p>2)</p>
      <p>3)</p>
    </div>
  </div>
</div>

</div>

<div style="display: flex; justify-content: center;">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/img/game4.png" alt="Avatar" style="width:300px;height:420px;">
    </div>
    <div class="flip-card-back">
      <h1>Где больше углов</h1>
      <p>1)</p>
      <p>2)</p>
      <p>3)</p>
    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/img/update.png" alt="Avatar" style="width:300px;height:420px;">
    </div>
    <div class="flip-card-back">
      <h1>В разработке...</h1>
    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/img/update.png" alt="Avatar" style="width:300px;height:420px;">
    </div>
    <div class="flip-card-back">
      <h1>В разработке...</h1>
    </div>
  </div>
</div>

</div>



    <div style="margin-left: 15%;margin-right:15%">
        <p>С первых дней жизни ребёнок вовлечен в общение, взаимодействие с близкими людьми. Человек — существо социальное, поэтому он формируется под водействием общественных законов. Дошкольный возраст — это время активного становления детской индивидуальности, активного познания окружающей действительности.</p>
        <p>В последнее время в нашей стране сложилась ситуация, когда дошкольное детство все больше рассматривалось, как период подготовки к школе, и пребывание детей в детском саду было нацелено на подготовку ребенка к поступлению в первый класс школы. </p>
        <p>Эту ситуацию призван изменить ФГОС ДО: закон ориентирует воспитателей на гуманистический взгляд на современного ребёнка как на личность, которая развивается и нуждается в понимании и уважении ее интересов и прав. Детям недостаточно общения только со взрослыми; для полноценного развития им необходимы активные, позитивные контакты со сверстниками.</p>
        <p>Во ФГОСе главным становится индивидуальный подход к ребёнку и игра, как ведущая деятельность в дошкольном возрасте.  Изменяется и способ организации детских видов деятельности: не руководсто взрослого, а партнерская деятельность взрослого и ребенка – это наиболее естественное существование ребёнка в детском саду.</p>
        <p>Принадлежность к коллективу очень важна для формирования личности каждого ребёнка. В коллективе удовлетворяются потребности детей в общении, в принадлежности к группе себе подобных, где они могут обрести поддержку и защиту, а также признание своих успехов и достижений.</p>       
        <p>В коллективе ребёнок способен измениться, поскольку ему приходится жить и общаться в окружении других людей, он вынужден приспосабливать свои желания, интересы и стремления. Ребёнок в коллективе сверстников имеет возможность взглянуть на себя со стороны, оценить себя и свою роль в обществе.</p>            
        <p>Современные дети — это дети информационной социализации: резко изменилось их приобщение к миру. Детский сад и школа уже не являются единственными источниками информации.  Теперь это — и СМИ, и культура, и религия. И сегодня педагогическая наука либо находится в сотрудничестве с семьей, телевидением, с религией, с интернетом, либо мы, педагоги, с ними конкурируем. </p>
        <p>Новый документ (ФГОС ДО) ставит во главу угла индивидуальный подход к ребёнку через игру, где происходит сохранение самоценности дошкольного детства и сохраняется сама природа дошкольника.</p>
        <p>Таким образом, актуальность работы заключается в необходимости использования современных гаджетов в развитии ребенка, а именно изучение через игру.</p>
    </div>

</body>
</html>

