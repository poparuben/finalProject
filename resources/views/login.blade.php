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
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form method="POST" action="{{route('login.authenticate')}}">
                    @csrf
                    @include('components.success-message')
                

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

                

                {{-- <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> --}}

                {{-- <div class="d-flex justify-content-center">
                  <button type="button"
                    data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div> --}}
                <button id="send-contact-form-btn" class="btn btn-primary defaultBtn" type="submit">Trimite</button>
   
                <p class="text-center text-muted mt-5 mb-0">Nu ai cont? <a href="{{route('register')}}"
                    class="fw-bold text-body"><u>Apasa aici</u></a></p>

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