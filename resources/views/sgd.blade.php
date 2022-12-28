@extends('layouts.master');

@section('content')
    <main class="container">
            <div class="sidebar">
                <div class="dptitle">
                    <h1 style="font-size: 56px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">SGD</h1>
                </div>
                <iframe width="450" height="255" src="https://www.youtube.com/embed/j3BSe2TEIvA" alt="SGD Video"></iframe>
            </div>
            <div class="container-content">
                    <div class="content">
                    <h1 style="font-weight: 700; font-size: 32px;">SGD<br></h1>
                    <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Gangguan identitas seksual adalah kondisi di mana pasien memiliki tingkat ketidakpuasan yang tinggi dengan jenis kelamin mereka. Kondisi ini juga dikenal sebagai gender dysphoria. Hal ini berbeda dengan homoseksualitas atau biseksualitas, yang lebih berorientasi pada preferensi seksual individu, dan bukan ketidakpuasan dengan jenis kelamin dan gender yang dimiliki sejak lahir.<br>&emsp;&emsp;Gangguan identitas seksual secara resmi diklasifikasikan sebagai gangguan medis pada manual ICD-10 dan DSM-5. Menurut manual ini, kondisi ini disebabkan oleh kombinasi faktor perilaku, psikologis, dan biologis. Meskipun tercantum dalam manual DSM-5, penting untuk dicatat bahwa gangguan identitas seksual bukanlah penyakit mental.</p>
                    
                </div>

                <div class="content">
                    <h1>
                        <button class="tx" onclick="toggle1()">GEJALA</button>
                        <button class="icon" onclick="toggle1()">
                            <i class="bi bi-caret-down-fill"></i>
                        </button>
                    </h1>
                    <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                        <br>&emsp;&emsp;Gejala gangguan identitas seksual dapat mulai terlihat sejak awal masa kanak-kanak. Anak-anak dengan kondisi ini sering menunjukkan gejala berikut:
                        <br> - Terlihat jijik saat melihat atau memikirkan alat kelamin mereka.
                        <br> - Berulang kali bersikeras bahwa jenis kelaminnya adalah perempuan atau laki-laki.
                        <br> - Tidak mau buang air kecil sesuai kebiasaan yang ada, seperti menolak untuk duduk atau berdiri.
                        <br> - Terlihat stres saat mengalami perubahan pada tubuh akibat pubertas.
                        <br> - Diisolasi teman sekelas dan rekan-rekan seusianya.
                        <br> - Menampilkan tanda-tanda kecemasan.
                        <br> - Menampilkan tanda-tanda kesepian dan depresi.
                        <br>&emsp;&emsp;Semua gejala ini bisa dihubungkan dengan ketidakpuasan dengan tubuh atau jenis kelamin yang dimiliki. Anak-anak biasanya akan menolak untuk memakai pakaian sesuai jenis kelamin mereka, atau menolak untuk terlibat dalam "kegiatan yang menunjukkan gender," seperti bermain dengan boneka atau mobil.
                        <br>&emsp;&emsp;Gender dysphoria dapat bertahan sampai dewasa dan menunjukkan tanda-tanda dan gejala berikut:
                        <br> - Hanya bisa merasa nyaman saat berperan sebagai lawan jenis.
                        <br> - Menyembunyikan tanda-tanda fisik dari jenis kelamin mereka.
                        <br> - Kesepian dan depresi.
                        <br> - Rendah diri.
                        <br> - Stres dan kecemasan.
                        <br> - Isolasi sosial.
                        <br> - Kecenderungan bunuh diri.
                        <br>&emsp;&emsp;Penelitian menunjukkan bahwa individu dengan gangguan identitas seksual beresiko tinggi bunuh diri. Bahkan, 40% individu transgender di Amerika Serikat telah mencoba bunuh diri pada beberapa titik kehidupan mereka. Penelitian juga menunjukkan bahwa mereka lebih mungkin untuk menderita gangguan mental, termasuk gangguan makan yang dapat sangat membahayakan kesehatan mereka .
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
                        <br>&emsp;&emsp;Saat ini, penyebab pasti dari gangguan identitas seksual masih belum diketahui. Namun, penelitian menunjukkan bahwa kondisi ini bisa dimulai saat perkembangan janin di rahim ibu. Ketidakseimbangan hormon juga dapat memengaruhi tubuh pasien, termasuk otak, alat kelamin, dan organ reproduksi.
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
                        <br>&emsp;&emsp;Individu dengan gangguan identitas seksual disarankan untuk melihat dokter atau psikiater. Para profesional medis dapat merekomendasikan pasien ke klinik spesialis identitas gender, di mana mereka akan mendapatkan pemeriksaan yang tepat dan dukungan yang dibutuhkan. Pengobatan untuk kondisi ini tidak bertujuan agar pasien bisa menerima jenis kelamin mereka, tetapi untuk mengurangi atau menghilangkan penderitaan yang mereka rasakan atas perbedaan antara gender yang mereka sukai dan jenis kelamin yang dimiliki.
                        <br>Pilihan pengobatan meliputi:
                        <br> - Terapi untuk seluruh keluarga pasien.
                        <br> - Konseling orang tua.
                        <br> - Sesi psikoterapi atau konseling individu.
                        <br> - Terapi hormon.
                        <br> - Terapi untuk manifestasi fisik dari jenis kelamin mereka, sehingga individu dapat melalui transisi ke identitas gender yang disukai.
                        <br> - Mengganti jenis kelamin
                    </div>
                </div>
            </div>
        </main>
@endsection
        
