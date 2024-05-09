<x-head />

<body>
    <!-- NAVBAR -->
    <x-navbar />
    @include('components.success-message')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/testimg.jpg" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100 elements_from_slider">
                    <p>ADUCEM</p>
                    <H1>PIATA APROAPE</H1>
                    <H2>LIVRARE LA DOMICILIU</H2>
                    <br>
                    <a href="{{route('all-products.page')}}" class="btn btn-s defaultBtn">VEZI PRODUSE</a>

                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/testimg.jpg" alt="...">
                <div c class="carousel-caption d-flex flex-column justify-content-center h-100 elements_from_slider">
                    <p>ADUCEM</p>
                    <H1>PIATA APROAPE</H1>
                    <H2>LIVRARE LA DOMICILIU</H2>
                    <br>
                    <a href="{{route('all-products.page')}}" class="btn btn-s defaultBtn">VEZI PRODUSE</a>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="divider"></div>
    <div class="container">
        <h1 class="text-center p-3 ">Ultimele Produse</h1>
    </div>
    <div class="divider"></div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 1rem;">

                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <!-- Login Form -->
                            <form action="./config/loginHandler.php" method="POST">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Mail</label>

                                    <input type="name" id="typeEmailX" class="form-control form-control-lg"
                                        name="login-mail" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Password</label>

                                    <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                        name="login-psw" />
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot
                                        password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit"
                                    name="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i
                                            class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </form>

                            <!-- Sign Form -->
                            <form action="./config/signinHandler.php" method="POST">

                                <h2 class="fw-bold mb-2 text-uppercase">SIGN IN</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Nume</label>
                                    <input type="name" id="typeEmailX" class="form-control form-control-lg"
                                        name="sign-name" />
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Mail</label>
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg"
                                        name="sign-mail" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Password</label>

                                    <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                        name="sign-psw" />
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot
                                        password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit"
                                    name="submit">SignIn</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i
                                            class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </form>
                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="#!"
                                    class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>






    <div class="container ">

        <div class="productsGrid shopPageGrid">

            @foreach ($fourProducts as $element)
                <div class="productElement"
                    onclick="location.href='{{ route('single-product', ['id' => $element->product_id]) }}';"
                    style="cursor: pointer;">
                    <div class="productElementContainer">
                        <p class="moreinfo">{{ $element->kg }} kg</p>
                        <img class="productElementImg" src="./storage/{{ $element->photo }}" alt="oranges"
                            srcset="">
                        <div class="productElementInfo">
                            <p class="productElementCat">{{ $element->catgory }}</p>
                            <p class="productElementName">{{ $element->name }}</p>
                            <p class="price">{{ $element->price }} Lei</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>

    <div class="divider"></div>

    <div class="container-lg   ">
        <div class="row newsletterSection">
            <div class="col-md-6">
                <img src="/img/news.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 newsletter">

                <h2 class="align-middle">Aboneaza-te la Newsletter</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, similique?</p>
                <form>
                    <div class="input-group">

                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <button type="submit" class="btn border bg-light" style="color:black">Subscribe</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="divider"></div>



    <!-- FOOTER -->
    <x-footer-default />

</body>

</html>
