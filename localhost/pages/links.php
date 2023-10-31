<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ссылки</title>
</head>
<body>
    <div class="wrapper">
    <?php require_once("../functions/header.php")?>
        <div class="links__block">
            <div class="container links__container">
                <div class="links__links">
                    <h1 class="links__title">Ссылки</h1>
                    <ul class="links">
                        <li class="link__under">Ссылки на информацию:</li>
                        <li class="link"><a href="#">Статья от 20.09.2015</a></li>
                        <li class="link"><a href="#">Статья от 20.09.2015</a></li>
                    </ul>
                </div>
                <div class="links__links">
                    <h1 class="links__title">Новости</h1>
                    <ul class="links">
                        <li class="link__under">Ссылки на информацию:</li>
                        <li class="link"><a href="#">Новости Парижа 20.09.2015</a></li>
                        <li class="link"><a href="#">Новости Парижа 20.09.2015</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php require_once("../functions/footer.php")?>
    </div>
</body>
</html>