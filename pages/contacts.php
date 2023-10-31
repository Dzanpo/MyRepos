<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Свяжитесь со мной</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
    <?php require_once("../functions/header.php")?>
        <div class="contacts__block">
            <div class="container contacts_container">
                <h1 class="contacts__title">Свяжитесь со мной!</h1>
                <ul class="contacts">
                    <li class="contact">+78005553535</li>
                    <li class="contact"><a href="#"><img src="../images/tw.svg" alt="" class = "contact__img"></a></li>
                    <li class="contact"><a href="#"><img src="../images/inst.svg" alt="" class = "contact__img"></a></li>
                    <li class="contact"><a href="#"><img src="../images/fb.svg" alt="" class = "contact__img"></a></li>
                </ul>
            </div>
        </div>
    <?php require_once("../functions/footer.php")?>
    </div>
</body>
</html>