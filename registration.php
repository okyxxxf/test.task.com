<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/css/desktop.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test.task</title>
</head>
<body>
    <header>
        <div class="buttons">
            <div class="homeBut">
                <a class="RLBtn" href="index.php"><button><strong>Домой</strong></button></a>
            </div>
            <div class="btns">
                <a class="RLBtn" href="registration.php"><button class="regBtn" type="button"><strong>Регистрация</strong></button></a>
                <a class="RLBtn" href="login.php"><button class="logBtn" type="button"><strong>Вход</strong></button></a>
            </div>
        </div>
    </header>
    <main>
        <article class="validation">
            <div class="formRL">
                <form id="formRegistration" method="get">
                    <legend>Регистрация:</legend>
                    <ul class="fieldsRL">
                        <li class="fieldRL">
                            <label for="login">Логин:</label>
                            <input class="inputForm" placeholder="Логин" name="login" type="input" required pattern="[a-zA-Zа-яА-Я0-9]{6,}">
                        </li>
                        <li class="fieldRL">
                            <label for="password">Пароль:</label>
                            <input id ="password" onChange="onChange()" class="inputForm" placeholder="password123" name="password" type="input" required pattern="(?=.*[0-9])(?=.*[a-z]|.*[а-я])[a-zA-Zа-яА-Я0-9]{6,}">
                        </li>
                        <li class="fieldRL">
                            <label >Подтвердите пароль:</label>
                            <input id="confirm_password" onChange="onChange()" class="inputForm" placeholder="password123" name="confirm_password" type="input" required >
                        </li>
                        <li class="fieldRL">
                            <label for="mail">Почта:</label>
                            <input class="inputForm" placeholder="yourmail@gmail.com" name="mail" type="mail" required pattern="[a-zA-Z0-9]+@{1}[a-z]+\.[a-z]+">
                        </li>
                        <li class="fieldRL">
                            <label for="name">Имя:</label>
                            <input class="inputForm" placeholder="Ваше имя" name="name" type="input" required pattern="[a-zA-ZА-Яа-я]{2,}">
                        </li>
                    </ul>
                    <div class="submitBtn">
                        <button type="submit" name="submit"><strong>Зарегистрироваться</strong></button>
                    </div>
                </form>
            </div>
        </article>
        <article>
            <div id="message"></div>
        </article>
    </main>
    <footer>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="assets/js/ajax.js"></script>
<script src="assets/js/validation.js"></script>
</body>
</html>