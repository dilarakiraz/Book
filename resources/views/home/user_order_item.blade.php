@extends('layouts.home')

@section('title','Sipariş Detay')

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                <li class="active">Sipariş Detay</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!-- /ASIDE -->

                <!-- Default box -->
                <div class="card col-md-10">

                    <div class="card-body">

                        <table class="shopping-cart-table table">
                            <thead>
                            <tr>
                                <th>Ürünler</th>
                                <th></th>
                                <th class="text-center">FİYAT</th>
                                <th class="text-center">Adet</th>
                                <th class="text-center">TUTAR</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $total=0;
                            @endphp
                            @foreach ( $datalist as $rs)
                                <tr>
                                    <td class="thumb">
                                        @if ($rs->product->image)
                                            <img src="{{ Storage::url($rs->product->image)}}" height="40" alt="">
                                        @endif
                                    </td>
                                    <td> <a href="{{route('product',['id' => $rs->product->id,'slug' => $rs->product->slug ])}}">
                                            {{ $rs->product->title}}</a>
                                    </td>

                                    <td>{{ $rs->product->price}}₺</td>
                                    <td> {{$rs->quantity}}</td>
                                    <td>{{ $rs->amount}}</td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->



                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
@endsection
