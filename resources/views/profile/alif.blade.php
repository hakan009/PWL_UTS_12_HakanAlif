@extends('layouts.app')
@section('title', 'Hakan Alif Pramudya')
@section('sub-title', 'Hakan Alif Pramudya')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid " src="{{asset('image/fotoHakan.jpg')  }}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Hakan Alif Pramudya</h3>

                        <p class="text-muted text-center">Hakan Alif Pramudya</p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tentang Saya</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                        <p class="text-muted">
                            SMAN 13 SURABAYA
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                        <p class="text-muted">Kebraon, Surabaya</p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">


                                <h1>Hobi</h1>

                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <img class="img-fluid" src="https://picsum.photos/200/300" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <img class="img-fluid mb-3" src="https://picsum.photos/200/300"
                                                    alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                                
                                            </div>
                                      
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col -->
                                </div>



                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection
