@extends('layouts.home')
@section('title', 'Order Products')
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                <li class="active">Sipariş</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" action="{{route('user_order_store')}}" method="post" class="clearfix">
                    @csrf
                    <div class="col-md-6">
                        <div class="billing-details melisa">
                            <div class="section-title">
                                <h3 class="title">Alıcı İşlemleri</h3>
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Ad & Soyad">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="email" name="email"  value="{{ Auth::user()->email }}" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="text" name="address"  value="{{ Auth::user()->address }}" placeholder="Adres">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="text" name="phone"  value="{{ Auth::user()->phone }}" placeholder="Telefon Numarası">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="payments-methods melisa">
                            <div class="section-title">
                                <h4 class="title" style="display: flex;justify-content: flex-start;">Sipariş Toplam Tutar = <p class="kucukhasbi"> {{$total}}₺<p> </h4>
                            </div>
                            <div class="input-checkbox">
                                <input type="hidden" name="total" value="{{$total}}₺">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="text" name="cardname" value="{{ Auth::user()->name }}" placeholder=" Kart Ad & Soyad">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="number" name="cardnumber"  value="" placeholder="Kart Numarası">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="text" name="dates"  value="" placeholder="Son Kullanma Tarihi mm/yy">
                            </div>
                            <div class="form-group">
                                <input class="input melisa2" type="text" name="key"  value="" placeholder="Güvenlik Numarası">
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button class="primary-btn" style="margin: 15px; background-color: #30323A; color: white; border-radius: 12px"  >Satın Al</button>
                    </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection
