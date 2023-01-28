@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Kategori Düzenleme</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card arkaplan">
                <div class="card-body">
                    <form class="arkaplan2" role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Parent</label>
                                <select class="form-control select2" name="parent_id" style="width: 100%;">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"  @if ($rs->id == $data->parent_id)  selected="selected"  @endif >
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Adı</label>
                                <input type="text" id="title" name="title"  value="{{$data->title}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Anahtar Kelime</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Tanım</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label  >Ağırlık</label>
                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label>Durum</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}} </option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer arkaplan3" style="display: flex; justify-content: center">
                            <button type="submit" class="btn btn-primary arkaplan4">Kategori Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection

