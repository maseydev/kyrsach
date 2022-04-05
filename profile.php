<?php
session_start();

if(!isset($_SESSION['Login']))
{
    header('Location: /koshelev/register.php');
}
else
{
?>

<?php 
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE Number='$login'");
    
    $row = mysqli_fetch_array($testquery);
    //echo $row[4];


?>


    <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: GRAY;
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    h1 {
      font-size: 1.25rem;
      font-weight: 500;
    }

    p {
      font-weight: 500;
    }

    /* text field */
    .text-field {
      margin-bottom: 1rem;
    }

    .text-field__label {
      display: block;
      margin-bottom: 0.25rem;
    }

    .text-field__input {
      display: block;

      height: calc(2.25rem + 2px);
      padding: 0.375rem 0.75rem;
      font-family: inherit;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #bdbdbd;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    .text-field__input[type="search"]::-webkit-search-decoration,
    .text-field__input[type="search"]::-webkit-search-cancel-button,
    .text-field__input[type="search"]::-webkit-search-results-button,
    .text-field__input[type="search"]::-webkit-search-results-decoration {
      -webkit-appearance: none;
    }

    .text-field__input::placeholder {
      color: #212529;
      opacity: 0.4;
    }

    .text-field__input:focus {
      color: #212529;
      background-color: #fff;
      border-color: #bdbdbd;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(158, 158, 158, 0.25);
    }

    .text-field__input:disabled,
    .text-field__input[readonly] {
      background-color: #f5f5f5;
      opacity: 1;
    }

    /* with floating label */
    .text-field_floating-3 {
      position: relative;
    }

    .text-field_floating-3 .text-field__input {
      border: none;
      border-bottom: 1px solid #bdbdbd;
      border-radius: 0;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
      height: calc(3.5rem + 2px);
      line-height: 1.25;
      padding: 1rem 0.75rem;
      background-color: #f5f5f5;
    }

    .text-field_floating-3 .text-field__input:focus {
      outline: 0;
      border-bottom: 1px solid #03a9f4;
      box-shadow: none;
      background-color: #eee;
    }

    .text-field_floating-3 .text-field__label {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      padding: 1rem .75rem;
      pointer-events: none;
      border: 1px solid transparent;
      transform-origin: 0 0;
      transition: color .15s ease-in-out, transform .15s ease-in-out;
    }

    .text-field_floating-3 .text-field__input::-moz-placeholder {
      color: transparent;
    }

    .text-field_floating-3 .text-field__input::placeholder {
      color: transparent;
    }

    .text-field_floating-3 .text-field__input:focus,
    .text-field_floating-3 .text-field__input:not(:placeholder-shown) {
      padding-top: 1.625rem;
      padding-bottom: .625rem;
      border-bottom: 1px solid #03a9f4;
    }

    .text-field_floating-3 .text-field__input:focus~.text-field__label,
    .text-field_floating-3 .text-field__input:not(:placeholder-shown)~.text-field__label {
      transform: scale(.85) translateY(-.75rem) translateX(.15rem);
      color: #03a9f4;
    }
	.btn1 {
    display: inline-block; 
    box-sizing: border-box;
    padding: 0 25px;
    margin: 0 15px 15px 0;
    outline: none;
    border: 1px solid #fff;
    border-radius: 50px;
    height: 46px;
    line-height: 46px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    color: #444;
    background-color: #fff;
    box-shadow: 0 4px 6px rgb(65 132 144 / 10%), 0 1px 3px rgb(0 0 0 / 8%);
    cursor: pointer;
    user-select: none;
    appearance: none;
    touch-action: manipulation; 
    vertical-align: top;
    transition: box-shadow 0.2s;
}
.btn1:focus-visible {
    border: 1px solid #4c51f9;
    outline: none;
}
.btn1:hover {
    transition: all 0.2s;
    box-shadow: 0 7px 14px rgb(65 132 144 / 10%), 0 3px 6px rgb(0 0 0 / 8%);
}
.btn1:active {
    background-color: #808080;
}


    </style>

    <br><H1 style="text-align: center;">Личный кабинет</H1>
    <div style="display: flex; justify-content: center;" class="form-center">
    <form class="form-reg" action="/koshelev/login_system/" method="POST">
        <div class="text-field text-field_floating-3">
  			<input class="text-field__input" type="text" id="name" name="Surname" value="<?php echo $row[1]; ?>">
  			<label class="text-field__label" for="name">Ваш ник</label>
		</div>

        <div class="text-field text-field_floating-3">
  			<input class="text-field__input" type="text" id="name" name="Surname" value="<?php echo $row[5]; ?>">
  			<label class="text-field__label" for="name">Ваша почта</label>
		</div>

        <div class="text-field text-field_floating-3">
  			<input class="text-field__input" disabled type="text" id="name" name="Surname" value="<?php echo $row[0]; ?>">
  			<label class="text-field__label" for="name">Ваш уровень</label>
		</div>
		<button type="submit" class="button-action">Сохранить</button>
	</form>
    </div>
<?php
}
?>
