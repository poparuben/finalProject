<x-head/>
  <body>
    
      <!-- NAVBAR -->
      <x-navbar/>
<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="#">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="../storage/{{$product->photo}}" />
          </a>
        </div>
        
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h3 class="title text-dark">
            {{$product->name}}
          </h3>
          

          <div class="mb-3">
            <span class="h5">{{$product->price}} Lei</span>
            <br>
            <span class="text-muted"> {{$product->kg}} kg</span>
          </div>

          <p>
            {{$product->description}}
           </p>

          <div class="row">
            {{-- <dt class="col-3">CATEGORIE:  {{$product->catgory}}</dt> --}}

          </div>

          <hr />
          @auth

            <div class="row mb-4">
            <div class="col-md-4 col-6">
              <label class="mb-2">Bucati</label>
              <select name="pieces" class="form-select border border-secondary" style="height: 35px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>           
          </div>
            <a href="{{ route('clientOrders.page', ['id' => $product->product_id, 'pieces' => 1]) }}" class="btn btn-md btn-primary">Cumpara</a>

          </div> 
        {{-- </form> --}}

            @endauth

            @guest
          </div>
          <div class="alert alert-danger" role="alert">
           Trebuie sa te loghezi inainte!
          </div>
          </div> 
            @endguest
          
      </main>
    </div>
  </div>
</section>
<!-- content -->

<section class="bg-light border-top py-4">
  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-8 mb-4">
        <div class="border rounded-2 px-3 py-2 bg-white">
          <!-- Pills navs -->
      
              <p class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Detalii</p>
            
            
          </ul>
          <!-- Pills navs -->

          <!-- Pills content -->
          <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
              <p>
                {{$product->description}}
              </p>
              <div class="row mb-2">
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                    <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet, consectetur</li>
                    <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor in reprehenderit</li>
                    <li><i class="fas fa-check text-success me-2"></i>Optical heart sensor</li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 mb-0">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i>Easy fast and ver good</li>
                    <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                    <li><i class="fas fa-check text-success me-2"></i>Modern style and design</li>
                  </ul>
                </div>
              </div>
              <table class="table border mt-3 mb-2">
                <tr>
                  <th class="py-2">balv,dl,sd:</th>
                  <td class="py-2">trwfdswef</td>
                </tr>
                <tr>
                  <th class="py-2">adwadsasddwea:</th>
                  <td class="py-2">Intel Core i5</td>
                </tr>
                <tr>
                  <th class="py-2">Cadwawsda:</th>
                  <td class="py-2">sadm mdaw kdwa</td>
                </tr>
                <tr>
                  <th class="py-2">kamdwklmlsa:</th>
                  <td class="py-2">dwakmkamec</td>
                </tr>
               
              </table>
            </div>
            <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
              Tab content or sample information now <br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
              nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            </div>
            <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
              Another tab content or sample information now <br />
              Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
            </div>
            <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
              Some other tab content or sample information now <br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum.
            </div>
          </div>
          <!-- Pills content -->
        </div>
      </div>
      <div class="col-lg-4">
        <div class="px-0 border rounded-2 shadow-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Recomandari</h5>
              <div class="d-flex mb-3">
                <a href="#" class="me-3">
                  <img src="" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                </a>
                <div class="info">
                  <a href="#" class="nav-link mb-1">
                  Un titlu super tare <br />
                    Line Mounts
                  </a>
                  <strong class="text-dark"> 10 LEI</strong>
                </div>
              </div>

              <div class="d-flex mb-3">
                <a href="#" class="me-3">
                  <img src="" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                </a>
                <div class="info">
                  <a href="#" class="nav-link mb-1">
                  Un titlu super tare <br />
                    
                  </a>
                  <strong class="text-dark">  10 LEI</strong>
                </div>
              </div>

              <div class="d-flex mb-3">
                <a href="#" class="me-3">
                  <img src="" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                </a>
                <div class="info">
                  <a href="#" class="nav-link mb-1"> Un titlu super tare </a>
                  <strong class="text-dark"> 10 LEI</strong>
                </div>
              </div>

              <div class="d-flex">
                <a href="#" class="me-3">
                  <img src="" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                </a>
                <div class="info">
                  <a href="#" class="nav-link mb-1"> Un titlu super tare </a>
                  <strong class="text-dark"> 10 LEI</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
<!-- FOOTER -->
<x-footer-default/>
