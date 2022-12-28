@extends('layouts.master')
@section('content')
<main class="container">
    <div class="sidebar">
        <div class="dptitle">
            <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">PTSD</h1>
        </div>
        <iframe width="450" height="255" src="https://www.youtube.com/embed/CLyZjUVkhEQ" alt="PTSD Video"></iframe>
    </div>
    <div class="container-content">
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
    </div>
</main>
@endsection
