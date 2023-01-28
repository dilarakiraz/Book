@extends('layouts.home')

@section('title', 'KitapKurdu')

@section('content')

    @include('home._slider')

    <div class="section">
        <div class="container">
            <div class="row" style="    border-radius: 120px; border: 1px solid black; padding: 2%; background: gainsboro;}">
                <div class="col-md-12">
                    <div class="section-title rukiyye" >
                        <h2 class="title" style="color: white">Günün Kitapları</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">

                            @foreach($daily as $rs)
                                <div class="product product-single">
                                    <div class="product-thumb rukiyye3">
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view rukiyye2"><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 320px " width="50px"  alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }}₺ </h3>
                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>

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
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row" style="border: 1px solid black;border-radius: 50px;padding: 2%;background: gainsboro;margin: 0px 0px 25px 0px;">
                        <div class="col-md-12">
                            <div class="section-title rukiyye">
                                <h2 class="title" style="color: white">YENİ KİTAPLAR</h2>
                            </div>
                        </div>
                        @foreach($last as $rs)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view" ><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 250px"alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }}₺ </h3>
                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                        <div class="product-btns">
                                            <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="hidden" value="1">
                                                <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row" style="border: 1px solid black;margin: 2px;padding: 2%;background: gainsboro;border-radius: 50px;">
                        <!-- section title -->
                        <div class="col-md-12">
                            <div class="section-title rukiyye">
                                <h2 class="title" style="color: white">ÖNERİLENLER</h2>
                            </div>
                        </div>
                        @foreach($picked as $rs)
                            <!-- Product Single -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 250px" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }}₺</h3>
                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                        <div class="product-btns">
                                            <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="hidden" value="1">
                                                <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
@endsection
