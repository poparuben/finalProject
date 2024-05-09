<x-head/>
<body>
    <x-navbar/>
    <section class="vh-100 bg-image"
  style="background-image: url('/img/bg.png');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Cont nou</h2>

              <form method="POST" action="{{route('register.store')}}">
                    @csrf
                    @include('components.success-message')
                <div data-mdb-input-init class="form-outline sm-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>

                  <input name="name" type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  @error('name')
                <span class='d-block fs-6 text-danger mt-2'>{{$message}}</span>
                @enderror
                </div>

                <div data-mdb-input-init class="form-outline sm-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>

                  <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  @error('email')
                  <span class='d-block fs-6 text-danger mt-2'>{{$message}}</span>
                  @enderror
                </div>


                <div data-mdb-input-init class="form-outline sm-4">
                  <label class="form-label" for="form3Example4cg">Password</label>

                  <input name="password" type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  @error('password')
                  <span class='d-block fs-6 text-danger mt-2'>{{$message}}</span>
                  @enderror
                </div>

                <div data-mdb-input-init class="form-outline sm-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>

                  <input name="password_confirmation" type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                    
                </div>
                <div data-mdb-input-init class="form-outline sm-4">
                <button id="send-contact-form-btn" class="btn btn-primary  defaultBtn btn-block" type="submit">Creeaza</button>
              </div>
              <p class="text-center">
                <a href="{{ route('login') }}" class="fw-bold text-body"><u>Login</u></a>
            </p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>