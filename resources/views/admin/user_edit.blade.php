@extends('layouts.admin')

@section('title', 'Edit User')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Kullanıcı Düzenle</h3>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card arkaplan">

                <div class="card-body">
                    <form  class="arkaplan2" role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label >İsim</label>
                                <input type="text" id="name" name="name"  value="{{$data->name}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" name="email" value="{{$data->email}}" class="form-control"   >
                            </div>

                            <div class="form-group">
                                <label >Adres</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control"   >
                            </div>
                        </div>
                        <div class="card-footer arkaplan3">
                            <button type="submit" class="btn btn-primary arkaplan4">Güncelle</button>
                        </div>
                    </form>
                </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
