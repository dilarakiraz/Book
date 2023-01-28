@extends('layouts.home')

@section('title', $data->title)
@section('description'){{ $data->description }} @endsection
@section('keywords',$data->keywords)

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</li>
                <li class="active">{{$data->title}}</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="product product-details clearfix">
                    <div class="col-md-6">
                        <div id="product-main-view1">
                            <div class="product-view">
                                <img src="{{ Storage::url($data->image)}}" style="height: 250px"  alt="">
                            </div>
                            @foreach($datalist as $rs)
                                <div class="product-view">
                                    <img src="{{ Storage::url($rs->image)}}" style="height: 50px" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-body">
                            <div style="display: flex;flex-direction: column;align-items: center;border: 1px solid black;border-radius: 12px;background: black;">
                            <h2 class="product-name"style="color: white;">{{$data->title}}</h2>
                            <h3 class="product-price" style="color: white">Tutar: <h3 style="color:red;">{{$data->price }}₺</h3></h3>
                            </div>
                            <p>{{$data->descripton}}</p>
                            <div class="product-options">
                            </div>

                            <div class="product-btns">
                                <form action="{{route('user_shopcart_add',['id' => $data->id])}}" method="post" style="display: flex;justify-content: space-evenly;align-content: flex-start;position: relative;">
                                    @csrf
                                    <div class="qty-input">
                                        <span class="text-uppercase"style="position: absolute; left: 0px; top: 8%;font-weight: bold;font-size: 2em;">Adet: </span>
                                        <input class="input" name="quantity" type="number" value="1" max="{{$data->quantity}}" style="text-align: center; border: 1px solid black;border-radius: 12px;background: black;color: red;">
                                    </div>
                                    <button type="submit"  class="primary-btn add-to-cart" ><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-tab">
                            <ul class="tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Tanım</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active">
                                    <p>
                                        {!! $data->detail !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
