@extends('template.login')
@section('title','register')
@section('css')
@endsection

@section('main-content')
<body class="auth-body-bg bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="index.html" class="auth-logo">
                                <img src="{{ asset("images/logologin.png")}}" height="30" class="logo-dark mx-auto" alt="">
                                <img src="{{ asset("images/logologin.png")}}" height="30" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-30"><b style="color:#2A5D66">Register</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="{{route("auth.register")}}" method="POST">
                            @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Nama" name="nama">
                                </div>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="No Induk" name="noinduk">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="email" required="" placeholder="Email" name="email">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <select class="form-select" aria-label="Default select example" name="kelas">
                                        <option selected disabled>Kelas</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                      </select>
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Username" name="username">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Daftar</button>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="/login" class="text-muted">Sudah punya akun?</a>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->
@endsection

@section('js')
@endsection
