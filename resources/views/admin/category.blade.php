@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="content-wrapper">
        <section class="content-header" style="background-color: gainsboro">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 style="color: black">Kategoriler</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">

            <div class="card" style="background-color: gray;">
                <div class="card-header" >
                    <a href="{{route('admin_category_add')}}"  type="button" class="btn btn-block btn-info" style="width: 200px; background-color: black; color: red,">Kategori Ekle</a>
                </div>
                <div class="card" style="background-color: gray; color: white;">

                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Parent</th>
                                <th>Title(s)</th>
                                <th>Durum</th>
                                <th>Güncelle</th>
                                <th>Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $datalist  as $rs)
                                <tr>
                                    <td> {{ $rs->id}}</td>
                                    <td>
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        <!--tüm satırı ve mevcut adını getparentstree ye gönder-->
                                    </td>
                                    <td>{{ $rs->title}}</td>
                                    <td>{{ $rs->status}}</td>
                                    <td><a href="{{route('admin_category_edit', ['id' => $rs->id])}}" ><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                    <td><a href="{{route('admin_category_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" ><img src="{{asset('assets/admin/images')}}/delete.jpg" height="25"></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('footer')
    <script src="{{ asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
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

