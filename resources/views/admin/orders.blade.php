@extends('layouts.admin')

@section('title', 'Admin Sales List')

@section('content')
    <div class="content-wrapper" style="background: gainsboro;">
        <section class="content">
            <div class="card">
                <div class="card-header" style="background: gainsboro;">
                    <h3 class="card-title">Satıs Listesi</h3>
                </div>
                <div class="card-body" style="background: grey; color: white">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Kullanıcı</th>
                            <th>İsim</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Adres</th>
                            <th>Tutar</th>
                            <th>Tarih</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach ( $datalist as $rs)
                            <tr>
                                <td>{{ $rs->id}}</td>
                                <td>
                                    <a>
                                        {{ $rs->user->name}}
                                    </a>
                                </td>
                                <td>{{ $rs->name}}</td>
                                <td>{{ $rs->phone}}</td>
                                <td>{{ $rs->email}}</td>
                                <td>{{ $rs->address}}</td>
                                <td>{{ $rs->total}}</td>
                                <td>{{ $rs->created_at}}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

