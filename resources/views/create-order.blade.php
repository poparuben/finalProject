<x-head />

<body>
    <x-navbar />
    <div class="divider"></div>
    <div class="container">
        @include('components.success-message')
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>

                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $product->name }}</h6>
                            <small class="text-muted">{{ $product->kg }} kg</small>
                        </div>
                        <span class="text-muted">{{ $sum }}</span>
                    </li>

                </ul>

            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{ route('addOrder.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Mail</label>
                            <input type="email" class="form-control" name="mail" placeholder="Email">
                            <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Contact</label>
                            <input type="number" class="form-control" name="contact_phone" placeholder="Contact Phone">
                            <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Adresa <span class="text-muted"></span></label>
                        <input type="text" class="form-control" name="address" placeholder="Address ID">

                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                    </div>

                    <input type="number" class="disabb" value='{{ $sum }}' name="total_price"
                        placeholder="Total Price">
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Comanda</button>
                </form>
            </div>
        </div>


    </div>
</body>

</html>
