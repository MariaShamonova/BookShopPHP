<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyTime</title>
    <link rel="stylesheet" href="sass/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="main-display">
       <?php include 'php/header.php' ;?>
        <div class="main-box row">
            <div class="col-md-3 col-md-offset-1 text-box">
                <div class="box-margin">
                    <div class="main-title"><h1>StudyTime</h1></div>
                    <div class="main-description"><p>Заказывайте ваши любимые книги  24 часа в сутки с помощью удобного каталога</p></div>
                    <a href="catalog.html">
                        <div class="button-catalog"><div class="text-button-catalog">Каталог</div></div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 image-box"><img src="images/girl.png" alt=""></div>
        </div>
    </section>

    <section class="choose-genre  container">
        <div class="title-genre row"><p>Выберите жанр</p></div>
        <div class="block-choose-genre row">
            <div class="col-md-1 genre-item">
                <div class="circle-background-genre"> <img src="images/chost.png" alt="Ужасы"> </div>
                <p>Ужасы</p>
            </div>
            <div class="col-md-1 genre-item">
                <div class="circle-background-genre history-genre"><img src="images/history.png" alt="История"></div>
                <p>История</p>
            </div>
            <div class="col-md-1 genre-item">
                <div class="circle-background-genre drama-genre"><img src="images/heart.png" alt="Драма"></div>
                <p>Драма</p>
            </div>
            <div class="col-md-1 genre-item">
                <div class="circle-background-genre art-genre"><img src="images/art.png" alt="Искусство"></div>
                <p>Искусство</p>
            </div>
            <div class="col-md-1 genre-item">
                <div class="circle-background-genre"><img src="images/psy.png" alt="Психология"></div>
                <p>Психология</p>
            </div>
        </div>
    </section>
    <section class="found-book-block">
        <div class="title-found-book">Или найдите ее в поиске</div>
        <div class="box-found-book">
            <div class="found-item">
                <form action="" method="POST" class="form-found">
                    <input type="text" placeholder="Автор" value="" class="col-md-2 col-md-offset-1 found-autor"></input>
                    <input type="text" placeholder="Название" value="" class="col-md-2 found-title"></input>
                    <button type="submit" class="col-md-1">Поиск</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="box-footer container">
            <div class="box-inline row">
                <div class="col-md-3 col-md-offset-1 text-footer">Остались вопросы? Пиши мне на почту</div> 
                <div class="col-md-1 col-md-offset-1 social-box">
                    <div class="soc-item"><div class="social social-vk"><i class="fa fa-vk"></i></div></div>
                    <div class="soc-item"><div class="social social-inst"><i class="fa fa-instagram"></i></div></div>
                    <div class="soc-item"><div class="social social-tg"><i class="fa fa-paper-plane"></i></div></div>
                </div>               
            </div>
        </div>
    </footer>
    <script src="libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>