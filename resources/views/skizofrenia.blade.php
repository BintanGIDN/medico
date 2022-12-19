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
        <title>Skizofrenia - Medico</title>
        <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    </head>
    <body>
    @include('partials.navbar')
        <main class="container">
            <div class="sidebar">
                <div class="dptitle">
                    <h1 style="font-size: 51px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">SKIZOFRENIA</h1>
                </div>
                <iframe width="450" height="255" src="https://www.youtube.com/embed/trSHTvxKwGg" alt="Skizofrenia Video"></iframe>
            </div>
            <div class="container-content">
                    <div class="content">
                    <h1 style="font-weight: 700; font-size: 32px;">SKIZOFRENIA<br></h1>
                    <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Skizofrenia atau schizophrenia adalah penyakit mental serius yang memengaruhi pikiran, perasaan, dan perilaku penderitanya.<br>&emsp;&emsp;Orang dengan skizofrenia umumnya mengalami psikosis, yaitu suatu kondisi di mana penderitanya tidak dapat menafsirkan realita secara normal. Dengan kata lain, penderita penyakit ini tidak bisa membedakan mana khayalan dan kenyataan.<br>&emsp;&emsp;Tak hanya itu, seseorang yang mengalami penyakit ini pun kerap memiliki perilaku yang tidak teratur, yang dapat mengganggu aktivitas sehari-harinya. Hal itu yang menyebabkan penderita skizofrenia sering disebut “gila”.<br>&emsp;&emsp;Kondisi-kondisi tersebut umumnya terjadi dalam jangka panjang. Artinya, seseorang dengan kondisi skizofrenia perlu mendapatkan perawatan seumur hidup untuk dapat mengontrol gejala, mencegah komplikasi, serta membantu menjalani aktivitas sehari-harinya.</p>
                    
                </div>

                <div class="content">
                    <h1>
                        <button class="tx" onclick="toggle1()">GEJALA</button>
                        <button class="icon" onclick="toggle1()">
                            <i class="bi bi-caret-down-fill"></i>
                        </button>
                    </h1>
                    <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                        <br>Gejala skizofrenia antara lain:
                        <br> - Tidak bisa tidur
                        <br> - Halusinasi dan delusi
                        <br> - Merasa seseorang atau pemerintah sedang memata-matai aktivitas sehari-harinya
                        <br> - Merasa orang di sekitarnya sedang bersekongkol untuk mencelakakan dirinya
                        <br> - Merasa teman-teman atau orang terdekat mencoba mencelakai dirinya, salah satunya berpikir bahwa ada yang memasukkan racun ke dalam makanannya
                        <br> - Merasa pasangannya sedang berselingkuh
                        <br> - Kesulitan berbicara dengan baik (disorganized speech), seperti sering mengulang kata-kata, sehingga sulit dimengerti.
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
                        <br>&emsp;&emsp;Sampai saat ini, para ahli belum mengetahui apa yang menyebabkan seseorang mengalami skizofrenia. Meski demikian, para peneliti percaya bahwa ada beberapa hal yang dapat memicu penyakit ini. Beberapa hal yang dapat menjadi penyebab penyakit skizofrenia adalah:
                        <br> - Masalah dengan keseimbangan kimia di otak
                        <br>&emsp;&emsp;Kadar dopamine dan glutamat di dalam otak yang tidak seimbang diyakini para ahli bisa menyebabkan penyakit ini.
                        <br> - Perbedaan struktur otak
                        <br>&emsp;&emsp;Studi pemindai saraf otak menunjukkan perbedaan dalam struktur otak dan sistem saraf pusat orang dengan penyakit ini. Para peneliti tidak yakin mengapa hal tersebut bisa terjadi, tetapi mereka menyebutkan bahwa gangguan kejiwaan ini terkait dengan penyakit otak.
                        <br> - Genetik
                        <br>&emsp;&emsp;Faktor genetik atau keturunan bisa menjadi penyebab skizofrenia. Jadi, jika salah satu keluarga inti Anda terkena penyakit ini, Anda berisiko tinggi mengalami hal yang serupa.
                        <br> - Faktor lingkungan
                        <br>&emsp;&emsp;Faktor lingkungan yang mungkin menjadi penyebab termasuk infeksi virus dan kekurangan beberapa nutrisi ketika masih dalam kandungan, atau berada di lingkungan yang penuh tekanan dan mengakibatkan stres.
                        <br> - Obat-obatan tertentu
                        <br>&emsp;&emsp;Penyalahgunaan obat-obatan terlarang, seperti narkotika disebut dapat menjadi penyebab skizofrenia.
                        
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
                        <br>&emsp;&emsp;Sampai saat ini, belum ada obat yang dapat menyembuhkan skizofrenia. Namun, ada pengobatan yang dapat mengendalikan dan mengurangi gejala. Penanganan tersebut dapat berupa:
                        <br> - Pemberian obat-obatan antipsikotik
                        <br> - Psikoterapi
                        <br> - Terapi elektrokonvulsif
                        <br>&emsp;&emsp;Pencegahan skizofrenia adalah dengan mendeteksi dan mengobatinya sejak dini sehingga perburukan dan kekambuhan penyakit ini dapat dicegah. Dengan begitu, kualitas hidup penderita pun akan membaik.
                        
                    </div>
                </div>
            </div>
        </main>
        @include('partials.footer')
        <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
        <script src="/assets/js/script.js"></script>
    </body>
</html>