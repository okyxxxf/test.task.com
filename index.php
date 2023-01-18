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
                <?php
                if (isset($_COOKIE["name"])){
                    echo "<form id='ExitBtn'><a class='RLBtn'><button type='submit'><strong>Выйти</strong></button></a></form>";
                }else{
                    echo "<a class='RLBtn' href='registration.php'><button class='regBtn' type='button'><strong>Регистрация</strong></button></a> <a class='RLBtn' href='login.php'><button class='logBtn' type='button'><strong>Вход</strong></button></a>";
                }
                ?>
            </div>
        </div>
    </header>
    <main>
        <article class="validation">
            <?php
                if (isset($_COOKIE["name"])){
                    echo "Hello ".$_COOKIE["name"];
                }else{
                    echo "Пройдите ауентификацию";
                }
            ?>
        </article>
    </main>
    <footer>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="assets/js/ajax.js"></script>
</body>
</html>