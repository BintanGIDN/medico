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
        <title>OCD - Medico</title>
        <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    </head>
    <body>
        @include('partials.navbar')
        <main class="container">
            <div class="sidebar">
                <div class="dptitle">
                    <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">OCD</h1>
                </div>
                <iframe width="450" height="255" src="https://www.youtube.com/embed/7iwQFArO0xs" alt="OCD Video"></iframe>
            </div>
            <div class="container-content">
                <div class="content">
                    <h1 style="font-weight: 700; font-size: 32px;">OBSESSIVE COMPULSIVE DISORDER<br></h1>
                    <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Merupakan gangguan psikologis yang menyerang pikiran seseorang. Suatu saat setiap orang pasti pernah merasakan perasaan tidak tentu, cemas gelisah, takut, atau khawatir. Reaksi-reaksi seperti itu normal dan wajar. Bahkan kadang sanggup membuat orang tersebut merasa aman dan nyaman. Biasanya perasaan seperti ini tidak berlangsung lama dan tidak sering terjadi namun untuk penderita OCD, perasaan seperti itu terasa tidak normal dan wajar. Karena perasaan-perasaan tersebut akan datang secara tiba-tiba, berlebihan dan menyebabkan orang tersebut bertingkah aneh.<br>&emsp;&emsp;David, Sue, dkk (1986:181) mengatakan, pikiran-pikiran tersebut muncul secara berulang-ulang sehingga membuat si penderita sulit untuk berhenti memikirkannya. Suatu obsesi dapat menjadi sangat kuat dan persisten hinga dapat mengganggu kehidupan sehari-hari dan dapat menimbulkan distress serta kecemasan yang signifikan (Nevid, 2003).</p>
                    
                </div>

                <div class="content">
                    <h1>
                        <button class="tx" onclick="toggle1()">GEJALA</button>
                        <button class="icon" onclick="toggle1()">
                            <i class="bi bi-caret-down-fill"></i>
                        </button>
                    </h1>
                    <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                        <br>Gejala OCD ini dapat dibagi menjadi dua gejala, yaitu:<br> - Pikiran Obsesif<br>&emsp;&emsp;Gejala obsesif yang dialami penderita OCD bisa berupa, Cemas atau takut tertular penyakit sehingga menghindari bersalaman atau menyentuh benda-benda, Stres ketika melihat sekumpulan benda tidak selaras atau simetris, Takut melakukan sesuatu yang membahayakan diri sendiri atau orang lain, misalnya ragu apakah sudah mematikan kompor atau mengunci pintu, Takut mengatakan sesuatu yang mungkin menyinggung perasaan orang lain, Khawatir membuang barang yang telah dikumpulkan.<br> - Perilaku Kompulsif<br>&emsp;&emsp;Gejala perilaku kompulsif meliputi, Mandi atau mencuci tangan berulang-ulang sampai lecet, Menyusun benda menghadap ke arah yang sama atau sesuai jenisnya, Memeriksa berulang kali apakah sudah mematikan kompor atau mengunci pintu, Mengulangi kata-kata atau kalimat tertentu dalam hati agar tidak salah mengatakannya, Mengumpulkan atau menimbun barang-barang, seperti surat atau koran yang tidak terpakai.
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
                        <br>&emsp;&emsp;Penyebab OCD belum diketahui secara pasti. Namun, ada faktor-faktor tertentu yang diduga dapat meningkatkan risiko seseorang menderita OCD, antara lain:<br> - Memiliki riwayat OCD dalam keluarga.<br> - Menderita gangguan mental lain, seperti gangguan kecemasan, gangguan bipolar, depresi, atau sindrom Tourette.<br> - Pernah mengalami kejadian yang menyebabkan trauma atau stres, seperti perundungan (bullying), kekerasan fisik, atau kekerasan seksual.<br> - Memiliki kepribadian yang sangat disiplin, terlalu teliti, dan perfeksionis.<br> - Menderita infeksi bakteri Streptococcus ketika kanak-kanak (pediatric autoimmune neuropsychiatric disorders).
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
                        <br>&emsp;&emsp;Ada penanganan atau perawatan untuk meringankan pengidap OCD, yaitu terapi psikologis dan obat-obatan. Terapi psikologis yang bisa dilakukan salah satunya adalah jenis terapi untuk membantu menghadapi ketakutan dan pikiran obsesif tanpa diatasi dengan kompulsi. Selain terapi, obat antidepresan dapat membantu menyeimbangkan bahan kimia di otak.<br> - Terapi Psikologis<br>&emsp;&emsp;Terapi yang cocok untuk pengidap OCD adalah terapi perilaku kognitif (CBT) dengan paparan dan pencegahan respons (ERP). Ahli terapi membantu pengidap memecahkan masalah dan menghadapi perilaku obsesi atau kompulsinya. Terapi dimulai dengan situasi ringan sebelum berpindah ke situasi yang lebih sulit. Pengidap OCD ringan biasanya membutuhkan sekitar 10 jam perawatan terapis yang dikombinasikan dengan latihan di rumah. Dalam kasus OCD berat, pengidapnya mungkin memerlukan terapi yang lebih lama.<br> - Konsumsi Obat<br>&emsp;&emsp;Dilakukan jika terapi psikologis tidak berhasil mengatasi OCD. Obat yang sering digunakan adalah selective serotonin reuptake inhibitor (SSRIs). Obat ini membantu meringankan gejala OCD dengan meningkatkan kadar zat kimia yang disebut serotonin pada otak. Obat ini perlu diminum selama 12 minggu untuk melihat efeknya. Kebanyakan orang memerlukan perawatan setidaknya selama satu tahun sampai dinyatakan sembuh.
                    </div>
                </div>
            </div>
        </main>
        @include('partials.footer')
        <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
        <script src="/assets/js/script.js"></script>
    </body>
</html>