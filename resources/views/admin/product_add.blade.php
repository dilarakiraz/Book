@extends('layouts.admin')

@section('title', 'Add Product')

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
                        <h3>Ürün Ekle</h3>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card">
                <div class="card-body">

                    <!-- form start -->
                    <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Category</label>

                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    @foreach ( $datalist  as $rs)
                                        <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        <@endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label >Adı</label>
                                <input type="text" id="title" name="title" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Anahtar Kelime</label>
                                <input type="text" name="keywords" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Tanım</label>
                                <input type="text" name="description" class="form-control"   >
                            </div>

                            <div class="form-group">
                                <label >Fiyat</label>
                                <input type="number" name="price" value="0" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Miktar</label>
                                <input type="number" name="quantity" class="form-control"  value="1" >
                            </div>
                            <div class="form-group">
                                <label >Minimum Miktar</label>
                                <input type="number" name="minquantity" value="5" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Vergi</label>
                                <input type="number" name="tax" value="15" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Detay</label>
                                <textarea id="summernote" name="detail"></textarea>  <!--summernote form içindeki kullanımı-->
                                <script>
                                    $(document).ready(function() {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label  >Ağırlık</label>
                                <input type="text" name="slug" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label  >Görsel</label>
                                <input type="file" name="image" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label>Durum</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </section>
    </div>
@endsection

