@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
    <!-- FOOTER -->
<footer id="footer" class="section section-grey" style="background-color: gainsboro;">
    <!-- container -->
    <div class="container" style="display: flex; justify-content: center; ">
        <!-- row -->
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h4>Adres</h4>
                    <strong>Şirket</strong> :{{$setting->company}}<br>
                    <strong>Adres</strong> :{{$setting->address}}<br>
                    <strong>Telefon</strong>: {{$setting->phone}}<br>
                    <strong>Email</strong> :{{$setting->email}}<br>
                </div>
            </div>
            <!-- /footer widget -->
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">HESABIM</h3>
                    <ul class="list-links">
                        <li><a href="{{route('user_shopcart')}}">Hesabım</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->
            <div class="clearfix visible-sm visible-xs"></div>
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Müşteri Servisi</h3>
                    <ul class="list-links">
                        <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->
<!-- jQuery Plugins -->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets')}}/js/slick.min.js"></script>
<script src="{{ asset('assets')}}/js/nouislider.min.js"></script>
<script src="{{ asset('assets')}}/js/main.js"></script>


