<aside class="main-sidebar  elevation-4" style="background-color: black">
    <!-- Sidebar -->
    <div class="sidebar yonetici2">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                @auth()
                    <a href="#" class="d-block yonetici"  style="background-color: white; color: black; border: 1px solid black; border-radius: 12px; padding: 2px 10px 2px 10px; text-align: center; text-transform: uppercase; " >ADI: {{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}" class="d-block yonetici"  style="background-color: white; color: black; border: 1px solid black; border-radius: 12px; padding: 3px;text-align: center;">ÇIKIŞ</a>
                @endauth
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{route('admin_category')}}" class="nav-link yonetici" style="background-color: white; color: black ; ">
                        <img src="{{asset('assets/admin/images')}}/options.png" height="25">
                        Kategoriler
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('admin_products')}}" class="nav-link yonetici" style="background-color: white; color: black">
                        <p>
                            <img src="{{asset('assets/admin/images')}}/book.png" height="25">
                            Ürünler
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin_message')}}" class="nav-link yonetici" style="background-color: white; color: black">
                        <p>
                            <img src="{{asset('assets/admin/images')}}/comment.png" height="25">
                            Mesajlar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin_users') }}" class="nav-link yonetici" style="background-color: white; color: black">
                        <img src="{{asset('assets/admin/images')}}/man.png" height="25">
                        <p>Kullanıcılar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin_order')}}" class="nav-link yonetici" style="background-color: white; color: black">
                        <img src="{{asset('assets/admin/images')}}/sale.png" height="25">
                        <p>
                            Satışlar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<link href="/resources/views/admin/adminlte.css" type="text/css" rel="stylesheet"/>

