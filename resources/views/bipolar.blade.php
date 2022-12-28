@extends('layouts.master')
@section('content')    
<main class="container">
    <div class="sidebar">
        <div class="dptitle">
            <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">BIPOLAR</h1>
        </div>
        <iframe width="450" height="255" src="https://www.youtube.com/embed/dfeen7_eFTs" alt="Bipolar Video"></iframe>
    </div>
    <div class="container-content">
            <div class="content">
            <h1 style="font-weight: 700; font-size: 32px;">BIPOLAR<br></h1>
            <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Gangguan bipolar adalah kondisi seseorang yang mengalami perubahan suasana hati secara fluktuatif dan drastis, misalnya tiba-tiba menjadi sangat bahagia dari yang sebelumnya murung. Nama lain dari gangguan bipolar adalah manik depresif. Dani Tri Astuti, M.Psi., Cht., Psi – psikolog dari Primaya Hospital Tangerang mengatakan bahwa banyak masyarakat yang menganggap gangguan ini sebagai sesuatu yang tabu serta masih belum sepenuhnya menyadari keberadaan penyakit bipolar dan bagaimana mendeteksi dan menanganinya.<br>&emsp;&emsp;Keadaan seseorang adalah salah satu gangguan mental seseorang yang terjadi perubahan mood secara ekstrem yang terdiri dari fase mania (Naik) dan fase depresi (Turun).Terdapat dua episode dalam gangguan bipolar, yaitu episode mania (fase naik) dan depresi (fase turun). Pada periode mania, penderita menjadi terlihat sangat bersemangat, enerjik, dan bicara cepat. Sedangkan pada periode depresi, penderita akan terlihat sedih, lesu, dan hilang minat terhadap aktivitas sehari-hari.</p>
            
        </div>

        <div class="content">
            <h1>
                <button class="tx" onclick="toggle1()">GEJALA</button>
                <button class="icon" onclick="toggle1()">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
            </h1>
            <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"> <br> - Gejala Mania (Naik) antara lain:<br>terlalu bahagia, berenergi, bersemangan, sensitif, Bicara cepat, pikiran terpacu, membuat keputusan yang buruk.<br> - Gejala Depresi (Turun) antara lain:<br>Sangat sedih, putus asa, hampa, tidak tertarik melakukan kegiatan, minder, susah konsentrasi, pemikiran bunuh diri..
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
                <br>Beberapa penyebab bipolar disorder seperti berikut ini:
                <br> - Genetik, yang diturunkan oleh salah satu anggota keluarga yang mengalami bipolar.
                <br> - Trauma masa kecil yang sulit dilupakan, seperti kekerasan fisik, kekerasan seksual, kehilangan orang terkasih, dan tragedi lainnya.
                <br> - Kejadian yang menyebabkan stres sehari-hari, seperti kesepian, patah hati, pemutusan kerja, tekanan dari orang dan lingkungan sekitar, bahkan pernikahan.
                <br> - Lingkungan sosial keluarga memicu gangguan bipolar.
                <br> - Alkohol dan obat-obatan.
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
                <br>Penanganan Depresi dapat mengkonsultasikan obat ke dokter dan dengan bantuan psikoterapi.
            </div>
        </div>
    </div>
</main>
@endsection
        