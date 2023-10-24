@extends('template.materi')
@section('title', 'Teorema Pythagoras')

@section('css')
@endsection

@section('main-content')
    <p class="d-inline-flex gap-1">
    <div class="card tujuan1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
        aria-controls="collapseExample">
        <div class="card-body">
            Tujuan Pembelajaran(Klik untuk menutup/membuka)
        </div>
    </div>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <ul style="font-size: 15px">
                <li>Menyelesaikan permasalahan dalam kehidupan sehari-hari mengenai penerapan teorema Pythagoras</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body" style="text-align: center">
                <br>
                <div class="card-page" id="materi4-page1">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <h5 style="color: #2A5D66; text-align:center">Menara Pandang</h5>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/Menara Pandang (1).jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">Menara Pandang Banjarmasin terletak di Siring, Jalan Kapten
                                            Pierre Tendean, Banjarmasin, Kalimantan Selatan. Menara Pandang Banjarmasin
                                            merupakan tempat wisata di Kota Banjarmasin. Kawasan ini dikunjungi masyarakat
                                            setempat maupun masyarakat dari luar daerah. Menara Pandang Banjarmasin adalah
                                            tempat wisata untuk melihat Kota Banjarmasin dari ketinggian dan foto-foto
                                            sambil menikmati pemandangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <h5 style="color: #2A5D66; text-align:center">Susur Sungai</h5>
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"> Wisata susur sungai yang menyusuri Sungai Martapura, yang
                                            dikelola pihak juragan klotok (perahu bermesin) Kota Banjarmasin, Kalimantan
                                            Selatan Melalui susur sungai bisa melihat keindahan Jembatan Merdeka, Mesjid
                                            Sabilal Muchtadin, taman bekantan, kampung ketupat, mitra plaza, muara kelayan,
                                            taman perkotaan di dekat kantor Pemkot Banjarmasin, tempat penjualan ikan RK
                                            Ilir dan tempat tempat lainnya.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('images/WIsata susur sungai.jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-page" id="materi4-page2">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <p>Dari pemaparan objek wisata yang ada di banjarmasin mari kita terapkan konsep teorema
                                pytagoras !</p>
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start" alt="..."
                                style="max-width: 200px;">
                            <div class="card-body" style="text-align: center">
                                <a href="#" class="btn-petunjuk" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal4">
                                    <i class=" fas fa-search" style="font-size: 15px; color:#2A5D66; margin:10px">
                                        Petunjuk Pengerjaan (Klik untuk melihat petunjuk!)
                                    </i>
                                </a>
                                <div class="modal fade" id="exampleModal4" tabindex="-1"
                                    aria-labelledby="exampleModal4Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModal4Label">Petunjuk pengerjaan
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: left">
                                                <ol>
                                                    <li>Isilah kolom kosong yang disediakan dengan jawaban a, b, dan c</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                    <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk
                                                        menjawab kembali bisa mengisi jawaban yang benar</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="latihan-tripel">
                                <p>1. Seorang pengunjung berada di atas menara pandang di siring Kota Banjarmasin yang
                                    tingginya 12 meter. Ia melihat kelotok A dan kelotok B yang berada di sungai. Jarak
                                    pengunjung dengan kelotok A dan kelotok B berturut-turut 20 meter dan 13 meter. Posisi
                                    kelotok A, kelotok B, dan kaki menara terletak segaris. Jarak kelotok A dan kelotok B
                                    adalah . . . <br></p>
                                <img src="{{ asset('images/Penyelesaian.png') }}"
                                    class="img-fluid rounded-start"alt="..." style="max-width: 200px;"> <br>
                                <center><img src="{{ asset('images/soalmenara.png') }}"
                                        class="img-fluid rounded-start"alt="..." id="imgmenara"
                                        style="max-width: 500px;"></center>
                            </div>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-sm" style="text-align: left">
                                        Jarak menara dengan Kelotok A yaitu jarak AC : <br>
                                        \(AP^2 = AC^2 + CP^2 \) <br><br>
                                        <input type="text" class="styled-input-kecil" placeholder="...">
                                        \(^2\) =
                                        \(AC^2\) + <input type="text" class="styled-input-kecil" placeholder="...">\(^2\)
                                        <br><br>
                                        <input type="text" class="styled-input-kecil" placeholder="..."> =
                                        \(AC^2\) + <input type="text" class="styled-input-kecil" placeholder="...">
                                        <br><br>
                                        \(AC^2\) = <input type="text" class="styled-input-kecil" placeholder="..."> +
                                        <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                        \(AC\) = <input type="text" class="styled-input-kecil" placeholder="..."> =
                                        <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                    </div>
                                    <div class="col-sm" style="text-align: left">
                                        Jarak menara dengan Kelotok B yaitu jarak BC : <br>
                                        \(BP^2 = BC^2 + CP^2 \) <br><br>
                                        <input type="text" class="styled-input-kecil" placeholder="...">
                                        \(^2\) =
                                        \(BC^2\) + <input type="text" class="styled-input-kecil"
                                            placeholder="...">\(^2\) <br><br>
                                        <input type="text" class="styled-input-kecil" placeholder="..."> =
                                        \(BC^2\) + <input type="text" class="styled-input-kecil" placeholder="...">
                                        <br><br>
                                        \(BC^2\) = <input type="text" class="styled-input-kecil" placeholder="..."> +
                                        <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                        \(BC\) = <input type="text" class="styled-input-kecil" placeholder="..."> =
                                        <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Jarak Kelotok A dan Kelotok B adalah AB. Panjang AB yaitu: <br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> - <input
                                    type="text" class="styled-input-kecil" placeholder="..."> = <input type="text"
                                    class="styled-input-kecil" placeholder="..."> <br>
                                <input type="submit" value="Cek jawaban" class="cekjawaban">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi4-page3">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div id="latihan-tripel">
                                <p>2. Amang anang dan rombongan melaju menggunakan kelotok dari sungai martapura sejauh 8 km
                                    ke arah timur, kemudian berbelok kearah selatan menuju pulau kembang sejauh 15 km. <br>
                                </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}"
                                    class="img-fluid rounded-start"alt="..." style="max-width: 200px;"> <br>
                            </div>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-sm">
                                        <img src="{{ asset('images/Pulau Kembang.jpg') }}"
                                            class="img-fluid rounded-start"alt="..." id="imgmenara"
                                            style="max-width: 300px;">
                                    </div>
                                    <div class="col-sm">
                                        <img src="{{ asset('images/segitiga5.jpg') }}"
                                            class="img-fluid rounded-start"alt="..." id="imgmenara"
                                            style="max-width: 500px;">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Hitunglah jarak dari titik awal keberangkatan kelotok hingga sampai ke titik akhir : <br>
                                \(AC^2 = BC^2 + AB^2 \) <br><br>
                                \(AC^2\) = <input type="text" class="styled-input-kecil" placeholder="...">\(^2\) +
                                <input type="text" class="styled-input-kecil" placeholder="...">\(^2\) <br><br>
                                \(AC^2\) = <input type="text" class="styled-input-kecil" placeholder="..."> +
                                <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                \(AC\) = <input type="text" class="styled-input-kecil" placeholder="..."> =
                                <input type="text" class="styled-input-kecil" placeholder="..."><br><br>
                                <input type="submit" value="Cek jawaban" class="cekjawaban">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi4-page4">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div id="latihan-tripel">
                                <p>3. Udin pergi ke kebun untuk memetik kelapa. Dengan sebuah tangga udin menaiki pohon
                                    kelapa. Tangga dengan panjangnya 5 meter bersandar pada pohon, Jarak ujung bawah tangga
                                    terhadap pohon = 3 meter. Hitunglah tinggi pohon yang dicapai naiki udin dengan
                                    tangga.<br>
                                </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}"
                                    class="img-fluid rounded-start"alt="..." style="max-width: 200px;"> <br>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/Teorema (21).png') }}"
                                            class="img-fluid rounded-start"alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p>
                                                Berdasarkan gambar disamping, tinggi pohon dapat diukur dengan memanfaatkan Teorema Pythagpras : <br>
                                                Tinggi = <input type="text" class="styled-input-kecil" placeholder="...">\(^2\) +
                                                <input type="text" class="styled-input-kecil" placeholder="...">\(^2\) <br><br>
                                                Tinggi = <input type="text" class="styled-input-kecil" placeholder="..."> +
                                                <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                                Tinggi = <input type="text" class="styled-input-kecil" placeholder="..."> =
                                                <input type="text" class="styled-input-kecil" placeholder="..."><br><br>
                                                <input type="submit" value="Cek jawaban" class="cekjawaban">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <li class="page-item" id="materi4-page1-link"><a class="page-link" data-target="materi4-page1">1</a></li>
                        <li class="page-item" id="materi4-page2-link"><a class="page-link" data-target="materi4-page2">2</a></li>
                        <li class="page-item" id="materi4-page3-link"><a class="page-link" data-target="materi4-page3">3</a></li>
                        <li class="page-item" id="materi4-page4-link"><a class="page-link" data-target="materi4-page4">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    @endsection

    @section('js')
    @endsection
