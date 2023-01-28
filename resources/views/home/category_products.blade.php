@extends('layouts.home')

@section('title', $data->title ." Products List")
@section('description'){{ $data->description }} @endsection
@section('keywords',$data->keywords)

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Ana Sayfa</a></li>

                <li class="active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }} </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <!-- row -->
        <div class="row">
            <div id="aside" class="col-md-3">

            </div>

            <!-- MAIN -->
            <div id="main" class="col-md-9">
                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                    <div class="row">

                        @foreach($datalist as $rs)
                            <!-- Product Single -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 275px" alt="">
                                    </div>

                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price}}₺ </h3>
                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                    </div>

                                    <div class="product-btns">
                                        <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                            @csrf
                                            <input name="quantity" type="hidden" value="1">
                                            <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /section -->
@endsection

