<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title>ICAD - Medico</title>
        <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    </head>
    <body>
        <header id="header" class="header d-flex align-items-center fixed-top">
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
        <main>
            <div class="sidebar">
                <div class="dptitle">
                    <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">ICAD</h1>
                </div>
                <iframe width="450" height="255" src="https://www.youtube.com/embed/z7mFv8xnq0s" alt="ICAD Video"></iframe>
            </div>
            <div class="content">
                <h1 style="font-weight: 700; font-size: 32px;">ICAD<br></h1>
                <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Impulse Control and Addition (ICAD) adalah gangguan kejiwaan yang ditandai dengan impulsivitas - kegagalan untuk menahan godaan, dorongan, atau ketidakmampuan untuk berpikir panjang. Banyak gangguan kejiwaan menampilkan impulsivitas, termasuk gangguan terkait zat, kecanduan perilaku, gangguan hiperaktif akibat kekurangan perhatian, gangguan kepribadian antisosial, gangguan perilaku, dan beberapa gangguan suasana hati.<br>&emsp;&emsp;Orang dengan gangguan ICAD tidak dapat menahan dorongan untuk melakukan tindakan yang dapat membahayakan dirinya atau orang lain. Beberapa contoh dari gangguan ini antara lain Pyromania (menyulut api hingga menyebabkan kebakaran) dan Kleptomania (mencuri). Penderita ini juga biasanya kecanduan terhadap alkohol dan obat-obatan, atau kecanduan pada aktivitas tertentu seperti main game, seks atau berbelanja.</p>
                
            </div>

            <div class="content">
                <h1>
                    <button class="tx" onclick="toggle1()">GEJALA</button>
                    <button class="icon" onclick="toggle1()">
                        <i class="bi bi-caret-down-fill"></i>
                    </button>
                </h1>
                <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                    <br>Oleh karena itu, individu dengan pengendalian impuls memiliki ciri-ciri berikut:
                    <br>1. Individu tidak dapat menahan suatu implus, dorongan, atau godaan untuk melakukan suatu tindakan yang berbahaya bagi diri mereka sendiri atau orang lain. Individu mungkin secara disadari atau tidak disadari menentang implus dan mungkin merencanakan atau tidak merencanakan tindakan tersebut.
                    <br>2. Sebelum melakukan tindakan, mereka merasakan ketegangan atau rangsanganyang meningkat.
                    <br>3. Saat melakukan tindakan, individu dengan gangguan ini merasakan kesenangan, kegembiraan, atau pelepasan.Tindakannya adalah ego-sintonik yaitu sejalan denganharapan sadar pasien yang segera.
                    <br>4. Segera setelah melakukan tindakan tersebut, dia mungkin merasakanpenyesalan yang murni, mencela diri sendiri, atau rasa bersalah, atau mungkin tidakmerasakanya.
                </div>
            </div>

            <div class="content">
                <h1>
                    <button class="tx" onclick="toggle2()">PENYEBAB</button>
                    <button class="icon" onclick="toggle2()">
                        <i class="bi bi-caret-down-fill"></i>
                    </button>
                </h1>
                <div id="dd2" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                    <br>&emsp;&emsp;Meski penyebab gangguan kontrol impuls belum diketahui dengan pasti, hal ini diperkirakan terkait dengan perubahan kimia di lobus frontal otak yang terkait dengan dopamin. Lobus frontal dikenal untuk mengendalikan impuls. Jika ada perubahan di dalamnya, Anda mungkin berisiko mengalami gangguan ini. Menurut Diagnostic and Statistical Manual of Mental Disorders (DSM-5), gangguan ini mungkin terkait dengan disruptive, impulse-control, dan conduct disorders. Contoh gangguan tersebut antara lain: Conduct disorder. Orang dengan gangguan ini menunjukkan kemarahan dan agresi yang dapat menimbulkan bahaya bagi orang lain, hewan, dan properti. Intermittent explosive disorder. Gangguan ini menyebabkan ledakan kemarahan dan agresif di rumah, sekolah, dan tempat kerja. Oppositional defiant disorder (ODD). Seseorang dengan ODD dapat menjadi mudah marah, menantang, argumentatif, dan juga menunjukkan perilaku pendendam. Kondisi Terkait Lainnya Masalah gangguan kontrol impuls juga dapat dilihat di samping kondisi berikut: Attention deficit hyperactivity disorder (ADHD). Gangguan bipolar. Gangguan obsesif kompulsif. Penyakit Parkinson dan gangguan gerakan lainnya. Penyalahgunaan zat. Sindrom Tourette. Meski lebih sering terjadi pada pria, beberapa faktor yang meningkatkan risiko gangguan ini adalah riwayat pelecehan, perlakuan buruk dari orang tua di masa kecil, dan memiliki orang tua dengan masalah penyalahgunaan zat


                </div>
            </div>

            <div class="content">
                <h1>
                    <button class="tx" onclick="toggle3()">PENANGANAN</button>
                    <button class="icon" onclick="toggle3()">
                        <i class="bi bi-caret-down-fill"></i>
                    </button>
                </h1>
                <div id="dd3" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                    <br>&emsp;&emsp;Gangguan kontrol impuls dapat diobati dengan berbagai terapi dalam program perawatan seperti:
                    <br>1. Cognitive behavioral therapy (CBT) adalah bentuk terapi yang banyak digunakan yang membantu individu untuk belajar bagaimana memodifikasi pola dan perilaku yang berpotensi merugikan.
                    <br>2. Terapi perilaku dialektik yang dapat membantu orang mengendalikan perilaku mencelakai diri sendiri, seperti upaya bunuh diri, pikiran, atau desakan, serta penggunaan narkoba.
                    <br>3. Manajemen kontingensi menawarkan reward atau penghargaan jika terlibat dalam perilaku sehat guna menghindari perilaku tidak sehat seperti penggunaan narkoba.
                    Terapi dapat dilakukan dalam lingkungan individu, kelompok, atau keluarga. Untuk orangtua dari remaja atau anak-anak dengan gangguan kontrol impuls, perawatan juga dapat mencakup bekerja sama dengan orangtua supaya anak dapat berperilaku positif
                </div>
            </div>

            
                    
        </main>
        
        <script>
            function toggle1() {
                var x = document.getElementById("dd1");

                if (x.style.display==="none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none"
                }
            }
            function toggle2() {
                var x = document.getElementById("dd2");

                if (x.style.display==="none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none"
                }
            }
            function toggle3() {
                var x = document.getElementById("dd3");

                if (x.style.display==="none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none"
                }
            }
        </script>
    </body>
</html>