@extends('layouts.master')
@section('content')    
<main class="container">
    <div class="sidebar">
        <div class="dptitle">
            <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">ANXIETY</h1>
        </div>                
        <iframe width="450" height="255" src="https://www.youtube.com/embed/k_aFpRPwF3o" alt="Anxiety Video"></iframe>
    </div>
    <div class="container-content">
        <div class="content">
            <h1 style="font-weight: 700; font-size: 32px;">ANXIETY<br></h1>
            <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Anxiety disorder adalah gangguan mental yang menyebabkan rasa cemas dan takut berlebih. Hal tersebut membuat Anda menjadi tidak semangat untuk melakukan kegiatan sehari-hari, termasuk hobi yang biasa digemari. Lebih lanjut, rasa cemas ini akan berlangsung intens dalam jangka waktu yang panjang. Seringkali dengan ketakutan ini membuat penderitanya cepat lemas secara fisik.<br>&emsp;&emsp;WHO menyatakan jika terdapat 301 juta orang memiliki gangguan mental ini di dunia, dimana 58 juta penderita anxiety disorder adalah anak-anak dan remaja. Menurut data Kementerian Kesehatan RI, gangguan kecemasan berada di peringkat 2 dari 10 penyakit yang paling banyak diderita oleh masyarakat Indonesia dari tahun 1990-an sampai 2017.</p>
        </div>

        <div class="content">
            <h1>
                <button class="tx" onclick="toggle1()">GEJALA</button>
                <button class="icon" onclick="toggle1()">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
            </h1>
            <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                <br>Berikut adalah gejala umum dari anxiety disorder:
                <br> - Kecemasan yang sulit dikontrol.
                <br> - Gelisah dan panik.
                <br> - Kelelahan, akan tetapi sulit tidur.
                <br> - Sulit berkonsentrasi.
                <br> - Mudah marah dan terpancing emosi.
                <br> - Rasa sakit dan nyeri pada tubuh.
                <br> - Otot tegang, mual, mulut kering.
                <br> - Tangan dan kaki kesemutan serta berkeringat.
                <br> - Memikirkan dan melakukan perenungan tiada henti.
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
                <br>Gangguan mental yang berdampak pada kekhawatiran berlebih ini disebabkan oleh berbagai faktor seperti berikut:
                <br> - Genetik yang diturunkan dari keluarga.
                <br> - Hormon yang terlepas dalam otak, sehingga meningkatkan denyut nadi dan pernapasan.
                <br> - Lingkungan yang memicu stres dan membuat ketakutan, seperti lokasi dimana terjadi pelecehan, kekerasan, kematian.
                <br> - Penyalahgunaan obat-obatan.
                <br> - Mengkonsumsi kafein yang berdampak pada kerja jantung.
                <br> - Kondisi medis yang tidak stabil, seperti pada organ jantung, paru-paru, tiroid.
                <br>Para peneliti menyimpulkan jika penyebab gangguan kecemasan berasal dari otak yang membentuk respon rasa takut melalui ingatan dan memori dari objek yang pernah dirasakan.
                
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
                <br>1. Menarik napas dalam.
                <br>2. Memusatkan pikiran pada aktivitas yang dijalani.
                <br>3. Menerapkan metode 5-4-3-2-1. 
                <br>4. Menghindari minuman berkafein dan beralkohol. 
                <br>5. Bercerita kepada orang terdekat. 
                <br>6. Meluangkan waktu untuk diri sendiri.
                <br>7. Makan secara teratur dan minum cukup air
            </div>
        </div>
    </div>
</main>
@endsection
