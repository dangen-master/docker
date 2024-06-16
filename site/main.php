<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
            <?php
            // ini_set('display_errors', '1');
            // ini_set('display_startup_errors', '1');
            // error_reporting(E_ALL);
                require_once "conect_to_db.php";
                // echo var_dump($conn);
                $stm = $conn->query("SELECT * FROM users");
                $arResult = $stm->fetchAll(\PDO::FETCH_ASSOC);
                $login = $_REQUEST["username"];
                $pass = $_REQUEST["password"];
                foreach ($arResult as $i){
                    if ($i["login"] != $login and $i["password"] != $pass){
                        die("Вход не выполнен");
                    }

                }
                // echo "<pre>";
                // echo var_dump($arResult);
                // echo "</pre>";
            ?>
        <h1>Добро пожаловать!</h1>
        <p>Вы успешно вошли в систему.</p>
    </div>
</body>
</html>
