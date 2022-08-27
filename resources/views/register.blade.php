<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tukang Malang</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
                            </div>
                            <form class="user" action="/register" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" name="name" placeholder="Nama Lengkap">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" name="email" placeholder="Alamat Email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Kata Sandi">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Konfirmasi kata sandi">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Daftar Akun
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="forgot-password">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login">Sudah punya akun? Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>