
<div class="navbarr navbarstyle">
    <div class="container navContainer">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="" style="max-width: 100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" >
            <li class="nav-item active">
              <a class="nav-link"style="color: white;" href="{{ route('all-products.page') }}">@lang('public.Magazin') <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"style="color: white;" href="{{ route('despre-noi.page') }}">@lang('public.DespreNoi')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"style="color: white;" href="{{ route('contact.page') }}">@lang('public.Contact')</a>
              </li>
          </ul>
          <form method="get" action="{{route('all-products.page')}}" class="form-inline my-2 my-lg-0">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Nume Produs" aria-label="Search">
            <button class="btn btn-outline-success mx-2 my-2 my-sm-0" type="submit">Cauta</button>
          </form>
          
            @guest
            <a href="{{route('login')}}" type="button"  class="btn btn-primary mx-2" >
              LOG IN
            </a>
              
            @endguest
                
                @auth
                    
                 @if (Auth::user()->is_admin==1)
                      <a href="{{route('admin-all-products.page')}}" type="button" class="btn btn-primary mx-2" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                          <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z"/>
                          <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
                        </svg> {{Auth::user()->name}}
                        </a>

                        <form action="{{route('logout')}}" method="POST">
                          @csrf
                          <button class="btn btn-danger  mx-2 my-2 my-sm-0"  type="submit">Logout</button>
              
                              
                        </form>
                 @else
                 <a href="{{route("clientOrders.page")}}" type="button" class="btn btn-primary mx-2" >
                  {{Auth::user()->name}}
                  </a>

                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-danger  my-2 my-sm-0" type="submit">Logout</button>
        
                        
                  </form>
                 @endif   
               
             @endauth
                
        


    
        </div>
      </nav>
    </div>
    </div>