<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Responsive Photography Portfolio Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">
                <img src="logo.png" alt="">
            </a>
            <ul class="nav__links">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#exhibitions">Project</a></li>
            </ul>
            <ul class="nav__socials">
                <li><a href="https://www.instagram.com/ziieff/" target="_blank"><i class="uil uil-instagram-alt"></i></a></li>
            </ul>
            <button class="nav__toggle-btn" id="nav__toggle-open"><i class="uil uil-bars"></i></button>
            <button class="nav__toggle-btn" id="nav__toggle-close"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <header>
        <div class="container header__container">
            <div class="header__left">
                <div class="header__image-bg"></div>
                <div class="header__image-lg">
                    <img src="gunung.jpg" alt="">
                </div>
                <div class="header__image-sm">
                    <img src="gunung.jpg" alt="">
                </div>
            </div>
            <div class="header__right">
                <div class="header__head">
                    <div class="empty header__empty"></div>
                    <a class="header__tag">Portofolio</a>
                </div>
                <h1>Selamat datang lihat-lihat yaa</h1>
                <p>
                    If you spend too much time thinking about a thing, you’ll never get it done
                </p>
                <a href="#" class="header__btn-md">Let's Talk</a>
            </div>
        </div>
    </header>
    <div class="header__frames">
        <div class="header__frame">
            <img src="frame1.jpg" alt="">
        </div>
        <div class="header__frame">
            <img src="frame2.jpg" alt="">
        </div>
    </div>
    <a href="" class="contact__btn header__btn">
        <i class="uil uil-arrow-up-right"></i>
        <p>CONTACT - SEND ME AN EMAIL</p>
    </a>

    <section id="about">
        <div class="container about__container">
            <h2 class="about__title">About<br/>Razief</h2>
            <a href="" class="contact__btn about__btn">
                <i class="uil uil-arrow-up-right"></i>
                <p>CONTACT - SEND ME AN EMAIL</p>
            </a>
            <div class="about__left">
                <div class="about__image">
                    <div class="about__image-bg"></div>
                    <div class="about__image-lg">
                        <img src="nako.jpg" alt="">
                    </div>
                    <div class="about__image-sm">
                        <img src="nako.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="about__right">
                <div class="empty about__empty"></div>
                <p>
                    Hallo nama saya Muhammad Razief saya lahir di Bogor pada tanggal 21 januari 2007. Saya bersekolah di Smk Wikrama Bogor dan mengambil jurusan pplg.
                </p>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container gallery__container swiper mySwiper">
            <div class="gallery__head">
                <h2 class="gallery__title">My Gallery</h2>
                <div class="empty gallery__empty"></div>
            </div>
            <div class="swiper-wrapper">
                <article class="swiper-slide">
                    <img src="nako.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="gunung.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="kob.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="kecil.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="az.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="tam.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="id.jpg" alt="">
                </article>
                <article class="swiper-slide">
                    <img src="tiga.jpg" alt="">
                </article>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="exhibitions">
        <div class="container exhibitions__container">
            <h2 class="exhibitions__title">Project</h2>
            <div class="empty exhibitions__empty"></div>
            <div class="exhibitions__head">
                <p>Berikut project yang saya buat:
                </p>
                <a href="" class="contact__btn exhibitions__btn">
                    <i class="uil uil-arrow-up-right"></i>
                    <p>CONTACT - SEND ME AN EMAIL</p>
                </a>
            </div>
            <div class="exhibitions__gallery">
    
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                599: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1023: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
            }
        });
    </script>
</body>
</html>
