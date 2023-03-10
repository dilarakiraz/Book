@extends('layouts.admin')

@section('title', 'Product List')

@section('content')
    <div class="content-wrapper">
        <section class="content-header" style="background-color: gainsboro">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" >
                        <h3 style="color: black">Ürünler</h3>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header" style="background-color: gray">
                    <a href="{{route('admin_product_add')}}"  type="button" class="btn btn-block btn-info" style="width: 200px; background-color: black; color: white;">Ürün Ekle</a>
                </div>
                <div class="card" style="background-color: grey ; color: white;">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>Adı</th>
                                <th>Miktar</th>
                                <th>Fiyat</th>
                                <th>Görsel</th>
                                <th>Görsel Ekle</th>
                                <th>Durum</th>
                                <th style="width: 5px" colspan="2"> Düzenle\Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $datalist  as $rs)
                                <tr>
                                    <td> {{ $rs->id}}</td>
                                    <td>
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                    </td>
                                    <td>{{ $rs->title}}</td>
                                    <td>{{ $rs->quantity}}</td>
                                    <td>{{ $rs->price}}</td>
                                    <td>
                                        @if( $rs->image)
                                            <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_add',['product_id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/imagegallery.png " height="25"></a></td>
                                    <td>{{ $rs->status}}</td>
                                    <td><a href="{{route('admin_product_edit', ['id' => $rs->id])}}" ><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                    <td><a href="{{route('admin_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" ><img src="{{asset('assets/admin/images')}}/delete.jpg" height="25"></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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

