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
                <li>Menentukan panjang sisi segitiga menggunakan teorema Pythagoras </li>
                <li>Membandingkan sisi pada segitiga siku-siku istimewa </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-page" id="materi3-page1">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66">Segitiga Istimewa dengan sudut 45˚, 45˚, dan 90˚</h5>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/segitiga6.jpg') }}"
                                    class="img-fluid rounded-start"alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    Pada segitiga siku-siku, perbandingqn antara sisi di hadapan sudut 45°, sisi di hadapan
                                    sudut 45°, dan panjang sisi miring adalah 1 : 1 : \(\sqrt{2} \) <br>
                                    Diperoleh perbandingan sisi – sisinya adalah alas : tinggi : miring = \(a : a :\sqrt{2}
                                    \)
                                </div>
                            </div>
                        </div>
                        <p>Sehingga, pada segitiga istimewa dengan sudut 45˚, 90˚, dan 45˚ memiliki panjang sisi miring
                            \(\sqrt{2}\) kali panjang dari sisi yang lain.</p>
                        <center><img src="{{ asset('images/segitiga7.jpg') }}" class="img-fluid rounded-start"alt="..."
                                style="max-width: 300px;"></center>

                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{ asset('images/segitiga8.jpg') }}"
                                    class="img-fluid rounded-start"alt="...">
                            </div>
                            <div class="col-md-9 ">
                                <div class="card-body">
                                    <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                        alt="..." style="max-width: 200px;">
                                    <p>Diketahui : AC = 20cm <br>
                                        Ditanya : Panjang AB ? <br>
                                        Jawab : <br>
                                        \(AB = \frac{1}{2} . a\sqrt{2} \) <br>
                                        \(AB = \frac{1}{2} . 20\sqrt{2} \) <br>
                                        \(AB = 10\sqrt{2} \) <br>
                                        Jadi Panjang AB adalah \(10\sqrt{2} \)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi3-page2">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66">Segitiga Istimewa dengan sudut 30˚, 60˚, dan 90˚</h5>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/segitiga9.jpg') }}"
                                    class="img-fluid rounded-start"alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    Pada segitiga siku-siku, perbandingsn antara sisi di hadapan sudut 30°, sisi di hadapan
                                    60°, dan panjang sisi miring adalah 1 : \(\sqrt{3} \) : 2 <br>
                                    Diperoleh perbandingan sisi – sisinya adalah alas : tinggi : miring = 1 : \(\sqrt{3} \)
                                    : 2
                                </div>
                            </div>
                        </div>
                        <p>Sehingga pada segitiga istimewa dengan sudut 30˚, 60˚, dan 90 panjang sisi miring adalah 2 kali
                            sisi
                            terpendek dan panjang sisi lain adalah \(\sqrt{3} \) kali sisi terpendek.</p>
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                        Diketahui ΔPQR Siku-siku di P dengan ∟PQR = 30° dan panjang PQ = 12 cm. Tentukan panjang PR dan QR!
                        <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start" alt="..."
                            style="max-width: 200px;">
                        <center><img src="{{ asset('images/segitiga11.png') }}" class="img-fluid rounded-start"
                                id="segitiga11" alt="..." style="max-width: 400px;"></center>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm">
                                    Panjang PR :
                                    \(\frac{PR}{1} = \frac{12}{\sqrt{3}}\) <br>
                                    \(PR = \frac{12}{\sqrt{3}}\) x \(\frac{\sqrt{3}}{\sqrt{3}}\) =
                                    \(\frac{12\sqrt{3}}{\sqrt{3}}\) = \(4\sqrt{3}\) <br>
                                    Jadi panjang PR pada ΔPQR adalah \(4\sqrt{3}\) cm.
                                </div>
                                <div class="col-sm">
                                    Panjang QR :
                                    \(\frac{QR}{2} = \frac{12}{\sqrt{3}}\) <br>
                                    \(QR = \frac{2 \times 12}{\sqrt{3}}\) = \(\frac{24}{\sqrt{3}}\) x
                                    \(\frac{\sqrt{3}}{\sqrt{3}}\) = \(\frac{24\sqrt{3}}{\sqrt{3}}\) = \(8\sqrt{3}\) <br>
                                    Jadi panjang QR pada ΔPQR adalah \(8\sqrt{3}\) cm.
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 2</h5>
                        <p>Sebuah eskalator menghubungkan lantai 1 dan lantai 2 sebuah gedung. Jarak lantai 1 dan lantai 2
                            adalah 4 m. Jika kemiringan eskalator tersebut 30°, berapakah panjang eskalator tersebut</p>
                        <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                            alt="..."style="max-width: 200px;">
                        <center><img src="{{ asset('images/segitiga12.png') }}" class="img-fluid rounded-start"
                                id="segitiga12" alt="..." style="max-width: 400px;"></center>
                        <p>Dinyatakan panjang eskalator atau sisi miring \((x) \) <br>
                            \(\frac{x}{2} = \frac{4}{1}\) <br>
                            \(x = \frac{2 \times 4}{1} = 8\) <br>
                            Jadi sisi panjang eskalator pada bangunan tersebut adalah 8 m.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi3-page3">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start" alt="..."
                            style="max-width: 200px;">
                        <div class="card-body" style="text-align: center">
                            <a href="#" class="btn-petunjuk" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class=" fas fa-search" style="font-size: 15px; color:#2A5D66; margin:10px">
                                    Petunjuk Pengerjaan (Klik untuk melihat petunjuk!)</i>
                            </a>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModal3Label">Petunjuk</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="text-align: left">
                                            <ol>
                                                <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
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
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/segitiga13.jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">Perhatikan segitiga berikut! <br>
                                            Pada ΔABC , ∟B = 60° dan ∟A = 300. Panjang BC = 12 cm, hitunglah panjang AB dan
                                            AC <br>
                                            Gunakan perbandingan pada segitiga istimewa.
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang AC : <br>
                                                        \(\frac{AC}{BC} = \frac{\sqrt{3}}{1}\) <br>
                                                        \(\frac{AC}{12}\) = \(\frac{\sqrt{3}}{1}\) <br>
                                                        \(AC = \frac{12\sqrt{3}}{1} =\)
                                                        <input type="text"class="styled-input-kecil" placeholder="..."> <br>
                                                    </div>
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang AB : <br>
                                                        \(\frac{AB}{BC} = \frac{2}{1}\) <br>
                                                        \(\frac{AB}{12}\) = \(\frac{2}{1}\) <br>
                                                        \(AB = \frac{12\times2}{1} =\)
                                                        <input type="text"class="styled-input-kecil" placeholder="..."> <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/segitiga14.jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Gambar di samping menunjukkan ∆PQR dengan siku-siku di P dan QR = 8 cm dan ∠Q = 60°. Tentukan panjang PQ dan PR <br>
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang PQ : <br>
                                                        \(\frac{QR}{PQ} = \frac{2}{1}\) <br>
                                                        \(\frac{8}{PQ}\) = \(\frac{2}{1}\) <br>
                                                        \(PQ = \frac{8\times 1}{2} = \frac{8}{2} =\)
                                                        <input type="text"class="styled-input-kecil" placeholder="..."> <br>
                                                    </div>
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang PR : <br>
                                                        \(\frac{PR}{QR} = \frac{\sqrt{3}}{2}\) <br>
                                                        \(\frac{PR}{8} = \frac{\sqrt{3}}{2}\) <br>
                                                        \(AB = \frac{8\times \sqrt{3}}{2} =\)
                                                        <input type="text"class="styled-input-kecil" placeholder="..."> <br>
                                                    </div>
                                                </div>
                                            </div>
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
                    <li class="page-item" id="materi3-page1-link"><a class="page-link" data-target="materi3-page1">1</a></li>
                    <li class="page-item" id="materi3-page2-link"><a class="page-link" data-target="materi3-page2">2</a></li>
                    <li class="page-item" id="materi3-page3-link"><a class="page-link" data-target="materi3-page3">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('js')
@endsection
