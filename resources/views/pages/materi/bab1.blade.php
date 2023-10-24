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
                <li>Menganalisis beberapa informasi untuk membuktikan teorema Pythagoras</li>
                <li>Membuat pembuktian berupa skema atau prosedur terhadap rumus teorema Pythagoras</li>
                <li>Menentukan panjang sisi segitiga menggunakan teorema Pythagoras</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body" style="text-align: center">
                <a href="#" class="btn-petunjuk" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class=" fas fa-search" style="font-size: 15px; color:#2A5D66; margin:10px"> Petunjuk (Klik untuk
                        melihat petunjuk!)</i>
                </a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Petunjuk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="text-align: left">
                                <ol>
                                    <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                    <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk menjawab
                                        kembali bisa mengisi jawaban yang benar</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-page" id="materi1-page1">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
            
                                    <div class="card-body">
                                        <p class="card-text">Pernahkah kalian memperhatikan bagaimana bentuk atap rumah adat
                                            bumbungan tinggi banjar? Apakah bentuknya segitiga atau trapesium?</p>
                                        <input type="text" id="latihan_1" class="styled-input" placeholder="...">
                                    </div>
                                    <figure>
                                        <center> <img src="{{ asset('images/Rumah Adat.png') }}" class="img-fluid rounded-start"
                                            alt="..." style="width: 500px">
                                            <figcaption>Rumah Adat Banjar Bumbungan Tinggi <br>
                                            Sumber : www.helloindonesia.id</figcaption>
                                        </center>
                                    </figure>
                                        <input type="submit" id="cek_jawaban_1" value="Cek jawaban" class="cekjawaban" style="width: 150px" >
                                
                        </div>
                        <div class="kotak-cek d-none" id="penjelasan_1">
                            <figure>
                                <center> <img src="{{ asset('images/SegitigaAtap.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="width: 250px">
                                    <figcaption>Gambar Ilustrasi Atap</figcaption>
                                </center>
                            </figure>
                            <p>Bentuk atap rumah adat bumbungan tinggi banjar berbentuk segitiga. Pernahkah kalian terpikir
                                untuk mengetahui sisi miring atap rumah adat tersebut ? Bagaimana cara kita menghitungnya ?
                            </p>
                            <p>Untuk mengetahui sisi miring atau hipotenusa dari atap rumah tersebut, kita menghitungnya
                                menggunakan rumus Teorema Pythagoras. Mari belajar teorema pythagoras agar kita bisa
                                menerapkan rumus tersebut dalam kehidupan kita sehari-hari.</p>
                        </div>
                    </div>
                </div>

                {{-- halaman2 --}}
                <div class="card-page" id="materi1-page2">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/segitiga1.png') }}" class="img-fluid rounded-start"
                                        alt="..." style="max-height: 200px">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <p class="card-text">Perhatikan segitiga siku-siku ABC berikut pada gambar beserta
                                            bagian-bagiannya.
                                            Keterangan :
                                        </p>
                                        <ul>
                                            <li>Segitiga <em>ABC</em> adalah segitiga dengan siku-siku di <em>B</em> dan
                                                besar sudutnya adalah 90°.</li>
                                            <li>Sisi depan sudut siku-siku atau sisi <em>AC</em> adalah sisi terpanjang yang
                                                disebut sisi miring <em>(hipotenusa)</em>.</li>
                                            <li>Sisi-sisi lain yang membentuk sudut siku-siku (sisi AB dan sisi BC ) disebut
                                                sisi siku-siku.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kotak-teks">
                            <h5 style="color: #2A5D66; font-weight:bolder">Dalil Pythagoras</h5>
                            <p>Pada suatu segitiga siku-siku, luas persegi pada sisi miringnya sama dengan jumlah luas
                                persegi lain pada kedua sisi siku-sikunya, hal ini juga berarti jumlah dari kuadrat kedua
                                sisi siku-siku segitiga pada segitiga siku-siku sama dengan kuadrat panjang sisi miringnya
                                (hipotenusa).</p>
                        </div>
                        <br>
                        <div class="kotak-teks">
                            <h5 style="color: #2A5D66; font-weight:bolder">Teorema Pythagoras</h5>
                            <p>Pada ΔABC siku-siku dengan siku-siku di C, berlaku: </p>
                            <div class="container text-center">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                    <div class="col"><img src="{{ asset('images/segitiga2.png') }}"
                                            class="img-fluid rounded-start" alt="..." style="max-height: 200px"></div>
                                    <div class="col">
                                        <div class="rumus">
                                            <p><math xmlns="http://www.w3.org/1998/Math/MathML">
                                                    <mrow>
                                                        <msup>
                                                            <mi>c</mi>
                                                            <mn>2</mn>
                                                        </msup>
                                                        <mo>=</mo>
                                                        <msup>
                                                            <mi>a</mi>
                                                            <mn>2</mn>
                                                        </msup>
                                                        <mo>+</mo>
                                                        <msup>
                                                            <mi>b</mi>
                                                            <mn>2</mn>
                                                        </msup>
                                                    </mrow>
                                                </math></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-page" id="materi1-page3">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <img src="{{ asset('images/tahukah Kalian.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px">
                        </div>
                        <p>Seperti apakah Teorema Pythagoras?<br>Berikut adalah salah satu pembuktian untuk memeriksa
                            kebenaran Teorema Pythagoras. Perhatikan Pembuktian Teorema Pythagoras.</p>
                        <div class="kotak-teks">
                            <p> Tujuan : <br>
                                1. Menganalisis pembuktian kebenaran teorema Pythagoras. <br>
                            </p>
                            <p> Petunjuk : <br>
                                1. Geserlah slide bar yang disediakan sampai ke angka 1 <br>
                                2. Lihatlah perubahan apa yang terjadi, kemudian simpulkan !
                            </p>
                        </div>
                        <center><iframe id="geogebra" scrolling="no"
                                title="Pembuktian Teorema Pythagoras Metode Bongkar Pasang"
                                src="https://www.geogebra.org/material/iframe/id/cpadhkqq/width/1707/height/833/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/false/ctl/false"
                                width="800px" height="400px" style="border:0px;margin-top:10px;"></iframe></center>
                        <div class="card-body">
                            <input type="text" class="styled-input geo" placeholder="..."><br>
                            <input type="submit" value="Kirim" class="cekjawaban">
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi1-page4">
                    <div class="card-body materi" style="text-align: justify">
                        <div>
                            <p>Berdasarkan pembuktian tersebut kita dapat menyimpulkan bahwa untuk pembuktian teorema
                                pythagoras dintayakan sebagai berikut : <br>
                                Dari ketiga persegi tersebut terbentuk segitiga siku-siku, yang mempunyai sisi a, b dan c
                                sebagai sisi miringnya. Dapat kita lihat bahwa Luas C = luas A + luas B atau Sisi miring
                                kuadrat = Sisi alas kuadrat + Sisi tegak kuadrat
                                <br>diperoleh bahwa \(c^2 = a^2 + b^2\)
                            </p>
                            <p>Dengan demikian, luas persegi pada sisi hipotenusa adalah <input type="text"
                                    class="styled-input" placeholder="..."> dan jumlah luas persegi pada kedua sisi
                                tegaknya adalah <input type="text" class="styled-input" placeholder="..."> \(^2 +\)
                                <input type="text" class="styled-input" placeholder="..."> \(^2\)
                            </p>
                            <input type="submit" value="Cek jawaban" class="cekjawaban">
                            <h5 style="color: #2A5D66; font-weight:bolder; margin-top:10px;">Rumus Pythagoras Segitiga
                                Siku-Siku</h5>
                            <p>Rumus untuk pythagoras sisi tegak dan juga sisi yang mendatar pada ΔABC <br>
                            <ul>
                                <li>\(b^2 = \sqrt{c^2 - a^2} \) (sisi tegak)</li>
                                <li>\(a^2 = \sqrt{c^2 - b^2} \) (sisi mendatar atau alas)</li>
                            </ul>
                            </p>
                            <p>Rumus untuk pythagoras sisi miring (hipotenusa) pada ΔABC <br>
                            <ul>
                                <li>\(c^2 = a^2 + b^2\) (sisi miring)</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi1-page5">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                            <center><img src="{{ asset('images/Teorema (17).png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;"></center>
                            <div class="card-body">
                                <p class="card-text">Sebuah tangga disandarkan pada dinding setinggi 12 m. Tangga tersebut
                                    memiliki panjang 15 m. Berapakah jarak antara ujung bawah tangga dengan dinding
                                    tersebut?</p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Jarak dinding dengan ujung bawah tangga dapat dicari dengan menggunakan teorema
                                        pythagoras: <br>
                                        Diketahui : b = 12 m, c = 15 m <br>
                                        Ditanya : a (jarak dinding dengan tangga)? <br>
                                        Jawab : <br>
                                        \(a^2 = \sqrt{c^2 - b^2} \) <br>
                                        \(a^2 = \sqrt{15^2 - 12^2} \) <br>
                                        \(a^2 = \sqrt{255 - 144} \) <br>
                                        \(a^2 = \sqrt{81} \) <br>
                                        \(a^2 = 9 \) <br>
                                        Jadi jarak dinding dengan ujung bawah tangga tersebut adalah 9 meter.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi1-page6">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 2</h5>
                            <center><img src="{{ asset('images/segitiga3.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 300px;"></center>
                            <div class="card-body">
                                <p class="card-text">Sebuah segitiga siku-siku ABC dengan panjang sisi AB = 5cm dan panjang
                                    sisi BC=12 cm. Tentukan panjang sisi miring (Hipotenusa) dari segitiga siku-siku ABC
                                    tersebut?</p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Diketahui :AB = 5 cm, BC = 12 cm<br>
                                         Ditanya : Hipotenusa atau panjang AC ? <br>
                                        Jawab : <br>
                                        \(c^2 = a^2 + b^2 \) <br>
                                        \(AC^2 = AB^2 + BC^2 \) <br>
                                        \(AC^2 = 5^2 + 12^2 \) <br>
                                        \(AC^2 = 25 + 144 = 169 \) <br>
                                        \(AC^2 = \sqrt{169} \) <br>
                                        \(AC = 13 \) <br>
                                        Jadi, panjang hipotenusa segitiga siku-siku tersebut adalah 13 cm.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi1-page7">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 3</h5>
                            <p>Perhatikan gambar berikut !</p>
                            <center><img src="{{ asset('images/segitiga4.jpg') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 300px;"></center>
                            <div class="card-body">
                                <p class="card-text">Segitiga ABC adalah segitiga sama sisi. Jika AB = 4 m, maka berapakah
                                    panjang AP ?</p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Perhatikan bahwa AP merupakan tinggi dari segitiga ABP dengan hepotenusa AB = 4 m dan
                                        alas BP yang dihitung sebagai berikut.
                                        Karena segitiga ABC adalah segitiga sama sisi, maka BP = BC / 2 = 4 / 2 = 2 m.
                                        Gunakan rumus pythagoras untuk menghitung tinggi AP dari segitiga ABP.
                                        \(AB^2 = AP^2 + BP^2 \) <br>
                                        \(AP^2 = AB^2 + BP^2 \) <br>
                                        \(AP = \sqrt{16 - 4} = \sqrt{12} \) m <br>
                                        \(AP = 2\sqrt{3} \) m <br>
                                        Jadi, panjang hipotenusa segitiga siku-siku tersebut adalah 13 cm.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-page" id="materi1-page8">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div class="card-body" style="text-align: center">
                                <a href="#" class="btn-petunjuk" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">
                                    <i class=" fas fa-search" style="font-size: 15px; color:#2A5D66; margin:10px">
                                        Petunjuk Pengerjaan (Klik untuk melihat petunjuk!)</i>
                                </a>
                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                    aria-labelledby="exampleModal1Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModal1Label">Petunjuk</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: left">
                                                <ol>
                                                    <li>Tentukan nilai variabel pada panjang segitiga sebelah kiri kemudian
                                                        pasangkan pada nilai yang sesuai yang berada di samping kanan.</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                    <li>Jika jawaban salah, kotak akan berubah warna menjadi merah</li>
                                                </ol>
                                            </div>
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
                        
                        <li class="page-item" id="materi1-page1-link"><a class="page-link" data-target="materi1-page1">1</a></li>
                        <li class="page-item" id="materi1-page2-link"><a class="page-link" data-target="materi1-page2">2</a></li>
                        <li class="page-item" id="materi1-page3-link"><a class="page-link" data-target="materi1-page3">3</a></li>
                        <li class="page-item" id="materi1-page4-link"><a class="page-link" data-target="materi1-page4">4</a></li>
                        <li class="page-item" id="materi1-page5-link"><a class="page-link" data-target="materi1-page5">5</a></li>
                        <li class="page-item" id="materi1-page6-link"><a class="page-link" data-target="materi1-page6">6</a></li>
                        <li class="page-item" id="materi1-page7-link"><a class="page-link" data-target="materi1-page7">7</a></li>
                        <li class="page-item" id="materi1-page8-link"><a class="page-link" data-target="materi1-page8">8</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const latihan1 = document.getElementById("latihan_1");
    const checkJawaban1 = document.getElementById("cek_jawaban_1");
    const penjelasan1 = document.getElementById("penjelasan_1");

    checkJawaban1.addEventListener("click",function(){
        var jawaban = latihan1.value;
        const jawabanAsli = "segitiga"
        latihan1.classList.remove("border-success","border-danger")

        if(jawaban === jawabanAsli){
            latihan1.classList.add("border-success");
            penjelasan1.classList.remove("d-none");
            // penjelasan1.classList.add("d-block");
            Swal.fire(
            'Kerja Bagus!',
            'Jawaban anda Benar!',
            'success'
            )

        }else{
            latihan1.classList.add("border-danger");
            Swal.fire(
            'Salah!',
            'Jawaban anda belum tepat!',
            'error'
            )
        }
    })


</script>
@endsection
