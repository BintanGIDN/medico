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
        <title>PTSD - Medico</title>
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
                    <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">PTSD</h1>
                </div>
                <iframe width="450" height="255" src="https://www.youtube.com/embed/CLyZjUVkhEQ" alt="PTSD Video"></iframe>
            </div>
            <div class="content">
                <h1 style="font-weight: 700; font-size: 32px;">POST-TRAUMATIC STRESS DISORDER<br></h1>
                <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Post-Traumatic Stress Disorder (PTSD) atau gangguan stress pascatrauma adalah gangguan psikologis yang dialami oleh seseorang setelah mengalami kejadian traumatis.<br>&emsp;&emsp;Kejadian traumatis yang dapat memicu PTSD bisa berbagai hal, misalnya mengalami kekerasan fisik atau kekerasan seksual, menjadi korban bencana alam, hingga terlibat atau menyaksikan kejadian yang mengerikan, seperti peperangan, kecelakaan, terorisme, dan insiden lainnya yang mengancam nyawa. Orang-orang yang pekerjaannya berhubungan dekat dengan kematian, seperti dokter forensik atau penyidik kepolisian, juga mungkin berisiko mengalami PTSD.<br>&emsp;&emsp;Penderita PTSD umumnya akan mengingat kembali pengalaman traumatis mereka secara terus menerus, baik itu dalam mimpi buruk atau kilas balik (flashback). Hal ini dapat menyebabkan orang tersebut memiliki emosi yang kurang stabil atau bahkan tidak mampu memunculkan emosi sama sekali.<br>&emsp;&emsp;Gangguan stres pascatrauma bisa berlangsung selama berbulan-bulan bahkan bertahun-tahun setelah insiden terjadi. Maka dari itu, kebanyakan orang dengan PTSD bisa menghadapi kesulitan menjalani kehidupan yang normal. Meski demikian, psikoterapi dan obat-obatan seringkali bekerja efektif dalam menangani kondisi ini.<br>&emsp;&emsp;PTSD tidak hanya dapat berdampak pada orang-orang yang mengalami peristiwa traumatis tersebut. Menyaksikan sebuah kejadian mengerikan juga dapat menyebabkan psikis terguncang dan memunculkan gejala PTSD serupa dengan orang yang mengalaminya secara langsung.</p>
                
            </div>

            <div class="content">
                <h1>
                    <button class="tx" onclick="toggle1()">GEJALA</button>
                    <button class="icon" onclick="toggle1()">
                        <i class="bi bi-caret-down-fill"></i>
                    </button>
                </h1>
                <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                    <br>&emsp;&emsp;PTSD adalah gangguan kejiwaan yang dapat memengaruhi kestabilan emosi dan kemampuan kognitif penderita. Gejala yang dapat muncul terkait perubahan ini adalah:
                    <br> - Memiliki persepsi negatif terhadap diri sendiri atau dunia sekitar.
                    <br> - Tidak dapat mengingat aspek-aspek penting dari trauma yang dialami.
                    <br> - Merasa bersalah atau menyalahkan diri sendiri.
                    <br> - Kehilangan ketertarikan untuk melakukan aktivitas yang semula disukai.
                    <br> - Merasa terpisah dari orang-orang lain.
                    <br> - Merasakan perasaan negatif terus menerus, dan kesulitan untuk memiliki perasaan positif.
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
                    <br>&emsp;&emsp;Penyebab munculnya PTSD setelah mengalami kejadian trauma belum diketahui pasti. Berdasarkan buku Essentials of Abnormal Psychology Edisi ke-8, PTSD cenderung terjadi apabila kondisi mental atau fisik seseorang tidak dalam keadaan baik pada saat mengalami trauma.
                    <br>&emsp;&emsp;Meski begitu, tidak semua orang yang kondisi mental atau psikisnya rentan pasti akan selalu mengalami PTSD. Di sisi lain, orang-orang yang sehat secara mental dan fisik pun juga bisa mengalami stres berat setelah melalui kejadian traumatis.
                    <br>&emsp;&emsp;Pasalnya, cara kerja otak setiap orang untuk memproduksi bahan kimia dan hormon yang dilepaskan sebagai respons terhadap stres bisa berbeda-beda.
                    Umumnya kejadian-kejadian yang bisa menyebabkan trauma di antaranya adalah:
                    <br> - Bencana besar, baik bencana alam maupun bencana yang diakibatkan manusia.
                    <br> - Kekerasan fisik.
                    <br> - Kekerasan seksual.
                    <br> - Penyiksaan, termasuk kekerasan pada anak dan KDRT.
                    <br> - Kejadian buruk di lingkungan kerja.
                    <br> - Permasalahan kesehatan akut.
                    <br> - Pengalaman melahirkan, baik untuk ayah maupun ibu.
                    <br> - Konflik.
                    <br> - Kematian orang terdekat, secara tiba-tiba atau karena penyakit/kondisi medis tertentu.
                    
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
                    <br>&emsp;&emsp;Apabila seseorang sudah didiagnosa mengalami gangguan PTSD, orang tersebut akan diberikan pengobatan secara psikologis. Terapi jenis psikoterapi bisa bermacam-macam, namun yang paling sering dipergunakan adalah:
                    <br> - Terapi Perilaku Kognitif (Cognitive Behavioral Therapy)Terapi CBT bertujuan mengubah fungsi berpikir, analisis, pengambilan keputusan, tindakan, dan reaksi emosional penderita untuk membantu menghadapi masalah yang ada dalam kesehariannya.
                    <br> - Terapi Desensitisasi Pembayangan (Imaginal Exposure Therapy)Pada terapi ini penderita akan dihadapkan pada hal-hal yang ditakuti. Ini dilakukan agar penderita bisa menenangkan diri sebelum mengingat kembali atau membayangkan kejadian traumatik yang telah dialaminya.
                    <br> - Pemrosesan Ulang dan Desensitisasi Pergerakan Mata (Eye Movement Desensitization and Reprocessing) Pada terapi ini penderita akan dihadapkan dengan objek atau kejadian traumatiknya bersama panduan ahli. Ahli tersebut akan memandu melalui pemberian stimulus gerakan jari tangan agar penderita dapat memfokuskan diri ketika menghadapi traumanya.
                    <br>&emsp;&emsp;Apabila diperlukan, penderita gangguan PTSD juga bisa mendapat bantuan melalui pemberian obat, seperti antidepresan berupa sertraline, fluoxetine, venlafaxine dan paroxetine untuk membantu mengendalikan emosi, mengurangi rasa cemas, dan kesulitan tidur.
                    
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