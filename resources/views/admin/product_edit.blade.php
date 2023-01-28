@extends('layouts.admin')

@section('title', 'Edit Product')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->

    <!--ürün açıklaması gibi uzun metin isteyen şeylerde kullanabilmek için summernote adlı zengin metin içeriğini uygulamaya entegre ettim-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Ürün Düzenle</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card arkaplan">
                <div class="card-body">
                    <form  class="arkaplan1" role="form" action="{{route('admin_product_update',['id' =>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    @foreach ( $datalist  as $rs)
                                        <option value="{{$rs->id}}"  @if ($rs->id == $data->parent_id)  selected="selected"  @endif >
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                        <@endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Adı</label>
                                <input type="text" id="title" name="title" value="{{$data -> title}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Anahtar Kelime</label>
                                <input type="text" name="keywords" value="{{$data -> keywords}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Tanım</label>
                                <input type="text" name="description" value="{{$data -> description}}" class="form-control"   >
                            </div>

                            <div class="form-group">
                                <label >Fiyat</label>
                                <input type="number" name="price" value="{{$data->price}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Miktar</label>
                                <input type="number" name="quantity"   class="form-control"  value="{{$data->quantity}}" >
                            </div>
                            <div class="form-group">
                                <label >Minimum Miktar</label>
                                <input type="number" name="minquantity" value="{{$data->minquantity}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Vergi</label>
                                <input type="number" name="tax" value="{{$data ->tax}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Detay</label>
                                <textarea id="detail" name="detail">{{$data ->detail}}</textarea>  <!--summernote form içindeki kullanımı-->
                                <script>
                                    $(document).ready(function() {
                                        $('#detail').summernote();
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label  >Ağırlık</label>
                                <input type="text" name="slug" value="{{$data -> slug}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label  >Görsel</label>
                                <input type="file" name="image" class="form-control">

                                @if($data ->image)
                                    <img src="{{ Storage ::url($data->image)}}" height="150px" alt="">
                                @endif
                            </div>


                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data ->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer arkaplan3">
                            <button type="submit" class="btn btn-primary arkaplan4">Güncelle</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

