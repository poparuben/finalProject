<footer>
    <div class="container border-bottom">
        <div class="row  gy-5">
            <div class="col">
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="" style="max-width: 100px;"></a>
                <p>@lang('public.AducemPiataAproape')</p>
            </div>
            <div class="col footer_pages">
                <h2>@lang('public.Pagini')</h2>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="color: white;" href="{{ route('all-products.page') }}">@lang('public.Magazin') <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ route('despre-noi.page') }}">@lang('public.DespreNoi')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ route('contact.page') }}">@lang('public.Contact')</a>
                    </li>
                </ul>
            </div>
            <div class="col footer_3_col">
                <h2>@lang('public.Contact')</h2>
                <ul>
                    <li>Strada Blablabla cel Mare 23</li>
                    <li>077777777</li>
                    <li>balkblba@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center b_footer">
            <div class="col-auto">
                <a href="/locate/en" class="btn btn-light">RO</a>

                <a href="/locate/de" class="btn btn-light">DE</a>
            </div>
        </div>
        
    </div>
</footer>
