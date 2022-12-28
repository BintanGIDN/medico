<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title>Home - Medico</title>
        <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    </head>
    <body>
        <header id="header" class="header d-flex align-items-center fixed-top" style="padding: 0px;">
            <nav class="container d-flex align-items-center fixed-top">
                <a href="/" class="logo d-flex align-items-center">
                    <img src="/assets/img/logo.svg" alt="logo">
                </a>
                <div class="hamburger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#EEEEEE">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    
                </div>
                <div class="top-menu">
                    <div class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#EEEEEE" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        
                    </div>
                    <ul>
                        <li style="font-weight: 700; color: #557153;" class="active"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li style="font-weight: 700; color: #557153;"><a href="/about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="hero">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper.png" alt="img slide">
                        <div class="text-hero">
                            <h2>MENTAL HEALTH</h2>
                            <h4><br></h4>
                            <h6>Mental Health adalah suatu kondisi dimana seseorang menyadari potensinya, menghadapi daily stress, bekerja secara produktif, serta menghasilkan kontribusi yang baik ke masyarakat.</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/PopUp.svg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper1.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper3.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper4.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper5.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper6.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper8.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper9.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper10.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper11.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper12.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper13.jpg" alt="img slide">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/img/swiper14.jpg" alt="img slide">
                    </div>
                
                </div>
                <div class="swiper-button-next" style="color: transparent;"></div>
                <div class="swiper-button-prev" style="color: transparent;"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="container_dp" style="position:relative; margin-bottom:20px;" >
            <a class="herodp dark" href="/detail/ocd">OCD</a>
            <a class="herodp light" href="/detail/bipolar">BIPOLAR</a>
            <a class="herodp dark" href="/detail/anxiety">ANXIETY</a>
            <a class="herodp light" href="/detail/depression">DEPRESSION</a>
            <a class="herodp light" href="/detail/skizofrenia">SKIZOFRENIA</a>
            <a class="herodp dark" href="/detail/icad">ICAD</a>
            <a class="herodp light" href="/detail/sgd">SGD</a>
            <a class="herodp dark" href="/detail/ptsd">PTSD</a>
        </div>
        @include('partials.footer')
    </body>
</html>