<?php session_start(); ?>
<!DOCTYPE html>
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

</style>

</head>
<body>



    <div class="header">
        <div class="header-left">
            <a href="/koshelev/index.php">Главная</a>
            <a class="active" href="patches.php">Обновления</a>
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

    <H1 style="text-align: center">Даты и изменения</H1>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/game1.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Патч от 25.03</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/game2.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Патч от 23.02</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/game3.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Патч от 17.12</b></h4> 
            </div>
        </div>
	</div><br><br>


</body>
</html>

