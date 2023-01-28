<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css" />
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/slick.css" />
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/slick-theme.css" />
<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/nouislider.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/font-awesome.min.css">
<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/style.css" />


<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Kullanıcı Rolleri</h3>
            @include('home.message')
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th> <td>{{ $data->id}}</td>
                    </tr>
                    <tr>
                        <th>İsim</th><td>{{ $data->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th><td>{{ $data->email}}</td>
                    </tr>

                    <tr>
                        <th>Rol</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete', ['userid' => $data->id,'roleid'=>$row->id])}}"  onclick="return confirm('Delete ! Are you sure?')" > <img src="{{asset('assets/admin/images')}}/delete.jpg" height="25"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- /.card-body -->
            </form>
            <!-- /.card-body -->
            <div class="card-footer">
                ..
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

</section>
<!-- /.content -->
</div>
