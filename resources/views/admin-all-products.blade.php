@include('components.admin-dashboard-layout')

<div class="col-md-9">



    <div class="container">
        @include('components.success-message')
        <div class="row">
            <div class="col-12">
                {{ $products->links() }}
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Poza</th>
                            <th scope="col">Nume</th>
                            <th scope="col">Cantitate</th>
                            <th scope="col">Pret</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $element)
                            <tr>
                                <th scope="row">{{ $element->product_id }}</th>
                                <td class="w-25">
                                    <img src="./storage/{{ $element->photo }}" class="img-fluid img-thumbnail"
                                        alt="Sheep">
                                </td>
                                <td>{{ $element->name }}</td>

                                <td>{{ $element->kg }} kg</td>
                                <td>{{ $element->price }} RON</td>
                                <td>
                                    <form action="{{ route('product.destroy', $element->product_id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger bt-sm">X</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </td>
                        </tr>
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>




</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
