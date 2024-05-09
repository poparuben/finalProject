@include('components.admin-dashboard-layout')



<div class="col-md-9">
    <form enctype="multipart/form-data" action="{{ route('addProduct.controller') }}" method="POST">
        @csrf

        @include('components.success-message')
        <h1>Adauga Produsul tau!</h1>
        <div class="form-group nameSection">
            <input name="product-name" id="name-input-field" class="form-control" type="text" placeholder="Nume Produs">
            @error('product-name')
                <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group nameSection">
            <input name="product-price" id="name2-input-field" class="form-control" type="number" placeholder="Pret">
            @error('product-price')
                <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input name="kg" id="name2-input-field" class="form-control" type="number" placeholder="Kg">
            @error('kg')
                <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <select name="product-categ" class="form-control">
                <option value="" disabled selected>Selectează o categorie</option>
                @foreach ($productCategories as $element)
                    <option value="{{ $element->category_id }}">{{ $element->name_category }}</option>
                @endforeach
                @error('product-categ')
                    <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
                @enderror
            </select>
        </div>
        <div class="form-group">
            <input name="image" class="form-control" type="file" accept="image/png, image/jpg, image/jpeg">
            @error('image')
                <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <textarea name='description' id="m-input-field" class="form-control" cols="30" rows="10"
                placeholder="Descriere"></textarea>
        </div>
        <button id="send-contact-form-btn" class="btn btn-primary defaultBtn" type="submit">Trimite</button>
    </form>



    <div class="divider"></div>

</div>

<!-- FOOTER -->
<div class="divider"></div>
<div class="divider"></div>

</body>

</html>
