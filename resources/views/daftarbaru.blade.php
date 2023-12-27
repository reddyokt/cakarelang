<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                @include('flashmessage')
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="{{asset('admin/img/logo_CESS.svg')}}" style="width: 20%">
                                <h3 class="h4 text-dark mb-4">Form Pendaftaran Anak Elang</h3>
                            </div>
                            <form class="user" method="POST" id="daftarbaru" action="/daftarbaru"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nama_anak"
                                            name="nama_anak" placeholder="Nama Anak">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nama_wali"
                                            name="nama_wali" placeholder="Nama Wali">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="telp_wali"
                                            name="telp_wali" placeholder="Nomor Handphone Wali">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="sekolah"
                                        name="sekolah" placeholder="Sekolah">
                                </div>
                                <div class="form-group">
                                    <label for="alamat" style="font-size:12px; margin-left:15px;">Alamat Rumah</label>
                                    <textarea class="form-control form-control-user" rows="2" id="alamat" placeholder="Alamat Rumah"
                                        name="alamat">  </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" style="font-size:12px; margin-left:15px;">Tanggal Lahir
                                        Anak</label>
                                    <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                                        name="tanggal_lahir" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="upload_akta"
                                            accept="image/png, image/jpeg, application/pdf" name="upload_akta">
                                        <label class="custom-file-label" for="upload_akta"
                                            style="font-size:12px;">Upload Akta Lahir</label>
                                    </div>
                                </div>
                                <input class="btn btn-primary col-md-12" type="submit" value="Daftar CESS">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
