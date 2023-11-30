@extends('admin.partials.main')
@section('content')

                <div class="container-fluid">
                    <h3 class="text-dark">Profile</h3>
                    <div class="row mb-3 d-flex justify-content-center">

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="font-weight-bold text-grocetaria m-0">Pengaturan Pengguna</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="name"><strong>Nama Pegawai</strong></label><input class="form-control" type="text" id="name" placeholder="Nama Lengkap" name="name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="telp"><strong>No Telepon</strong></label><input class="form-control" type="telp" id="telp" placeholder="08" name="telp"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email</strong></label><input class="form-control" type="text" id="email" placeholder="Email" name="email"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="jenis_kelamin"><strong>Jenis Kelamin</strong></label><input class="form-control" type="text" id="jenis_kelamin" placeholder="Perempuan" name="jenis_kelamin"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" placeholder="Username" name="username"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="password"><strong>Password</strong></label><input class="form-control" type="password" id="password" placeholder="Password" name="password"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-gro btn-sm" type="submit">Simpan Perubahan</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection