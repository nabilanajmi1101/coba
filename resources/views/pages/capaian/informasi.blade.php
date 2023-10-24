@extends('template.capaian')
@section('title','Informasi')
@section('css')
@endsection

@section('main-content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="card" id="infoC">
                <div class="card-body" >
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Informasi Aplikasi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Daftar Pustaka</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Petunjuk Aplikasi</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card infoApp">
                                <div class="card-body">
                                    Informasi Aplikasi
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card infoApp">
                                <div class="card-body">
                                    Daftar Pustaka
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="card infoApp">
                                <div class="card-body">
                                    Petunjuk Aplikasi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- end page title -->
    </div>
</div>
<style>

    #infoC{
        background-color: #fff;
        align-items: center;
    }

    .nav-tabs .nav-link{
        background:0 0;
        border:1px solid transparent;
        border-radius:.25rem;
        background-color: #2A5D66;
        color: #fff;
        width: 200px;
        font-size: 20px;
        /* padding:10px 100px 10px 100px; */
        margin-left: 50px;
        margin-right: 50px;
    }

    #home-tab:hover,
    #profile-tab:hover,
    #contact-tab:hover{
        background-color: #fff;
        color: #2A5D66;
        border: 1px solid #2A5D66;
    }

    #home,
    #profile,
    #contact{
        margin-top: 30px;
        font-size: 18px;
    }

    .infoApp{
        border: 3px dashed #2A5D66;
        border-radius:0px!important;
    }

</style>
@endsection

@section('js')
@endsection
