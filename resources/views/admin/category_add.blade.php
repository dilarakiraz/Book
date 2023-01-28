@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Kategori Ekle</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-body" style="background-color: black; color: red;">
                    <form role="form" action="{{route('admin_category_create')}}" method="post" style="display: flex;flex-direction: column;">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Parent Category</label>

                                <select class="form-control select2" name="parent_id" style="width: 100%;">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach ( $datalist  as $rs)
                                        <option value="{{ $rs->id }}"  > {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
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
                                <label  >Ağırlık</label>
                                <input type="text" name="slug" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label>Durum</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer" style="display: flex; justify-content: center;">
                            <button type="submit" class="btn btn-primary kezban" style="background-color: white; color: black">Kategori Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

