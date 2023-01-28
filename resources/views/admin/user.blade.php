@extends('layouts.admin')

@section('title', 'Users List')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: gainsboro;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Kullanıcılar</h3>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                    <div class="card-body" style="background-color: gray">
                        <table id="example1" class="table table-bordered table-striped" style="color: white;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>İsim</th>
                                <th>Email</th>
                                <th>Adres</th>
                                <th>Rol</th>
                                <th style="width: 5px" colspan="2"> Düzenle</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id}}</td>
                                    <td>{{ $rs->name}}</td>
                                    <td>{{ $rs->email}}</td>
                                    <td>{{ $rs->address}}</td>
                                    <td> @foreach($rs->roles as $row) <!--userların rollerini getirir.-->
                                            {{ $row->name }} <!--rollerin isimleri-->
                                        @endforeach
                                    </td>
                                    <td><a href="{{route('admin_user_edit', ['id' => $rs->id])}}" >  <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
