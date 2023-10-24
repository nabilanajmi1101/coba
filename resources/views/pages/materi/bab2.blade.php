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
                <li>Menghitung hipotenusa dan sisi segitiga siku-siku lainnya dengan teorema Pythagoras</li>
                <li>Menemukan tripel Pythagoras</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body" style="text-align: center">
                <br>
                <div class="card-page" id="materi2-page1">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <p>Sebelum membahas lebih detail terkait tripel Pythagoras, kita perlu mengingat kembali terkait
                                teorema Pythagoras. </p>
                            <h5 style="color: #2A5D66; font-weight:bolder">Kebalikan Teorema Pythagoras</h5>
                            <div class="kotak-teks">
                                <p><strong><em>Teorema Pythagoras</em></strong> menyatakan : <br>
                                    Pada ΔABC jika ∟C siku-siku dan AB = c, BC = a, CA = b
                                </p>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/segitiga2.png') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="col">
                                                <div class="rumus">
                                                    \(AB^2 = BC^2 + AC^2 \) <br>
                                                    \(c^2 = a^2 + b^2 \)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Tiga bilangan a, b, c dengan a < b < c dikatakan tripel pythagoras jika memenuhi hubungan
                                    persamaan \(c^2=a^2 + b^2 \) <br>
                                    Tripel Pythagoras merupakan tiga bilangan yang tepat untuk menyatakan panjang sisi-sisi
                                    suatu segitiga siku-siku. Jadi, ketiga bilangan dalam tripel Pythagoras menyatakan sisi
                                    miring, sisi depan, dan sisi alas pada segitiga siku-siku. 𝑐 > 𝑏 > 𝑎 dengan 𝑎, 𝑏,
                                    dan 𝑐 adalah bilangan asli dan berlaku \(b^2 + c^2 = a^2\) maka𝑎, 𝑏, dan 𝑐 merupakan
                                    tripel Pythagoras dengan 𝑎 merupakan sisi terpanjang.
                            </p>
                            <p>
                                Untuk ΔACB dengan panjang sisi - sisinya a,b,c :
                            <ul>
                                <li>Jika \(c^2 = a^2 + b^2 \) maka ∆ACB merupakan segitiga siku-siku.</li>
                                <li>Jika \(c^2 < a^2 + b^2 \) maka ∆ACB merupakan segitiga lancip.</li>
                                <li>Jika \(c^2 > a^2 + b^2 \) maka ∆ACB merupakan segitiga tumpul.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi2-page2">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                            <div class="card-body">
                                <p class="card-text">Apakah 15, 20, 25 adalah Tripel Pythagoras? </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Sisi terpanjang = 25 <br>
                                        \(15^2 + 20^2 = 25^2 \) <br>
                                        \(225 + 400 = 625 \) <br>
                                        \(625 = 625 \) <br>
                                        Jadi 15, 20, 25 adalah Tripel Pythagoras
                                    </p>
                                </div>
                            </div>
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 2</h5>
                            <div class="card-body">
                                <p class="card-text">Apakah 7, 12, 13 adalah Tripel Pythagoras? </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Sisi terpanjang = 13 <br>
                                        \(7^2 + 12^2 = 13^2 \) <br>
                                        \(49 + 144 = 169 \) <br>
                                        \(193 \ne 169 \) <br>
                                        Jadi 7, 12, 13 adalah bukan Tripel Pythagoras
                                    </p>
                                </div>
                            </div>
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 3</h5>
                            <div class="card-body">
                                <p class="card-text">Apakah sisi segitiga 8, 12, 17 membentuk segitiga siku-siku, lancip,
                                    atau tumpul? </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Sisi terpanjang = 17 <br>
                                        \(17^2 = 8^2 + 12^2 \) <br>
                                        \(289 = 64 + 144 \) <br>
                                        \(289 > 208 \) <br>
                                        Jadi 8, 12, 17 merupakan segitiga tumpul
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-page" id="materi2-page3">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start" alt="..."
                                style="max-width: 200px;">
                            <div class="card-body" style="text-align: center">
                                <a href="#" class="btn-petunjuk" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">
                                    <i class=" fas fa-search" style="font-size: 15px; color:#2A5D66; margin:10px">
                                        Petunjuk Pengerjaan (Klik untuk melihat petunjuk!)
                                    </i>
                                </a>
                                <div class="modal fade" id="exampleModal2" tabindex="-1"
                                    aria-labelledby="exampleModal2Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModal2Label">Petunjuk pengerjaan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: left">
                                                Untuk soal a-c
                                                <ol>
                                                    <li>Pilihlah salah satu jawaban dengan jawaban kamu</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka penjelasan akan ditampilkan</li>
                                                    <li>Jika jawaban salah, maka akan ada pemberitahuan.</li>
                                                    <li>Silahkan ulangi kembali sampai jawaban benar</li>
                                                </ol>
                                                Untuk soal d-e
                                                <ol>
                                                    <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                    <li>Jika jawaban salah, maka akan ada pemberitahuan.</li>
                                                    <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk menjawab kembali bisa mengisi jawaban yang benar</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="latihan-tripel">
                                <p>
                                    Periksalah apakah tiga bilangan di bawah ini merupakan Tripel Pythagoras? <br>
                                    a. 12, 16, 20
                                    <label style="padding:10px;">
                                        <input type="radio" name="pilihan1" value="ya"> Ya
                                        <input type="radio" name="pilihan1" value="tidak"> Tidak
                                    </label>
                                    <input type="submit" value="Cek jawaban" class="cekjawaban"><br>
                                    <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                        alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>20 merupakan bilangan terbesar <br>
                                        \(12^2 + 16^2 = 20^2 \) <br>
                                        \(144 + 256 = 400 \) <br>
                                        \(400 = 400 \) (terpenuhi)<br>
                                        Terlihat bahwa nilai dari \(12^2 + 16^2 \) sama dengan nilai dari \( 20^2 \). Jadi
                                        bilangan 12, 16, 20 merupakan Tripel Pythagoras
                                    </p>
                                </div>
                                <br>
                                b. 9, 15, 18
                                <label style="padding:10px;">
                                    <input type="radio" name="pilihan2" value="ya"> Ya
                                    <input type="radio" name="pilihan2" value="tidak"> Tidak
                                </label>
                                <input type="submit" value="Cek jawaban" class="cekjawaban"> <br>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>18 merupakan bilangan terbesar <br>
                                        \(9^2 + 15^2 = 18^2 \) <br>
                                        \(81 + 225 = 325 \) <br>
                                        \(306 \ne 325 \) (tidak terpenuhi)<br>
                                        Terlihat bahwa nilai dari \(9^2 + 15^2 \) tidak sama dengan nilai dari \( 18^2 \).
                                        Jadi bilangan 9, 15, 18 bukan Tripel Pythagoras
                                    </p>
                                </div>
                                <br>
                                c. Manakah dari pasangan angka berikut yang membentuk tripel Pythagoras? <br>
                                <label>
                                    <input type="radio" name="pilihan3" value="A"> A. (5, 12, 13)
                                    <input type="radio" name="pilihan3" value="B"> B. (6, 8, 9)
                                    <input type="radio" name="pilihan3" value="C"> C. (7, 10, 12)
                                </label>
                                <input type="submit" value="Cek jawaban" class="cekjawaban"><br>
                                <div class="kotak-penyelesaian">
                                    <p>A. (5, 12, 13) <br>
                                        Tripel Pythagoras terdiri dari tiga bilangan bulat positif (a, b, c) yang memenuhi
                                        persamaan Pythagoras, yaitu \(a^2 + b^2 = c^2 \). Dalam pilihan yang diberikan, kita
                                        perlu memeriksa setiap pasangan angka untuk melihat apakah mereka memenuhi persamaan
                                        tersebut. <br>

                                        (5, 12, 13) <br>
                                        13 merupakan bilangan terbesar <br>
                                        \(5^2 + 12^2 = 13^2 \) <br>
                                        \(25 + 144 = 169 \) <br>
                                        \(169 = 169 \) (terpenuhi)<br>
                                        Terlihat bahwa nilai dari \(5^2 + 12^2 \) sama dengan nilai dari \( 13^2 \). Jadi
                                        bilangan 5, 12, 13 merupakan Tripel Pythagoras
                                    </p>
                                </div>
                                </p>
                                d. Apakah sisi segitiga 10, 24, 26 membentuk segitiga siku-siku, lancip, atau tumpul! <br>
                                Sisi terpanjang <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> \(^2\) = <input type="text" class="styled-input-kecil" placeholder="..."> \(^2\) + <input type="text" class="styled-input-kecil" placeholder="..."> \(^2\) <br><br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> = <input type="text" class="styled-input-kecil" placeholder="..."> + <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> = <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                Jadi segitiga <input type="text" class="styled-input" placeholder="..."> (Siku-siku/Lancip/Tumpul) <br>
                                <input type="submit" value="Cek jawaban" class="cekjawaban"> <br><br>

                                e. Apakah sisi segitiga 11, 13, 15 membentuk segitiga siku-siku, lancip, atau tumpul! <br>
                                Sisi terpanjang <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> \(^2\) = <input type="text" class="styled-input-kecil" placeholder="..."> \(^2\) + <input type="text" class="styled-input-kecil" placeholder="..."> \(^2\) <br><br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> = <input type="text" class="styled-input-kecil" placeholder="..."> + <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil" placeholder="..."> = <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                maka <input type="text" class="styled-input-kecil" placeholder="..."> < <input type="text" class="styled-input-kecil" placeholder="..."> <br><br>
                                Jadi segitiga <input type="text" class="styled-input" placeholder="..."> (Siku-siku/Lancip/Tumpul) <br>
                                <input type="submit" value="Cek jawaban" class="cekjawaban">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        
                        <li class="page-item" id="materi2-page1-link"><a class="page-link" data-target="materi2-page1">1</a></li>
                        <li class="page-item" id="materi2-page2-link"><a class="page-link" data-target="materi2-page2">2</a></li>
                        <li class="page-item" id="materi2-page3-link"><a class="page-link" data-target="materi2-page3">3</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
